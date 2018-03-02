<!-- Section 1 principale -->
<section id="presentation" class="panel">
  <div class="logo">
    <img src="./dist/assets/img/logo.png" alt="3S Motors Logo" width="100px" height="100px">
  </div>

  <div class="sentence <?php if(!isset($_SESSION['loader'])){ echo "sentence-in-center";}else{ echo "sentence-without-loader";}?>">
    <div class="opening-animation">
      <div class="quotes quote-left">
        <img class="quote" src="./dist/assets/img/quote-left.png">
      </div>
      <div id="<?php if(!isset($_SESSION['loader'])){ echo "opening";}else{ echo "openingwithoutloader";}?>"></div>
      <div class="quotes quote-right">
        <img class="quote" src="./dist/assets/img/quote-right.png">
      </div>
    </div>
    <div id="<?php if(!isset($_SESSION['loader'])){ echo "fadeinleft";}else{ echo "fadewithoutloader";}?>" width="50vw">
      <h1 class="title" data-in-effect="fadeInLeft">Lorem Ipsum dolor sin amet lorem ipsum</h1>
    </div>


  </div>

  <!-- BOUTON MODAL EXEMPLE 1 -->
  <div class="section-qsn">
    <div class="bouton-action">
      <a href="#" class="bouton">
        <h2>Qui Sommes-nous</h2>
        <div class="modal-content">
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ullam labore corrupti officiis delectus tempora reprehenderit nulla doloribus, sequi non repellendus quas. Eius, iusto, ab. Cumque cupiditate molestiae atque, accusantium.</p>
          <div class="modal-close"><i class="fas fa-times fa-2x" id="closeModale"></i></div>
        </div>
      </a>
    </div>
  </div>


  <!-- BOUTON MODAL EXEMPLE 2 -->
<!--   <div class="cd-section">
    <div class="cd-modal-action">
      <a href="#0" class="btn" data-type="modal-trigger">Qui sommes-nous</a>
      <span class="cd-modal-bg"></span>
    </div>

    <div class="cd-modal">
      <div class="cd-modal-content">
        <h2>Qui Sommes-nous</h2>
        <p class="modal-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ullam labore corrupti officiis delectus tempora reprehenderit nulla doloribus, sequi non repellendus quas. Eius, iusto, ab. Cumque cupiditate molestiae atque, accusantium.</p>

        <a href="#0" class="cd-modal-close">Fermer</a>
      </div>
    </div>
  </div> -->
</section>



<!-- Section 2 Services -->
<section id="services" class="panel">

  <div class="container-margin">
    <div id="service1" class="car-block">
      <div class="orange car">
        <div class="transbox"></div>
        <div class="content">
          <h2>Vente de véhicules</h2>
        </div>
      </div>
    </div>
    <div id="service2" class="car-block">
      <div class="orange car">
        <div class="transbox"></div>
        <div class="content">
          <h2>Réparation et entretien</h2>
        </div>
      </div>
    </div>
    <div id="service3" class="car-block">
      <div class="orange car">
        <div class="transbox"></div>
        <div class="content">
          <h2>Location de véhicules</h2>
        </div>
      </div>
    </div>
    <div id="service4" class="car-block">
      <div class="orange car">
        <div class="transbox"></div>
        <div class="content">
          <h2>Entretien</h2>
        </div>
      </div>
    </div>
  </div>


  <!--   <div class="section-slide"> -->
    <div class="block-slide">
      <div class="half-block-slide half-block-left">
        <div id="palmares_regles" class="visible-md-block visible-lg-block">
          <div id="conteneur_regles">
            <div href="#" id="btn_vente" class="class-title" data-toggle="tooltip" data-placement="left" title="vente">
              <div class="link_regle" >
                <span class=""></span>
              </div>
              <div class="conteneur-title">
                <h3>Vente de véhicules</h3>
              </div>
            </div>
            <div href="#" id="btn_reparation" class="class-title" data-toggle="tooltip" data-placement="left" title="reparation">
              <div  class="link_regle" >
                <span class=""></span>
              </div>
              <div class="conteneur-title">
                <h3>Réparation et Entretien</h3>
              </div>
            </div>
            <div href="#" id="btn_location" class="class-title" data-toggle="tooltip" data-placement="left" title="location">
              <div class="link_regle" >
                <span class=""></span>
              </div>
              <div class="conteneur-title">
                <h3>Location de véhicules</h3>
              </div>
            </div>
            <div href="#" id="btn_entretien" class="class-title" data-toggle="tooltip" data-placement="left" title="entretien">
              <div class="link_regle" >
                <span class=""></span>
              </div>
              <div class="conteneur-title">
                <h3>Entretien</h3>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Slide droite -->
      <div class="half-block-slide half-block-right" >
        <i class="fas fa-times fa-2x" id="closeBlockSlide"></i>
        <div class="block-inside" id="vente">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <h2>Vente de véhicules</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
            </div>
          </div>
        </div>

        <div id="reparation" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <h2>Réparation et Entretien</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
            </div>
          </div>
        </div>

        <div id="location" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <h2>Location de véhicules</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
            </div>
          </div>
        </div>

        <div id="entretien" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <h2>Entretien</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--   </div>  --><!-- .cd-section -->

    <!--   <section class="section-slide"> -->
      <!-- ... -->
      <!--  </section> --> <!-- .cd-section -->

<!-- <div id="appearFirst">

</div> -->

<!-- <div id="slideServices" class="row">
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
</div> -->


</section >


<section id="infos" class="panel">
  <div class="container-fluid">
    <div class="row">
      <div class="contact col-md-4 col-md-offset-2">
        <form class="form-horizontal">
          <fieldset>

            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="surname" name="surname" type="text" placeholder="Prénom" class="form-control input-md">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Nom" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="mail" name="mail" type="text" placeholder="Email" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="phone" name="phone" type="text" placeholder="Tel" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <div class="col-md-12">
                <input id="subject" name="subject" type="text" placeholder="Objet" class="form-control input-md">

              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message">Message</textarea>
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <div class="col-md-12">
                <button id="send" name="send" class="btn btn-primary">Envoyer</button>
              </div>
            </div>

          </fieldset>
        </form>


      </div>
      <div class="map col-md-4">
        <a href="https://www.google.fr/maps/place/3S+Motors/@4.0545611,9.6981014,17z/data=!3m1!4b1!4m5!3m4!1s0x1061125e2d81cb61:0x2d868b4fc3e5cafc!8m2!3d4.0545558!4d9.7002901"><iframe src="https://snazzymaps.com/embed/45123" width="100%" height="450px" style="border:none;"></iframe></a>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container fluid -->

  <div class="slideshow slider">
    <ul>
      <li><img src="./img/Fiat-logo.png" alt="" width="auto" height="80" ></li>
      <li><img src="./img/Jeep_logo.png" alt="" width="auto" height="80" ></li>
      <li><img src="./img/Kia_logo.png" alt="" width="auto" height="80" ></li>
      <li><img src="./img/logo-renault.png" alt="" width="auto" height="80" ></li>
      <li><img src="./img/chrysler-logo.png" alt="" width="auto" height="80" ></li>
    </ul>
  </div>

</section>
