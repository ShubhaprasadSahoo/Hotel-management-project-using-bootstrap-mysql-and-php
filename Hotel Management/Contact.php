<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sunshine Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="roompg.php ">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
      </ul>
<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Booking page</h2>
</div>

<div class="w-50 m-auto">
<form action="Contactinfo.php" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" class="form-control">
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lastname" class="form-control">
    </div>

    <div class="form-group">
        <label>Email id</label>
        <input type="email" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Mobile no.</label>
    <input type="mobile" name="mobile" class="form-control">
</div>

<div class="form-group">
  <label>Adhar no.</label>
  <input type="text" class="form-control" name="adhar">
</div>
<div class="form-group">
  <input type="radio" value="Male" name="male">Male 
  <input type="radio" value="Female" name="female">Female 
</div>
<button type="submit" class="btn btn-primary">Make Payment</button>

</form>

</div>

</section>











<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>