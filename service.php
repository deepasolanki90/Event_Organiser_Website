<?php  

$conn = mysqli_connect("localhost" , "root" ,"" ,"event") or die("connection failed");

if (isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    // $number = $_POST["number"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];

$sql = "INSERT INTO form(fullname, email) values ('$fullname' ,'$email' 
 )";

if(mysqli_query($conn, $sql)){
   ?>
   <script >
     alert('successfully sumitted');
     </script>
     
   <?php
}else{
        echo "error:";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="header-container3">
          <nav class="navbar">
          <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="portfolio.php">Portfolio</a>
              <a href="service.php" style="color:orange;">Service</a>
              <a href="gallery.php">Gallery</a>
              <a href="contact.php">Contact</a>
          </nav>
          <div class="frontpage-headings">
            <h2 class="f-h2">Our Wedding Planning Services</h2>
            <h6 class="f-h6">Professional Wedding & Event Planner surabit aliquet orci elit gene tristisue in lorem dream vitae.

            </h6>
          </div>
        </div>
      </header>
      
      <div class="containr3-div1">
        <div class="container3-div1-inner">
          <h6>THE EXPERIENCE</h6>
          <h2 style="font-size: 35px;">Explore Services</h2>
        </div>
        <div class="container3-div1-inner2">
          <h4 style="line-height: 1.5; font-weight: 100;">Professional Wedding & Event Planner surabit aliquet orci elit gene tristisue in lorem 
            dream vitae alisuam tincidunt felis sed gravida aliquam nemue libero hendrerit magna sit 
             amenta the mollis lacus huam maurisine alisuam erat volutfat.</h4>
        </div>
      </div>
      <div style="margin-bottom: 20px;">
      <div class="container3-photo">
        <div style="transition-timing-function: ease-in-out; ">
          <img src="https://img.freepik.com/premium-photo/rustic-glam-fall-wedding-emerald-palette_802234-8716.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
        <a href="wedding.php"><p class="p"> Weddding Planner</p></a>
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://cdn.pixabay.com/photo/2021/09/06/05/55/love-6600903_1280.jpg" alt="" height="450px" width="300px" class="events">
          <a href="ceremonies.php"> <p class="p"> Master of Ceremonies</p></a>
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/premium-photo/pink-summer-wedding_802234-5180.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
          <a href="special-events.php"> <p class="p"> Special Events</p></a>
        </div><br>
      </div>
      <br>
      <div class="container3-photo">
        <div style="transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/free-photo/champagne-toast_144627-16836.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=sph" alt="" height="450px" width="300px" class="events">
           <a href="birthday.php"><p class="p"> Birthday Planner</p></a>
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/free-photo/smiley-couple-posing-wedding-full-shot_23-2149956405.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
          <a href="wedding.php"><p class="p"> Destination Wedding</p></a>
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/free-photo/decorated-tables-with-floral-composition-old-fashioned-candlesticks-guests-celebration-evening_8353-10894.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
           <a href="office-event.php"><p class="p"> Corporate Events</p></a> 
        </div><br>
      </div>
      
    </div>

    

    <!-- section-3 -->
    
    <table style="background-color: #748173; color: white; position: sticky; ">
        <tr>
            <td style="width: 50%; position: sticky;">
                <div style=" padding-left: 6%; padding-right: 1%;  position: sticky;">
                    <h6>F.A.Q.S</h6>
                    <h2 style="font-size: 38px; font-weight: 100;">Wedding Questions</h2>
                    <h5 style="font-size: 18px; line-height: 1.5; font-weight: 100;">Questions aliquet orci elit gene tristique in lorem dream vitae. Aliquam tincidunten felis sed gravida aliquam neque libero hendrerit mana the amentane the mollis lacus quam maurisine erase.
                        <br><br>
                        Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin senenoice misuscit non sesue the aucan volus.</h5>
                </div>
            </td>
            <td style="width: 50%;  padding-left: 30px; height:600px;">
                <div class="more-ques-div">
                  <p>How do I plan a wedding in three  months?
                     <button onclick="myFunction()" id="myBtn" class="btn">+</button>
                    <span id="dots"></span><span id="more">
                    <br><br>
                    Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis
                     sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.
                    </span></p>
                    <!-- <button onclick="myFunction()" id="myBtn" class="btn">+</button> -->
                </div>

                <div class="more-ques-div">
                  <p>How do I plan a wedding in three months? 
                     <button onclick="myFunction2()" id="myBtn2" class="btn">+</button>
                    <span id="dots2"></span><span id="more2">
                    <br><br>
                    Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis
                     sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.
                    </span></p>
                    <!-- <button onclick="myFunction2()" id="myBtn2" class="btn">+</button> -->
                </div>

                <div class="more-ques-div">
                  <p>How do I plan a wedding in three months?
                    <button onclick="myFunction3()" id="myBtn3" class="btn">+</button>
                    <span id="dots3"></span><span id="more3">
                    <br><br>
                    Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis
                     sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.
                    </span></p>
                    <!-- <button onclick="myFunction3()" id="myBtn3" class="btn">+</button> -->
                </div>

                <div class="more-ques-div">
                  <p>How do I plan a wedding in three months?
                    <button onclick="myFunction4()" id="myBtn4" class="btn">+</button>
                    <span id="dots4"></span><span id="more4">
                    <br><br>
                    Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis
                     sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.
                    </span></p>
                    <!-- <button onclick="myFunction4()" id="myBtn4" class="btn">+</button> -->
                </div>

                <div class="more-ques-div">
                  <p>How do I plan a wedding in three months?
                    <button onclick="myFunction5()" id="myBtn5" class="btn">+</button>
                    <span id="dots5"></span><span id="more5">
                    <br><br>
                    Wedding aliquet orci elit gene tristique in lorem dream vitanem alisuam tincidunten felis
                     sedat bir ravida alisuam neque liberta hendrerit manas the amentane the mollis erase.
                    </span></p>
                    <!-- <button onclick="myFunction5()" id="myBtn5" class="btn">+</button> -->
                </div>
            </td>
        </tr>
    </table>

    <!-- section-5 -->

    <div style="display: flex;">
        <div>
            <img src="https://img.freepik.com/free-photo/wedding-bouquet-bride-s-hands_1328-2265.jpg?size=626&ext=jpg&ga=GA1.2.100957595.1688111492&semt=ais" alt="" height="500px" width="650px">
        </div>
        <div style="padding: 5%;">
            <h6>SIGN UP</h6>
            <h2 style="font-size: 30px;">Subscribe to the Newsletter</h2>
            <h5 style="font-size: 17px; font-weight: 100;">For the latest inspiration and insider tips straight to your inbox.</h5>
             <form action="#" method="post">
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fullname" placeholder="Full Name" required>
                <br><br>
                    <label for="Email"></label>
                    <input type="email" id="email" name="email" placeholder="Email Address"  style=" width: 100%;
                     height: 40px;" required>
                <br><br>
                <input type="submit" value="Subscribe" name="submit" id="submitBtn" required>
                <!-- <button type="submit" onclick="btnfunction()" value="Subscribe" id="submitBtn">submit</button> -->
            </form>
        </div>
     </div>
     <?php include 'footer.php';?>

</body>
</html>