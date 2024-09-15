      <!-- index.php -->
      <?php include 'includes/header.php'; ?>

      <main class=''>
        <section class="hero wrapper">
          <div class="hero-content">
            <h3>DIGITAL MARKETING STRATEGY</h3>
            <h1>We bring you new customers</h1>
            <p>We build effective strategies to help you reach customers and prospects across the entire web.</p>

            <button>
              <a href="#">Get a Quote</a>
            </button>
            <div class="google-reviews">
              <img src="/assets/icons/marketing-badges.png" alt="marketing-badges">
            </div>
          </div>
          <div class="banner">
            <img id="heroBanner" src="/assets/images/hero-image.png" alt="hero-image">
          </div>
        </section>
        <section class="page-2 wrapper">
          <div class="cards">
            <div class="card">
              <div class="image">
                <img src="assets/icons/icon-data.png" alt="Online Reputation Management">
              </div>
              <div class="card-content">
                <h4>Online Reputation Management</h4>
                <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press release distribution.</p>
                <button class="learn-more">Learn More</button>
              </div>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <div class="image">
                <img src="assets/icons/icon-calculator.png" alt="Conversion Rate Optimization">
              </div>
              <div class="card-content">
                <h4>Conversion Rate Optimization</h4>
                <p>Turn your visitors into customers with our team of experts. We'll analyze your website and create a conversion-rate strategy.</p>
                <button class="learn-more">Learn More</button>
              </div>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <div class="image">
                <img src="assets/icons/icon-graph.png" alt="Analytics and Reporting">
              </div>
              <div class="card-content">
                <h4>Analytics and Reporting</h4>
                <p>Detailed analysis and reporting to track your marketing efforts and adjust strategies accordingly.</p>
                <button class="learn-more">Learn More</button>
              </div>
            </div>
          </div>
        </section>
        <section class="page-3 wrapper">
          <div class="lounch-img">
            <img src="/assets/images/launchproduct.png" alt="">
          </div>
          <div class="content">
            <h3>
              GROW TRAFFIC & INCREASE REVENUE</h3>
            <h2>Appear On the Front Page of Google!</h2>
            <p>We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings — even when it comes to highly competitive keywords.</p>
            <button><a href="#">
                Learn more about us
              </a></button>
          </div>
        </section>

        <section class="page-4">
          <svg id="top-curve" style="fill: #fff;height:100px;" preserveAspectRatio="none" viewBox="0 0 1442 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path class="divider-color" d="M1442,30.5019121 L1442,100.654403 L0,100.654403 C572.295431,33.9877365 935.145886,0.654403168 1088.55136,0.654403168 C1162.74657,0.654403168 1280.56278,10.6035728 1442,30.5019121 Z" id="top-curve" transform="translate(721.000000, 50.654403) scale(-1, -1) translate(-721.000000, -50.654403)"></path>
          </svg>

          <div class="heading wrapper">
            <p>SEARCH ENGINE & SOCIAL MEDIA OPTIMIZATION
            </p>
            <h3>Full Service Digital Marketing Agency</h3>
          </div>
          <div class="cards wrapper">
            <a href="#" class="card">
              <div class="image">
                <img src="/assets/images/social.png" alt="">
              </div>
              <div class="content">
                <h4>Social Media Marketing</h4>
              </div>
            </a>
            <a href="#" class="card">
              <div class="image">
                <img src="/assets/images/Organic.png" alt="">
              </div>
              <div class="content">
                <h4>Organic Long-Term SEO</h4>
              </div>
            </a>
            <a href="#" class="card">
              <div class="image">
                <img src="/assets/images/advanced-nalytics.png" alt="">

              </div>
              <div class="content">
                <h4>Advanced Analytics</h4>
              </div>
            </a>
            <a href="#" class="card">
              <div class="image">
                <img src="/assets/images/social-media.png" alt="">

              </div>
              <div class="content">
                <h4>Social Media Marketing</h4>
              </div>
            </a>
          </div>

          <svg id="bottom-curve" style="fill: #fff; " preserveAspectRatio="none" viewBox="0 0 1442 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path class="divider-color" d="M1442,33.4980879 L1442,0.345597 L0,0.345597 C572.295431,66.0122635 935.145886,99.3455968 1088.55136,99.3455968 C1162.74657,99.3455968 1280.56278,89.3964272 1442,69.4980879 Z" id="hill-side-soft-off-bottom" transform="translate(721, 49.654403) scale(1, -1) translate(-721, -49.654403)"></path>
          </svg>
        </section>
        <?php
          $sectionSubheading = "GROW TRAFFIC & INCREASE REVENUE";
          $sectionHeading = "Appear On the Front Page of Google!";
          $sectionContent = "We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings — even when it comes to highly competitive keywords.";
          include 'includes/sections/section_content_block.php';
        ?>
        <?php
        $sectionImage1="/assets/images/target.png";
        $sectionHeading1="Local Search Strategy";
        $sectionLink1="/#";
        $sectionContent1="Maximize your presence on search engine results pages on a local scale.";
        $sectionImage2="/assets/images/globe.png";
        $sectionHeading2="MAp Search Optimization";
        $sectionContent2="Google Maps Optimization is an important part for your local marketing strategy.";
        $sectionImage3="/assets/images/settings.png";
        $sectionHeading3="Link Building & Content";
        $sectionContent3="Link building is a tremendously important component of Search Engine Optimization.";
        include 'includes/sections/service_offerings_section.php';
        ?>
        <?php
        $sectionImage1="/assets/images/coin.png";
        $sectionHeading1="Paid Search Advertising";
        $sectionLink1="/#";
        $sectionContent1="Paid listings on Google AdWords can help you reach new customers.";
        $sectionImage2="/assets/images/notebook.png";
        $sectionHeading2="Custom Website Design";
        $sectionContent2="Our team specializes in affordable web design and e-commerce.";
        $sectionImage3="/assets/images/mail.png";
        $sectionHeading3="Email Campaign Design";
        $sectionContent3="Custom email templates that speak to your customers and resonate with your brand.";
        include 'includes/sections/service_offerings_section.php';
        ?>

      </main>
      <?php include 'includes/footer.php'; ?>