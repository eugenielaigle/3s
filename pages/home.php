<!-- Section 1 principale -->
<section id="presentation" class="panel">

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
      <h1 class="title" data-in-effect="fadeInLeft">Lorem eteni doulor site amet consecteture adipisicing elit</h1>
      <!-- <hr>
      <h4 id="author">Mr Assaad</h4> -->
    </div>


  </div>

  <!-- BOUTON MODAL EXEMPLE 1 -->
  <div class="section-qsn">
    <div class="bouton-action">
      <a href="#" id="bouton" class="bouton">
        <h2>Découvrir l'histoire</h2>
        <div class="modal-content">
          <h3>Qui Sommes-nous ?</h3>
          <hr>
          <p>Depuis maintenant 30 ans, 3S Motors est spécialisé dans le secteur automobile et pneumatique au Cameroun.</p>
          <br>
          <p>Avec des infrastructures modernes à Douala et Yaoundé, une présence à Garoua, Ngaoundéré, Bafoussam, Bertoua et Maroua, ainsi que ses 150 salariés, 3S Motors est la 1ère entreprise de service automobile indépendante du Cameroun. </p>
          <br>
          <p>Elle bénéficie d’une image de structure sérieuse fournissant un travail efficace et de qualité.</p>
          <br>
          <p>Nous proposons un large choix de services autour de la vente, de la location et de l’entretien de véhicules pour les professionnels et particuliers.</p>
          <div class="modal-close" id="closeModale"></div>
        </div>
      </a>
    </div>
  </div>
  <div id="scrolldown">
    <span></span>
  </div>
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
          <h2>Réparation & entretien</h2>
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
          <h2>Pneumatique</h2>
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
                <h3>Réparation & Entretien</h3>
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
                <h3>Pneumatique</h3>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Slide droite -->
      <div class="half-block-slide half-block-right" >
        <div id="closeBlockSlide"></div>
        <!-- s -->
        <div class="block-inside" id="vente">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <img src="./dist/assets/img/vente_de_vehicule.png" alt="Vente de véhicules">
              <div class="overflowscroll">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
              </div>
              <a href="#infos">
                <button>Contactez-nous</button>
              </a>
            </div>
          </div>
        </div>

        <div id="reparation" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <img src="./dist/assets/img/reparation_et_entretien.png" alt="Réparation et entretien">
              <div class="overflowscroll">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
              </div>
              <a href="#infos">
                <button>Contactez-nous</button>
              </a>
            </div>
          </div>
        </div>

        <div id="location" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <img src="./dist/assets/img/loc_de_vehicule.png" alt="Location de véhicules">
              <div class="overflowscroll">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
              </div>
              <a target="_blank" href="https://kgrignard.wixsite.com/monsite">
                <button>Contactez-nous</button>
              </a>
            </div>
          </div>
        </div>

        <div id="entretien" class="block-inside">
          <div class="img-slide"></div>
          <div class="text-slide">
            <div class="slide-inside">
              <img src="./dist/assets/img/pneumatique.png" alt="Pneumatiques">
              <div class="overflowscroll">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, delectus molestiae qui tenetur culpa possimus necessitatibus esse temporibus, consequuntur, animi laudantium nam illo itaque minus ea reiciendis! Quaerat, ab, delectus!</p>
              </div>
              <a href="#infos">
                <button>Contactez-nous</button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section >


  <section id="infos" class="panel">
    <div class="container container-contact">
      <div class="row">
        <div class="contact">
          <div class="contact-title">
            <h3>Contact</h3>
            <a href="mailto:info@3smotors.com"><p>info@3smotors.com</p></a>
          </div>
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
                  <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
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
          <div class="contact-phone">
            <p class="ou">OU</p>
            <p class="contactez-nous">N'hésitez pas à nous contacter au</p>
            <a href="tel:677708338"><p>677 70 83 38</p></a>
            <a href="tel:679528889"><p class="margin-tel">679 52 88 89</p></a>
          </div>


        </div>
        <div class="map">
          <a href="https://www.google.fr/maps/place/3S+Motors/@4.0545611,9.6981014,17z/data=!3m1!4b1!4m5!3m4!1s0x1061125e2d81cb61:0x2d868b4fc3e5cafc!8m2!3d4.0545558!4d9.7002901"><iframe src="https://snazzymaps.com/embed/45123" width="100%" height="100%" style="border:none;"></iframe></a>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container fluid -->

    <div class="container container-partners">
      <div class="slideshow slider">
        <ul>
          <li><img src="./img/Fiat-logo.png" alt="" width="auto" height="40" ></li>
          <li><img src="./img/Jeep_logo.png" alt="" width="auto" height="40" ></li>
          <li><img src="./img/Kia_logo.png" alt="" width="auto" height="40" ></li>
          <li><img src="./img/logo-renault.png" alt="" width="auto" height="40" ></li>
          <li><img src="./img/chrysler-logo.png" alt="" width="auto" height="40" ></li>
        </ul>
      </div>
    </div>

    <div class="container-fluid container-social">
      <a href=""><img src="./dist/assets/img/instagram.png" alt="instagram-3S Motors"></a>
      <a href=""><img id="social-center" src="./dist/assets/img/facebook.png" alt="facebook-3S Motors"></a>
      <a href=""><img src="./dist/assets/img/youtube.png" alt="youtube-3S Motors"></a>

    </div>
  </section>
