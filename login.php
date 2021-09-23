<html>

<head>
    <title>
        Login in
    </title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .navigation {
            background-image: url(wave.svg);
            background-position: center;
            background-size: cover;
            height: 400px;

        }


        .navigation a {
            text-decoration: none;
            color: white;
        }

        .navigation a:hover {
            color: deepskyblue;
        }


        .inner_header_logo {
            color: white;
            width: 200px;
            height: 100px;
            background: royalblue;
            -moz-border-radius: 100px / 50px;
            -webkit-border-radius: 100px / 50px;
            border-radius: 100px / 50px;

        }

    </style>

</head>

<body>
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <font size='6'>
                            <a href="voter.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="lan_view.php">Vote Results</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="profile.php">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;<a href="change_pass.php">Change Password</a>
                        </font>
                    </center>
                </div>
            </div>
            <div class="row" style="padding: 10px 0px">
                <div class="col">
                    <div class="inner_header_logo">
                        <h2>PEOPLE'S</h2>
                        <h1>VOICE</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>







    <?php
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
    <br>
    <center>
        <legend>
            <h3>Login for Voting </h3>
        </legend>
        <br>
    </center>
    <?php global $nam; echo $nam; ?>
    <?php global $error; echo $error; ?>
    <br>
    <div class="container" style="background-color: royalblue; color: white">
        <center>
            <font size="4">
                <form action="login_action.php" method="post" id="myform">
                    Username :
                    <input type="text" name="username" value="">
                    <br>
                    <br>
                    Password :
                    <input type="password" name="password" value="">
                    <br>
                    <br>
                    <input type="submit" name="login" value="login">
                </form>
            </font>
        </center>
    </div>
    <script type="text/javascript">
        var frmvalidator = new Validator("myform");
        frmvalidator.addValidation("username", "req", "Please Enter Username");
        frmvalidator.addValidation("username", "maxlen=50");
        frmvalidator.addValidation("password", "req", "Please Enter Password");

    </script>

    <br>
    <br>
    <?php include "footer.php"; ?>




</body>


</html>
