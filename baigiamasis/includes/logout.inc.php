<?php 
if(isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}





<?php 
if(isset($_SESSION['u_id'])) {
  echo  '<form action="includes/logout.inc.php" method="post">
  <input type="button" class="button" value="Log Out"></a>';
} else {
echo '<li><form action="includes/login.inc.php" method="post">
<a href="signin.php"><input type="button" class="button" value="Sign In"></a>';
}
?>