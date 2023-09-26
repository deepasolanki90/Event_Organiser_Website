<?php  

$conn = mysqli_connect("localhost" , "root" ,"" ,"event") or die("connection failed");

if (isset($_POST['submit'])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    // $number = $_POST["number"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];

$sql = "INSERT INTO form(fullname, email) values ('$fullname' ,'$email' )";

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
        <div class="header-container5">
          <nav class="navbar">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="portfolio.php">Portfolio</a>
              <a href="service.php">Service</a>
              <a href="gallery.php" style="color:orange;">Gallery</a>
              <a href="contact.php">Contact</a>
          </nav>
          <div class="frontpage-headings">
            <h2 class="f-h2">Wedding Planner & Event Portfolio</h2>
            <h6 class="f-h6">Browse our portfolio of select weddings we've planned in the New York area. </h6>
          </div>
        </div>
      </header>
      
      <!-- section-2 -->

      <div class="porfolio-photo-container">
        <div class="portfolio-photo">
            <div >
              <img src="https://cdn.pixabay.com/photo/2017/08/06/01/26/love-2587456_1280.jpg" alt="" height="230px" width="350px"  onclick="enlargeImg()"
             id="img1" >
             <button onclick="resetImg()">Reset
        </button>
            </div><br>
            <div >
              <img src="https://cdn.pixabay.com/photo/2017/08/06/20/11/wedding-2595862_1280.jpg" alt="" height="230px" width="350px" >
        
            </div><br>
            <div >
              <img src="https://cdn.pixabay.com/photo/2021/09/06/05/55/love-6600903_1280.jpg" alt="" height="500px" width="350px">
            
            </div><br>
          </div>
          <br><br>
          <div class="portfolio-photo" style="margin-left:15px; margin-right:15px;">
            <div >
                <img src="https://img.freepik.com/premium-photo/pink-summer-wedding_802234-5180.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="500px" width="350px">
              
              </div><br>
            <div >
              <img src="https://cdn.pixabay.com/photo/2019/11/10/11/13/couple-4615557_1280.jpg" alt="" height="230px" width="350px">
            
            </div><br>
            <div>
              <img src="https://cdn.pixabay.com/photo/2016/03/14/14/21/bride-1255520_1280.jpg" alt="" height="230px" width="350px" >
        
            </div><br>
           <br>
          </div>
          <br>
          <div class="portfolio-photo">
            
            <div >
              <img src="https://cdn.pixabay.com/photo/2017/03/21/18/43/couple-2162950_1280.jpg" alt="" height="230px" width="350px">
              
            </div><br>
            <div >
                <img src="https://img.freepik.com/premium-photo/rustic-glam-fall-wedding-emerald-palette_802234-8716.jpg?size=626&ext=jpg&ga=GA1.1.100957595.1688111492&semt=ais" alt="" height="500px" width="350px">
             
              </div><br>
            <div >
              <img src="https://cdn.pixabay.com/photo/2021/01/27/15/54/wedding-5955351_1280.jpg" alt="" height="230px" width="350px">
             
            </div><br>
          </div>
          <br>
    </div>
 
       <!-- section-3 -->
    
    <div class="gallery-sec-2">
        <div class="gallery-sec-2-img">
          <span>
            <h5 style="font-size: 20px; color: white; font-weight: bolder; align-items: center;">be inspired</h5>
            <h2 style="font-size: 30px; color: white; font-weight: bolder; align-items: center;">latest wedding video</h2>
            <a href="https://youtu.be/AWFDo-xTcHU?si=-5agivD_kBuTG6iV"> 
              <button class="gallery-btn" ><i class="fa-solid fa-play"></i></button>
            </a>
          </span>
       </div>
    </div>

     <!-- section-4 -->

    
      
        <div  class="gallery-img-container">
          <h5 style="margin-left: 65PX; letter-spacing: 3px;">POPUP</h5>
          <h2 style="margin-left: 65PX; font-size: 30PX;">Video gallery</h2>
            <div class="gall-img-cont-inner-div1">
                <div class="gall-td1">
                  <a href="https://youtu.be/i0re9So8oxk?si=IIx6qV5kyRTwukvI">
                    <button class="gall-td-btn"><i class="fa-solid fa-play"></i></button>
                    </a>
                </div>
                <div class="gall-td2">
                    <button class="gall-td-btn"><i class="fa-solid fa-play"></i></button>
                </div>
              </div>
              <div class="gall-img-cont-inner-div2">
                <div class="gall-td3">
                  <a href="https://youtu.be/IsD4J7qIyLI?si=ewZGIg4C3sl4cx89">
                  <button class="gall-td-btns"><i class="fa-solid fa-play"></i></button>
                </a>
                </div>
                <div class="gall-td4">
                  <button class="gall-td-btns"><i class="fa-solid fa-play"></i></button>
                </div>
                <div class="gall-td5">
                  <a href="https://youtube.com/shorts/s4doTWxWYCE?si=ZHTVb9mYOkKo5aLZ"><button class="gall-td-btns"><i class="fa-solid fa-play"></i></button></a>
                </div>
              </div>
        </div>
    
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

        <!-- footer -->

        <?php include 'footer.php';?>


        <script>
        img = document.getElementById("img1");
        // Function to set image dimensions
        function enlargeImg() {
            img.style.width = "500px";
            img.style.height = "700px";
            img.style.transition = "width 0.5s ease";
        }
        // Function to reset image dimensions
        function resetImg() {
            img.style.width = "350px";
            img.style.height = "230px";
            img.style.transition = "width 0.5s ease";
        }
    </script>
</body>
</html>