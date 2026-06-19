<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>



    
    <!-- BANNER -->

    <section class="banner">
      <div class="slider">

        <div class="slide slide--active" style="background-image: url('assets/netmatters.png')">
          <div class="container">
            <h1>The East Of England's Leading Technology Company</h1>
            <p>Performance-driven digital and technology services with complete transparency.</p>
            <button class="btn__img consultancy-btn-color">WHY CHOOSE US? &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-2.png')">
          <div class="container">
            <h1>Bespoke Software</h1>
            <p>Delivering expert bespoke software solutions across a range of industries.</p>
            <button class="btn__img bespoke-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-3.png')">
          <div class="container">
            <h1>IT Support</h1>
            <p>Fast and cost-effective IT support services for your business.</p>
            <button class="btn__img it-support-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-4.png')">
          <div class="container">
            <h1>Digital Marketing</h1>
            <p>Generating your new business through results-driven marketing activities.</p>
            <button class="btn__img digital-marketing-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-5.png')">
          <div class="container">
            <h1>Telecoms Services</h1>
            <p>A new approach to connectivity, see how we can help your business.</p>
            <button class="btn__img telecoms-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-6.png')">
          <div class="container">
            <h1>Web Design</h1>
            <p>For businesses looking to make a strong and effective first impression.</p>
            <button class="btn__img web-design-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slide" style="background-image: url('assets/banner-img-7.png')">
          <div class="container">
            <h1>Cyber Security</h1>
            <p>Keeping businesses and their customers sensitive information protected.</p>
            <button class="btn__img cyber-security-btn-color">FIND OUT MORE &rarr;</button>
          </div>
        </div>

        <div class="slider__dots">
          <span class="dot dot--active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

      </div>
    </section>

    <!-- SERVICES -->

    <section class="services">
      <div class="container">
        <section class="services__intro">
          <h2 class="services__title">Our Services</h2>
          <a href="#" class="desktop-only services__view">View Our Work &rarr;</a>
        </section>

        <div class="services__grid">
          <div class="card consultancy">
            <div class="card__icon card__icon1">
              <img src="assets/services-1-bg-rem.png" alt="consultancy" />
            </div>
            <h2 class="card__title card__title1">Consultancy & Development</h2>
            <p class="card__desc card__desc1">
              Bespoke software solutions & consultancy
              for all your business needs including
              integrations and reporting.
            </p>
            <button class="card__btn card__btn1">READ MORE</button>
          </div>
          <div class="card it-support">
            <div class="card__icon card__icon2">
              <img src="assets/services-2-bg-rem.png" alt="IT Support" />
            </div>
            <h2 class="card__title card__title2">IT Support</h2>
            <p class="card__desc card__desc2">
              Fully managed IT support And consultancy packages
              Tailored to meet your Exact business needs.
            </p>
            <button class="card__btn card__btn2">READ MORE</button>
          </div>

          <div class="card marketing">
            <div class="card__icon card__icon3">
              <img src="assets/services-3-bg-rem.png" alt="Digital Marketing" />
            </div>
            <h2 class="card__title card__title3">Digital Marketing</h2>
            <p class="card__desc card__desc3">
              Driven brand Awareness And ROI
              Through creative Digital marketing campaigns.
            </p>
            <button class="card__btn card__btn3">READ MORE</button>
          </div>
          <div class="card telecoms">
            <div class="card__icon card__icon4">
              <img src="assets/phone_in_talk.png" alt="telecoms" />
            </div>
            <h2 class="card__title card__title4">Telecoms Services</h2>
            <p class="card__desc card__desc4">
              Business telephony solutions
              Including Mobile & Connectivity solutions.
            </p>
            <button class="card__btn card__btn4">READ MORE</button>
          </div>
          <div class="card web-design">
            <div class="card__icon card__icon5">
              <img src="assets/services-5-bg-rem.png" alt="Web Design" />
            </div>
            <h2 class="card__title card__title5">Web Design</h2>
            <p class="card__desc card__desc5">
              User-centric design for businesses
              looking to make lasting impression.
            </p>
            <button class="card__btn card__btn5">READ MORE</button>
          </div>
          <div class="card cyber">
            <div class="card__icon card__icon6">
              <img src="assets/services-6-bg-rem.png" alt="cyber" />
            </div>
            <h2 class="card__title card__title6">Cyber Security</h2>
            <p class="card__desc card__desc6">
              Prevention, Testing, Consultancy & breach management services.
            </p>
            <button class="card__btn card__btn6">READ MORE</button>
          </div>
          <div class="card developer">
            <div class="card__icon card__icon7">
              <img src="assets/services-7-bg-rem.png" alt="developer" />
            </div>
            <h2 class="card__title card__title7">Developer Training</h2>
            <p class="card__desc card__desc7">
              Web design And software training courses Designed to secure a Job in Tech.
            </p>
            <button class="card__btn card__btn7">READ MORE</button>
          </div>
        </div>
        <a href="#" class="mobile-only view-our-work-mobile">View Our Work →</a>
      </div>
    </section>

    <!-- AD -->

    <section class="ad">
      <div class="container">
        <div class="ad__list">
          <div class="ad__track">
            <div class="ad-item">
              <img src="assets/cyber-essentials-colour.png" alt="Cyber Essentials">
            </div>
            <div class="ad-item">
              <img src="assets/google-partner.png" alt="Google Partner">
            </div>
            <div class="ad-item">
              <img src="assets/iso-27001.png" alt="ISO 27001">
            </div>
            <div class="ad-item">
              <img src="assets/norfolk_prohelp.png" alt="Norfolk ProHelp">
            </div>
            <div class="ad-item">
              <img src="assets/norfolk-carbon-charter.png" alt="Norfolk Carbon Charter">
            </div>
            <div class="ad-item">
              <img src="assets/princess-royal-training.png" alt="Princess Royal Training">
            </div>
            <div class="ad-item">
              <img src="assets/qms.png" alt="QMS">
            </div>
            <div class="ad-item">
              <img src="assets/Changing-Lives.png" alt="Changing Lives">
            </div>
            <div class="ad-item">
              <img src="assets/Skills-of-tomorrow.png" alt="Skills of Tomorrow">
            </div>
            <div class="ad-item">
              <img src="assets/prompt-payment-code.png" alt="Prompt Payment Code">
            </div>
            <div class="ad-item">
              <img src="assets/Investing-in-future-growth.png" alt="Investing in future growth">
            </div>
            <div class="ad-item">
              <img src="assets/GBC_Accredited.png" alt="GBC Accredited">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CLIENT TESTIMONIALS -->

    <section class="welcome-section">
      <div class="container">

        <div class="info-block about-block">
          <h2>Welcome To Netmatters</h2>

          <div class="welcome-content">
            <p class="welcome-text">
              Netmatters is a leading Bespoke Software, IT Support,
              and Digital Marketing company based in the East of England
              with offices in Cambridge, Wymondham, and Great Yarmouth.
            </p>
            <p>
              We aren't tied into contracts with third-party providers,
              so you know that our recommendations for your business
              are based purely with one benefit in mind: to help improve
              your business with the most appropriate solutions.
            </p>
            <p>
              We pride ourselves on being an ethical business
              and have a unique business offering and cost model
              that ensures you get the most from our relationship in an upfront manner.
            </p>
          </div>

          <div class="button-group">
            <a href="#" class="btn btn--dark">WHY CHOOSE US? &rarr;</a>
            <a href="#" class="btn btn--dark">OUR CULTURE &rarr;</a>
          </div>
        </div>

        <div class="info-block testimonial-block">
          <h2>What Our Clients Think</h2>

          <div class="welcome-content">
            <div class="stars">
              &#9733; &#9733; &#9733; &#9733; &#9733;
            </div>

            <p class="quote-text">
              Netmatters stood out from the start. Great guys and
              very easy to work with. Both the build and digital marketing teams
              are clearly skilled -they know their stuff! They delivered a website
              to our (high!) expectations and went over and above
              to ensure we were satisfied clients - and we are!
            </p>

            <p class="author">
              <span class="author-title">Eleanor Bishop, Head of Marketing</span> &ndash;
              <strong>Ashcroft Partnership LLP</strong>
            </p>
          </div>

          <div class="button-group">
            <a href="#" class="btn btn--blue">GOOGLE REVIEWS &rarr;</a>
            <a href="#" class="btn btn--green">TRUSTPILOT REVIEWS &rarr;</a>
          </div>
        </div>

      </div>
    </section>


    <!-- LATEST NEWS -->

    <section class="latest-news">
      <div class="container">

        <div class="news-header">
          <h2>Latest News</h2>
          <a href="#" class="desktop-only view-all-desktop">View All &rarr;</a>
        </div>

                <?php
        require_once 'config/connection.php';
        $stmt = $pdo->query("SELECT * FROM news_posts ORDER BY posted_at DESC LIMIT 3");
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="news-grid">
          <?php foreach ($posts as $post): ?>
            <article class="news-card">
              <div class="card-image">
                <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
                <span class="<?= htmlspecialchars($post['tag_type']) ?>"><?= htmlspecialchars($post['tag']) ?></span>
              </div>
              <div class="card-body">
                <h4><?= htmlspecialchars($post['title']) ?></h4>
                <p><?= htmlspecialchars($post['excerpt']) ?></p>
                <a href="#" class="<?= htmlspecialchars($post['btn_class']) ?>">READ MORE</a>
                <hr>
                <div class="card-footer">
                  <img src="<?= htmlspecialchars($post['author_img']) ?>" alt="<?= htmlspecialchars($post['author_name']) ?>" class="author-img">
                  <div class="author-info">
                    <strong>Posted by <?= htmlspecialchars($post['author_name']) ?></strong>
                    <span><?= date('jS F Y', strtotime($post['posted_at'])) ?></span>
                  </div>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>


        <a href="#" class="mobile-only view-all-mobile">View All →</a>
      </div>
    </section>


    <!-- AD 2 -->

    <section class="ad">
      <div class="container">
        <div class="ad__list">
          <div class="ad__track">
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/ashcroftlogo.png" alt="Ashcroft Partnership LLP">
              <div class="ad-tooltip">
                <h3>Ashcroft Partnership LLP</h3>
                <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are
                  one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                <a href="#" class="ad-tooltip__btn">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>

            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/black_swan_logo.png" alt="Black Swan Logo">
              <div class="ad-tooltip">
                <h3>Black Swan Care Group</h3>
                <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on
                  putting the needs of their residents first.</p>
                <a href="#" class="ad-tooltip__btn ad-tooltip__btn--yellow">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/busseys_logo.png" alt="Busseys Logo">
              <div class="ad-tooltip">
                <h3>Busseys</h3>
                <p>One of the UK's leading Ford dealerships.</p>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/beat_logo.png" alt="Beat Logo">
              <div class="ad-tooltip">
                <h3>BEAT</h3>
                <p>The UK's eating disorder charity founded in 1989.</p>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/xupes.png" alt="Xupes Logo">
              <div class="ad-tooltip">
                <h3>Xupes</h3>
                <!-- <p>Xupes</p> -->
                <!-- <a href="#" class="ad-tooltip__btn ad-tooltip__btn--yellow">VIEW OUR CASE STUDY &rarr;</a> -->
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/girlguiding.png" alt="Girlguiding Logo">
              <div class="ad-tooltip">
                <h3>Girlguiding</h3>
                <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the
                  UK.</p>
                <a href="#" class="ad-tooltip__btn ad-tooltip__btn--blue">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/howes-percival.png" alt="Howes-Percival Logo">
              <div class="ad-tooltip">
                <h3>Howes-Percival</h3>
                <!-- <p>Howes Percival</p> -->
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/one-traveller.png" alt="One Traveller Logo">
              <div class="ad-tooltip">
                <h3>One Traveller</h3>
                <p>One Traveller is a leading provider of travel services in the UK.</p>
                <a href="#" class="ad-tooltip__btn">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/searles.png" alt="Searles Logo">
              <div class="ad-tooltip">
                <h3>Searles</h3>
                <p>Searles is a leading provider of legal services in the UK.</p>
                <a href="#" class="ad-tooltip__btn ad-tooltip__btn--green">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/crane_logo.png" alt="Crane Logo">
              <div class="ad-tooltip">
                <h3>Crane Garden Buildings</h3>
                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the
                  UK.</p>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/girls_day_school_trust_logob.png" alt="Girls Day School Trust Logo">
              <div class="ad-tooltip">
                <h3>GDST</h3>
                <p>The <strong>Girls' Day School Trust (GDST)</strong> is the UK's leading family of 25 independent
                  girls' schools.</p>
                <a href="#" class="ad-tooltip__btn ad-tooltip__btn--green">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
            <div class="ad-item ad-item--has-tooltip">
              <img src="assets/sweetzy_logo.png" alt="Sweetzy Logo">
              <div class="ad-tooltip">
                <h3>Sweetzy</h3>
                <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                <a href="#" class="ad-tooltip__btn ad-tooltip__btn--green">VIEW OUR CASE STUDY &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <?php include 'includes/footer.php'; ?>

    
    
  <script src="js/slider.js"></script>
  <script src="js/ad-carousel.js"></script>
  <script src="js/nav-drawer.js"></script>
  <script src="js/nav-hover.js"></script>
  <script src="js/sticky-header.js"></script>
  <script src="js/cookie.js"></script>


  <!-- pop-up cookie banner -->
  <div id="cookie-overlay" class="cookie-overlay">
    <div class="cookie-modal">
      <h2>Cookies Policy</h2>
      <hr>
      <p>
        Our website uses cookies. This helps us provide you with a good experience on our website.
        To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings".
        For a detailed explanation, click on <a href="/privacy-policy">"Privacy Policy"</a> otherwise click
        "Accept Cookies" to enter.
      </p>
      <hr>
      <div class="cookie-modal__buttons">
        <button id="cookie-settings" class="cookie-btn cookie-btn--grey">CHANGE SETTINGS</button>
        <button id="cookie-accept" class="cookie-btn cookie-btn--purple">ACCEPT COOKIES</button>
      </div>
    </div>
  </div>
</body>

</html>