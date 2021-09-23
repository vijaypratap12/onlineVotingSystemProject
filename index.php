<html>

<head>
    <title>
    </title>
    <style>
        /*
        body{
            background-image: url(assets/background_image.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
    
*/

    </style>
</head>

<body>


</body>


</html>



<?php include "header.php";
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>


<font color='#008000' size='8'>
    <p>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>

    <p>In order to make a vote you have to register first and then login.</p>
</font>
<p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
