<?php

require "../private/loadall.php";

if(isset($_SESSION['urlAddress']))
{
	unset($_SESSION['urlAddress']);
}

if(isset($_SESSION['firstName']))
{
	unset($_SESSION['firstName']);
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body style="font-family: verdana">

    <style type="text/css">
        form{
            margin: auto;
            border: solid thin #73C2FB;
            padding: 6px;
            max-width: 700px;
        }

        #title{
            background-color: #73C2FB;
            padding: 1em;
            text-align: center;
        }

        #textbox{
            border: solid thin #aaa;
            margin: 4px;
            width: 98%;
            margin-top: 6px;
        }

    </style>

    <h3>You have been logged out</h3> 
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>

</body>
</html>