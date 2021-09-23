<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Online Voting System</title>
    <script src="jscript/validation.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            overflow-x: hidden;
        }
        

        #flag0 {
            text-align: center;
          
        }

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
        #nav_bar a:hover{
            color: deepskyblue;
        }

       

        .inner_header_logo {
            cursor: pointer;
            color: white;
            width: 200px;
            height: 100px;
            background: royalblue;
            -moz-border-radius: 100px / 50px;
            -webkit-border-radius: 100px / 50px;
            border-radius: 100px / 50px;
        }

        #online_voting {
            margin-top: 400px;
        }

        #voting_img {
            height: 300px;
            width: 300px;

        }
        
        #electionDay{
            margin-top: 200px;
        }

        #electionDay_img {
            height: 300px;
            width: 300px;
        }

        .about_sliding {
            background-image: url(assets/svg.png);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin-bottom: 100px;
            margin-top: 100px;
        }
        
        .instructionParent{
            background-image: url(assets/svg_down.png);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            
        }

        #instructions {
            margin-top: 200px;
            margin-bottom: 100px;
            padding: 50px 50px;
        }

        #services {
            margin-top: 200px;
            text-align: center;
        }

        #services h1 {
            color: deepskyblue;
        }

        #servicesContent {

            margin: 100px 0px;
        }

        #servicesContent .card {
            border-radius: 10px;
            transition: 0.5s ease;
            cursor: pointer;
            background: linear-gradient(145deg, #cacaca, #f0f0f0);
            box-shadow: 23px 23px 37px #949494,
                -23px -23px 37px #ffffff;


        }


        #servicesContent .card:hover {
            transform: scale(1.15);
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
    <marquee style="color: black">Welcome To Online Voting System Coded By VIJAY PRATAP SINGH</marquee>



    <div class="container">
        <div class="row" id="flag">
            <div class="col">
                <div class="tenor-gif-embed" data-postid="17700262" data-share-method="host" data-aspect-ratio="1.6" data-width="100%"><a href="https://tenor.com/view/india-india-flag-wave-india-flag-waving-gif-17700262">India India Flag Sticker</a>from <a href="https://tenor.com/search/india-stickers">India Stickers</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>


            </div>
        </div>
    </div>





    <div class="container">
        <div class="row" id="online_voting">

            <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <h1 style="color: deepskyblue">ONLINE VOTING</h1>
                <p>Another responsibility of citizens is voting. The law does not require citizens to vote, but voting is a very important part of any democracy. By voting, citizens are participating in the democratic process. Citizens vote for leaders to represent them and their ideas, and the leaders support the citizens' interests.</p>
                <button class="btn btn-primary">Read More</button>
            </div>
            <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <img src="assets/voting_img1.jpg" id="voting_img" alt="voting_image">

            </div>
        </div>

    </div>







    <div class="container">
        <div class="row" id="electionDay">

            <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <img src="assets/voting_img2.jpg" id="electionDay_img" alt="voting_image">

            </div>

            <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <h1 style="color: deepskyblue">ELECTION DAY</h1>
                <p>In order to encourage more young voters to take part in the political process, Government of India has decided to celebrate January 25 every year as "National Voters' Day". It has been started from 26 January 2011 to mark Commission's foundation day.</p>
                <button class="btn btn-primary">Read More</button>
            </div>

        </div>

    </div>







    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center; color: deepskyblue">Some indian political parties at a glance</h1>

            </div>
        </div>
    </div>








    <div class="about_sliding">
        <div class="container" style="width: 400px">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" style="box-shadow:  23px 23px 37px #949494,  -23px -23px 37px #949494">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="INC_logo.jpg" alt="First slide" />


                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="BJP_logo.jpg" alt="Second slide" />


                            </div>


                            <div class="carousel-item">
                                <img class="d-block w-100" src="SP_logo.jpg" alt="Third slide" />


                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="instructionParent">
        <div class="container">
            <div class="row" id="instructions">
                <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <h1 style="color: deepskyblue">Do's in the voting poll</h1>
                    <ul>
                        <li>DO take a selfie with your “I Voted” sticker.</li>
                        <li>DO stay safe.</li>
                        <li>DO ask questions. </li>
                    </ul>

                </div>
                <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <h1 style="color: deepskyblue">Don'ts in the voting poll</h1>
                    <ul>
                        <li>DON’T take pictures of your ballot.</li>
                        <li> DON’T get out of line.</li>
                        <li> DON’T leave your ballot incomplete.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">

                <div class="card">
                    <img class="card-img-top" src="assets/galary_img1.jpg" alt="Card image cap">
                </div>
            </div>
            <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="card">
                    <img class="card-img-top" src="assets/galary_img2.jpg" alt="Card image cap">
                </div>
            </div>

        </div>




        <div class="row">
            <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="card">
                    <img class="card-img-top" src="assets/galary_img3.jpg" alt="Card image cap">
                </div>
            </div>

            <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="card">
                    <img class="card-img-top" src="assets/galary_img4.jpg" alt="Card image cap">
                </div>
            </div>

        </div>



        <div class="row">
            <div class="col" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="card">
                    <img class="card-img-top" src="assets/galary_img5.jpg" alt="Card image cap">
                </div>
            </div>
            <div class="col" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="card">
                    <img class="card-img-top" src="assets/galary_img6.jpg" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row" id="services">
            <div class="col">
                <h1>Our Services</h1>
            </div>
        </div>

        <div class="row" id="servicesContent">
            <div class="col" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/services_img1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Easy Selection</h5>
                        <p class="card-text">People can easily give vote by just selection their party.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/services_img2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Selection Checkout</h5>
                        <p class="card-text">People can easily checkout their selection what they have chosen.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/services_img3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Queue Free</h5>
                        <p class="card-text">This is easiest way to get free from a waiting line during voting.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>










    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
