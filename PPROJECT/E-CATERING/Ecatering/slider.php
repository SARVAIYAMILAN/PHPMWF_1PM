<!-- ======= Slider ======= -->
<!-- <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section> -->
<!-- End Slider -->

<!-- start slider  -->
<div id="carouselExampleDark" class="carousel carousel-dark slide p-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cloudmesoft.com/wp-content/uploads/2020/08/catering-system.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Maharaja Catering</h5>
        <p>The commitment to good food.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://wallpaperaccess.com/full/5600240.jpg" style="height: 500px; width: 1380px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Maharaja Catering</h5>
        <p>Service and food at its best.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/R.54562d7d80f1cfe0d8a0adb993c33c1c?rik=KKBWaCjVn3EjXA&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1562050344-f7ad946cee35%3fixlib%3drb-1.2.1%26q%3d80%26fm%3djpg%26crop%3dentropy%26cs%3dtinysrgb%26w%3d1080%26fit%3dmax%26ixid%3deyJhcHBfaWQiOjEyMDd9&ehk=Dr%2fVNZDIif34KbD2R0LLBfXhxQ7%2fpJZjc4Nl4IMSAUE%3d&risl=&pid=ImgRaw&r=0wedding-banquet-hall-flat-vector-illustration_82574-1344.jpg?size=626&ext=jpg" style="height: 500px; width: 1380px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Maharaja Catering</h5>
        <p>For making parties better.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end dlider  -->


<!-- ======= Menu Section ======= -->
<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Our Menu</h2>
    <p>Check Our <span>Yummy Menu</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <li class="nav-item">
      <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
        <h4>Starters</h4>
      </a>
    </li><!-- End tab nav item -->

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
        <h4>Breakfast</h4>
      </a><!-- End tab nav item -->

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
        <h4>Lunch</h4>
      </a>
    </li><!-- End tab nav item -->

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
        <h4>Dinner</h4>
      </a>
    </li><!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3>Starters</h3>
      </div>

      <div class="row gy-5">
        <form method="post">
          <div class="col-lg-4 menu-item">
            <!-- <a href="https://i.pinimg.com/736x/b5/77/97/b57797fb70d3289daa6adc5908008b6d.jpg" class="glightbox"> -->
            <?php
            foreach ($shwprod as $shwprod1) {
            ?>
              <input type="text" name="product_id" value="<?php echo $shwprod1["product_id"]; ?>">
              <img src="admin/<?php echo $shwprod1["pimage"]; ?>" class="menu-img img-fluid" style="height: 340px; width: 280px;">

              <h4><?php echo $shwprod1["productname"]; ?></h4>
              RS <del> <?php echo $shwprod1["oldprice"]; ?> </del>
              <input type="number" name="subtotal" value="<?php echo $shwprod1["offerprice"]; ?>" style="border:none" readonly>

              <?php
              if (!isset($_SESSION["id"])) {
              ?>
                <button type="submit" class="btn btn-button btn-danger btn-sm ms-5" onclick='return abc(this.value)'>ADD </button>
              <?php
              } else {
              ?>

                <button type="submit" class="btn btn-button btn-danger btn-sm ms-5" name="addtocart">ADD</button>

              <?php
              }
              ?>

            <?php
            }
            ?>
          </div><!-- Menu Item -->
        </form>
        <div class="col-lg-4 menu-item">
          <a href="https://www.spiceupthecurry.com/wp-content/uploads/2020/11/methi-muthia-recipe-1.jpg" class="glightbox"><img src="https://www.spiceupthecurry.com/wp-content/uploads/2020/11/methi-muthia-recipe-1.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Aloo Tikki</h4>
          <p class="price">
            RS 90/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://i.pinimg.com/236x/42/83/85/428385332d6f1a5361566c701eaf52d5.jpg" class="glightbox"><img src="https://i.pinimg.com/236x/42/83/85/428385332d6f1a5361566c701eaf52d5.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Basket Puri</h4>
          <p class="price">
            RS 50/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://www.indianhealthyrecipes.com/wp-content/uploads/2019/06/vegetable-soup-500x375.jpg" class="glightbox"><img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2019/06/vegetable-soup-500x375.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Veg Soup</h4>
          <p class="price">
            RS 119/-

            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://kristineskitchenblog.com/wp-content/uploads/2022/02/minestrone-soup-recipe-22.jpg" class="glightbox"><img src="https://kristineskitchenblog.com/wp-content/uploads/2022/02/minestrone-soup-recipe-22.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Pasta</h4>
          <p class="price">
            RS 150/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://cheapandcheerfulcooking.com/wp-content/uploads/2021/01/chinese-fried-noodles-basic-recipe-1.jpg" class="glightbox"><img src="https://cheapandcheerfulcooking.com/wp-content/uploads/2021/01/chinese-fried-noodles-basic-recipe-1.jpg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Noodles</h4>

          <p class="price">
            RS 89/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

      </div>
    </div><!-- End Starter Menu Content -->

    <div class="tab-pane fade" id="menu-breakfast">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3>Breakfast</h3>
      </div>

      <div class="row gy-5">

        <div class="col-lg-4 menu-item">
          <a href="https://www.spiceupthecurry.com/wp-content/uploads/2013/12/khaman-dhokla-2.jpg" class="glightbox"><img src="https://www.spiceupthecurry.com/wp-content/uploads/2013/12/khaman-dhokla-2.jpg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Khaman</h4>

          <p class="price">
            RS 69/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://www.spiceupthecurry.com/wp-content/uploads/2022/10/mini-paneer-samosa-1.jpg" class="glightbox"><img src="https://www.spiceupthecurry.com/wp-content/uploads/2022/10/mini-paneer-samosa-1.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Samosa</h4>

          <p class="price">
            RS 50/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://www.spiceupthecurry.com/wp-content/uploads/2020/05/dill-leaves-pakoda-5.jpg" class="glightbox"><img src="https://www.spiceupthecurry.com/wp-content/uploads/2020/05/dill-leaves-pakoda-5.jpg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Bhajiya</h4>
          <p class="ingredients">
          </p>
          <p class="price">
            RS 59/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>
          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://www.spiceupthecurry.com/wp-content/uploads/2020/09/sabudana-tikki-1.jpg" class="glightbox"><img src="https://www.spiceupthecurry.com/wp-content/uploads/2020/09/sabudana-tikki-1.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Sabudana</h4>

          <p class="price">
            RS 79/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://qph.cf2.quoracdn.net/main-qimg-722e950ee2d0ddf87cc56dbe088ec6dd-lq" class="glightbox"><img src="https://qph.cf2.quoracdn.net/main-qimg-722e950ee2d0ddf87cc56dbe088ec6dd-lq" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Fafda</h4>

          <p class="price">
            RS 80/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://img-global.cpcdn.com/recipes/3f9ce3c5d797fc65/1200x630cq70/photo.jpg" class="glightbox"><img src="https://img-global.cpcdn.com/recipes/3f9ce3c5d797fc65/1200x630cq70/photo.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Sev Khamani</h4>

          <p class="price">
            RS 60/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

      </div>
    </div><!-- End Breakfast Menu Content -->

    <div class="tab-pane fade" id="menu-lunch">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3>Lunch</h3>
      </div>

      <div class="row gy-5">

        <div class="col-lg-4 menu-item">
          <a href="https://www.gujarattourism.com/content/gujrattourism/en/gujarati-cuisines/gujarati-thali/_jcr_content/root/responsivegrid/pagebanner.coreimg.jpeg/1594757316760/thali-banner.jpeg" class="glightbox"><img src="https://www.gujarattourism.com/content/gujrattourism/en/gujarati-cuisines/gujarati-thali/_jcr_content/root/responsivegrid/pagebanner.coreimg.jpeg/1594757316760/thali-banner.jpeg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Gujarati Thali</h4>

          <p class="price">
            RS 250/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="assets/img/menu/menu-item-2.pnghttps://www.manbhavanthali.com/images/aboutimg.png" class="glightbox"><img src="https://www.manbhavanthali.com/images/aboutimg.png" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Gujarati Thali (BIG)</h4>

          <p class="price">
            RS 349/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://images.moneycontrol.com/static-mcnews/2021/08/Rasotsav-thali.jpg?impolicy=website&width=770&height=431" class="glightbox"><img src="https://images.moneycontrol.com/static-mcnews/2021/08/Rasotsav-thali.jpg?impolicy=website&width=770&height=431" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Rajwadi Thali</h4>

          <p class="price">
            RS 300/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://anishdeshmukh.files.wordpress.com/2019/02/img_20190122_22190272247849830231995.jpg?w=1088" class="glightbox"><img src="https://anishdeshmukh.files.wordpress.com/2019/02/img_20190122_22190272247849830231995.jpg?w=1088" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Maharaja SP Thali</h4>

          <p class="price">
            RS 400/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://ministryofcurry.com/wp-content/uploads/2022/09/Shrikhand-13.jpg" class="glightbox"><img src="https://ministryofcurry.com/wp-content/uploads/2022/09/Shrikhand-13.jpg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Shree Khand</h4>

          <p class="price">
            RS 120/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://akuner.com/wp-content/uploads/2022/03/akuner-puran-poli.jpg" class="glightbox"><img src="https://akuner.com/wp-content/uploads/2022/03/akuner-puran-poli.jpg" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Puran puri</h4>

          <p class="price">
            RS 90/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

      </div>
    </div><!-- End Lunch Menu Content -->

    <div class="tab-pane fade" id="menu-dinner">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3>Dinner</h3>
      </div>

      <div class="row gy-5">

        <div class="col-lg-4 menu-item">
          <a href="https://t3.ftcdn.net/jpg/02/28/28/16/360_F_228281605_zX4rGhhAX6fNkBgx7dp1IXu8XMnhCl01.jpg" class="glightbox"><img src="https://t3.ftcdn.net/jpg/02/28/28/16/360_F_228281605_zX4rGhhAX6fNkBgx7dp1IXu8XMnhCl01.jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Punjabi Thali</h4>

          <p class="price">
            RS 100/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://assets.vogue.com/photos/63d169f727f1d528635b4287/master/w_2560%2Cc_limit/GettyImages-1292563627.jpg" class="glightbox"><img src="https://assets.vogue.com/photos/63d169f727f1d528635b4287/master/w_2560%2Cc_limit/GettyImages-1292563627.jpg " style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>South Indian </h4>

          <p class="price">
            RS 249/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://images.pexels.com/photos/1437267/pexels-photo-1437267.jpeg?cs=srgb&dl=pexels-engin-akyurt-1437267.jpg&fm=jpg" class="glightbox"><img src="https://images.pexels.com/photos/1437267/pexels-photo-1437267.jpeg?cs=srgb&dl=pexels-engin-akyurt-1437267.jpg&fm=jpg" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Pasta</h4>

          <p class="price">
            RS 149/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000" class="glightbox"><img src="https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Pizza</h4>

          <p class="price">
            RS 200/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://images.immediate.co.uk/production/volatile/sites/30/2022/10/Pork-carnitas-b94893e.jpg?quality=90&resize=556,505" class="glightbox"><img src="https://images.immediate.co.uk/production/volatile/sites/30/2022/10/Pork-carnitas-b94893e.jpg?quality=90&resize=556,505" class="menu-img img-fluid" style="height: 340px; width: 280px;" alt=""></a>
          <h4>Tacos</h4>

          <p class="price">
            RS 199/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

        <div class="col-lg-4 menu-item">
          <a href="https://static.toiimg.com/thumb/54714340.cms?imgsize=458099&width=800&height=800" class="glightbox"><img src="https://static.toiimg.com/thumb/54714340.cms?imgsize=458099&width=800&height=800" style="height: 340px; width: 280px;" class="menu-img img-fluid" alt=""></a>
          <h4>Club Sandwhich</h4>

          <p class="price">
            RS 185/-
            <a href="" class="btn btn-button btn-danger btn-sm ms-5">ADD</a>

          </p>
        </div><!-- Menu Item -->

      </div>
    </div><!-- End Dinner Menu Content -->

  </div>

</div>
<!-- End Menu Section -->








<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Book A Table</h2>
      <p>Book <span>Your Stay</span> With Us</p>
    </div>

    <div class="row g-0">

      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>
      </div><!-- End Reservation Form -->

    </div>

  </div>
</section><!-- End Book A Table Section -->

<script>
  // book your seat

  function abc() {
    alert('want to book your seat Login to continue..')
    window.location = 'login';
  }
</script>