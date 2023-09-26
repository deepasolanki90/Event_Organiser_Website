<?php  

$conn = mysqli_connect("localhost" , "root" ,"" ,"event") or die("connection failed");

if (isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    

$sql = "INSERT INTO form(fullname, email, number, subject, message  ) values ('$fullname' ,'$email' ,
'$number' ,'$subject' ,'$message' )";

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
    <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="header-container6">
          <nav class="navbar">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="portfolio.php">Portfolio</a>
              <a href="service.php">Service</a>
              <a href="gallery.php">Gallery</a>
              <a href="contact.php" style="color:orange;">Contact</a>
          </nav>
          <div class="frontpage-headings">
            <h2 class="f-h2">Contact Information</h2>
            <h6 class="f-h6">Fill out the form below I’ll get back to you within 24 hours to book a discovery call and start chatting about all the exciting possibilities. </h6>
          </div>
        </div>
      </header>

      <!-- section-2 -->

      <div class="cont-sec-2">
      <div class="sec-2-inner-div-1">
        <h2 style="padding-left: 40px; padding-bottom: 20px; font-weight: 200;">Contact Information</h2>
        <ul type="none" class="cont-ul">
            <li class="li-1"><i class="fa-solid fa-headphones-simple"></i></li>
            <li class="li-2">Exploration Call
              <br>
              +91:-xxxxxxxx</li>
        </ul>
        <ul type="none" class="cont-ul">
          <li class="li-1"><i class="fa-solid fa-envelope"></i></li>
          <li class="li-2">Email Info
            <br>
            eventorganiser@.com</li>
        </ul>
        <ul type="none" class="cont-ul">
          <li class="li-1"><i class="fa-solid fa-location-dot"></i></li>
          <li class="li-2">
            Address
            <br>
            Noida sector 63 block h-15 BSI <br>
            Tower Third floor office no.305</li>
        </ul>
      </div>
      <div class="sec-2-inner-div-2">
       <h2 style="padding-bottom: 20px; font-weight: 200;">Get in touch</h2>
       <h3 style="font-weight: 200;">Ask me a question, I'd love to hear more from you.</h3>
       <form action="#" method="post">
        <label for="fullname"></label>
        <input type="text" id="fname" name="fullname" placeholder="Full Name" style="width: 40%; margin-right: 14px; padding-left: 10px;" required>
        <label for="Email"></label>
        <input type="email" id="email" name="email" placeholder="Email Address" style="width: 40%; height: 40px; padding-left: 10px;" required>
        <br><br>
        <label for="number"></label>
        <input type="number" id="number" name="number" placeholder="Number" style="width: 40%; margin-right: 14px; height: 40px; padding-left: 10px;" required>
        <label for="subject"></label>
        <input type="text" id="subject" name="subject" placeholder="Subject" style="width: 40%; padding-left: 10px;" required>
        <br><br>
        <label for="message"></label> 
        <input type="text" id="message" name="message" placeholder="Message" style="width: 86%; padding-left: 10px; height: 120px;" required>
        <br><br> 
        <input type="submit" value="Send Message" style=" width: 170px;" name="submit" >
       </form>

      </div>
      </div>

     <!-- section-3 -->

      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224356.85923021464!2d77.23700959541087!3d28.52240403733042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1695193548426!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
    
      <!-- section-4 -->

      <table style="background-color: #748173; color: white; position: sticky; height:600px;">
        <tr>
            <td style="width: 50%; height: 50px;">
                <div style=" padding-left: 6%; padding-right: 1%;  position: sticky;">
                    <h6>F.A.Q.S</h6>
                    <h2 style="font-size: 38px; font-weight: 100;">Wedding Questions</h2>
                    <h5 style="font-size: 18px; line-height: 1.5; font-weight: 100;">Questions aliquet orci elit gene tristique in lorem dream vitae. Aliquam tincidunten felis sed gravida aliquam neque libero hendrerit mana the amentane the mollis lacus quam maurisine erase.
                        <br><br>
                        Wedding inilla duiman at elit finibus viverra nec a lacus in the nesuzin senenoice misuscit non sesue the aucan volus.</h5>
                </div>
            </td>
            <td style="width: 50%;  padding-left: 30px; height:500px; margin-top:200px; ">
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
 
    <!---------------------------------------- section-5 ----------------------------------------------->

      <!-- <div style="display: flex;">
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
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                <br><br>
                <input type="submit" value="Subscribe" name="submit" id="submitBtn" required>
                 <button type="submit" onclick="btnfunction()" value="Subscribe" id="submitBtn">submit</button> 
            </form>
        </div>
     </div> -->

        <!-- footer -->

        <?php include 'footer.php';?>
    
</body>
</html>