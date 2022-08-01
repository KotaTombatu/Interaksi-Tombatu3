<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Tombatu | Penduduk</title>
    <link rel="stylesheet" href="Resources/PropertiIndex/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>
  <body style="background-color: #A277FC;
  font-family: Verdana, Geneva, Tahoma, sans-serif;">
  <?php include "Navbar.php";?>

    
    <section class="sec1"></section>
        
        <center>
          <h2 style="font-size:15px; text-align: justify;">Jumlah Penduduk </h2>
        <p style="text-align: justify;">Jumlah Penduduk di Desa Tombatu dua sebanyak 920 jiwa. 
           Untuk Lebih Jelasnya Jumlah Penduduk dan Kepadatan dapat dilihat pada tabel dibawah ini.
        </p>
            <h3 class="headertable" style="margin-top: 10px;">
              Tabel Penduduk <br> Kota Tombatu
            </h3>
              <table>
              <tr id = "headertable">
                <th>Desa</th>
                <th>-</th>
                <th>-</th>
                <th>-</th>
                <th>-</th>
              </tr>
              <tr>
                <th>Jaga I</th>
                <th>54</th>
                <th>176</th>
                <th>98</th>
                <th>78</th>
              </tr>
              <tr>
                <th>Jaga II</th>
                <th>60</th>
                <th>192</th>
                <th>97</th>
                <th>95</th>
              </tr>
              <tr>
                <th>Jaga III</th>
                <th>56</th>
                <th>176</th>
                <th>81</th>
                <th>95</th>
              </tr>
              <tr>
                <th>Jaga IV</th>
                <th>56</th>
                <th>183</th>
                <th>91</th>
                <th>92</th>
              </tr>
              <tr>
                <th>Jaga V</th>
                <th>43</th>
                <th>193</th>
                <th>102</th>
                <th>91</th>
              </tr>
              <tr>
                <th>Jumlah</th>
                <th>269</th>
                <th>920</th>
                <th>469</th>
                <th>451</th>
              </tr>
              </table>
            </center>
            
            <!-- Table Pemerintahan -->
   
   
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
