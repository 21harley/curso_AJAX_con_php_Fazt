<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dar bg-dark">
       <a href="#" class="navbar-brand">Tasks App</a>
       <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
          <input type="search" id="search" class="form-control mr-sm-2"
          placeholder="Serch your Task">
          <button class="btn btn-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
       </ul>
    </nav>
    <div class="container p-4">
     <div class="row">
       <div class="col-md-5">
        <div class="card">
          <div class="card-body">
           <form id="task-form">
           <input type="hidden" id="taskid">
            <div class="dorm-group">
             <input type="text" id="name" placeholder="Task name" class="form-control">
            </div>
            <div class="form-group">
             <textarea id="description" cols="30" rows="10"
             class="form-control" placeholder="task Description"></textarea>
            </div>
            <button class="btn btn-primay btn-block text.center"type="submit">
             Save Task
            </button>
           </form>
          </div>
        </div>
       </div>
       <div class="col-md-7">
       <div class="card my-4" id="task-result">
        <div class="card-body">
          <ul id="containerT">
           
          </ul>
        </div>
       </div>
        <table class="table table-bordered table-sn">
            <thead>
            <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            </tr>
            </thead>
            <tbody id="tasks"></tbody>
        </table>
       </div>
      </div>
    </div>
    <script
	src="jquery.js"></script>
    <script src="app.js"></script>
</body>
</html>