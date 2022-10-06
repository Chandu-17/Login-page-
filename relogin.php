<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{

            margin-top:150px;
            border:1px solid black;
            background-color:lightblue;
        }
        td{
            border:0px;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1 align="center"> To rest your password enter Email</h1>
    <form action="login.php" method="post">
    <table align="center">
            <tr>
                <td> <b>EMAIL:</b></td>
                <td><input type="text" name="EMAIL" required></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
    </table>
    </form>
</body>
</html>