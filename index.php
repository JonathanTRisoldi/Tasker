<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasker</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<!--MODAL-->
<div class="modal fade" id="CreateTaskModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="CreateTaskModalLable" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="CreateTaskModalLable">Create Task</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-row">
          <div class="col">
            <label for="TaskName">Task Name</label>
            <input type="text" id="TaskName" class="form-control" placeholder="Task 1...">
          </div>
          <div class="col">
            <label for="TaskDate">Task Due Date</label>
            <input type="date" id="TaskDate" class="form-control">
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <label for="CreateProjectName">Select Project</label>
            <Select class="form-control" id="SelectProject"></Select>
          </div>
          <div class="col">
            <label for="CreateProjectName">Create New Project</label>
            <Input class="form-control" id="CreateProjectName"></Input>
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <label for="AdditionalInformation">Aditional Information</label>
            <textarea rows="5" class="form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tasker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#CreateTaskModal" data-toggle="modal" data-target="#CreateTaskModal">Create New Task</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Tasks..." aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--Body-->
<br><br>
<div class="container container-fluid col-12 col-md-10 ">
<br>
<h1>Todo:</h1>
<table class="table" id="fixed_header">
  <thead class="text-center">
    <tr>
      <th scope="col">Project</th>
      <th scope="col">Task</th>
      <th scope="col">Due Date</th>
      <th scope="col">Aditional Information</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn btn-primary"><i class="far fa-check-square"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><button class="btn btn-primary"><i class="far fa-check-square"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><button class="btn btn-primary"><i class="far fa-check-square"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
  </tbody>
  </div>
</table>
<br>
<hr>
<br>
<h1>Completed:</h1>
<table class="table">
  <thead class="text-center" id="fixed_header">
    <tr>
      <th scope="col">Project</th>
      <th scope="col">Task</th>
      <th scope="col">Due Date</th>
      <th scope="col">Aditional Information</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button class="btn btn-primary"><i class="fas fa-arrow-up"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><button class="btn btn-primary"><i class="fas fa-arrow-up"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><button class="btn btn-primary"><i class="fas fa-arrow-up"></i></button> <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></tb>
    </tr>
  </tbody>
</table>
</div>
    
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>
</html>