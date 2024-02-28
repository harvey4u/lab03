<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head> 
<body>
<div class="content-container">
<h1>Hello, <?php echo $_SESSION['username']; ?></h1>

    <label>
    <!DOCTYPE html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">\
<a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
?>
</div>
