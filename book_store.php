<?php require('includes/common.php');?>
<!DOCTYPE html>
<html>

<head>
    <title>Treetop Bookshop</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css" media="screen">
        html {
            scroll-behavior: smooth;
        }

        #background-img {
            background: url(images/bg.jpg) center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100px;
            min-width: auto;
            margin-bottom: 40px;
        }


        .logo {
            padding-top:
        }

        .row {
            background: rgba(0, 0, 0, 0.7);
        }

        #icon {
            padding-bottom: 30px;
        }

        #about,
        #contact,
        #gallery,
        #back {
            text-align: center;
        }

        #bar {
            color: #446CF5;
        }

        #num {
            color: white;
        }

        .carousel-inner {
            margin-bottom: 50px;
        }

        #back {
            background: url(images/book-bindings-bookcase-books-990432.jpg);
            background-size: cover;
            min-height: auto;
            background-attachment: fixed;
            color: white;
        }

        #msg {
            background: white;
            max-width: 81%
        }

        #para {
            color: black;
        }

        .img-thumbnail {
            border-color: #446CF5;
        }

        #btn {
            background: transparent;
            width: 60px;
            border-radius: 60%;
            border-width: 0px;
            -webkit-transition: all 1s;
            transition: 1s;
        }

        #btn:hover {
            background: #446CF5;
            color: transparent;
        }

        #abc a {
            font-size: 20px;

            color: darkgrey;
            padding: 20px;
            text-decoration: none;
            -webkit-transition: all 1s;
            transition: 1s;
        }

        #abc a:hover {
            text-decoration: none;
            color: white;
            background-color: aqua;
        }

        #abc {
            padding-top: 50px;
            padding-left: 8%;
        }

        #lba {
            padding-top: 7px;
            font-weight: bold;
            color: darkgrey;
            font-family: 'Ubuntu', sans-serif;
            -webkit-transition: all 1s;
            transition: 1s;
        }

        #lba:hover {
            color: white;
        }

        #ghj {
            padding-left: 25px;
        }

        #ll {
            border-width: 0px;
            -webkit-transition: all .2s;
            transition: .2s;
        }

        #ll:hover {
            border-width: 2px;
            border-color: transparent;
            border-style: ridge;
        }

        #navigation {
            display: none;
        }

        #chota {
            display: none;
        }

        @media only screen and (max-width:1201px) {
            #ghj {
                display: none;

            }

            #navigation {
                display: inline;
            }

            .bnm {
                padding-top: 10%;
            }

            #bada {
                display: none;
            }

            #chota {
                display: inline;
            }
        }

        .dropdown {
            display: none;


        }

        .dropdown a {
            min-width: 160px;
            position: absolute;
            z-index: 1;
        }

        @media only screen and (max-width:619px) {
            .bnm {
                padding-top: 15%;
            }
        }

        #drop:hover .dropdown {
            display: block;
        }

        #uiop {
            border: none;
            outline: none;
            width: 150px;
            height: 50px;
            font-size: 20px;
            background: red;
            border-radius: 30px;
            color: white;
            transition: all 1s
        }

        #uiop:hover {
            background: #C40000;
        }

        #upscroll {
            width: 50px;
            height: 50px;
            bottom: 20px;
            right: 30px;
            position: fixed;
            z-index: 1;
            background: #00C4BB;
            transition: all 1s;
            outline: none;
            border: none;
            color: white;
            border-radius: 5px;
            display: none;
        }

        #upscroll:hover {
            background: #006EC4;
            color: black;
        }

    </style>



</head>

<body>
    <a href="#background-img">
        <button id="upscroll">
            <i style="font-size: 20px;" class="fa fa-caret-up"></i>
        </button>
    </a>
    <!--Navigation-bar-->
    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=#home style="font-family: 'Ubuntu', sans-serif; font-weight: bold;">Treetop Bookshop</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul id=links class="nav navbar-nav navbar-right">
                    <li><a href="#background-img"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#contact"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
                </ul>
            </div>

        </div>

    </div>
    <div class="conatainer-fluid row" id="background-img">
        <div id="ghj" style="background:#242124; height: 80px;" class="row">
            <h2 id=lba style="float: left; padding-left: 4%;" class="col-lg-5">Treetop Bookshop</h2>
            <img id=ll src="images/logo1.png" class="col-lg-2 img-thumbnail img-rounded img-responsive" style=" padding-top: 7px; height: 120px; width: 200px; background-color: transparent; border-top-left-radius:100px; border-top-right-radius: 100px;">
            <div id="abc" class="col-lg-5" style="float: right; padding-top: 30px;">
                <a href="login.php">Log In</a>
                <a href="signup.php">Sign Up</a>
                <a href="#contact">Contact Us</a>

            </div>
        </div>



        <div class="banner" id="home">
            <div class="logo col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <center>

                    <div>
                        <div id="bada">
                            <div id="myCarousel" class="carousel slide bnm" data-ride="carousel" style="text-align: center; width: 80%; margin-top:6%;">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/3.jpg" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h3></h3>
                                            <h1 style="font-family: 'Sacramento', cursive; font-size:50px; font-weight: bold;">We serves knowledge.</h1>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/2.jpg" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h3></h3>
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 35px;">Education is the most powerful weapon which you can use to change the world.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive;">- Nelson Mandela</h3>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/1.jpg" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h1 style="font-family: 'Sacramento', cursive;">An investment in knowledge pays the best interest.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive;">- Benjamin Franklin</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/4.jpg" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 32px;">Education is what remains after one has fogotten what one has learned in school.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive;">- Albert Einstein</h3>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div id="chota">
                            <div id="myCarousel" class="carousel slide bnm" data-ride="carousel" style="text-align: center; width: 80%; margin-top:6%;">



                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/lba.png" alt="lba" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="images/3.jpg" alt="Los Angeles" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h3></h3>
                                            <h1 style="font-family: 'Sacramento', cursive; font-size:50px; font-weight: bold;">We serves knowledge.</h1>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/2.jpg" alt="Chicago" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h3></h3>
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 35px;">Education is the most powerful weapon which you can use to change the world.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive; margin-top: 5px; margin-bottom: 0px;">- Nelson Mandela</h3>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/1.jpg" alt="New York" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h1 style="font-family: 'Sacramento', cursive;">An investment in knowledge pays the best interest.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive;">- Benjamin Franklin</h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/4.jpg" alt="New York" style="width:100%;">
                                        <div class="carousel-caption">
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 32px;">Education is what remains after one has fogotten what one has learned in school.</h1>
                                            <h3 style="font-family: 'Sacramento', cursive; margin-top: 10px; margin-bottom: 0px;">- Albert Einstein</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <a href="login.php"><button id="uiop" style="margin-bottom: 20px;">Shop Now</button></a>
                    </div>

                    <button type="button" id=btn style=" margin-bottom: 20px;"><a href="#about"><i class='fas fa-angle-down' style='font-size:48px;color: white;'></i></a></button>
                </center>
            </div>
        </div>
    </div>
    <!--About Us -->
    <div class="container">
        <div id="about" class="col-md-10 col-md-offset-1">
            <h2 style="margin-bottom: 0px;"><span style="font-size: 23px; color:#446CF5" class="glyphicon glyphicon-tasks"></span> About Us</h2>
            <p id="bar">________</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div id="gallery" class="col-md-10 col-md-offset-1">
            <div>
                <h2 style="margin-bottom: 0px;"><i class="fa fa-book" style="font-size: 32px; color:#446CF5"></i> Recommended Books</h2>
                <p id="bar">________________</p>
                <div id="mygallery" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mygallery" data-slide-to="0" class="active"></li>
                        <li data-target="#mygallery" data-slide-to="1"></li>
                        <li data-target="#mygallery" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/c1.jpg" height=500px width=600px style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="images/c2.jpg" height=500px width=600px style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="images/c3.jpg" height=500px width=600px style="width:100%;">
                        </div>
                    </div>


                    <a class="left carousel-control" href="#mygallery" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#mygallery" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Messages-->
    <div id=back>
        <div class="container">
            <h2 style="margin-bottom: 0px;">Featured Authors</h2>
            <p id="bar">_____________</p>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <center>
                    <div class="carousel-inner" id=msg>
                        <div class="item active">
                            <div>
                                <h1><img id=img src="images/author1.jpg" height=200px width=200px class="img-circle img-thumbnail" alt=""></h1>
                                <h3 id=para>Danielle Steel</h3>
                                <p id=para>Danielle Steel is one of the most-renowned American authors of our times. Her work has been translated into 28 languages and has found readership in 47 countries around the globe. She has written poetry, non-fiction and children’s books but she aces in romance fiction with almost all of her books making it to the The New York Times Bestseller List . </p>

                            </div>
                        </div>

                        <div class="item">
                            <div>
                                <h1><img id=img src="images/aurhor2.jpg" height=200px width=200px class="img-circle img-thumbnail" alt=""></h1>
                                <h3 id=para>John Grisham</h3>
                                <p id=para>A long-standing best-seller, John Grisham needs little introduction. Since penning legal thriller The Firm in 1991, the American author has released novel after novel after fast-paced novel which have invariably hit the best seller’s lists before being adapted for the big screen. Counting The Pelican Brief, The Rainmaker and The Chamber amongst his biggest titles, the author has sold more than £59 million worth of books in the UK since 2001.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div>
                                <h1><img id=img src="images/author3.jpg" height=200px width=200px class="img-circle img-thumbnail" alt=""></h1>
                                <h3 id=para>JK Rowlling</h3>
                                <p id=para>It seems fairly safe best to assume you all know who J.K. Rowling is, but just in case you don’t, here’s a brief synopsis: the writer was born Joanne Rowling 1965 and was brought up in England and Wales. After a degree in French and Classics, a stint working in London and some time teaching English in Portugal, Rowling returned to Britain where she settled, with her daughter, in Edinburgh. And that's where the first of the Harry Potter books were written.</p>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!--Contact Us-->
    <div class="container" id=contact>
        <div class="col-md-10 col-md-offset-1">
            <h2 style="margin-bottom:0px;"><span style="font-size: 27px; color:#446CF5" class="glyphicon glyphicon-phone-alt"></span> Contact Us</h2>
            <p id="bar">________</p>
            <div class="row" id="num">
                <h3>Lovely Professional University</h3>
                <p>Jalandhar - Delhi G.T. Road(NH-1)</p>
                <p>Phagwara, Punjab(India) - 144411</p>
                <p>Phone No. +91-1824-404441, +91-1824-510311</p>
            </div>
        </div>

    </div>
    <script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop >400 || document.documentElement.scrollTop > 400) {
    document.getElementById("upscroll").style.display = "block";
  } else {
    document.getElementById("upscroll").style.display = "none";
  }
}
</script>
</body>

</html>
