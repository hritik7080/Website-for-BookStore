<?php require ('includes/common.php')?>
<!DOCTYPE html>
<html>

<head>
    <title>AddBook | Treetop Bookshop</title>
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
    <style>
        .container{
            margin-top: 50px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="alert alert-danger" role="alert">
                Your book should have educational content otherwise your book will be deleted within three working days.
            </div>
            <div>
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <input class="form-control form-group" type="text" name="naam" placeholder="Full name of Book" required="true">
                    <input class="form-control form-group" type=text name="price" maxlength="3" placeholder="Price of Book" required="true">
                    <select class="form-control form-group" placeholder="Category" name="category">
                        <option value="physics">Physics</option>
                        <option value="chemistry">Chemistry</option>
                        <option value="maths">Maths</option>
                    </select>
                    <input class="form-control form-group" type="file" name="image" value="Choose Image" required="true">
                    <input class="form-control form-group btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>

</body>

</html>

