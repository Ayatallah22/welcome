<html>
<head>
<title>Welcome</title>
</head>

<body>
<?php
//check if the name is set and not empty
if(isset($_POST['name']) && !empty($_POST['name'])){
$name = $_POST['name'];
echo "<h1> Welcome, " . $name  . "!</h1>";
} else {
echo "<h1>please enter your name.</h1>";
}
?>
</body>


</html>