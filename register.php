<html>

<head>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



    <style>
        .section {
            background-image: url(assets/svg.png);
            background-position: center;
            background-size: cover;
            height: 300px;

        }

        #nav_bar {
            padding: 30px 0px;

        }

        #nav_bar a {
            text-decoration: none;
            color: white;
            font-size: 35px;

        }

        #header_logo {}

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

    <div class="section">
        <div class="container" id="nav_bar">
            <div class="row">
                <div class="col">
                    <a href="index.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="register.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login.php">Login</a>
                </div>
                <div class="col" id="header_logo">
                    <div class="inner_header_logo">
                        <h2>PEOPLE'S</h2>
                        <h1>VOICE</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
    <br>
    <br>
    <center>
        <legend>
            <h3> Register </h3>
        </legend>
    </center>
    <?php global $nam; echo $nam; ?>
    <?php global $error; echo $error; ?>
    <div class="container" style="background-color: royalblue; color: white">
        <div class="row">
            <div class="col">


                <center>
                    <font size="4">
                        <form action="reg_action.php" method="post" id="myform">
                            Firstname:
                            <input type="text" name="firstname" value="" />
                            <br>
                            <br>
                            Lastname:
                            <input type="text" name="lastname" value="" />
                            <br>
                            <br>
                            Username:
                            <input type="text" name="username" value="" />
                            <br>
                            <br>
                            Password:
                            <input type="password" name="password" value="" />
                            <br>
                            <br>
                            <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
                            <br>
                            <br>
                            <input type="submit" name="submit" value="Next" />
                        </form>
                    </font>
                </center>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var frmvalidator = new Validator("myform");
        frmvalidator.addValidation("firstname", "req", "Please enter student firstname");
        frmvalidator.addValidation("firstname", "maxlen=50");
        frmvalidator.addValidation("lastname", "req", "Please enter student lastname");
        frmvalidator.addValidation("lastname", "maxlen=50");
        frmvalidator.addValidation("username", "req", "Please enter student username");
        frmvalidator.addValidation("username", "maxlen=50");
        frmvalidator.addValidation("password", "req", "Please enter student password");
        frmvalidator.addValidation("password", "minlen=6", "Password must not be less than 6 characters.");

    </script>
    <?php include "footer.php" ;?>
</body>

</html>
