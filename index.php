<?php
    session_start();
    include ("db.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href = "home-style.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <header>
        <img class="Logo-header" src="Logo2.png.png" alt="Logo">
        <nav>
            <ul class="nav_bar">
                <li><a href ="#home">Home</a></li>
                <?php 
                    if(isset($_SESSION['Username'])){
                        ?>
                            <li><a href ="Store.php">Store</a></li>
                        <?php
                     }else{
                        ?>
                            <li><a href ="l.php">Store</a></li>
                        <?php
                     }
                ?>
                <li><a href ="About.php">FAQ</a></li>                        
            </ul>
        </nav>
        <div class="acc">
        <?php 
             if(isset($_SESSION['Username'])){
        ?>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type = "button" id = "dropdownmenu" data-bs-toggle = "dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucwords($_SESSION['Username'])?></button>

            <div class="dropdown-menu" aria-labelledby="dropdownmenu">
                <div class="user-info">
                    <img src="Store/profile-icon.webp" alt="" class="profile">
                    <p class="name"><?php echo ucwords($_SESSION['Username'])?></p>
                </div>
            <div class="dropdown-item-container">
                <?php 
                    if ($_SESSION['Email']== 'Admin@gmail.com'){
                        echo "<a href = 'Admin.php' class = 'dropdown-item'>Admin</a>";
                    }
                ?>
                <a href = "Store.php" class = "dropdown-item"> Store </a>
                <a href="User.php" class = "dropdown-item ">Account</a>
                <a href="l.php" class = "dropdown-item ">Log-out</a>
            </div>
        </div>
        <?php 
             }else{
                echo "<div class = 'butoonright'>";
                    echo "<a href = 'l.php'><button class = 'buttonmenu'>Signup/Login</button></a>";
                echo "</div>";
             }
        ?>
        </div>
    </header>

    <!-- 1st section -->
    <section class="UpperPartContent" id="home">
        
        <div class="UPCInside"> <!--UPC = UpperPartCOntent-->
            <h1 >Delight in Every Bite – Freshly Baked Pastries Just for You!</h1>
            <p>Our bakery is dedicated to creating exquisite pastries that tantalize your taste buds and bring joy to your day. Each treat is handcrafted with the utmost care, combining the finest ingredients with our passion for baking</p> 
        </div>
        <div class="UPC_picture">
            <img src ="Pic_UpperPartSec.png" alt ="Picture ng Product" class="UPC_insde_pic" height="250px" width="250px">
        </div>
    </section>

    <!-- ABOUT section -->
    <div class = "about-container">
        <h3 class="row p-3 justify-content-center">ABOUT US</h3>
        <p class="p-4" style="text-align: center;">Welcome to CS Pastries, where every bite is a testament to our passion for pastries and our journey from coding screens to kitchen scenes. Founded by a group of students who found joy in baking during their study breaks, our shop brings you the perfect blend of creativity, dedication, and delectable treats.
            
            At CS Pastries, we believe in the power of balance – balancing our rigorous academic pursuits with the therapeutic art of baking. What started as a hobby to unwind from coding has transformed into a full-fledged bakery, offering a wide array of pastries crafted with love and precision.
            
            Our mission is simple: to provide you with the freshest, most delicious pastries that brighten your day, whether you're hitting the books or taking a well-deserved break. Each pastry is made from scratch using the finest ingredients, ensuring that every bite is a delightful experience.
            
            Join us on this sweet journey and indulge in the perfect treat for every occasion. From classic favorites to innovative creations, we have something to satisfy every palate. Thank you for supporting our passion and for being a part of the CS Pastries community.
            
            Happy studying, happy coding, and happy indulging!</p>
        <br>
    </div>
    <!--MENU SECTION-->
    <section class="Menu">
        <div class="Menu_sec-logo">
            <img src="Pic_MenuSec.png" alt="Logo">
        </div>
        <div class="Menu_sec-text">
            <h2>Menu</h2>
            <p>Explore our selection of freshly baked goods, from classic pastries that remind you of home to innovative flavors that spark your curiosity. Each creation is made with the finest ingredients and a sprinkle of our unique passion, ensuring a taste experience that is both comforting and exciting.<br><br>Dive into our menu and discover your new favorite treat. Happy indulging!</p>
            <?php
                if (isset($_SESSION['Username'])){
                    echo "<a href = 'Store.php'><button  class='buttonmenu'>Menu</button></a>";
                }else{
                    echo "<a href = 'l.php'><button  class='buttonmenu'>Menu</button></a>";
                }
            ?>
    </section>

    <section class="ModeDeliver">
        <h2>Mode of Delivery</h2><br>
        <div class="Container_MD">
            <div class="fstContainer">
                <img src="pic1.png" alt="pci1">
                <h3>8am-10pm</h3>
                <p>Open Hours</p>
            </div>
            <div class="sndContainer">
                <img src="DeliveryDriver_DeliverMode.png" alt="pic2">
                <h3>0913465</h3>
                <p>Call us Now</p>
            </div>
        </div>     
    </section>

   <!--Footer-->
    <footer class="LastPartContent" id="Contact">
        <div class="LPC_1">
            <div class="LPC_logo">
                <img src="Logo2.png.png" class="UPF_Logo Logo2" alt="UPF_Logo">
            </div>
            <div class="LPC_text">
                <h2>Cafe Cravings</h2>
                <a href="#home">Home</a> 
                <a href="#">Menu</a>
                <a href="#About">About Us</a> 
                <a href="#Contact">Contact</a>
            </div>
        </div>
        <div class="LPC_2">
            <div class="LPC_contact">
                <h2>Contact Us</h2>
                <a href="#"><i class='bx bxl-facebook'></i> </a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
            <a href="#"><i class='bx bxs-phone-call'></i>0912346789</a>
            <a href="#"><i class='bx bx-envelope' ></i>website@gmail.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>