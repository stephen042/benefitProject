<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="google" content="notranslate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>HOME - RISKBENEFITXPRO</title>
  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
  <!--icofont icon css-->
  <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}" />
  <!--magnific popup css-->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
  <!--google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet" />
  <!--main css-->
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
  <style>
    .goog-te-banner-frame.skiptranslate,
    .goog-te-gadget-icon {
      display: none !important;
    }

    body {
      top: 0 !important;
    }
  </style>
</head>

<body>
  <!--Start Preloader-->
  <div class="preloader" id="preloader"></div>
  <!--End Preloader-->

  <!-- header top begin -->
  <header class="header-section" id="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex justify-content-start reunir-content-center">
            <div class="header-left">
              <ul>
                <li class="header-left-list">
                  <p class="header-left-text">
                    <span class="header-left-icon">
                      <i class="icofont-headphone-alt"></i> </span>Support
                  </p>
                </li>
                <li class="header-left-list">
                  <p class="header-left-text">
                    <span class="header-left-icon">
                      <i class="icofont-email"></i> </span><a href="mailto:support@riskbenefitxpro.online"
                      class="__cf_email__">support@riskbenefitxpro.online</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex justify-content-end reunir-content-center">
            <div class="header-right">
              <ul>
                <li class="header-right-list">
                  <div id="google_translate_element" style="margin-left:auto;float:right"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- nav top begin -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light reunir-navbar">
      <div class="container">
        <div class="logo-section">
          <a class="logo-title navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}"
              alt="logo" />RISKBENEFITXPRO</a>
        </div>

        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icofont-navigation-menu"></i>
        </button>
        <div class="collapse navbar-collapse nav-main justify-content-end" id="navbarNav">
          <ul class="navbar-nav" id="primary-menu">
            <li class="nav-item active">
              <a class="nav-link active" href="#header-section">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-section">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#affiliate-section">AFFILIATES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#investment-section">PLANS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-us-section">CONTACT</a>
            </li>
          </ul>
        </div> --}}
        <div class="right-side-box">
          <a class="join-btn" href="/login">JOIN US</a>
        </div>
      </div>
    </nav>
    <!-- nav top end -->
  </header>
  <!-- header top end -->

  <!-- banner top begin -->
  <section class="banner-section">
    <div class="overlay" style="background-image: url(assets/img/header-bg.jpg)">
      <div class="container">
        <div class="total-slide">
          <div class="row text-center">
            <div class="col-lg-12">
              <div class="banner-text">
                <h1 class="font-light">Take Your</h1>
                <h1 class="font-bold">Invest Startegy</h1>
                <h1 class="font-regular">to the next level</h1>
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="banner-bottom-text">
                A Profitable platform for high-margin SPORT investment
              </h3>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="get-start">
                <a href="/register">GET STARTED NOW!</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="statics-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
              <div class="single-statics no-border">
                <div class="icon-box">
                  <i class="ren-reguser"></i>
                </div>
                <div class="text-box">
                  <span class="d-none counter">6000</span>
                  <span class="counter">6000</span>
                  <h4>Registered users</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
              <div class="single-statics">
                <div class="icon-box">
                  <i class="ren-web"></i>
                </div>
                <div class="text-box">
                  <span class="counter">178</span>
                  <h4>Countries supported</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
              <div class="single-statics">
                <div class="icon-box">
                  <i class="ren-withdraw"></i>
                </div>
                <div class="text-box">
                  <span class="counter">10800000</span>
                  <h4>Withdrawn each month</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
              <div class="single-statics">
                <div class="icon-box">
                  <i class="ren-people"></i>
                </div>
                <div class="text-box">
                  <span class="counter">1800000</span>
                  <h4>Active investors daily</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- banner top end -->

  <!-- calculator top begin -->
  {{-- <section class="calculate-aria">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="calculate-left">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="icon-box">
                  <i class="ren-calculator"></i>
                </div>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="form-group">
                  <h2 class="amount">Enter Investment Amount</h2>
                  <div class="input-dropdown">
                    <input type="text" name="text" placeholder="$200" class="main-form calculator-invest" />
                    <div class="form-dropdown">
                      <select class="form-btn-dropdown calculator-profit">
                        <option value="1">1% Daily For Ever</option>
                        <option value="2">2% Daily For Ever</option>
                        <option value="3">3% Daily For Ever</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-10 text-center">
          <div class="calculate-right">
            <div class="row justify-content-end">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-daily">212</span>
                  <h4>Daily Profit</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-weekly">1484</span>
                  <h4>Weekly Profit</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-monthly">6360</span>
                  <h4>Monthly Profit</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- calculator top end -->

  <!-- about section begin -->
  {{-- <section class="about-section navigation" id="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="about-left">
            <div class="about-text">
              <h5 class="about-title">WELCOME TO Riskbenefitxpro</h5>
              <h2 class="about-subtitle">A few words About Us</h2>
              <h5 class="about-details">
                To meet <span>today's challenges</span>, we've created a
                unique fund management system
              </h5>
              <p class="about-description">
                Riskbenefitxpro - Our system is risk-free thanks to the development and
                improvement of semi-automatic system of rates. We upgraded our
                automatic system so that the last step before the rate is now
                done by our operators.
              </p>
            </div>

            <div class="about-box">
              <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-eff">
                      <div class="icon-box">
                        <i class="ren-efficiency"></i>
                      </div>
                    </div>
                    <h3>Efficiency</h3>
                    <div class="hover-box hover-left">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-ex">
                      <div class="icon-box">
                        <img src="assets/img/expierence.svg" alt="#" />
                      </div>
                    </div>
                    <h3>Expierence</h3>
                    <div class="hover-box hover-top">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-security">
                      <div class="icon-box">
                        <i class="ren-security"></i>
                      </div>
                    </div>
                    <h3>Security</h3>
                    <div class="hover-box hover-right">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-trans">
                      <div class="icon-box">
                        <i class="ren-transparent"></i>
                      </div>
                    </div>
                    <h3>Transparent</h3>
                    <div class="hover-box hover-left">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-simple">
                      <div class="icon-box">
                        <i class="ren-simple"></i>
                      </div>
                    </div>
                    <h3>Simple</h3>
                    <div class="hover-box hover-bottom">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single-about-box">
                    <div class="icon-box-outer bg-com">
                      <div class="icon-box">
                        <i class="ren-compliant"></i>
                      </div>
                    </div>
                    <h3>Compliant</h3>
                    <div class="hover-box hover-right">
                      <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- about section end -->

  <!-- choose section begin -->
  <section class="choose-section">
    <div class="overlay">
      <div class="container-fruit text-center">
        <div class="row mr-0 ml-0 d-flex justify-content-center">
          <div class="col-xl-8 col-lg-12">
            <div class="choose-text">
              <h5 class="choose-title">Boost Your Mouney</h5>
              <h2 class="choose-subtitle">Why Should Choose Us?</h2>
              <p class="choose-title-describe">
                Our service gives you better result and savings, as per your
                requirement and you can manage your assets from anywhere
                either form home or work place, at any time.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose section end -->

  <!-- invest section begin -->
  {{-- <section class="invest-section">
    <div class="overlay">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="invest-text">
              <h5 class="invest-title">How You Can Invest Your</h5>
              <h2 class="invest-subtitle">Money More Smartly</h2>
              <p class="invest-title-describe">
                It’s a simple way to start invest.You don’t need a deep wallet
                to start behoof. Pick an amount you can afford, and build your
                behoof over time.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 text-center reunir-content-center">
            <div class="single-box location-left">
              <div class="img-box">
                <div class="font-side">
                  <img src="assets/img/sign-up.svg" alt="#" />
                </div>
                <div class="back-side">
                  <img src="assets/img/sign-up.svg" alt="#" />
                </div>
              </div>
              <div class="text-box">
                <a href="/register">FIRST STEP<i class="ren-arrowright"></i></a>
                <h3>SING UP</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center reunir-content-center">
            <div class="single-box">
              <div class="img-box">
                <div class="font-side">
                  <img src="assets/img/deposit.svg" alt="#" />
                </div>
                <div class="back-side">
                  <img src="assets/img/deposit.svg" alt="#" />
                </div>
              </div>
              <div class="text-box">
                <a href="/user/receive">SECOND STEP<i class="ren-arrowright"></i></a>
                <h3>Make a Deposit</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center reunir-content-center">
            <div class="single-box location-right">
              <div class="img-box">
                <div class="font-side">
                  <img src="assets/img/withdraw-1.svg" alt="#" />
                </div>
                <div class="back-side">
                  <img src="assets/img/withdraw-1.svg" alt="#" />
                </div>
              </div>
              <div class="text-box">
                <a href="/user/send">THIRD STEP<i class="ren-arrowright"></i></a>
                <h3>Withdraw</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- invest section end -->

  <!-- advantage section begin -->
  {{-- <section class="advantage-section">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="advantage-text">
              <h5 class="advantage-title">Our Biggest</h5>
              <h2 class="advantage-subtitle">Advantage</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-box">
              <div class="icon-box">
                <i class="ren-team"></i>
              </div>
              <div class="text-box">
                <h2>PROFESSIONAL TEAM</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-box">
              <div class="icon-box">
                <i class="ren-profitable-plan"></i>
              </div>
              <div class="text-box">
                <h2>PROFITABLE PLANS</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-box">
              <div class="icon-box">
                <i class="ren-control-panel"></i>
              </div>
              <div class="text-box">
                <h2>Secure Control Panel</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- advantage section end -->

  <!-- calculator bottom begin -->
  {{-- <section class="calculate-aria-second">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="calculate-left">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="icon-box">
                  <i class="ren-calculator"></i>
                </div>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="form-group">
                  <h2 class="amount">Enter Investment Amount</h2>
                  <div class="input-dropdown">
                    <input type="text" name="text" placeholder="$200" class="main-form calculator-area-invest" />
                    <div class="form-dropdown">
                      <select class="form-btn-dropdown calculator-area-profit">
                        <option value="1">1% Daily For Ever</option>
                        <option value="2">2% Daily For Ever</option>
                        <option value="3">3% Daily For Ever</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-10 text-center">
          <div class="calculate-right">
            <div class="row justify-content-end">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-area-daily">212</span>
                  <h4>Daily Profit</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-area-weekly">1484</span>
                  <h4>Weekly Profit</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="text-box">
                  <span class="counter calculator-result-area-monthly">6360</span>
                  <h4>Monthly Profit</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- calculator bottom end -->

  <!-- affiliate section begin -->
  {{-- <section class="affiliate-section" id="affiliate-section">
    <div class="overlay">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="affiliate-text">
              <h5 class="affiliate-title">What You’ll Get As</h5>
              <h2 class="affiliate-subtitle">An Affiliate Partner</h2>
              <p class="affiliate-title-describe">
                We give you the opportunity to earn money by recommending our
                website to others. You can start earning money even if you do
                not invest. Promote our website wherever you are. Create posts
                on online forums and social networks. Remember to use the
                referral link. Build your structure and receive a commission
                from three levels whenever someone makes a deposit. Earnings
                from the affiliate program are immediately available in the
                account balance. You can invest or withdraw funds at any time.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="part-cart">
              <a href="#">I want to Join</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- affiliate section end -->

  <!-- referral section begin -->
  {{-- <section class="referral-section">
    <div class="container">
      <div class="row referral-section-item">
        <div class="col-lg-2 col-md-2 col-sm-2">
          <div class="referral-img">
            <img src="assets/img/referral-img.png" alt="#" />
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10">
          <div class="referral-section-right">
            <div class="referral-text">
              <h5 class="referral-title">Referral commission and</h5>
              <h2 class="referral-subtitle">Membership Level</h2>
              <p class="referral-title-describe">
                Refferal Commmission and Membership Levels are of 3 levels as
                below
              </p>
            </div>
            <div class="row">
              <div class="col-lg-11 col-sm-12">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="referral-single-item">
                      <div class="icon-box">
                        <i class="ren-people1"></i>
                      </div>
                      <div class="text-box">
                        <span class="percentage">8%</span>
                        <h4 class="item-text">Direct Referral</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="referral-single-item">
                      <div class="icon-box">
                        <i class="ren-people2 bg-second"></i>
                      </div>
                      <div class="text-box">
                        <span class="percentage">4%</span>
                        <h4 class="item-text">Second Line</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="referral-single-item">
                      <div class="icon-box">
                        <i class="ren-people3 bg-third"></i>
                      </div>
                      <div class="text-box">
                        <span class="percentage">2%</span>
                        <h4 class="item-text">Third Line</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- referral section end -->

  <!-- deposit section begin -->
  {{-- <section class="deposit-section">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="deposit-text">
            <h5 class="deposit-title">Convenient Money</h5>
            <h2 class="deposit-subtitle">Deposit & Withdrawal</h2>
            <p class="deposit-title-describe">
              Depositing or withdrawing money is simple.We support several
              payment methods, which depend on what country your payment
              account is located in.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-5 col-sm-12 reunir-content-center">
          <div class="row d-flex justify-content-start">
            <div class="col-lg-8">
              <div class="payment-methods-outer">
                <div class="payment-methods">
                  <div class="icon-gallery">
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/card-icon.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Credit Card</h5>
                    </div>
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/paypal.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Paypal</h5>
                    </div>
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/bitcoin.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Bitcoin</h5>
                    </div>
                  </div>
                  <div class="icon-gallery">
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/litecoin.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Litecoin</h5>
                    </div>
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/ethereum.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Ethereum</h5>
                    </div>
                    <div class="icon-box">
                      <div class="icon-img">
                        <img src="assets/img/ripple.png" alt="#" />
                      </div>
                      <h5 class="icon-title">Ripple</h5>
                    </div>
                  </div>
                  <div class="link-box">
                    <a href="#">View All Option</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 mt-4">
          <div class="deposit-section-right">
            <div class="icon-box-outer">
              <div class="icon-box">
                <i class="ren-withdraw2"></i>
              </div>
            </div>
            <div class="icon-text">
              <h2 class="icon-title">No Limit</h2>
              <p class="icon-title-describe">
                Unlimited maximum withdrawal amount
              </p>
            </div>
          </div>
          <div class="deposit-section-right">
            <div class="icon-box-outer">
              <div class="icon-box icon-box-orange">
                <i class="ren-deposit5"></i>
              </div>
            </div>
            <div class="icon-text">
              <h2 class="icon-title">Withdrawal in 24 /7</h2>
              <p class="icon-title-describe">Deposit – instantaneous</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- deposit section end -->

  <!-- transaction section begin -->
  {{-- <section class="transaction-section">
    <div class="right-img">
      <img class="right-ellipse1" src="assets/img/transaction-bg-ellipse-01.png" alt="#" />
      <img class="right-shape1" src="assets/img/transaction-bg-shape-01.png" alt="#" />
      <img class="right-shape2" src="assets/img/transaction-bg-shape-01.png" alt="#" />
      <img class="right-ellipse2" src="assets/img/transaction-bg-ellipse-02.png" alt="#" />
    </div>
    <div class="left-img">
      <img class="left-ellipse1" src="assets/img/transaction-bg-ellipse-03.png" alt="#" />
      <img class="left-ellipse2" src="assets/img/transaction-bg-ellipse-03.png" alt="#" />
      <img class="left-ellipse3" src="assets/img/transaction-bg-ellipse-03.png" alt="#" />
      <img class="left-shape1" src="assets/img/transaction-bg-shape-01.png" alt="#" />
      <img class="left-shape2" src="assets/img/transaction-bg-shape-01.png" alt="#" />
      <img class="left-shape3" src="assets/img/transaction-bg-shape-01.png" alt="#" />
      <img class="left-shape4" src="assets/img/transaction-bg-shape-01.png" alt="#" />
    </div>
  </section> --}}
  <!-- transaction section end -->

  <!-- download section begin -->
  {{-- <section class="download-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <div class="download-text">
            <h5 class="download-title">Learn, Plan, Invest in our app</h5>
            <h2 class="download-subtitle">Our Smart App</h2>
            <p class="download-title-describe">
              Our application is a set of tools designed to facilitate making
              money.
            </p>
          </div>
          <div class="app-features">
            <div class="single-features">
              <div class="icon-box-outer">
                <div class="icon-box">
                  <i class="ren-calculator1"></i>
                </div>
              </div>
              <h3 class="single-features-text">
                Calculators to plan your investments
              </h3>
            </div>
            <div class="single-features">
              <div class="icon-box-outer">
                <div class="icon-box">
                  <i class="ren-paperless"></i>
                </div>
              </div>
              <h3 class="single-features-text">
                100% paperless process to invest in the best funds
              </h3>
            </div>
            <div class="single-features">
              <div class="icon-box-outer">
                <div class="icon-box">
                  <i class="ren-dashboard"></i>
                </div>
              </div>
              <h3 class="single-features-text">
                Dashboard to track your progress
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5">
          <div class="right-area">
            <img class="ellipse-01" src="assets/img/download-bg-ellipse-01.png" alt="#" />
            <img class="ellipse-02" src="assets/img/download-bg-ellipse-02.png" alt="#" />
            <img class="ellipse-03" src="assets/img/download-bg-ellipse-03.png" alt="#" />
            <img class="ellipse-04" src="assets/img/download-bg-ellipse-04.png" alt="#" />
            <img class="smart-phone" src="assets/img/download-smart-phone.png" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- download section end -->

  <!-- testimonial section begin -->
  {{-- <section class="testimonial-section">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="testimonial-text text-center">
            <h5 class="testimonial-title">Happy Clients</h5>
            <h2 class="testimonial-subtitle">Testimonial of Clients</h2>
            <p class="testimonial-title-describe">
              We have many happy investors invest with us .Some impresions
              from our Customers! PLease read some of the lovely things our
              Customers say about us.
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
          <div class="testimonial-carousel">
            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-caption">
                <p class="client-describe">
                  “Great service! I have been worried about investing. But
                  when I came here. I don't have to worry anymore’’
                </p>
                <h2 class="client-name">Joy Kelley</h2>
                <h4 class="client-date">United kingdom, 28th April,2019</h4>
              </div>
              <div class="carousel-img">
                <div class="img-outline">
                  <img src="assets/img/table-img2.png" alt="#" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- testimonial section end -->

  <!-- questions section begin -->
  {{-- <div class="questions-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <div class="questions-text">
            <h5 class="questions-title">Got Any Questions</h5>
            <h2 class="questions-subtitle">We've Got Answers</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <ul class="nav nav-pills mb-3 justify-content-center questions-nav-pills" id="questions-pills-tab"
            role="tablist">
            <li class="nav-item questions-nav-item">
              <a class="nav-link questions-nav-link active" id="questions-pills-basic-tab" data-toggle="pill"
                href="#pills-basic" role="tab" aria-controls="questions-pills-basic-tab" aria-selected="true">Basic
                Question</a>
            </li>
            <li class="nav-item questions-nav-item">
              <a class="nav-link questions-nav-link" id="questions-pills-investing-tab" data-toggle="pill"
                href="#pills-investing" role="tab" aria-controls="questions-pills-investing-tab"
                aria-selected="false">Investing Question</a>
            </li>
            <li class="nav-item questions-nav-item">
              <a class="nav-link questions-nav-link" id="questions-pills-withdrawal-tab" data-toggle="pill"
                href="#pills-withdrawal" role="tab" aria-controls="questions-pills-withdrawal-tab"
                aria-selected="false">Withdrawal Question</a>
            </li>
            <li class="nav-item questions-nav-item">
              <a class="nav-link questions-nav-link" id="questions-pills-referral-tab" data-toggle="pill"
                href="#pills-referral" role="tab" aria-controls="questions-pills-referral-tab"
                aria-selected="false">Referral Program</a>
            </li>
          </ul>
          <div class="tab-content questions-tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active questions-tab-pane" id="pills-basic" role="tabpanel"
              aria-labelledby="questions-pills-basic-tab">
              <div class="questions-accordion" id="withdrawal-accordion">
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="withdrawal-headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link questions-btn-link" data-toggle="collapse"
                        data-target="#withdrawal-collapseOne" aria-expanded="true"
                        aria-controls="questions-pills-basic-tab">
                        What Are The Main Advantages Of Riskbenefitxpro?
                      </button>
                    </h5>
                  </div>
                  <div id="withdrawal-collapseOne" class="collapse show questions-show"
                    aria-labelledby="withdrawal-headingOne" data-parent="#withdrawal-accordion">
                    <div class="card-body questions-card-body">
                      Riskbenefitxpro offers a seamless investment experience with daily returns, instant withdrawals,
                      and a user-friendly platform. Our advanced security ensures your funds and personal data are
                      always protected, while our expert team is dedicated to helping you grow your wealth with
                      confidence.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="withdrawal-headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#withdrawal-collapseTwo" aria-expanded="false"
                        aria-controls="questions-pills-investing-tab">
                        Is It Free Of Charge To Open An Account?
                      </button>
                    </h5>
                  </div>
                  <div id="withdrawal-collapseTwo" class="collapse questions-show"
                    aria-labelledby="withdrawal-headingTwo" data-parent="#withdrawal-accordion">
                    <div class="card-body questions-card-body">
                      Yes, opening an account with Riskbenefitxpro is completely free. There are no hidden fees or
                      charges to get started. Simply sign up and begin your investment journey with us today.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="withdrawal-headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#withdrawal-collapseThree" aria-expanded="false"
                        aria-controls="questions-pills-withdrawal-tab">
                        How Secure Are User Accounts And Personal Data?
                      </button>
                    </h5>
                  </div>
                  <div id="withdrawal-collapseThree" class="collapse questions-show"
                    aria-labelledby="withdrawal-headingThree" data-parent="#withdrawal-accordion">
                    <div class="card-body questions-card-body">
                      We use industry-leading encryption and security protocols to safeguard your account and personal
                      information. Your privacy and security are our top priorities, and we continuously monitor our
                      systems to ensure your data is always protected.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="withdrawal-headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#withdrawal-collapseFour" aria-expanded="false"
                        aria-controls="questions-pills-referral-tab">
                        How Many Accounts Can I Open On The Site?
                      </button>
                    </h5>
                  </div>
                  <div id="withdrawal-collapseFour" class="collapse questions-show"
                    aria-labelledby="withdrawal-headingFour" data-parent="#withdrawal-accordion">
                    <div class="card-body questions-card-body">
                      Each user is allowed to open only one account to ensure fairness and security for all our members.
                      Multiple accounts are not permitted and may result in suspension.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade questions-tab-pane" id="pills-investing" role="tabpanel"
              aria-labelledby="questions-pills-investing-tab">
              <div class="questions-accordion" id="investing-accordion">
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="investing-headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link questions-btn-link" data-toggle="collapse"
                        data-target="#investing-collapseOne" aria-expanded="true"
                        aria-controls="questions-pills-basic-tab">
                        How Do I Start Investing With Riskbenefitxpro?
                      </button>
                    </h5>
                  </div>
                  <div id="investing-collapseOne" class="collapse show questions-show"
                    aria-labelledby="investing-headingOne" data-parent="#investing-accordion">
                    <div class="card-body questions-card-body">
                      Getting started is easy! Simply sign up for a free account, choose your preferred investment plan,
                      make a deposit, and watch your earnings grow daily. Our platform is designed for both beginners
                      and experienced investors.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="investing-headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#investing-collapseTwo" aria-expanded="false"
                        aria-controls="questions-pills-investing-tab">
                        What Is The Minimum Investment Amount?
                      </button>
                    </h5>
                  </div>
                  <div id="investing-collapseTwo" class="collapse questions-show" aria-labelledby="investing-headingTwo"
                    data-parent="#investing-accordion">
                    <div class="card-body questions-card-body">
                      The minimum investment amount depends on the plan you select. We offer flexible options to suit
                      every budget, so you can start investing with as little as $50.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="investing-headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#investing-collapseThree" aria-expanded="false"
                        aria-controls="questions-pills-withdrawal-tab">
                        Can I Withdraw My Profits Anytime?
                      </button>
                    </h5>
                  </div>
                  <div id="investing-collapseThree" class="collapse questions-show"
                    aria-labelledby="investing-headingThree" data-parent="#investing-accordion">
                    <div class="card-body questions-card-body">
                      Yes, you can request withdrawals at any time. Our system processes withdrawals 24/7, ensuring you
                      have access to your funds whenever you need them.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="investing-headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#investing-collapseFour" aria-expanded="false"
                        aria-controls="questions-pills-referral-tab">
                        Are There Any Risks Involved?
                      </button>
                    </h5>
                  </div>
                  <div id="investing-collapseFour" class="collapse questions-show"
                    aria-labelledby="investing-headingFour" data-parent="#investing-accordion">
                    <div class="card-body questions-card-body">
                      As with any investment, there are risks. However, our experienced team and advanced risk
                      management strategies are designed to minimize potential losses and maximize your returns.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade questions-tab-pane" id="pills-withdrawal" role="tabpanel"
              aria-labelledby="questions-pills-withdrawal-tab">
              <div class="questions-accordion" id="basic-accordion">
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="basic-headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link questions-btn-link" data-toggle="collapse"
                        data-target="#basic-collapseOne" aria-expanded="true" aria-controls="questions-pills-basic-tab">
                        How Fast Are Withdrawals Processed?
                      </button>
                    </h5>
                  </div>
                  <div id="basic-collapseOne" class="collapse show questions-show" aria-labelledby="basic-headingOne"
                    data-parent="#basic-accordion">
                    <div class="card-body questions-card-body">
                      Withdrawals are processed instantly and are available 24/7. Depending on your chosen payment
                      method, funds may appear in your account within minutes.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="basic-headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#basic-collapseTwo" aria-expanded="false"
                        aria-controls="questions-pills-investing-tab">
                        Are There Any Withdrawal Fees?
                      </button>
                    </h5>
                  </div>
                  <div id="basic-collapseTwo" class="collapse questions-show" aria-labelledby="basic-headingTwo"
                    data-parent="#basic-accordion">
                    <div class="card-body questions-card-body">
                      We do not charge any fees for withdrawals. However, your payment provider may apply their own
                      charges, so please check with them for details.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="basic-headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#basic-collapseThree" aria-expanded="false"
                        aria-controls="questions-pills-withdrawal-tab">
                        What Payment Methods Are Supported?
                      </button>
                    </h5>
                  </div>
                  <div id="basic-collapseThree" class="collapse questions-show" aria-labelledby="basic-headingThree"
                    data-parent="#basic-accordion">
                    <div class="card-body questions-card-body">
                      We support a wide range of payment methods including credit cards, PayPal, Bitcoin, Ethereum, and
                      more. Choose the option that works best for you.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="basic-headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#basic-collapseFour" aria-expanded="false"
                        aria-controls="questions-pills-referral-tab">
                        What Should I Do If My Withdrawal Is Delayed?
                      </button>
                    </h5>
                  </div>
                  <div id="basic-collapseFour" class="collapse questions-show" aria-labelledby="basic-headingFour"
                    data-parent="#basic-accordion">
                    <div class="card-body questions-card-body">
                      If you experience any delay, please contact our 24/7 support team. We are always ready to assist
                      and resolve any issues quickly.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade questions-tab-pane" id="pills-referral" role="tabpanel"
              aria-labelledby="questions-pills-referral-tab">
              <div class="questions-accordion" id="referral-accordion">
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="referral-headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link questions-btn-link" data-toggle="collapse"
                        data-target="#referral-collapseOne" aria-expanded="true"
                        aria-controls="questions-pills-basic-tab">
                        How Does The Referral Program Work?
                      </button>
                    </h5>
                  </div>
                  <div id="referral-collapseOne" class="collapse show questions-show"
                    aria-labelledby="referral-headingOne" data-parent="#referral-accordion">
                    <div class="card-body questions-card-body">
                      Our referral program rewards you for inviting friends and family. Share your unique referral link,
                      and earn commissions every time someone you refer makes a deposit—up to three levels deep!
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="referral-headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#referral-collapseTwo" aria-expanded="false"
                        aria-controls="questions-pills-investing-tab">
                        When Will I Receive My Referral Commissions?
                      </button>
                    </h5>
                  </div>
                  <div id="referral-collapseTwo" class="collapse questions-show" aria-labelledby="referral-headingTwo"
                    data-parent="#referral-accordion">
                    <div class="card-body questions-card-body">
                      Referral commissions are credited instantly to your account balance as soon as your referral makes
                      a qualifying deposit. You can withdraw or reinvest your earnings at any time.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="referral-headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#referral-collapseThree" aria-expanded="false"
                        aria-controls="questions-pills-withdrawal-tab">
                        Is There A Limit To How Many People I Can Refer?
                      </button>
                    </h5>
                  </div>
                  <div id="referral-collapseThree" class="collapse questions-show"
                    aria-labelledby="referral-headingThree" data-parent="#referral-accordion">
                    <div class="card-body questions-card-body">
                      There is no limit! You can refer as many people as you like and earn commissions from all
                      qualifying deposits made by your referrals.
                    </div>
                  </div>
                </div>
                <div class="card questions-card">
                  <div class="card-header questions-card-header" id="referral-headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed questions-btn-link" data-toggle="collapse"
                        data-target="#referral-collapseFour" aria-expanded="false"
                        aria-controls="questions-pills-referral-tab">
                        How Can I Track My Referral Earnings?
                      </button>
                    </h5>
                  </div>
                  <div id="referral-collapseFour" class="collapse questions-show" aria-labelledby="referral-headingFour"
                    data-parent="#referral-accordion">
                    <div class="card-body questions-card-body">
                      You can easily monitor your referral activity and earnings from your account dashboard. All
                      commissions and referral levels are clearly displayed for your convenience.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- questions section end -->

  <!-- signup section begin -->
  {{-- <section class="signup-section">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8">
            <div class="signup-text">
              <h5 class="signup-title">CREATE YOUR PERSONAL ACCOUNT</h5>
              <h2 class="signup-subtitle">Get Started Now</h2>
              <p class="signup-title-describe">
                Get Started Now,Create your personal account as a first step
                to become a sucessfull investor.Are you ready to start earning
                with us?
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 d-flex justify-content-end align-items-center reunir-content-center">
            <div class="signup-right-text">
              <a href="/register">Signup Now<i class="ren-arrowright"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- signup section end -->

  <!-- contact-us section begin -->
  <section class="contact-us-section" id="contact-us-section">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="contact-us-text">
            <h5 class="contact-us-title">Contact Us</h5>
            <h2 class="contact-us-subtitle">Get in Touch</h2>
            <p class="contact-us-title-describe">
              Please feel free to contact us through our support center.
              Simply choose the appropriate support options to send us your
              questions, concerns and/or feedback.Our customer service team is
              ready to overcome any issues that might occur.
            </p>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-6">
          <div class="contact-img">
            <img src="assets/img/contact-us.jpg" alt="#" />
          </div>
        </div>
        <div class="col-lg-5">
          <div class="contact-form">
            <form id="contactForm" method="post" class="contact-form-aqua">
              <h2 class="contact-head">Send Us a Massage</h2>
              <input type="text" name="name" required="" placeholder="Name *" class="contact-frm active" />
              <input type="email" name="email" required="" placeholder="Email *" class="contact-frm" />
              <textarea name="message" id="message" placeholder="Message *" class="contact-msg"></textarea>
              <input id="form-submit" type="submit" value="SUBMIT NOW" class="contact-btn" />
              <br />
              <br />
              <span class="msgSubmit"></span>
            </form>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- contact-us section end -->

  <!-- footer section begin -->
  <footer class="footer-section">
    <div class="overlay">
      <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
          <div class="wave waveTop"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
          <div class="wave waveMiddle"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
          <div class="wave waveBottom"></div>
        </div>
      </div>

      <div class="footer-content">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-12">
              <div class="social-icon">
                <ul class="icon-area">
                  <li class="social-nav">
                    <a href="#"><i class="icofont-facebook"></i></a>
                  </li>
                  <li class="social-nav">
                    <a href="#"><i class="icofont-twitter"></i></a>
                  </li>
                  <li class="social-nav">
                    <a href="#"><i class="icofont-pinterest"></i></a>
                  </li>
                  <li class="social-nav">
                    <a href="#"><i class="icofont-rss"></i></a>
                  </li>
                </ul>
              </div>
              <div class="footer-text">
                <h5 class="footer-title">Register Now Riskbenefitxpro</h5>
                <h2 class="footer-subtitle">To Get Exclusive benefits</h2>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 col-md-12 d-flex justify-content-start reunir-content-center">
                <div class="footer-bottom-left">
                  <p>
                    Copyright ©. All Rights Reserved By
                    <a href="#">Riskbenefitxpro</a>
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 d-flex justify-content-end reunir-content-center">
                <div class="footer-bottom-right">
                  <ul>
                    <li>
                      <a href="#">Privacy & Policy</a>
                    </li>
                    <li>
                      <a href="#">Term Of Service</a>
                    </li>
                    <li>
                      <a href="#">Affilate</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en', // Change this to your site's default language
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false
    }, 'google_translate_element');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>

  {{-- chatway --}}
  <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=IuDBje7xd2BU"></script>

</body>

</html>