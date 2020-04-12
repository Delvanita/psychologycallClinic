<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PsychologicalCall</title>
</head>
<body>
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="#">PsychologyCall</a></li>
        <li class="active"><a href="#">Counselor</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right text-center">
        <li class="dropdown pull-right">
            <a class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Profile
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#">Account</a></li>
            <li class="dropdown-item"><a href="#">List Counselor</a></li>
            <li class="dropdown-item"><a href="#">Log Out</a></li>
            </ul>
        </li>
        </ul>
    </div>
  </nav>
  <center>
    <div class="container" id="containerKonselor">
    <h1 style= margin-top:70px;> PROFILE COUNSELOR</h1><br><br>
    <div class="modal-content">
      <div class="modal-body">
      <form method="POST" action="#">
      <div class="form-group">
          <label for="formGroupExampleInput">ID KONSELOR</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder=" Id Konselor" name="Id Konselor" readonly="">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">USERNAME</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username"required>
        </div>
     <!--    <div class="form-group">
          <label for="formGroupExampleInput">PASSWORD</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="password" name="password"required>
        </div> -->
        <div class="form-group">
          <label for="formGroupExampleInput">FULL NAME</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="full name" name="full name"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">EMAIL</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">ROLE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="role" name="role"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SCHEDULE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="schedule" name="schedule"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SPECIALIST</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="specialist" name="specialist"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">CAPACITY</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="capacity" name="capacity"required>
        </div>
        <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="save"></button>
        <div class="modal-footer">
      </div>
      </form>
  </center>
</body>
</html>