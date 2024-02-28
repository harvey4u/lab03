<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.2 4.2 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A3 3 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515zM4.969 9.75A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
</svg>  SIGN UP  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.2 4.2 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A3 3 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515zM4.969 9.75A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
</svg></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>







          <div style="display: flex; flex-direction: row;">
    <div style="margin-right: 10px;">
        <label>First Name</label>
        <?php if (isset($_POST['First_name'])) { ?>
            <input type="text" 
                   name="First_name" 
                   placeholder="First_name"
                   value="<?php echo $_POST['First_name']; ?>"><br>
        <?php } else { ?>
            <input type="text" 
                   name="First_name" 
                   placeholder="First Name"><br>
        <?php } ?>
    </div>

    <div style="margin-right: 10px;">
        <label>Middle Name</label>
        <?php if (isset($_POST['Middle_name'])) { ?>
            <input type="text" 
                   name="Middle_name" 
                   placeholder="Middle Name"
                   value="<?php echo $_POST['Middle_name']; ?>"><br>
        <?php } else { ?>
            <input type="text" 
                   name="Middle_name" 
                   placeholder="Middle Name"><br>
        <?php } ?>
    </div>

    <div>
        <label>Last Name</label>
        <?php if (isset($_POST['Lastname'])) { ?>
            <input type="text" 
                   name="Lastname" 
                   placeholder="Last Name"
                   value="<?php echo $_POST['Lastname']; ?>"><br>
        <?php } else { ?>
            <input type="text" 
                   name="Lastname" 
                   placeholder="Last Name"><br>
        <?php } ?>
    </div>
</div>


          <label>User Name</label>
          <?php if (isset( $_POST['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="User Name"
                      value="<?php echo  $_POST['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="username" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset( $_POST['Email'])) { ?>
               <input type="text" 
                      name="Email" 
                      placeholder="Email"
                      value="<?php echo  $_POST['Email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="Email" 
                      placeholder="Email"><br>
          <?php }?>



     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="confirm_password" 
                 placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
          </table>Already have an account? </table><a href=  "index.php" class="ca"> Login now</a>
     </form>
</body>
</html>