<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   

    <title>BANK OF MARS</title>
    <style type="text/css">
        button{
            position: relative;
            padding: 10px 10px;
            margin-bottom:15px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #2a2a72;
            background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
            border: none;
            border-radius:12px;
            box-shadow: 0 6px #999;
        }
        button:hover,
        h1:hover {
            transform: scale(1.1);
        }
        h1{
            background-color:#ffffff;
        }
               
       .sub{
           width:250px;
           height: 200px;
           
        }
        .wall{
            width:100%;
            height: 800px;
        }

    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>
    
    <img class="wall" src="img/1.jpeg">
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                    <h1>OUR SERVICES</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="https://wallpaperaccess.com/full/2374143.jpg" class="img-fluid sub">
                <br><br>
                <a href="customers.php"><button>View all Customers</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="https://img.freepik.com/free-photo/contactless-payment-qr-code-smartphone-screen_53876-98433.jpg?size=626&ext=jpg" class="img-fluid sub">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="https://media.istockphoto.com/vectors/isometric-mobile-phone-and-internet-banking-online-payment-security-vector-id1036730106?k=6&m=1036730106&s=612x612&w=0&h=thMHFPubrJXZv898lyC4yJke4h2hsZ0bhq7COaN4qV8=" class="img-fluid sub">
                <br><br>
                <a href="transactionhistory.php"><button >View Transfer History</button></a>
            </div>
        </div>
    </div>
    
    
   <!-- Footer -->
<footer class="page-footer font-small">

<!-- Copyright -->
<div class="footer-copyright text-center py-1" style="color:white;">© 2021 Copyright:
    Vikas Agrawal<br> The Sparks Foundation
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>