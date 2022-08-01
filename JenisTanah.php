<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Tombatu | Jenis Tanah</title>
    <link rel="stylesheet" href="Resources/PropertiIndex/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body class="demograsi">

    <?php include "Navbar.php";?>

    <section class="sec1"></section>
    <section class="sec2-JenisTanah">
        <h2>Jenis Tanah Tombatu</h2>
        <p>Desa Tombatu 2 Merupakan Daerah daratan, dengan Jarak 17 Km dari Ibu Kota Kabupaten Minahasa Tenggara. 
           Berdasarkan peta sistem lahan yang diambil dari peta repport tahun 1977, jenis tanah yang ada di minahasa 
           tenggara secara umum dapat diklasifikasikan menjadi 3 jenis sudah termasuk desa tombatu dua.</p>
    </section>
    <section class="sec3"></section>
   
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
