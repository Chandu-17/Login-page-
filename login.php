<?php
if(isset($_POST['submit']))
{
    echo '<h2 style="text-align:center">Pls Check Your Email For Password Reset</h2>';
}
?>

<html lang="en">
<head>
    <title>Login Form</title>
    <style>
        table{
        margin-top:150px;
        border:1px solid black;
        background-color:#aaa;
        }
        td{
            border:0px;
            padding:10px;
            cellspacing:0;
        }
        input[type="submit"]{
            background-color:lightblue;
            opacity: 1;
        }
    </style>
</head>
<body>
    <form action="welcome.php" method="post">
        <table align="center">
            <tr>
                <td> <b>UserName:</b></td>
                <td><input type="text" name="UserName" required></td>
            </tr>
            <tr>
                <td> <b>Password:</b></td>
                <td><input type="password" name="Password" required></td>
            </tr>
            <tr>
                <td align="left"><input type="reset" name="Reset"></td>
                <td><input type="submit" name="Forget_password" value="forget_password"></td>
                <td><input type="submit" name="Login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>
