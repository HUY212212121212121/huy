<!DOCTYPE html>
<html>
<body>
<style> background-image: url ('img_girl.jpg'); </style>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</html>
<h1>Welcome to huy store</h1>

<?php
echo "Huy toys store</br>";
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
