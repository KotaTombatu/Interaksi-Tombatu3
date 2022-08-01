<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Tombatu | Luas Wilayah</title>
    <link rel="stylesheet" href="Resources/PropertiIndex/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body class="demograsi">
    <?php include "Navbar.php";?>
    <section class="sec1"></section>
    <section class="sec2">
        <h2>Letak dan Luas Wilayah</h2>
        <p>
            Desa Tombatu dua adalah sebuah desa yang merupakan salah satu dari 135 desa di kabupaten minahasa 
            tenggara dengan luas wilayah 643 Ha dan Terdiri dari  5 Jaga
            Yang memiliki batas wilayah sebagai berikut
            <div class="subartikel">
                <ul>
                    <li>Sebelah Utara berbatasan dengan Desa Tombatu Dua Utara</li>
                    <li>Sebelah Selatan Berbatasan dengan Desa Tombatu Tiga</li>
                    <li>Sebelah Timur Berbatasan dengan Desa Tombatu Dua Tengah</li>
                    <li>Sebelah Barat Berbatasan dengan Desa Betelen</li>
                </ul>
                Jarak antara ibu Kota Desa dengan Ibu kota kecamatan Kurang Lebih 1 Km dapat ditempuh 
                melalui jalan darat dengan berbagai jenis kendaraan
            </div>  
        </p>
    </section>
   
    <script type="text/javascript">
        //jquery for toggle dropdown menus
        $(document).ready(function(){
          //toggle sub-menus
          $(".sub-btn").click(function(){
            $(this).next(".sub-menu").slideToggle();
          });
    
          //toggle more-menus
          $(".more-btn").click(function(){
            $(this).next(".more-menu").slideToggle();
          });
        });
    
        //javascript for the responsive navigation menu
        var menu = document.querySelector(".menu");
        var menuBtn = document.querySelector(".menu-btn");
        var closeBtn = document.querySelector(".close-btn");
    
        menuBtn.addEventListener("click", () => {
          menu.classList.add("active");
        });
    
        closeBtn.addEventListener("click", () => {
          menu.classList.remove("active");
        });
    
        //javascript for the navigation bar effects on scroll
        window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        });
        </script>
          
  </body>
</html>
