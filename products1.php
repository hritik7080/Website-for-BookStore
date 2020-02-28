<?php require('includes/common.php');
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
$query="Select name,price,image from books";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$querya="Select name,price,image from books_ch";
$resulta=mysqli_query($con,$querya) or die(mysqli_error($con));
$queryb="Select name,price,image from books_mt";
$resultb=mysqli_query($con,$queryb) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>

<head>
    <title>Products | Treetop Bookshop</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Bootstrap Javascript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body {
            background-image: url(images/products.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .btn {
            font-size: 20px;
            position: relative;
            margin-top: 10px;
            color: white;
            font-family: "montserrat";
            text-decoration: none;
            margin-right: 20px;

            padding: 10px 30px;
            text-transform: uppercase;
            overflow: hidden;
            transition: 1s all ease;
        }

        .btn::before {
            background: #ff7675;
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.6s ease;
        }

        .btn::before {
            width: 100%;
            height: 0%;
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .btn:hover::before {
            height: 380%;
        }


        #page {
            margin: 50px;
            background-color: white;
            border-top-left-radius: 20px;

            border-top-right-radius: 20px;
            margin: 20px 20px 0px 20px;

        }

        #bar {
            width: 0px;
            padding: 7px;
            animation-name: jkl;
            animation-duration: 3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease-in;
        }

        @keyframes jkl {
            from {
                width: 0px;
            }

            to {
                width: 100%;
            }
        }

        .logout {
            outline: none;
            background-color: transparent;
            border: 1px solid aqua;
            border-radius: 20px;
            transition: all .5s;
            right: 100px;
            top: 20px;
            float: right;
            font-size: 20px;
            margin: 20px;
        }

        .logout:hover {
            background: aqua;
            border-radius: 5px;
            color: white;
        }

    </style>
    <script>
        function math(var x) {
            document.getElementById("jkl").style.background=black ;
            //document.getElementById("chem").style.display = none;
            //document.getElementById().=x;
        }

    </script>
</head>

<body>
    <div class="row">
        <div class="col-xs-5">
            <h1 style="color: white; margin-top: 15px; margin-left: 30px;">Treetop Bookshop</h1>
        </div>
        <div class="col-xs-7" style="padding-top: 0px; left: 100px;">
            <a href="logout.php" class="btn">Home</a>

            <a href="#" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">Categories</a>
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <center>
                            <a style="text-decoration:none; color:black;" href="products.php"><button style="background-color:transparent; outline:none; border:0px;padding:10px; border-bottom:1px solid black;" id="jkl" onclick="physics()">
                                <h3>Show All</h3>
                                </button></a><br>
                            <a style="text-decoration:none; color:black;" href="products1.php"><button style="background-color:transparent; outline:none; border:0px;padding:10px; border-bottom:1px solid black;" id="jkl" onclick="physics()">
                                <h3>Physics</h3>
                                </button></a><br>
                            <a style="text-decoration:none; color:black;" href="products2.php"><button style="background-color:transparent; outline:none; border:0px;padding:10px; border-bottom:1px solid black;" onclick="chemistry()">
                                <h3>Chemistry</h3>
                                </button></a><br>
                            <a style="text-decoration:none; color:black;" href="products3.php"><button style="background-color:transparent; outline:none; border:0px;padding:10px;">
                                <h3>Maths</h3>
                                </button></a>
                        </center>
                    </div>
                </div>
            </div>
           <a href="#" class="btn" data-toggle="modal" data-target="#cart">Cart</a>
            <div class="modal fade" id="cart">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header"><h2>Cart</h2></div>
                        <div class="modal-body">
                            <?php if(isset($_GET['name']) & isset($_GET['price'])){ ?>
                            <label>Name of Product :</label>
                            <input type="text" value="<?php echo $_GET['name']; ?>" class="form-group form-control" readonly>
                            <label>Price :</label>
                            <input type="text" value="<?php echo $_GET['price']; ?>" id="price" class="form-group form-control" readonly>
                            <label>Quantity :</label>
                            <input type="number" value="1" id="no" onclick="cal()" class="form-control form-group">
                            <input type="text" id="amount" class="form-control form-group" readonly>
                            <button class="btn btn-primary form-control form-group" style="height: 50px;">Checkout</button>
                            <script>
                                var x,y;
                                x=document.getElementById("price").value;
                                y=document.getElementById("no").value;
                                x=parseInt(x);
                                y=parseInt(y);
                                document.getElementById("amount").value=x*y;
                                function cal(){
                                x=document.getElementById("price").value;
                                y=document.getElementById("no").value;
                                x=parseInt(x);
                                y=parseInt(y);
                                document.getElementById("amount").value=x*y;
                                }
                                
                            </script>
                            <?php } else { ?>
                             <input class="form-control form-group" value="Cart is Empty." readonly><?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn" data-toggle="modal" data-target="#add">Contact</a>
            <div class="modal fade" id="add">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="height: 70px">
                            <h1 class="modal-title" id="exampleModalLongTitle">Conatct Us</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <center> <button style="background-color:transparent; outline:none; border:0px;padding:10px;">
                                    <h3>Lovely Professional University</h3>
                                    <p>Jalandhar - Delhi G.T. Road(NH-1)</p><br>
                                    <p>Phagwara, Punjab(India) - 144411</p><br>
                                    <p>Phone No. +91-1824-404441, +91-1824-510311</p>
                                </button></center>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="page" style="margin-top: 0px;">
        <div class="container-fluid" style="margin:0px; background:aqua; border-top-left-radius: 20px;
            border-top-right-radius: 20px;" id="bar"></div>
        <a href="logout.php" style="text-decoration:none; right:100px;"><button class="logout">Log Out</button></a>
        <p style="padding:20px;">Have you wrote a book?<a href="add_book.php" style="text-decoration:none; color:aqua; font-weight:bold;"> Add it here.</a></p>
        <div class="conatiner" style="margin-top:20px; margin-left:10px; margin-right:10px;">
            <div class="row">
                <?php while($row=mysqli_fetch_array($result)){ ?>
                <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3">
                    <div class="thumbnail">
                        <img src="<?php echo $row['image']; ?>" style="width:300px; height:200px;">
                        <div class="caption" id="phy">
                            <center>
                                <h2 style="margin-top:5px; margin-bottom:5px;"><?php echo $row['name'];?></h2>
                                <p style="margin-bottom:5px;">Price: Rs.<?php echo $row['price'];?></p>
                                <a href="products1.php?name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>"><button class="fom-control btn btn-primary">Add to Cart</button></a>
                            </center>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        

    </div>

</body>

</html>
