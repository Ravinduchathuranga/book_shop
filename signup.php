<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bibliothek | Sign Up</title>
    <link rel="icon" href="resorces/icons/2.png">
    <link rel="stylesheet" href="resorces/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="resorces/css/style.css">
</head>

<body>
    <?php
    require "header.php";
    ?>
    <div class="container sicon">
        <div class="row p-5">
            <div class="offset-3 col-6 d-grid justify-content-center card p-5">
                <h2 class="text-center f4txt">Create an account</h2>
                <p class="f4txt">This page is password protected. If you have created account, please type your username and password below.</p>
                <hr>
                <input type="text" class="form-control" placeholder="Enter Your First Name">
                <br>
                <input type="text" class="form-control" placeholder="Enter Your Last Name">
                <br>
                <input type="text" class="form-control" placeholder="Enter Your Email">
                <br>
                <input type="password" class="form-control" placeholder="Enter Your Password">
                <br>
                <input type="text" class="form-control" placeholder="Enter Your Mobile">
                <br>
                <select id="" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="">Select Gender</option>
                    <option value="">Select Gender</option>
                </select>
                <br>    
                <a href="" class="btn5">Create An Account</a>
                <br>
            </div>
        </div>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>