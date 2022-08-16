<!DOCTYPE html>
<html>
<body>
<style> background-image: url ('img_girl.jpg'); </style>
<head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
  <img src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.6435-9/179240500_1099117690582511_1614432114218035177_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=A4QaakulorYAX-6Qefd&_nc_ht=scontent.fsgn5-3.fna&oh=00_AT9Hfwa81SqWfYgWooRugP1TGjzNMIAZoROeg2OElgIbxA&oe=6319C07D" alt="Logo" style="width:40px;" class="rounded-pill">

    <a class="navbar-brand" href="javascript:void(0)">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-warning" href="javascript:void(0)">Razer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="javascript:void(0)">Asus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="javascript:void(0)">Acer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="javascript:void(0)">MSI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="javascript:void(0)">Dell</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1>Welcome to huy store</h1>

<?php
echo "Huy laptop store</br>";
?>


<?php
$t = date("19");

if ($t < "17") {
    echo "We open!<>";
} else {
    echo "We close!";
}
?>
</body>
</html>
