<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bibliothek</title>
    <link rel="icon" href="resorces/icons/2.png">
    <link rel="stylesheet" href="resorces/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="resorces/css/style.css">
</head>

<body>
    <?php
    require "header.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <img src="resorces/images/products/atomic habits.svg" alt="" class="img6">
            </div>
            <div class="col-6 p-5">
                <h3 class="f4txt">Atomic Habits</h3>
                <h4 class="f4txt">$30.99</h4>
                <p class="f4txt">Discription</p>
                <ul>
                    <li><span>Publisher :</span></li>
                    <li><label>Language:</label></li>
                    <li><label>Publisher :</label></li>
                    <li><label>Paperback :</label></li>
                    <li><label>ISBN-10:</label></li>
                    <li><label>Dimensions:</label></li>
                </ul>
                <div class="row">
                    <div class="col-2">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-9">
                        <button class="btn btn-primary se1 f4txt">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>