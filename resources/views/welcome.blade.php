<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />

  <!-- Stylesheets
	============================================= -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/style.css" type="text/css" />

  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/dark.css" type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/magnific-popup.css" type="text/css" />

  <!-- Bootstrap Switch CSS -->
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/components/bs-switches.css" type="text/css" />

  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/custom.css" type="text/css" />
  <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
  <link rel="stylesheet" href="{{asset('aset/style.css')}}">

  <!-- Seo Demo Specific Stylesheet -->
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/css/colors.php?color=FE9603" type="text/css" />
  <!-- Theme Color -->
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/demos/seo/css/fonts.css" type="text/css" />
  <link rel="stylesheet" href="https://alpha.tinggalbayar.id/front/demos/seo/seo.css" type="text/css" />
  <!-- / -->

  <!-- Document Title
	============================================= -->
  <title>TinggalBayar</title>

</head>

<body class="stretched">
  <!-- Document Wrapper
	============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Top Bar
		============================================= -->
    <div id="top-bar" class="transparent-topbar">
      <div class="container clearfix">

        <div class="row justify-content-between">
          <div class="col-12 col-md-auto">

            <!-- Top Links
						============================================= -->
            <div class="top-links">
              <ul class="top-links-container">
                <li class="top-links-item"><a href="demo-seo.html">Home</a></li>
                <li class="top-links-item"><a href="demo-seo-faqs.html">FAQs</a></li>
                <li class="top-links-item"><a href="demo-seo-contact.html">Contact</a></li>
              </ul>
            </div><!-- .top-links end -->

          </div>

          <div class="col-12 col-md-auto dark">

            <!-- Top Social
						============================================= -->
            <ul id="top-social">
              <li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span
                    class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
              <li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span class="ts-icon"><i
                      class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
              <li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span class="ts-icon"><i
                      class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
              <li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span
                    class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a>
              </li>
              <li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i
                      class="icon-call"></i></span><span class="ts-text">+10.11.85412542</span></a></li>
              <li><a href="/cdn-cgi/l/email-protection#cea7a0a8a18eadafa0b8afbde0ada1a3" class="si-email3"><span
                    class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text"><span
                      class="__cf_email__"
                      data-cfemail="d3babdb5bc93b0b2bda5b2a0fdb0bcbe">[email&#160;protected]</span></span></a></li>
            </ul><!-- #top-social end -->

          </div>
        </div>

      </div>
    </div><!-- #top-bar end -->

    <!-- Header
		============================================= -->
    <header id="header" class="transparent-header floating-header header-size-md">
      <div id="header-wrap">
        <div class="container">
          <div class="header-row">

            <!-- Logo
						============================================= -->
            <div id="logo">
              <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                  src="https://alpha.tinggalbayar.id/app/assets/media/logos/logo-tb-ver@10x.png" alt="Canvas Logo"></a>
              <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                  src="https://alpha.tinggalbayar.id/app/assets/media/logos/logo-tb-ver@10x.png" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <div class="header-misc">

              <!-- Top Search
							============================================= -->
              <div id="top-search" class="header-misc-icon">
                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
              </div><!-- #top-search end -->

              <a href="{{ route('register')}}" class="button button-rounded ms-3 d-none d-sm-block">
				<div> Daftar
				</div>
				</a>

            </div>

            <div id="primary-menu-trigger">
              <svg class="svg-trigger" viewBox="0 0 100 100">
                <path
                  d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                </path>
                <path d="m 30,50 h 40"></path>
                <path
                  d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                </path>
              </svg>
            </div>

            <!-- Primary Navigation
						============================================= -->
            <nav class="primary-menu with-arrows">

              <ul class="menu-container">
                <li class="menu-item current"><a class="menu-link" href="#">
                    <div>Home</div>
                  </a></li>
                <li class="menu-item"><a class="menu-link" href="{{ route('login')}}">
                    <div class="">Login</div>
                  </a></li>
              </ul>

            </nav><!-- #primary-menu end -->

            <form class="top-search-form" action="search.html" method="get">
              <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                autocomplete="off">
            </form>

          </div>
        </div>
      </div>
      <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Slider
		============================================= -->
    <section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 include-header">
      <div class="slider-inner"
        style="background: #FFF url('front/demos/seo/images/hero/hero-1.jpg') center center no-repeat; background-size: cover;">

        <div class="vertical-middle slider-element-fade mainscreen">
          <div class="container ">
            <div class="row">
              <div class="col">
                <div class="text-center">
                  <h2 style="color: #FFF;">Tingkatkan penjualan <br>dengan manajemen order <br>yang serba otomatis.</h2>
                </div>
              </div>
              <img src="" alt="">
            </div>
          </div>

        </div>

        <div class="video-wrap h-100 d-block d-lg-none">
          <div class="video-overlay" style="background: rgba(255,255,255,0.85);"></div>
        </div>

      </div>
    </section><!-- #slider end -->

    <!-- Content
		============================================= -->
    <section id="content">

      <div class="content-wrap pt-0">
        <div class="section bg-transparent mt-4 mb-0 pb-0">
          <div class="container text-center fitur">
            <h3 class="nott ls0 mb-1">Jualan online <br>tidak pernah semudah ini!</h3>
            <p>Sistemasikan bisnis Anda sesuai yang diinginkan, termasuk pembagian kerja tim, SOP, order management
              dan reporting.</p>
            <div class="row">
              <div class="col pt-lg-5">
                <div class="row">
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 1</p>
                    </h3>
                  </div>
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 2</p>
                    </h3>
                  </div>
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 3</p>
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 4</p>
                    </h3>
                  </div>
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 5</p>
                    </h3>
                  </div>
                  <div class="col-4">
                    <h3 class="mt-3">
                      <img src="{{asset('aset/inventory-2-o481zd9mk2ivs10ift41qv7opqng5pfbod1rud7b6g.png')}}" alt="">
                      <p>Fitur 6</p>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <img src="{{asset('aset/Systemize-R.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>

        <!-- Pricing
				============================================= -->
        <div class="section m-0"
          style="background: url('front/demos/seo/images/sections/4.png') no-repeat center top; background-size: cover; padding: 140px 0 0;">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-4 mt-4">
                <div class="heading-block border-bottom-0 bottommargin-sm">
                  <div class="badge rounded-pill badge-default">Pricing Table</div>
                  <h3 class="nott ls0">Tingkatkan penjualan dengan manajemen order yang serba otomatis.</h3>
                </div>
                <p>Paket langganan 12 bulan lebih hemat</p>
                <div class="pricing-tenure-switcher d-flex align-items-center mb-4 position-relative"
                  data-container="#pricing-switch">
                  <span class="pts-left fw-bold text-muted">Monthly</span>
                  <div class="pts-switcher mx-3">
                    <div class="switch">
                      <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round"
                        type="checkbox">
                      <label for="switch-toggle-pricing-tenure" class="mb-0"></label>
                    </div>
                  </div>
                  <span class="pts-right fw-bold text-muted">Yearly</span>
                  <div class="price-discount"></div>
                </div>
              </div>

              <div class="col-lg-8">
                <div id="section-pricing" class="page-section p-0 m-0">

                  <div id="pricing-switch" class="pricing row align-items-end g-0 col-mb-50 mb-4">

                    <div class="col-md-6">

                      <div class="pricing-box">
                        <div class="pricing-title">

                          <h3>Single User Plan</h3>
                          <span>Most Popular</span>
                        </div>
                        <div class="pricing-price">
                          <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>5<span
                              class="price-tenure">Per Month</span></div>
                          <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>48<span
                              class="price-tenure">Per Year</span></div>
                        </div>
                        <div class="pricing-features border-0 bg-transparent">
                          <ul>
                            <li><i class="icon-check-circle color me-2"></i><strong>Limited</strong> Support</li>
                            <li class="pts-switch-content-left text-black-50"><i class="icon-minus-circle me-2"></i><del
                                style="opacity: .5"><strong>1</strong> Free Optimization</del></li>
                            <li class="pts-switch-content-right"><i
                                class="icon-check-circle color me-2"></i><strong>1</strong> Free Optimization</li>
                            <li><i class="icon-check-circle color me-2"></i><strong>100+</strong> Pages</li>
                            <li><i class="icon-check-circle color me-2"></i><strong>Single</strong> User License</li>
                            <li><i class="icon-check-circle color me-2"></i>Phone &amp; Email Support</li>
                          </ul>
                        </div>
                        <div class="pricing-action">
                          <div class="pts-switch-content-left"><a href="#"
                              class="button button-large button-rounded w-100 text-capitalize m-0 ls0">Get Started</a>
                          </div>
                          <div class="pts-switch-content-right"><a href="#"
                              class="button button-large button-rounded w-100 text-capitalize m-0 ls0">Get Started</a>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="pricing-box">
                        <div class="pricing-title">

                          <h3>Multiple User Plan</h3>
                        </div>
                        <div class="pricing-price">
                          <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>12<span
                              class="price-tenure">Per Month</span></div>
                          <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>115<span
                              class="price-tenure">Per Year</span></div>
                        </div>
                        <div class="pricing-features border-0 bg-transparent">
                          <ul>
                            <li><i class="icon-check-circle color me-2"></i><strong>24*7</strong> Support</li>
                            <li><i class="icon-check-circle color me-2"></i><strong>10</strong> Free Optimization</li>
                            <li><i class="icon-check-circle color me-2"></i><strong>1000+</strong> Pages</li>
                            <li><i class="icon-check-circle color me-2"></i><strong>Unlimited</strong> User License</li>
                            <li><i class="icon-check-circle color me-2"></i>Phone &amp; Email Support</li>
                          </ul>
                        </div>
                        <div class="pricing-action">
                          <div class="pts-switch-content-left"><a href="#"
                              class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">Get
                              Started</a></div>
                          <div class="pts-switch-content-right"><a href="#"
                              class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">Get
                              Started</a></div>
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
    </section><!-- #content end -->


    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://alpha.tinggalbayar.id/front/js/jquery.js"></script>
    <script src="https://alpha.tinggalbayar.id/front/js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="https://alpha.tinggalbayar.id/front/js/functions.js"></script>


</body>

</html>