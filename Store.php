<?php
  session_start();
  require_once "Store/configs/prices-db.php";
  require_once "Store/configs/function.php";
  $result = display_data();
  $row = mysqli_fetch_all($result);
  // PASTRY
  $Pastry1 = $row[0];
  $Pastry2 = $row[1];
  $Pastry3 = $row[2];
  $Pastry4 = $row[3];
  $Pastry5 = $row[4];
  // DESSERT
  $Dessert1 = $row[5];
  $Dessert2 = $row[6];
  $Dessert3 = $row[7];
  $Dessert4 = $row[8];
  $Dessert5 = $row[9];
  // COFFEE
  $Coffee1= $row[10];
  $Coffee2 = $row[11];
  $Coffee3 = $row[12];
  $Coffee4 = $row[13];
  $Coffee5 = $row[14];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = 'Store/store.js' async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Store/store-style.css">
    <title>Store</title>
</head>
<body>
  <!-- navbar -->
  <nav class="nav-container">
      <img src="Logo2.png.png" alt="logo" class="logo">
      <div class="link-group">
          <a href="index.php" class="nav-link">Home</a>
          <a href="#" class="nav-link">Store</a>
          <a href="About.php" class="nav-link">FAQ</a>
      </div>

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
              //add admin button if admin
              if ($_SESSION['Email']== 'Admin@gmail.com'){
                  echo "<a href = 'Admin.php' class = 'dropdown-item'>Admin</a>";
              }
            ?>
            <a href="#sidebar" class = "d-block  dropdown-item" data-bs-toggle = "offcanvas" role = "button" aria-controls = "sidebar">Cart</a>
            <a href="User.php" class = "dropdown-item ">Account</a>
            <a href="l.php" class = "dropdown-item ">Log-out</a>
          </div>
      </div>  
    </nav>

    <!-- Section 1 -->
    <section class="section1">
      <div class="left">
        <div class="text-container">
            <h1 class = "title">Best Seller!</h1>
            <p>Have a taste of our best seller: Croissant</p>
            <a href="#category-1" class = "btn-shop">Shop Now!</a>
        </div>
      </div>
      <img class="right" src="Store/pastry.jpg"></img>
    </section>

    <!-- Section 2 -->
    <section class="section2">
        <nav class = "nav-store"  id = "buy">
          <a href="#category-1" class = "store-link">Pastry</a>
          <a href="#category-2" class = "store-link"> Dessert</a>
          <a href="#category-3" class = "store-link">Coffee</a>
        </nav>
        
        <!-- category 1 -->
        <div class="product-container" id = "category-1">
          <div class="header-container">
            <div class="hr-design"></div>
            <h1 class = "category2">Pastry</h1>
            <div class = "hr-design"></div>
          </div>
          <div class="slideshow-container">
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Pastry1[1]?></h2>
              <img src="Store/products/pastry/p1.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price pastry1">₱<?php echo $Pastry1[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Pastry2[1]?></h2>
              <img src="Store/products/pastry/p2.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Pastry2[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Pastry3[1]?></h2>
              <img src="Store/products/pastry/p3.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Pastry3[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Pastry4[1]?></h2>
              <img src="Store/products/pastry/p4.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Pastry4[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Pastry5[1]?></h2>
              <img src="Store/products/pastry/p5.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Pastry5[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>    
          </div>
        </div>
        <!-- category 2 -->
        <div class="product-container" id = "category-2">
          <div class="header-container">
            <div class="hr-design"></div>
            <h1 class = "category2">Dessert</h1>
            <div class = "hr-design"></div>
          </div>
          <div class="slideshow-container">
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Dessert1[1]?></h2>
              <img src="Store/products/dessert/d1.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Dessert1[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Dessert2[1]?></h2>
              <img src="Store/products/dessert/d2.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Dessert2[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Dessert3[1]?></h2>
              <img src="Store/products/dessert/d3.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Dessert3[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Dessert4[1]?></h2>
              <img src="Store/products/dessert/d4.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Dessert4[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Dessert5[1]?></h2>
              <img src="Store/products/dessert/d5.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Dessert5[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
          </div>
        </div>

        <!-- category 3 -->
        <div class="product-container" id = "category-3">
          <div class="header-container">
            <div class="hr-design"></div>
            <h1 class = "category2">Coffee</h1>
            <div class = "hr-design"></div>
          </div>
          <div class="slideshow-container">
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Coffee1[1]?></h2>
              <img src="Store/products/coffee/c1.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Coffee1[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Coffee2[1]?></h2>
              <img src="Store/products/coffee/c2.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Coffee2[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Coffee3[1]?></h2>
              <img src="Store/products/coffee/c3.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Coffee3[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Coffee4[1]?></h2>
              <img src="Store/products/coffee/c4.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Coffee4[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
            <div class="item-group-1">
              <h2 class="item1-name"><?php echo $Coffee5[1]?></h2>
              <img src="Store/products/coffee/c5.jpg" alt="1" class="item1-img">
              <div class="item1-text-container">
                <div class="item1-hr"></div>
                <p class = "item1-price">₱<?php echo $Coffee5[2]?></p>
                <div class="item1-hr"></div>
                <button class = "item1-buy-button">Buy</button>
              </div>
            </div>
          </div>
        </div>   
    </section>

    <!-- faq -->
    <section class="faq-container">
      <div class="text">
          <h1>Having Trouble?</h1>
          <p>Check our most frequently asked questions</p>
      </div>
      <div class="accordion" id="faq-accordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type = "button" data-bs-toggle = "collapse" data-bs-target = "#collapse1" aria-expanded = "true" aria-controls = "collapse1">How do I Buy Items?</button>
          </h2>
          <div class="accordion-collapse collapse" data-bs-parent = "faq-accordion" id = "collapse1">
            <div class="accordion-body">
              <p>Its easy! simply click the buy button located at the bottom of the product of your choosing</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type = "button" data-bs-toggle = "collapse" data-bs-target = "#collapse2" aria-expanded = "true" aria-controls = "collapse2">Where are the products that i bought?</button>
          </h2>
          <div class="accordion-collapse collapse" data-bs-parent = "faq-accordion" id = "collapse2">
            <div class="accordion-body">
              <p>It is located in your cart. To find your cart click the menu button and there you can find a button named "Cart"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="footer-container">
      <img src="Logo2.png.png" alt="logo" class="logo">
      <div class="text-segment-1">
          <div class="text-segment-1-header">
              <h3>Cafe Cravings</h3>
          </div>
          <div class="text-segment-1-body">
              <p>home</p>
              <p>menu</p>
              <p>about us</p>
              <p>contact</p>
          </div>
      </div>
      <div class="text-segment-2">
          <div class="text-segment-2-header">
              <h5>contact us</h5>
          </div>
          <div class="text-segment-2-body">
              <div class="number">
                  <img src="Store/footer-icons/phone.png" alt="" class="footer-icon">
                  <p>0912346789</p>
              </div>
              <div class="email">
                <img src="Store/footer-icons/email.png" alt="" class="footer-icon">
                  <p>website@gmail.com</p>
              </div>
              <div class="social-group">
                  <div class="facebook">1</div>
                  <div class="instagram">2</div>
                  <div class="twitter">3</div>
              </div>
          </div>
      </div>
  </section>


  <!-- === OffCanvas === -->
  <div class="offcanvas offcanvas-start w-75" tabindex = "-1" id = "sidebar" aria-labelledby="sidebar-label">
    <section class = "sc-container">
      <div class="sc-header-container">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <h2 class = "sc-header"> Your Shopping Cart</h2>
      </div>
      <div class="sc-content-container">
          <div class="sc-product-container">
            <!-- content -->
          </div>
          <div class="sc-checkout-container">
              <h3 class="sc-grand-total">Grand Total</h3>
              <div class="grand-total">0</div>
              <button class = "checkout-button">Check out</button>
          </div>
    </div>
  </section>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>