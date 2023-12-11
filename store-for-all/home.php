<?php
    include "includes/DBConnection.php";
    include 'includes/app-entry-point.php';
?>

<?php echo Head('Home'); ?>
<nav class="homnav navbar navbar-expand-lg fixed-top navbar-scroll" style="transition: all 0.3s ease-in-out;">
    <div class="container-fluid">
        <a class="navbar-brand me-2" href="">
            <img
                src="siteimg\logo-removebg-preview.png"
                height="55"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -5px;"
            />
            <h1 style="font-size: 29px;font-weight: 600;font-family: initial;margin-left: -10px;margin-top: 5px;">AH Store</h1>

      </a>
  <!-- ------------------------------- -->
      <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="mytoggler">
        <ul class="navbar-nav home me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">Home</a>
          </li>
          <?php
            $query = "SELECT name FROM category";
            $results = SQLQuery($query);
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <button class="dropdown-item" id="all-product" >All</button>
              <?php foreach($results as $category) : ?>
              <button class="dropdown-item" id="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></button>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
            
            <a href="login.php" class="add-pro-btn">Login</a>

        </ul>
      </div>
    </div>
  </nav>

  <section class="intro">                                                       
      <img src="siteimg\b.jpg" alt="" style="width: 100%;">
      <h1>Welcome to our store</h1>
      <h1 class="welcome" style="display:none;">WELCOME</h1>
    </div>
  </section>

 <!-- --------------------------show product to the user---------------------------------- -->
  <main class="user_product">
    <div class="container text-center">
        <div class="row gy-5">  

            <?php 
              $row = SQLQuery("SELECT * FROM `product` ORDER BY `created_at` DESC LIMIT 21");  
            ?>
            
            <?php foreach($row as $prod) : ?>
              <?php
                $view = $prod['views']+1; //acount the number of views
                $nview = SQLQuery("UPDATE `product` SET `views`='$view' WHERE 1");
              ?>
                <div class="ProCol col-4">
                    <div class="card">
                        <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                            <p class="card-text"><?php echo $prod['details']; ?></p>
                            للطلب اتصل على لرقم
                            <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                            <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                            <div class="pbtn">
                            <!-- <a href="" class="delete-pro-btn"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>    
    </div>
  </main>

  <!-- -----------------------------labtop category----------------------------------  -->

    <main class="Laptop">
      <div class="container text-center">
          <div class="row gy-5">  

              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'Laptop' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>
    <!-- ------------------------------mobile category---------------------------------  -->
    <main class="Mobiles">
      <div class="container text-center">
          <div class="row gy-5">  
              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'Mobiles' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>
    <!-- ------------------------------clothes category---------------------------------  -->
    <main class="clothes">
      <div class="container text-center">
          <div class="row gy-5">  
              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'clothes' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>
    <!-- ------------------------------Shoes category---------------------------------  -->
    <main class="Shoes">
      <div class="container text-center">
          <div class="row gy-5">  
              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'Shoes' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>
    <!-- ------------------------------Headphones category---------------------------------  -->
    <main class="Headphones">
      <div class="container text-center">
          <div class="row gy-5">  
              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'Headphones' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>
    <!-- ------------------------------Keyboards&Mouse category---------------------------------  -->
    <main class="Keyboards-Mouse">
      <div class="container text-center">
          <div class="row gy-5">  
              <?php 
                $row = SQLQuery("SELECT * FROM `product` WHERE category_name = 'Keyboards-Mouse' ORDER BY `created_at` DESC");  
              ?>
              
              <?php foreach($row as $prod) : ?>
                  <div class="ProCol col-4">
                      <div class="card">
                          <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                              <p class="card-text"><?php echo $prod['details']; ?></p>
                              للطلب اتصل على لرقم
                              <p class="card-text" style="color:green;"><?php echo $prod['vendor-phone']; ?></p>
                              <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                              <div class="pbtn">
                              <a href="" class="delete-pro-btn"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>    
      </div>
    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php echo HomeFooter(); ?>
<?php echo Footer(); ?>
