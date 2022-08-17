<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("inc/head.php"); ?>
</head>

<body>

  <!-- header section start -->
  <header>
    <div class="header-pinned">
      <?php include("inc/header.php"); ?>
    </div>
  </header>
  <!-- header section end -->
  <!-- news section start -->
  <div class="news" style="background-color:cyan ;">
    <marquee behavior="scroll" direction="left"><span style="color:red; background-color:black;"># Breaking News # :->>>>> </span> Faridpur City Lab Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quasi qui nostrum ullam, nulla laborum id, quod veniam magnam, debitis explicabo assumenda. Animi veniam nam iste provident? Voluptates, cum explicabo.</marquee>
  </div>


  <!-- slider  -->

  <?php include("inc/slider.php"); ?>
  <!-- end slidr  -->


  <div class="services-main-box" style="  background-color: #E3F2FD;padding-top: 60px;">
    <div class="container" style="  background-color: #E3F2FD;">
      <?php include("inc/services.php"); ?>
    </div>
  </div>

  <!-- services section end -->

  <!-- pricing section start  -->

  <?php include("inc/health_pakage.php"); ?>

  <!-- pricing section end  -->




  <!-- doctor section start  -->




  <!-- footer section  -->
  <?php include("inc/footer.php"); ?>


<!-- 
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script> -->


</body>

</html>