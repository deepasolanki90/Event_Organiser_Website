<?php  

$conn = mysqli_connect("localhost" , "root" ,"" ,"event") or die("connection failed");

if (isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $event = $_POST["event"];
    $location = $_POST["location"];
    $calender = $_POST["calender"];

$sql = "INSERT INTO bookingform(fullname, email, number, event, location, calender) values ('$fullname' ,'$email' ,
'$number' ,'$event' ,'$location' , '$calender')";

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
        <div class="header-container7">
          <nav class="navbar nav-scroll">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="portfolio.php">Portfolio</a>
              <a href="service.php">Service</a>
              <a href="gallery.php">Gallery</a>
              <a href="contact.php">Contact</a>
          </nav>
          <div class="frontpage-headings">
            <h2 class="f-h2">Wedding Planner</h2>
            <h6 class="f-h6">I am Samantha, wedding planner for colorful couples, a hopeless romantic who loves bold statements.</h6>
          </div>
        </div>
      </header>
             
        <!-- section-2 -->

      <div  style="display:flex; margin-top: 20px; ">
      <div style="text-align:right; width:45%;">
        <img src="https://img.freepik.com/premium-photo/happy-couple-celebration-their-wedding-day-love-marriage-happiness-young-man-woman-ceremony-together-bride-groom-white-background-people-smile-with-bouquet-flowers_590464-81049.jpg" alt="" height="600px" width="500px">
      </div>
      <div class="container4-inner-div1">
        <h2 style="font-size: 50px; font-weight: 100;">
          Florya Weddings
        </h2>
        <h5 style="font-size: 15px; line-height: 1.5; font-weight: 100;">You can choose any country with good tourism wedding elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit florya id velit ac arcu posuere blane.
        <br><br>
          Wedding nissuam nestibulum ac quam nec odio elementum ceisue the miss varius natoque penatibus et magnis dis parturient monte</h5>
         <h3>Package Includes</h3>
         <ul type="none" style="line-height:2; margin-bottom:0px;">
          <li style=" margin-left:-40px;"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;20 Years of Experience</li>
          <li style=" margin-left:-40px;"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;250+ Wedding Planner</li>
          <li style=" margin-left:-40px;"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;Wedding Assistant for wedding day</li>
          <li style=" margin-left:-40px;"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;Review of Vendor contracts</li>
          <li style=" margin-left:-40px;"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;&nbsp;Access to Preferred Vendors List</li>
          </ul>
        </div>
     </div>

     <!-- section-3 -->
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
        <label for="event"></label>
        <input type="text" id="event" name="event" placeholder="Event" style="width: 40%; padding-left: 10px;" required>
        <br><br>
        <label for="location"></label> 
        <input type="text" id="location" name="location" placeholder="location" style="width: 86%; margin-right: 14px; padding-left: 10px; height: 40px;" required>
         
        <h4  >Date Of Birth: <br><br>
            <input type="datetime-local" id="Test_DatetimeLocal" name="calender"  required>
            </h4>
            
        <input type="submit" value="Send Message" style=" width: 170px;" name="submit" >
       </form>

      </div>
      </div>

       <!-- section-3 -->

     <div style="margin:20px;">
     <h1 style="text-align:center;">Our Other Services</h1>
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
     
      <!-- section-4 -->
      
     <div class="container3-photo">
     <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/free-photo/decorated-tables-with-floral-composition-old-fashioned-candlesticks-guests-celebration-evening_8353-10894.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
           <a href="office-event.php"><p class="p"> Corporate Events</p></a> 
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/free-photo/smiley-couple-posing-wedding-full-shot_23-2149956405.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
          <a href="wedding.php"><p class="p"> Destination Wedding</p></a>
        </div><br>
        <div style="padding-left: 35px; transition-timing-function: ease-in-out;">
          <img src="https://img.freepik.com/premium-photo/pink-summer-wedding_802234-5180.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="450px" width="300px" class="events">
          <a href="special-events.php"> <p class="p"> Special Events</p></a>
        </div><br>
      </div>
     </div>

      <?php include 'footer.php';?>
</body>
</html>