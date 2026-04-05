<?php
    session_start();
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigdin="anonymous">
    <link rel = "stylesheet" href = "home-style.css">
    <link rel = "stylesheet" href = "About/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Store/store-style.css">
    <title>FAQ</title>
</head>
<body>
    <!-- navbar -->
    <nav class="nav-container">
      <img src="Logo2.png.png" alt="logo" class="logo">
      <div class="link-group">
          <a href="index.php" class="nav-link">Home</a>
          <?php 
            if (isset($_SESSION['Username'])){
                echo "<a href = 'Store.php' class = 'nav-link'>Store</a>";
            }else{
                echo "<a href = 'l.php' class = 'nav-link'>Store</a>";
            }
          ?>
          <a href="About.php" class="nav-link">FAQ</a>


      </div>
        
      <?php 
        if (isset($_SESSION['Username'])){
      ?>
      <!-- dropdown -->
      <div class="dropdown">
        <button class="btn dropdown-toggle" type = "button" id = "dropdownmenu" data-bs-toggle = "dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>

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
            <a href="#sidebar" class = "d-block  dropdown-item" data-bs-toggle = "offcanvas" role = "button" aria-controls = "sidebar">Cart</a>
            <a href="User.php" class = "dropdown-item ">Account</a>
            <a href="l.php" class = "dropdown-item ">Log-out</a>
          </div>
      </div>
      <?php
        } else{
            echo "<div class = 'butoonright'>";
                    echo "<a href = 'l.php'><button class = 'buttonmenu'>Signup/Login</button></a>";
            echo "</div>";
        }
      ?>
    </nav>
    <!-- content container -->
    <section class="faq">
        <h1>Frequent Ask Question</h1>
        <div class="faqcontent">
            <div class="faqct1">
                <h1>Store</h1>
                <ul class="accordion">
                    <li>
                        <input type="checkbox" id="first">
                        <label for="first">How to buy items</label>
                        <div class="content">
                            Its Simple! Simply click the buy button located below your chosen product
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" id="second">
                        <label for="second">Where can I find my items?</label>
                        <div class="content">
                            Your items are located in your cart. Click the menu button in the navbar, and find the button named "Cart"
                        </div>
                    </li>
                </ul>
            </div>
            <div class="faqct1">
                <h1>Account</h1>
                <ul class="accordion">
                    <li>
                        <input type="checkbox" id="fourth">
                        <label for="fourth">Where can I find my info</label>
                        <div class="content">
                            Click the menu button in the navbar, find the button named "Account"
                        </div>
                    </li>
                    <li>
                        <input type="checkbox" id="fifth">
                        <label for="fifth">How can I change my information</label>
                        <div class="content">
                            In the account page click the edit profile. Then in type the info needed in the input field then click save
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="LastPartContent" id="Contact">
        <div class="LPC_1">
            <div class="LPC_logo">
                <img src="Logo2.png.png" class="UPF_Logo" alt="UPF_Logo">
            </div>
             
            <div class="LPC_text">
                <h2>CS Pastries</h2>
                <a href="#home">Home</a> 
                <a href="../Store/Store.html">Store</a>
                <a href="#About">About Us</a> 
                <a href="#Contact">Contact</a>
            </div>
        </div>
        <div class="LPC_2">
            <div class="LPC_contact">
                <h2>Contact Us</h2>
                <a href="https://www.facebook.com/maurice.bantolo"><i class='bx bxl-facebook'></i> </a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
            <a href="#"><i class='bx bxs-phone-call'></i>0912346789</a>
            <a href="#"><i class='bx bx-envelope' ></i>website@gmail.com</a>
        </div>
    </footer>
    <script>
        const toggleBtn = document.querySelector('.toggle-btn')
        const toggleBtnIcon = document.querySelector('.toggle-btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')
        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')    
            toggleBtnIcon.className = `fa-solid fa-${isOpen ? 'xmark' : 'bars'}`;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>