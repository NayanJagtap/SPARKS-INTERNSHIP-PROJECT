

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sone.css">
    <script src="https://kit.fontawesome.com/4e7ec5e168.js" crossorigin="anonymous"></script>
    <title>Payment gateway</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
</head>

<body>
<nav id="navbar">
      <a href="index.php" id="sparkslogo"><img src="https://bestdataprovider.com/wp-content/uploads/Sparks-Student-Foundation-The-Sparks-Foundation.png" alt=""id="sparkslogoo"></a>
        <h1 id="header">FOR THE HELP OF THE PEOPLE</h1>
    </nav>
    <hr id="hr">

    <form method="post" action="pay.php">
    <div class="forms">
    <h1 id="smile">YOUR HELP CAN MAKE SOME ONE SMILE <i class="fas fa-smile"></i> </h1>
    <h4 id="nameword">NAME  <i class="fas fa-user"></i></h4><input type="text" name="name"  id="name" required >
      <h4 id="phonenumberword" >PHONE..<i class="fas fa-phone"></i></h4><input type="number" name="phone"  id="phonenumber" required >
      <marquee width="1100px" id="marquee">
please select netbanking as a mode of payment, money will be not deducted in any cases,chill,also click on "return to merchant site" <i class="far fa-grin-beam"></i>
</marquee>

      <h4 id="giftword">YOUR GIFT FOR SOME ONE </h4><img src="https://www.transparentpng.com/thumb/birthday-present/purple-box-gift-present-icon-png-10.png" id="gift"><br>
        <h4 id="donationword"> DONATION.     .<i class="fas fa-credit-card"> </i> <i class="fas fa-wallet"></i>  <i class="fas fa-coins"></i>

</h4> <input type="number" name="price" id="price" required>

        <input type="hidden" name="order_id" value="<?php echo "ORDS" . rand(10000,99999999);?>">
      
      <br>
      <h4 id="emailidword">EMAIL <i class="far fa-envelope"></h4></i><input type="email" name="emailid" value="" id="emailid" required ></h4>
      
      <button type="submit" class="btn" id="pay">DONATE</button>
     </form>
     </div>

    </div>
    <div class="sideimage">
      <img src="https://i.pinimg.com/originals/b1/b0/6e/b1b06e8eca6b33339b5397dedc95c595.jpg" id="sideimage">
    </div>

  </body>
</html>