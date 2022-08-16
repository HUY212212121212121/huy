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
  color: #FF0000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #008000;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#Razer">News</a></li>
  <li><a href="#Asus">Contact</a></li>
  <li><a href="#MSI">About</a></li>
  <li><a href="#Dell">About</a></li>
  <li><a href="#Acer">About</a></li>
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
