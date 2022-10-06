<?php
//var_dump($_POST);
if(isset($_POST['Login']))
{
    session_start();
    $_SESSION['UserName'] = $_POST['UserName'];
    $_SESSION['Password'] = $_POST['Password'];
    echo "Hello".$_SESSION['UserName'];
    echo "<h2 style='text-align: center; background-color:lightgreen;'> Logged in Successfully</h2>";
    echo '<br><a style="text-decoration:none; padding-top:20px;font-size:24px;font-weight:bold;" href="logout.php">Logout</a>';
}
else if(isset($_POST['Forget_password']))
{
    echo '<script type="text/javascript">window.location="relogin.php"</script>';
}
?>


