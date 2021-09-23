<html>

<head>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/5384685fcb.js" crossorigin="anonymous"></script>

    <style>
        #welcome_user {
            border: 0px solid red;
            background-color: deepskyblue;
            border-radius: 20px;
            box-shadow: 23px 23px 37px #949494,
                -23px -23px 37px #ffffff;

        }

        #sub_welcome_user {
            text-align: center;
            margin: 50px 0px;
        }

        #sub_welcome_user h3 {
            font-size: 55px;
            color: white;
        }

        #sub_welcome_user h4 {

            font-size: 55px;
            color: white;
        }


        .footer {

            background-image: url(wave_down.svg);
            background-position: center;
            background-size: cover;
            border: 0px solid red;
            margin-top: 200px;
            padding-top: 100px;
        }

        #footer_contact i {
            font-size: 20px;
        }

        #footer_contact ul li {
            list-style: none;

        }

        #footer_contact ul li:hover {
            cursor: pointer;
            color: white;
        }

        #down_nav {
            text-align: right;
            font-size: 22px;

        }

        #down_nav li {
            text-decoration: none;
            list-style: none;
        }

        #down_nav li a {
            text-decoration: none;
            color: black;
        }

        #down_nav li a:hover {
            color: white;
            cursor: pointer;

        }

        #down_icons p {
            font-size: 15px;
        }

        #down_icons p:hover {
            color: white;
            cursor: pointer;
        }

        #down_icons i {
            font-size: 25px;
            padding: 0px 10px;
        }

        #down_icons i:hover {
            color: white;
            cursor: pointer;
        }

    </style>
</head>





<body>

    <?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
    
    ?>




    <div class="container" id="welcome_user">
        <div class="row">
            <div class="col" id="sub_welcome_user">
                <h4> <span id="welcome_heading">Welcome</span> <?php echo $_SESSION['SESS_NAME']; ?> </h4>
                <h3>Make a Vote </h3>

            </div>


        </div>

    </div>

    <form action="submit_vote.php" name="vote" method="post" id="myform">
        <center>
            <h2 style="color: deepskyblue"> What is your favorite political party? </h2>
            <br><br>
            <input type="radio" name="lan" value="BJP"> BJP
            <br><br>
            <input type="radio" name="lan" value="CONGRESS">CONGRESS
            <br><br>
            <input type="radio" name="lan" value="AAP"> AAP
            <br><br>
            <input type="radio" name="lan" value="NOTA"> SP
            <br><br>
            <input type="radio" name="lan" value="NIRDLIY"> NIRDLIY
            <br><br>
        </center><br>
        <?php global $msg; echo $msg; ?>
        <?php global $error; echo $error; ?>
        <center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
    </form>




    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col" id="footer_contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li data-toggle="tooltip" title="Fax"><i class="fas fa-fax"></i>0210 223456</li>
                        <li data-toggle="tooltip" title="Gmail"><i class="fas fa-envelope"></i>info@evoting@gmail.com</li>
                        <li data-toggle="tooltip" title="Phone"><i class="fas fa-phone-alt"></i>+919324563744</li>
                    </ul>
                </div>
                <div class="col" id="down_nav">
                    <ul>
                        <li><a href="#xyz">Home</a></li>
                        <li><a href="#xyz">Vote Results</a></li>
                        <li><a href="#xyz">Profile</a></li>
                        <li><a href="#xyz">Logout</a></li>
                    </ul>
                </div>
            </div>


            <div class="row" style="text-align: center">
                <div class="col" id="down_icons">
                    <p>2021 | Copyright &copy; All Rights Reserved</p>
                    <i class="far fa-envelope" data-toggle="tooltip" title="Gmail"></i>
                    <i class="fab fa-facebook" data-toggle="tooltip" title="facebook"></i>
                    <i class="fab fa-twitter" data-toggle="tooltip" title="twitter"></i>

                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

</body>

</html>
