<!DOCTYPE html>
<html>
<body>
body {
background-image: url('img_girl.jpg');
}
</style>
</head>
<body>

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
