<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Neta Season 3</title>
    <meta name="description" content="The Vancouver Neta LoL League's Season 3 statistics and magic fun times.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
      {{ HTML::style('css/marketing-old-ie.css') }}
    <![endif]-->
    <!--[if gt IE 8]><!-->
      {{ HTML::style('css/marketing.css') }}
    <!--<![endif]-->

    {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
  </head>
  <body>

    @yield('content')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('{{{ HTML::script("js/vendor/jquery-1.10.2.min.js") }}}')</script>

    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
       function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
       e=o.createElement(i);r=o.getElementsByTagName(i)[0];
       e.src='//www.google-analytics.com/analytics.js';
       r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
       ga('create','UA-36246472-3');ga('send','pageview');
    </script>
  </body>
</html>
