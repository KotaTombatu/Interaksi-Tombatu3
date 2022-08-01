<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Tombatu | Iklim</title>
    <link rel="stylesheet" href="Resources/PropertiIndex/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body class="demograsi">
  <?php include "Navbar.php";?>

    <section class="sec1"></section>
    <section class="sec2-iklim">
        <h2>Desa Tombatu Dua</h2>
        <p>
            Desa Tombatu Dua Kab .  Minahasa Tenggara Provinsi Sulawesi Utara diketahui bahwa curah hujan rata - rata tahunan 
            berkisar antara 3.839.60 mm , dengan penyebaran curah hujan rata - rata bulanan sebanyak 19 hari hujan yaitu berkisar 
            antara 11-26 hari hujan .  Suhu rata - rata tahunan adalah 26,33 C dengan suhu rata - rata maksimum 30,23 C dan suhu rata - 
            rata minimum 22,98 C. Penyinaran matahari sebagai energi yang diperlukan untuk pertumbuhan vegetatif dan pembentuk buah .  
            Lama penyinaran matahari berpengaruh langsung terhadap proses fotosintesa suatu tanaman .  Lama penyinaran merupakan salah satu 
            komponen iklim yang berpengaruh terhadap laju evapotranspirasi .  Desa Tombatu Dua Kab.  Minahasa Tenggara Provinsi Sulawesi Utara
             memiliki lama penyinaran rata - rata yaitu 52,77 % atau seluas antar 43,16-67,93 % .  Lama penyinaran matahari yang optimum bagi 
             pertumbuhan tanaman lebih besar 41% atau 1800 jam per tahun .  Arah angin merupakan salah satu komponen iklim .  Arah angin ke selatan 
             yaitu terjadi pada bulan Mei - Oktober dan ke arah Timur Laut pada bulan Februari - April Kecepatan angin merupakan salah satu komponen 
             iklim yang berpengaruh terhadap laju evapotranspirasi .  Data kecepatan angin relatif cocok untuk pertumbuhan tanaman pertanian .  
             Kecepatan angin dapat memperbesar udara dari tanaman dan tanah , disamping juga menyebabkan gugurnya gugur dan gugur bunga . 
              Desa Tombam Dua Kab.  Minahasa Tenggara Provinsi Sulawesi Utara memiliki kecepatan angan rata - rata yaitu 2.18 knot atau berkisar 
              antara 1.54-4.16 knot .
        </p>
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
