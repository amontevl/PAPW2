<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title>Bootstrap 101 Template</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row responsive-utilities-test visible-on">
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-xs">Extra small</span>
          <span class="visible-xs-block">✔ Visible on x-small</span>
        </div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-sm">Small</span>
          <span class="visible-sm-block">✔ Visible on small</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-md">Medium</span>
          <span class="visible-md-block">✔ Visible on medium</span>
        </div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-lg">Large</span>
          <span class="visible-lg-block">✔ Visible on large</span>
        </div>
      </div>
      <div class="row responsive-utilities-test visible-on">
        <div class="col-xs-6">
          <span class="hidden-xs hidden-sm">Extra small and small</span>
          <span class="visible-xs-block visible-sm-block">✔ Visible on x-small and small</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-md hidden-lg">Medium and large</span>
          <span class="visible-md-block visible-lg-block">✔ Visible on medium and large</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6">
          <span class="hidden-xs hidden-md">Extra small and medium</span>
          <span class="visible-xs-block visible-md-block">✔ Visible on x-small and medium</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-sm hidden-lg">Small and large</span>
          <span class="visible-sm-block visible-lg-block">✔ Visible on small and large</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6">
          <span class="hidden-xs hidden-lg">Extra small and large</span>
          <span class="visible-xs-block visible-lg-block">✔ Visible on x-small and large</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-sm hidden-md">Small and medium</span>
          <span class="visible-sm-block visible-md-block">✔ Visible on small and medium</span>
        </div>
      </div>
      <hr/>
      <div class="row responsive-utilities-test hidden-on">
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-xs">Extra small</span>
          <span class="visible-xs-block">✔ Hidden on x-small</span>
        </div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-sm">Small</span>
          <span class="visible-sm-block">✔ Hidden on small</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-md">Medium</span>
          <span class="visible-md-block">✔ Hidden on medium</span>
        </div>
        <div class="col-xs-6 col-sm-3">
          <span class="hidden-lg">Large</span>
          <span class="visible-lg-block">✔ Hidden on large</span>
        </div>
      </div>
      <div class="row responsive-utilities-test hidden-on">
        <div class="col-xs-6">
          <span class="hidden-xs hidden-sm">Extra small and small</span>
          <span class="visible-xs-block visible-sm-block">✔ Hidden on x-small and small</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-md hidden-lg">Medium and large</span>
          <span class="visible-md-block visible-lg-block">✔ Hidden on medium and large</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6">
          <span class="hidden-xs hidden-md">Extra small and medium</span>
          <span class="visible-xs-block visible-md-block">✔ Hidden on x-small and medium</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-sm hidden-lg">Small and large</span>
          <span class="visible-sm-block visible-lg-block">✔ Hidden on small and large</span>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6">
          <span class="hidden-xs hidden-lg">Extra small and large</span>
          <span class="visible-xs-block visible-lg-block">✔ Hidden on x-small and large</span>
        </div>
        <div class="col-xs-6">
          <span class="hidden-sm hidden-md">Small and medium</span>
          <span class="visible-sm-block visible-md-block">✔ Hidden on small and medium</span> 
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>