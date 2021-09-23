<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <script src="jscript/validation.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

        #party_card {

            margin: 150px 0px;
        }

        #party_card .card {

            border-radius: 10px;
            transition: 0.5s ease;
            cursor: pointer;
            background: linear-gradient(145deg, #cacaca, #f0f0f0);
            box-shadow: 23px 23px 37px #949494,
                -23px -23px 37px #ffffff;


        }


        #party_card .card:hover {
            transform: scale(1.15);
        }



        .card-text {
            color: deepskyblue;
            text-align: center;
            font-weight: bold;
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




    <div class="container">
        <div class="row" id="party_card">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="assets/BJP_logo.jpg" class="card-img-top" alt="bjp_logo_image">
                    <div class="card-body">
                        <p class="card-text">This is the symbol of BJP.</p>
                    </div>
                </div>

            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="assets/INC_logo.jpg" class="card-img-top" alt="INC_logo_image">
                    <div class="card-body">
                        <p class="card-text">This is the symbol of INC.</p>
                    </div>
                </div>

            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="assets/SP_logo.jpg" class="card-img-top" alt="SP_logo_image">
                    <div class="card-body">
                        <p class="card-text">This is the symbol of SP.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
