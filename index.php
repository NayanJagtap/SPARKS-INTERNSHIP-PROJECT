

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4e7ec5e168.js" crossorigin="anonymous"></script>
    <title>Payment gateway</title>
</head>

<body>
<nav id="navbar">
      <a href="#" id="sparkslogo"><img src="https://bestdataprovider.com/wp-content/uploads/Sparks-Student-Foundation-The-Sparks-Foundation.png" alt=""id="sparkslogoo"></a>
        <h1 id="header">FOR THE HELP OF THE PEOPLE</h1>
    </nav>

    <form method="post" action="pay.php">
    <div class="formssheet">
    <h1 id="smile">YOUR HELP CAN MAKE SOME ONE SMILE <img src="https://www.transparentpng.com/thumb/smiley-face-clip-art/6XKlk4-emoticion-smiley-face-clip-art-picture.jpeg" id="smilelogo"> </h1>
    <h4 id="name">NAME  <i class="fas fa-user"></i></h4><input type="text" name="name" value="name" id="ussername" placeholder="enter your name">
      <h4 id="phonenumber1" >PHONE NUMBER <i class="fas fa-phone"></i></h4><input type="number" name="number" value="" id="phonenumber" placeholder="enter your phone number" >
      <h4 id="gift1">YOUR GIFT FOR SOME ONE </h4><img src="https://www.transparentpng.com/thumb/birthday-present/purple-box-gift-present-icon-png-10.png" id="gift"><br>
        <input type="number" name="price" id="price">

        <input type="hidden" name="order_id" value="<?php echo "ORDS" . rand(10000,99999999);?>">
      
      <br>
      <h4 id="emailid1">EMAIL <i class="far fa-envelope"></h4></i><input type="email" name="emailid" value="" id="emailid" placeholder="enter your email id"></h4>
      <h4 id="mode">mode of payment <i class="fab fa-cc-mastercard" id="cards"></i><i class="fab fa-google-pay" id="cards"></i><i class="fab fa-cc-visa" id="cards"></i></h4>
      <select name="qnty" id="qnty">
            <option value="1">debit card</option>
            <option value="2">credit card</option>
            <option value="3">upi</option>
        </select><br><br>
      <input type="text" name="thoughts" value="" id="formplate" placeholder="thoughts">
      <br>
      <br>
      <button type="submit" class="btn" id="pay">DONATE</button>
     </form>
     </div>

    </div>
    <div class="sideimage">
      <img src="https://i.pinimg.com/originals/b1/b0/6e/b1b06e8eca6b33339b5397dedc95c595.jpg" id="sideimage">
    </div>

  </body>
</html>