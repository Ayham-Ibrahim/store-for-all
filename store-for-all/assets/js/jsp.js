
    var navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 0) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    });
    function myFunction(){
      var x = document.getElementById("mytoggler");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

   
    // ---------------------اظهار المنجات المعروضة ضمن الموقع للمستخدمين العاديين بحسب الفئات------------------
    $(document).ready(function(){
      $(".Laptop").hide();
      $(".Mobiles").hide();
      $(".clothes").hide();
      $(".Shoes").hide();
      $(".Headphones").hide();
      $(".Keyboards-Mouse").hide();

      $("#all-product").click(function(){
        $(".user_product").fadeIn(function(){
            $(".Laptop").fadeOut(function(){
              $(".Mobiles").fadeOut(function(){
                $(".clothes").fadeOut(function(){
                  $(".Shoes").fadeOut(function(){
                    $(".Headphones").fadeOut(function(){
                      $(".Keyboards-Mouse").fadeOut();
                    });
                  });
                });
              });
            });
        });
    });

  // -------------------اظهار فئة االلابتوب فقط-----------------

      $("#Laptop").click(function(){
        $(".user_product").fadeOut(function(){
            $(".Laptop").fadeIn();
            $(".Mobiles").fadeOut();
            $(".clothes").fadeOut();
            $(".Shoes").fadeOut();
            $(".Headphones").fadeOut();
            $(".Keyboards-Mouse").fadeOut();  
        });
    });
    // ----------------------------------------------
    $("#Mobiles").click(function(){
      $(".Mobiles").fadeIn(function(){
         $(".user_product").fadeOut();
          $(".Laptop").fadeOut();
          $(".clothes").fadeOut();
          $(".Shoes").fadeOut();
          $(".Headphones").fadeOut();
          $(".Keyboards-Mouse").fadeOut(); 
          
      });
    });
    $("#clothes").click(function(){
      $(".clothes").fadeIn(function(){
          $(".Mobiles").fadeOut();
          $(".user_product").fadeOut();
          $(".Laptop").fadeOut();
          $(".Shoes").fadeOut();
          $(".Headphones").fadeOut();
          $(".Keyboards-Mouse").fadeOut(); 
      });
    });
    $("#Shoes").click(function(){
      $(".Shoes").fadeIn(function(){
          $(".Laptop").fadeOut();
          $(".Mobiles").fadeOut();
          $(".user_product").fadeOut();
          $(".clothes").fadeOut();
          $(".Headphones").fadeOut();
          $(".Keyboards-Mouse").fadeOut(); 
      });
    });
    $("#Headphones").click(function(){
      $(".Headphones").fadeIn(function(){
        $(".Laptop").fadeOut();
        $(".Mobiles").fadeOut();
        $(".user_product").fadeOut();
        $(".clothes").fadeOut();
        $(".Keyboards-Mouse").fadeOut(); 
        $(".Shoes").fadeOut();
      });
    });
    $("#Keyboards-Mouse").click(function(){
      $(".Keyboards-Mouse").fadeIn(function(){
        $(".Laptop").fadeOut();
        $(".Mobiles").fadeOut();
        $(".user_product").fadeOut();
        $(".clothes").fadeOut();
        $(".Headphones").fadeOut();
        $(".Shoes").fadeOut();
      });
    });

});
