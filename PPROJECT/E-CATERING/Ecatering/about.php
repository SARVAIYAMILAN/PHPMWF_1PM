<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container  mt-5" data-aos="fade-up">

    <div class="section-header">
      <h2>About Us</h2>
      <p>Learn More <span>About Us</span></p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
        <div class="call-us position-absolute">
          <h4>Book a Table</h4>
          <p>+91 96648 31896</p>
        </div>
      </div>
      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
          The earliest account of major services being catered in the United States was an event for William Howe of Philadelphia in 1778. The event served local foods that were a hit with the attendees, who eventually popularized catering as a career. 
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i>with the caterers being disproportionately African-American.William Howe </li>
            <li><i class="bi bi-check2-all"></i>The official industry began to be recognized around the 1820’s, </li>
            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p>

          <div class="position-relative mt-4">
            <img src="https://5.imimg.com/data5/JE/JM/MY-36057240/img-5031-500x500.jpg" class="img-fluid" alt="">
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->



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