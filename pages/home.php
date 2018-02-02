<!-- Section 1 principale -->
<section id="presentation" class="panel">
  <div class="logo">
    <img src="./dist/assets/img/logo.png" alt="3S Motors Logo" width="100px" height="100px">
  </div>

  <div class="<?php if(!isset($_SESSION['loader'])){ echo "sentence-in-center";}else{ echo "sentence-without-loader";}?>">
    <img class="quote" src="./dist/assets/img/quote-left.png">
    <div id="<?php if(!isset($_SESSION['loader'])){ echo "fadeinleft";}else{ echo "fadewithoutloader";}?>" width="50vw">
      <h1 class="title tlt" data-in-effect="fadeInLeft">Lorem Ipsum dolor sin amet lorem ipsum</h1>
    </div>
    <img class="quote" src="./dist/assets/img/quote-right.png">
  </div>

</section>

<!-- Section 2 Services -->
<section id="services" class="panel">
<!-- <div id="appearFirst">

</div> -->

<div id="slideServices" class="row">
  <div class="slider-nav col-md-4 no-padding">
    <div class="bg bg-1"></div>
    <div class="bg bg-2"></div>
    <div class="bg bg-3"></div>
    <div class="bg bg-4"></div>
  </div>

  <div class="slider-for col-md-8 no-padding">
    <div class="bg-for bg-1"></div>
    <div class="bg-for bg-2"></div>
    <div class="bg-for bg-3"></div>
    <div class="bg-for bg-4"></div>
  </div>
</div>


</section>

<section id="map" class="panel">
  <!-- <div>
    <a href="https://www.google.fr/maps/place/3S+Motors/@4.0545611,9.6981014,17z/data=!3m1!4b1!4m5!3m4!1s0x1061125e2d81cb61:0x2d868b4fc3e5cafc!8m2!3d4.0545558!4d9.7002901"><iframe src="https://snazzymaps.com/embed/45123" width="100%" height="450px" style="border:none;"></iframe></a>
  </div> -->
</section>
