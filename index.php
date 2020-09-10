<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://www.chromestatus.com/features/5093566007214080">
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" />
  <script type="text/javascript" src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"> -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
  <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/loaders/loader.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="overflow-hidden">
  <div class="loader">
    <div class="loader_content">
      <div class="loader-logo-container">
        <div class="loader-logo slideInDown">
          <img src="img/punchy-logo-blue.svg" alt="Punchy">
        </div>
        <div class="loader-caption slideInUp">
          <span class="loading-dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </span>
        </div>
      </div>
      <!-- Loader Logo End -->

    </div>
    <!-- Loader Content Wrapper Start -->
    <div class="loader_background"></div>

    <!-- Loader Morphing Shape Start -->
    <div class="loader_shape">
      <svg class="loader-transition-shape" width="100%" height="100%" viewBox="0 0 1440 800" preserveAspectRatio="none">
        <path class="loader-morphing-path" d="M-22.4-87.7c-8.3,95.9,56.9,71.1,216.6,79c189.3,9.4,264.6-2.6,431.3-0.8c187.6,2,331.6-9.3,528.2-0.2c443.7,20.5,435.1-61.8,368.6-188.1C1455.9-324.1,34.5-746.7-22.4-87.7z" />
      </svg>
    </div>
    <!-- Loader Morphing Shape End -->

  </div>
  <!-- Loader End-->

  <!-- Custom HTML Start-->

  <!-- Menu Button Start -->
  <!-- <div class="menu-button">
    <a href="#" id="menu-trigger" class="menu-trigger">
      <span></span>
    </a> -->
  <!-- Menu Button Morphing Shape Start -->
  <!-- <svg class="menu-btn-morphing-object" width="100%" height="100%" viewBox="0 0 50 50"
      style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <path class="menu-btn-morphing-path"
        d="M49.8,29.3c0,13.3-14.9,20.5-28.2,20.5S0.8,38.6,0.8,25.4S15.9,0.2,29.2,0.2S49.8,16,49.8,29.3z" />
    </svg> -->
  <!-- Menu Button Morphing Shape End -->
  </div>
  <!-- Menu Button Start -->

  <!-- Navigation Start-->
  <div class="navigation">

    <!-- Menu Content Wrapper Start -->
    <div class="navigation_content">

      <!-- Menu Close Button Start -->
      <a href="#" id="menu-close" class="navigation_close"></a>
      <!-- Menu Close Button End -->

      <!-- Menu Logo Start -->
      <div class="logo-wrapper">
        <!-- Your Logo Here -->
        <img src="img/punchy-logo-blue.svg" alt="Punchy - awesome coming soon template to kick-start your project">
      </div>
      <!-- Menu Logo End -->

      <!-- Menu Content Start -->
      <div class="menu-wrapper">
        <nav>
          <!-- Menu Start-->
          <ul class="menu" id="menu">
            <li data-menuanchor="main">
              <a href="#main">Home</a>
            </li>
            <li data-menuanchor="about">
              <a href="#about">About</a>
            </li>
            <li data-menuanchor="features">
              <a href="#features">Features</a>
            </li>
            <li data-menuanchor="portfolio">
              <a href="#portfolio">Portfolio</a>
            </li>
            <li data-menuanchor="contact">
              <a href="#contact">Contact</a>
            </li>
          </ul>
          <!-- Menu End-->
        </nav>
        <!-- Socials Start-->
        <ul class="menu-socials">
          <li>
            <a class="" href="https://twitter.com/" target="_blank">
              <i class="icon ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a class="" href="https://github.com/" target="_blank">
              <i class="icon ion-social-github"></i>
            </a>
          </li>
          <li>
            <a class="" href="https://www.facebook.com/" target="_blank">
              <i class="icon ion-social-facebook"></i>
            </a>
          </li>
        </ul>
        <!-- Socials End-->
      </div>
      <!-- Menu Content End -->

    </div>
    <!-- Menu Content Wrapper End -->

    <div class="navigation_background"></div>

    <!-- Menu Morphing Shape Start -->
    <div class="navigation_shape">
      <svg class="menu-transition-shape" width="100%" height="100%" viewBox="0 0 1440 800" preserveAspectRatio="none">
        <path class="menu-morphing-path" d="M-22.4-87.7c-8.3,95.9,56.9,71.1,216.6,79c189.3,9.4,264.6-2.6,431.3-0.8c187.6,2,331.6-9.3,528.2-0.2c443.7,20.5,435.1-61.8,368.6-188.1C1455.9-324.1,34.5-746.7-22.4-87.7z" />
      </svg>
    </div>
    <!-- Menu Morphing Shape End -->

  </div>
  <!-- Navigation End-->

  <!-- Fullpage.js Sections Start-->
  <div id="fullpage">

    <!-- Main Section Start-->
    <div class="section fp-auto-height-responsive main-section" data-anchor="main">

      <!-- Main Section Background Start-->
      <div class="main-section_background">
        <svg class="main-background-shape" width="100%" height="100%" viewBox="0 0 1920 1080" preserveAspectRatio="none">
          <path class="main-background-path" d="M-60.3,409.8c0,0,391.5-127.3,699.1,69C943,673,1423.5,734.1,1720.6,413.1s601.4,2.7,547.4-306.3
	           s-2076.2-363-2076.2-363l-450,372L-60.3,409.8z" />
          <path class="main-background-path" d="M-185,1003c40-274,382-198,562-124s762,234,1028,80s584-78,704,58s54,370-260,344s-528-192-1038-146
            	S-254.4,1478.2-185,1003z" />
        </svg>
      </div>
      <!-- Main Section Background End-->

      <!-- Logo Start -->
      <div class="logo">
        <!-- Your Logo Here -->
        <img src="img/punchy-logo.svg" alt="Punchy">
      </div>
      <!-- Logo End -->

      <!-- Main Section Content Start -->
      <div class="main-section_content fullheight">
        <div class="container-fluid p-0 fullheight">
          <div class="row no-gutters fullheight">

            <!-- Main Section Intro Start -->
            <div class="col-12 col-xl-5 main-section_intro fullheight">

              <!-- Main Headline Start -->
              <div class="headline">
                <div>
                  <h1>Creative<br>solutions</h1>
                  <span class="divider"></span>
                  <p>We are preparing something amazing and exciting for you. Special surprise for our subscribers only.
                  </p>
                </div>

                <div class="btn-holder">
                  <a href="#" class="btn btn-light" id="notify-trigger">
                    <span class="btn-caption">Register</span>
                    <span class="icon ion-android-send"></span>
                  </a>
                  <a href="#" id="writealine-trigger" class="btn btn-light">
                    <span class="btn-caption">Rent a car</span>
                    <span class="icon ion-android-create"></span>
                  </a>
                </div>
              </div>
              <!-- Main Headline End -->

            </div>
            <!-- Main Section Intro End -->

            <!-- Main Section Media Start -->
            <div class="col-12 col-xl-7 main-section_media fullheight">

              <!-- Homescreen Illustration Start -->
              <div class="illustration-holder fullheight">
                <div class="illustration">
                  <svg class="home-svg-1" width="100%" height="100%" viewBox="0 0 1080 894" style="enable-background:new 0 0 1080 894;" xml:space="preserve">
                    <!-- Background Morphing Object Object -->
                    <path id="home-morphing-path-1" class="sundown" d="M1009.6,511.6c0,218.7-263.4,380.6-500.5,380.6S26.7,626.5,26.7,407.8S370.3,18.5,607.4,18.5S1009.6,292.9,1009.6,511.6z" />
                    <!-- Small Bottom Static Object -->
                    <path id="home-static-path" class="turquoiseblue" d="M1056.5,708.1c0-169.8-144.4-160.4-236.4-160.4s-233.4,24-233.4,119.5
                      	s56.5,215.5,148.5,215.5c47.4,0,104.2-67.3,174.3-100.6C975.6,750.6,1056.5,829.2,1056.5,708.1z" />
                    <!-- Foreground Morphing Object (Morphing Path with Image) -->
                    <g>
                      <!-- Morphing Object with Image -->
                      <defs>
                        <path id="home-morphing-path-2" d="M1070.2,472.6c0,218.7-317.4,389.1-554.5,389.1S9.1,800.7,9.1,582.1S195.7,13,432.8,13S1070.2,253.9,1070.2,472.6z" />
                      </defs>
                      <clipPath id="home-morphing-clippath">
                        <use xlink:href="#home-morphing-path-2" style="overflow:visible;" />
                      </clipPath>
                      <g transform="matrix(1 0 0 1 1.862645e-09 0)" style="clip-path:url(#home-morphing-clippath);">
                        <!-- Put Your Image Here in xlink:href="../path/to/image.jpg" Property -->

                        <image style="overflow:visible;" width="1500" height="1242" xlink:href="img/backgrounds/main-illustration-1500x1242-1.jpg" transform="matrix(0.7198 0 0 0.7198 -2.581610e-02 -0.3868)"></image>
                        <div class="countdown countdown-full">
                          <span class="help-text">We’ll be back in</span>
                          <div id="countdown-large"></div>
                        </div>
                      </g>
                    </g>

                  </svg>
                </div>
              </div>
              <!-- Homescreen Illustration End -->

            </div>
            <!-- Main Section Media End -->

          </div>
        </div>
      </div>
      <!-- Main Section Content End-->

      <!-- Socials Start -->
      <div class="socials">
        <ul>
          <li>
            <a class="" href="https://twitter.com/" target="_blank">
              <i class="icon ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a class="" href="https://github.com/" target="_blank">
              <i class="icon ion-social-github"></i>
            </a>
          </li>
          <li>
            <a class="" href="https://www.facebook.com/" target="_blank">
              <i class="icon ion-social-facebook"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- Socials End -->

      <!-- Credits Start -->
      <div class="credits">
        <p><a href="#">Punchy</a> 2018 all rights reserved</p>
      </div>
      <!-- Credits Start -->

    </div>
    <!-- Main Section End-->

    <!-- About Section Start-->
    <!-- <div class="section fp-auto-height-responsive content-section" data-anchor="about">
      <div class="container-fluid p-0 fullheight">
        <div class="row m-0 flex-xl-row-reverse fullheight"> -->

  </div>
  </div>


  <!-- </div>
  </div>
  </div> -->


  </div>


  </div>
  </div>
  <!-- Works Gallery End -->

  </div>
  <!-- Portfolio Section Media End-->

  </div>
  </div>
  </div>

  </div>

  </div>
  </div>
  </div>


  </div>


  <!-- Notify Me Popup Start -->
  <div class="popup popup-light notify">

    <!-- Popup Content Wrapper Start -->
    <div class="popup_content">

      <!-- Close Button Start -->
      <a onClick="window.location.reload();" id="notify-close" class="popup_close notify-close"></a>
      <!-- Close Button End -->

      <div class="container-fluid p-0 fullheight">
        <div class="row no-gutters justify-content-center fullheight">
          <div class="col-12 col-xl-4 fullheight">

            <!-- Write-a-Line Content Start -->
            <div class="popup-wrapper">

              <!-- Write-a-Line Title Start -->
              <div class="popup-title">
                <p class="title">Get to know about our launch</p>
                <span class="divider"></span>
                <p class="subtitle">Subscribe to our newsletter and we will send you a notification about the launch of
                  our brand new site.</p>
              </div>
              <div class="form-container">
                <div class="reply-group reply-dark">
                  <i class="icon ion-ios-checkmark"></i>
                  <p class="reply-group__title"><span>Done</span>!</p>
                  <span class="reply-group__text">Thanks for your message. We will get back as soon as possible.</span>
                </div>
                <div id="frmContact">
                  <div class="registration-mail-status"></div>
                  <form class="form form-dark writealine-form" id="registration">

                    <input class="input" type="text" name="lastname" id="lastname" placeholder="Nom de propriétéaire*" required>
                    <span id="lastname-info" class="info"></span>

                    <input class="input" type="text" name="firstname" name="firstname" id="firstname" placeholder="Nom de l'agence*" required>
                    <span id="firstname-info" class="info"></span>

                    <input class="input" type="text" name="nomagence" id="nomagence" placeholder="Votre agence présenter sur quelles ville*" required>
                    <span id="nomagence-info" class="info"></span>

                    <input class="input" type="number" name="number" id="number" placeholder="Numéro de téléphone*" required>
                    <span id="number-info" class="info"></span>

                    <input class="input" type="email" name="email" id="email" placeholder="Email*" required>
                    <span id="email-info" class="info"></span>

                    <span class="inputs-description">*Required fields</span>
                    <div class="button-send">
                      <button class="btn" name="submit" id="registration-submit">
                        <a href="#"><span class="btn-caption" name="reg">Send</span>
                          <span class="icon ion-android-send"></span>
                        </a>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Write-a-Line Form Container End -->

            </div>
            <!-- Write-a-Line Content End -->



          </div>
        </div>

      </div>
    </div>

    <!-- Popup Content Wrapper End -->

    <div class="popup_background"></div>

    <!-- Popup Morphing Shape Start -->
    <div class="popup_shape">
      <svg class="popup-transition-shape" width="100%" height="100%" viewBox="0 0 1440 800" preserveAspectRatio="none">
        <path class="popup-morphing-path" d="M-22.4-87.7c-8.3,95.9,56.9,71.1,216.6,79c189.3,9.4,264.6-2.6,431.3-0.8c187.6,2,331.6-9.3,528.2-0.2c443.7,20.5,435.1-61.8,368.6-188.1C1455.9-324.1,34.5-746.7-22.4-87.7z" />
      </svg>
    </div>
    <!-- Popup Morphing Shape End -->

  </div>
  <!-- Notify Me Popup End -->

  <!-- Write-a-Line Popup Start -->
  <div class="popup popup-light writealine">

    <!-- Popup Content Wrapper Start -->
    <div class="popup_content">

      <!-- Close Button Start -->
      <a href="#0" onClick="window.location.reload();" id="writealine-close" class="popup_close writealine-close"></a>
      <!-- Close Button End -->

      <div class="container-fluid p-0 fullheight">
        <div class="row no-gutters justify-content-center fullheight">
          <div class="col-12 col-xl-4 fullheight">

            <!-- Write-a-Line Content Start -->
            <div class="popup-wrapper">

              <!-- Write-a-Line Title Start -->
              <div class="popup-title">
                <p class="title">Just say "Hello!"</p>
                <span class="divider"></span>
                <p class="subtitle">Drop us a line and we will get back as soon as possible.</p>
              </div>
              <!-- Write-a-Line Title End -->
              <div id="frmContact">
                <div class="rent-mail-status"></div>
                <form class="form form-dark writealine-form" id="rent">
                  <input class="input" type="text" name="userName" id="userName" placeholder="Nom*" required>
                  <span id="userName-info" class="info"></span>

                  <input class="input" type="email" name="userEmail" id="userEmail" placeholder="Email*" required>
                  <span id="userEmail-info" class="info"></span>
                  <span class="inputs-description">*Required fields</span>

                  <div class="button-send">
                    <!-- <button class="btn" name="submit" id="registration-submit">
                        <a href="#"><span class="btn-caption" name="reg">Snd</span>
                          <span class="icon ion-android-send"></span>
                        </a>
                      </button> -->
                    <button class="btn" name="submit" id="submit">
                      <a href="#"><span class="btn-caption">Send</span>
                        <span class="icon ion-android-send"></span>
                      </a>
                    </button>
                  </div>
                </form> <!-- Send Button End -->

                <!-- Contact Form End -->
              </div>
              <!-- Write-a-Line Form Container Start -->
              <!-- <div class="form-container"> -->

              <!-- Reply Group Start -->
              <!-- <div class="reply-group reply-dark">
              <i class="icon ion-ios-checkmark"></i>
              <p class="reply-group__title"><span>Done</span>!</p>
              <span class="reply-group__text">Thanks for your message. We will get back as soon as possible.</span>
            </div> -->
              <!-- Reply Group End -->
              <!-- Send Button End -->

              <!-- Contact Form End -->
              <!-- </div> -->
              <!-- Write-a-Line Form Container End -->

            </div>
            <!-- Write-a-Line Content End -->

          </div>
        </div>
      </div>
    </div>
    <!-- Popup Content Wrapper End -->

    <div class="popup_background"></div>

    <!-- Popup Morphing Shape Start -->
    <div class="popup_shape">
      <svg class="popup-transition-shape" width="100%" height="100%" viewBox="0 0 1440 800" preserveAspectRatio="none">
        <path class="popup-morphing-path" d="M-22.4-87.7c-8.3,95.9,56.9,71.1,216.6,79c189.3,9.4,264.6-2.6,431.3-0.8c187.6,2,331.6-9.3,528.2-0.2c443.7,20.5,435.1-61.8,368.6-188.1C1455.9-324.1,34.5-746.7-22.4-87.7z" />
      </svg>
    </div>
    <!-- Popup Morphing Shape End -->

  </div>


  <!-- Load Scripts Start-->

  <script src="js/validation.js"></script>
  <script src="js/libs.min.js"></script>
  <script src="js/gallery-init.js"></script>
  <script src="js/punchy-custom.js"></script>
  <!-- Load Scripts End-->

</body>



</html>