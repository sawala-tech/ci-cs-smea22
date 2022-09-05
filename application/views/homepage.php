<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?=base_url()?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      :root {
        --bs-primary: #C8A27A !important;
      }
      .hero-background {
        --x: 0;
        --y: 0;
        --bg-img: '';
        background-repeat: no-repeat;
        background-size: cover;
        background-position: var(--x) var(--y);
        width: 100%;
        height: 100vh;
        }
        @media (min-width: 576px) {
            .hero-background {
                height: 40vh;
              background-size: 110% auto;
            }
        }

        @media (min-width: 992px) {
            .hero-background {
                height: 50vh;
            }
        }
        @media (min-width:1100px){
            .hero-background {
                height: 100vh;
            }
        }
        @media (min-width:1400px){
            .hero-background {
                height: 100vh;
            }
        }
      .btn-primary{
        background-color: #C8A27A;
        border-color: #C8A27A
      }
      .btn-primary:hover{
        background-color: #C8A27A;
        border-color: #C8A27A
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container position-relative py-2">
        <a class="navbar-brand position-absolute" href="#"><img src="<?php echo base_url('resources/img/logo.png');?>" height="55px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link active" aria-current="page" href="#">About</a>
            <a class="nav-link" href="#">Our Coffee</a>
            <a class="nav-link" href="#">Instagram</a>
            <a class="nav-link">Location</a>
            <a class="nav-link">Gallery</a>
          </div>
        </div>
        <div class="position-absolute d-flex align-items-center" style="right:0; top: 0; bottom:0">
          <a class="btn btn-primary rounded-0" href="https://grandjatijunction.sawala.xyz/contact/"> 
            Order Now        
          </a>
        </div>
      </div>
    </nav>

    <!-- hero -->
    <header class="container pt-5">
      <h1 class="mb-5 fw-bolder text-uppercase text-center">Boost your day with <br> a cup of coffee</h1>
      <div class="d-flex justify-content-center">
        <img src="<?php echo base_url('resources/img/hero2.png');?>">
      </div>
    </header>
    
    <!-- About -->
    <section style="background-color:#F3F4F6; margin-top:-80px; padding-top: 80px">
      <div class="container py-4">
        <div class="row">
          <div class="col-6 d-flex justify-content-center">
            <img height="600px" src="<?php echo base_url('resources/img/about.png');?>" alt="">
          </div>
          <div class="col-6 col-6 d-flex justify-content-center align-items-center">
            <div>
              <p>Aliquet arcu in etiam ornare eget libero, felis mi eget. Pulvinar sollicitudin lacus, lacus, hendrerit elit etiam. Tempus neque, vel sit morbi at interdum odio aenean. Auctor a pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amet. Suspendisse sed posuere sit ut aenean massa. Auctor a lorem pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amets uspendisse.</p>
              <button class="btn btn-primary rounded-0 mt-3" type="button">READ MORE</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Coffe -->
    <section>
      <div class="container py-5">
        <h1 class="text-center mb-5">Our Coffee</h1>
        <div class="row mb-5" style="--bs-gutter-x: 4rem">
          <div class="col-4">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 1.png'); ?>">
              <div class="py-3 text-center"> Luwak Coffe</div>
          </div>
          <div class="col-4">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 2.png'); ?>">
              <div class="py-3 text-center"> Caramel Latte</div>
          </div>
          <div class="col-4">
              <img width="100%" src="<?php echo base_url('resources/img/coffee 3.png'); ?>">
              <div class="py-3 text-center"> Cappucino</div>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-primary rounded-0 mt-3">ALL MENU</a>
        </div>
      </div>
    </section>

    <!-- Instagram -->
    <section style="background-color:#F3F4F6;">
      <div class="container py-5">
        <div class="row mb-5" style="--bs-gutter-x: 2rem; --bs-gutter-y: 2rem">
          <div class="col-4 d-flex justify-content-center align-items-center">
            <div>
              <h2>Lets check our <br> Instagram account</h2>
              <span class="text-gray">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.99999 6.87579C8.27968 6.87579 6.87577 8.2797 6.87577 10C6.87577 11.7203 8.27968 13.1242 9.99999 13.1242C11.7203 13.1242 13.1242 11.7203 13.1242 10C13.1242 8.2797 11.7203 6.87579 9.99999 6.87579ZM19.3703 10C19.3703 8.70626 19.382 7.42423 19.3094 6.13283C19.2367 4.63283 18.8945 3.30158 17.7976 2.2047C16.6984 1.10548 15.3695 0.765639 13.8695 0.692982C12.5758 0.620326 11.2937 0.632045 10.0023 0.632045C8.70858 0.632045 7.42655 0.620326 6.13515 0.692982C4.63515 0.765639 3.3039 1.10783 2.20702 2.2047C1.1078 3.30392 0.767958 4.63283 0.695302 6.13283C0.622645 7.42658 0.634364 8.70861 0.634364 10C0.634364 11.2914 0.622645 12.5758 0.695302 13.8672C0.767958 15.3672 1.11015 16.6985 2.20702 17.7953C3.30624 18.8945 4.63515 19.2344 6.13515 19.307C7.4289 19.3797 8.71093 19.368 10.0023 19.368C11.2961 19.368 12.5781 19.3797 13.8695 19.307C15.3695 19.2344 16.7008 18.8922 17.7976 17.7953C18.8969 16.6961 19.2367 15.3672 19.3094 13.8672C19.3844 12.5758 19.3703 11.2938 19.3703 10ZM9.99999 14.807C7.33983 14.807 5.19296 12.6602 5.19296 10C5.19296 7.33986 7.33983 5.19298 9.99999 5.19298C12.6601 5.19298 14.807 7.33986 14.807 10C14.807 12.6602 12.6601 14.807 9.99999 14.807ZM15.0039 6.11876C14.3828 6.11876 13.8812 5.6172 13.8812 4.99611C13.8812 4.37501 14.3828 3.87345 15.0039 3.87345C15.625 3.87345 16.1266 4.37501 16.1266 4.99611C16.1267 5.14359 16.0978 5.28966 16.0415 5.42595C15.9851 5.56224 15.9024 5.68607 15.7981 5.79036C15.6939 5.89464 15.57 5.97733 15.4337 6.03368C15.2974 6.09004 15.1514 6.11895 15.0039 6.11876Z" fill="#9CA3AF"/></svg>
                your-instagram
              </span>
            </div>
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 1.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 2.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 3.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 4.png'); ?>">
          </div>
          <div class="col-4">
            <img width="100%" src="<?php echo base_url('resources/img/ig 5.png'); ?>">
          </div>
        </div>
      </div>
    </section>

    <!-- Instagram -->
    <section>
    <div class="container py-5">
      <div class="row border">
        <div class="col-6 d-flex justify-content-center">
          <img height="600px" src="<?php echo base_url('resources/img/location.png');?>" alt="">
        </div>
        <div class="col-6 col-6 d-flex justify-content-center align-items-center">
          <div>
            <p>Aliquet arcu in etiam ornare eget libero, felis mi eget. Pulvinar sollicitudin lacus, lacus, hendrerit elit etiam. Tempus neque, vel sit morbi at interdum odio aenean. Auctor a pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amet. Suspendisse sed posuere sit ut aenean massa. Auctor a lorem pellentesque est dictum. Ullamcorper vel interdum nibh in ultricies amets uspendisse.</p>
            <button class="btn btn-primary rounded-0 mt-3" type="button">READ MORE</button>
          </div>
        </div>
      </div>
    </div>
    </section>
    <script src="<?=base_url()?>resources/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
