<html>

<head>
    <script src="https://kit.fontawesome.com/5384685fcb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>
<style>
    #subscribe {
        text-align: center;


    }

    #subscribe input {
        height: 50px;
        border-radius: 10px;
        width: 300px;
        background: transparent;

    }

    .section2 {
        background-image: url(assets/svg_down.png);
        background-position: center;
        background-size: cover;
        border: 0px solid red;
        padding-top: 250px;
        transition-property: all;
        transition-timing-function: ease-in-out;
        transition-duration: 1s;


    }

    .section2:hover {
        background-image: url(assets/svg.png);
        background-position: center;
        background-size: cover;


    }

    #footer_contact i {
        font-size: 20px;
    }

    #footer_contact ul li {
        list-style: none;

    }

    #footer_contact ul li:hover {
        cursor: pointer;
        color: deepskyblue;
    }


    #down_nav {
        text-align: right;
        font-size: 25px;
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
        color: deepskyblue;
        cursor: pointer;

    }

    i {
        font-size: 25px;
        padding: 0px 10px;
    }

    #footer_down_icons a {
        color: black;
    }

    #footer_down_icons a:hover {
        color: deepskyblue;
    }

</style>

<body>



    <div class="container">
        <div class="row" id="subscribe">
            <div class="col">
                <h2 style="color: deepskyblue">Subscribe to our newsletter</h2>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="button" class="btn btn-lg btn-primary">Subscribe Now</button>
                </form>

            </div>
        </div>
    </div>






    <div class="section2">
        <div class="container" id="footer">
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
                        <li><a href="#xyz">Register</a></li>
                        <li><a href="#xyz">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="text-align: center">
                <div class="col" id="footer_down_icons">
                    <p>2021 | Copyright &copy; All Rights Reserved</p>
                    <a href="#" data-toggle="tooltip" title="Gmail"><i class="far fa-envelope"></i></a>
                    <a href="#" data-toggle="tooltip" title="facebook"> <i class="fab fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" title="twitter"> <i class="fab fa-twitter"></i></a>
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
