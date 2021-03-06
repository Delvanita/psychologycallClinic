<!doctype html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<= base_url(); ?>/assets/css/style.css"> -->

  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>PsychologicalCall</title> -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <title><?= $title; ?> - PsychologicalCall</title>

</head>
<!-- <nav class="navbar navbar-fixed-top"> -->
<!-- <div class="container">
          <ul class="nav navbar-nav">
          <li><a class="navbar-brand" href="<?= base_url(); ?>welcome/">PsychologyCall</a></li>
          <li class="active"><a href="<?= base_url(); ?>welcome/">Konselor</a></li>
          </ul>
          <body>
          <ul class="nav navbar-nav navbar-right text-center">
              <li class="active"><a href="<?= base_url(); ?>welcome/">Login</a></li>
              <li class="active"><a href="<?= base_url(); ?>welcome/">SignUp</a></li> 
          </ul> -->
<!-- </head> -->

<body>
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#6b5e51;">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url(); ?>" style="color:white;font-weight:700;">Psychology Call Clinic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <!-- <a class="nav-link active"  style="color:white;">Home</a> -->
          <!-- <a class=" nav-link active" href="<?= base_url(); ?>welcome/konselor/" style="color:white;">Counselor</a> -->
          <a class="btn btn-link active" href="<?= base_url(); ?>" style="color:white;">Home</a>
          <a class="btn btn-link active" href="<?= base_url(); ?>welcome/konselor/" style="color:white;">Counselor</a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-dark btn-sm mr-2"><a class="nav-link active" href="<?= base_url(); ?>user/login" style="color:white; padding: 3px;">Log In</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-dark btn-sm"><a class="nav-link active" href="<?= base_url(); ?>user/register" style="color:white; padding: 3px;">Sign Up</a></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>