<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Betacloud</title>

  <?php wp_head(); ?>

  <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000",
    }
  },
  "content": {
    "message": "Diese Website verwendet Cookies.",
    "dismiss": "Ok",
    "link": "Datenschutzerklärung",
    "href": "https://betacloud.de/datenschutz.html"
  }
})});
</script>

</head>

<body>
  <nav class="navbar fixed-top">
    <a href="https://betacloud.de/index.html" class="navbar-left"><img src="<?php echo get_template_directory_uri(); ?>/img/LO_Betacloud_PRODUCT_RZ_RGB.png" class="logo"></a>
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="https://betacloud.de/index.html" title="betacloud.de"><i class="fas fa-home"></i></a>
          </div>
          <div class="col">
            <a href="mailto:info@betacloud.de" title="info@betacloud.de"><i class="fas fa-envelope"></i></a>
          </div>
          <div class="col">
            <a href="tel:004971121957006" title="+49 711 21957006"><i class="fas fa-phone"></i></a>
          </div>
          <div class="col">
            <a href="https://docs.betacloud.io" title="Dokumentation"><i class="fas fa-book"></i></a>
          </div>
          <div class="col">
            <a href="https://twitter.com/betacloud" title="Twitter"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="col">
            <a href="https://github.com/betacloud/" title="GitHub"><i class="fab fa-github"></i></a>
          </div>
          <div class="col">
            <a href="https://portal.betacloud.de" title="Registrierung"><i class="fas fa-user-plus"></i></a>
          </div>
          <div class="col">
            <a href="https://horizon.betacloud.io" title="Dashboard"><i class="fas fa-sign-in-alt"></i></a>
          </div>
        </div>
      </div>
  </nav>
