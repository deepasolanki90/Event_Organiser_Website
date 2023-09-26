<?php  

$conn = mysqli_connect("localhost" , "root" ,"" ,"event") or die("connection failed");

if (isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    // $number = $_POST["number"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];

$sql = "INSERT INTO form(fullname, email ) values ('$fullname' ,'$email' )";

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
        <div class="header-container4">
          <nav class="navbar">
          <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="portfolio.php" style="color:orange;">Portfolio</a>
              <a href="service.php">Service</a>
              <a href="gallery.php">Gallery</a>
              <a href="contact.php">Contact</a>
          </nav>
          <div class="frontpage-headings">
            <h2 class="f-h2">Wedding Planner & Event Portfolio</h2>
            <h6 class="f-h6">Browse our portfolio of select weddings we've planned in the New York area. </h6>
          </div>
        </div>
      </header>

      <div style="text-align:center;">
        <h1>Our hosted weddings</h1>
      </div>

      <!-- section-2 -->
      <div  style=" margin-top: 40px; display: flex; justify-content:center; gap:3rem;  width:100%" id="video">
      <iframe width="500" height="315" src="https://www.youtube.com/embed/WGbRSURqwmI?si=GLORh-DpHZnpRfpq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="500" height="315" src="https://www.youtube.com/embed/9ooakHRn3tY?si=VypSrdvyugwmhiRM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video" style=" margin-top: 40px; margin-bottom:40px; display: flex; justify-content:center; gap:3rem; width:100%">
      <iframe width="500" height="315" src="https://www.youtube.com/embed/gB_zZx6VhI0?si=AyWVPBIdo4rdKcvr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="500" height="315" src="https://www.youtube.com/embed/sydYfIch_7E?si=DuihvMsZ-_tPIpcv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

    <!-- section-3 -->

    <div class="container-2">
        <div class="container2-inner1">
          <h5>DATELINE</h5>
          <h2 style="font-size: 40px; font-weight: 100; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            Wedding Dates
          </h2>
          <h5 style="font-size: 20px; font-weight:100 ;">
            We would love to meet up and chat about how we can make your dream wedding happen! Nullam vestibulum iaculis maximus. International facilisis leo at ac tristique nunc vulputate.
          </h5>
        </div>
        <div class="container2-inner1">
        <ol type="1" style="padding-top: 20px; font-size: 20px;">
          <li> Switzerland</li><hr><br>
          <li> Italy</li><hr><br>
          <li> Amsterdam</li><hr><br>
          <li>Spain</li><hr><br>
        </ol>
        </div>
        <div>
        </div>
      </div>

      <!-- section-4 -->

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


        <!-- footer -->

        <?php include 'footer.php';?>
</body>
</html>