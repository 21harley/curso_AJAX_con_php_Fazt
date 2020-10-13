<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Simple</title>
</head>
<body>
    <button onclick="sendRequest()">
      send Ajax Request
    </button>
    <button onclick="sendRequest1()">
      resquest Ajax Request
    </button>
    <h1 id="title"></h1>
    <!-- para retornar infomacion-->
    <script>
       const sendRequest=()=>{
          let obj= new XMLHttpRequest();
          obj.open('GET','backend.php',true);
          obj.setRequestHeader('Content-type','application/x-www-form-urlencoded');
          obj.onreadystatechange=function(){
            document.getElementById('title').innerHTML=obj.responseText;
          }
          obj.send();
       }
    </script>
    <!-- para mandar informacion-->
    <script>
       const sendRequest1=()=>{
          let obj= new XMLHttpRequest();
          obj.open('POST','backend.php',true);
          obj.setRequestHeader('Content-type','application/x-www-form-urlencoded');
          obj.onreadystatechange=function(){
            document.getElementById('title').innerHTML=obj.responseText;
          }
          obj.send('username=Fazt');
       }
    </script>    
</body>
</html>