$(function(){
  let edict=false;
  console.log("Jquery is working");
  $('#task-result').hide();
  fetchTask();
  /* decteta la tecla precionada y hace la consulta*/
  $('#search').keyup(function(e){
      let search=$('#search').val();
      $.ajax({
        url:'taskSearch.php',
        data:{search},
        type:'POST',
        /*respuesta del servidor*/ 
        success:function(res){
          if(res.length>0){
            let tasks=JSON.parse(res);
            let template='';
            tasks.forEach(task => {
              template+=`<li>
              ${task.name}
              </li>`;
            });
            console.log(template);
            $('#containerT').html(template);
          }
          $('#task-result').show();
        }
      })
  });

  $('#task-form').submit(function(e){
     const postData={
       name:$('#name').val(),
       description:$('#description').val(),
       id:$('#taskid').val()
     }
     let url= (edict===true)?'taskEdict.php':'taskAdd.php';
     if(edict===true) edict=false;
     //consulta con php
     $.post(url,postData,function(response)
     {
        console.log(response);
        fetchTask();
        $('#task-form').trigger('reset');//limpiar form
     });
     e.preventDefault();
  });

  //funcion para actualizar la tabla 
  function fetchTask(){
    $.ajax({
      url:'taskList.php',
      type:'GET',
      success:function(response){
         if(response.length>0){
          let tasks=JSON.parse(response);
          let template='';
          tasks.forEach(task=>{
           template+=`
           <tr taskId="${task.id}" id="show">
             <td>${task.id}</td>
             <td>
             <a href="#" class="task-item">${task.name}</a>
             </td>
             <td>${task.description}</td>
             <td>
               <button class="task_delete btn btn-danger">
                     Delete
               </button>
             </td>
           </tr>`;
          });
          $('#tasks').html(template);
         }else{
          $('#show').remove();
         }
      }
    });
  
  }
  //delete task
  $(document).on('click','.task_delete',function(){
    if(confirm("Are you sure want to delete it")){
      let element=$(this)[0].parentElement.parentElement;
      let id=$(element).attr('taskId');
      $.post('taskDelete.php',{id},function(response){
           fetchTask();
      });
    }
  });

  $(document).on('click','.task-item',function(){
    let element=$(this)[0].parentElement.parentElement;
    let id=$(element).attr('taskId');  
    $.post('taskSingle.php',{id},function(response){
      const task=JSON.parse(response);
      $("#name").val(task.name);
      $('#description').val(task.description);
      $('#taskid').val(task.id);
      edict=true;
      //fetchTask();
    });
  });
});