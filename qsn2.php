<!DOCTYPE html>
<html>
<head>
<title>User Name Form</title>
</head>
<body>
<h1>Enter Your Name</h1>
<form method="post" action="">
<label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
<br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
echo "<h2>Hello, $name!</h2>";
}
?>
</body>
</html>
