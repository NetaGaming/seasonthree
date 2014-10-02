<?php

use LeagueWrap\Api;

$api = new Api(getenv("RIOTAPIKEY_NETA"));
$api->setRegion('na');
$api->limit(3000,10);
$api->limit(180000,600);

$captains = array(
    "Darkmist16","SuicideSnowman","Misaga","Delath","AzayakaAkari","riskman64"
);

$summoners = array(
    "Khoza","echoblaze","TheJuggler","m1tsu","019Ky","Mystenance","titan alibaba",
    "striderfox","Faucetin","Takeiteasyonme","HybridEleven","taaakun","Psychotic Idiot",
    "W4yl4nder","Ngsanity","desunman","fadedlightx","akiraK","stopisme","ginourmous",
    "karenkun","kalun85","juebag","l337bagger"
);

$currentPatch = '4.17.1'; // yes, I hate me for this

?>

<!DOCTYPE html>
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
      <link rel="stylesheet" href="css/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="css/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  </head>
  <body>

    <div class="splash-container">
      <div class="splash">
        <h1 class="splash-head">Neta Season<br>3</h1>
        <p class="splash-subhead">
          Pentakills, magic shows, and prizes.
        </p>
      </div>
    </div>

    <div class="content-wrapper">

      <div class="ribbon l-box-lrg">
        <h2 class=" content-head content-head-ribbon is-center">
          Thirty summoners on six teams
        </h2>
      </div>

      <div class="content">
        <div class="pure-g">

          <div class="l-box pure-u-1 pure-u-md-1-2">
            <ul class="summoner-listing">
<?php
for($i=0; $i < 3; $i++) {
    $summoner = $api->summoner()->info($captains[$i]);
    $iconUrl = 'http://ddragon.leagueoflegends.com/cdn/' . $currentPatch .'/img/profileicon/' . $summoner->profileIconId . '.png';
?>
              <li>
                <span class="captain"><?php echo $captains[$i]; ?></span>
                <img class="pure-img-responsive" src="<?php echo $iconUrl; ?>" height=50 width=50>
              </li>
<?php
}

for($i=0; $i < 12; $i++) {
    $summoner = $api->summoner()->info($summoners[$i]);
    $iconUrl = 'http://ddragon.leagueoflegends.com/cdn/' . $currentPatch .'/img/profileicon/' . $summoner->profileIconId . '.png';
?>
              <li>
                <?php echo $summoners[$i]; ?>
                <img class="pure-img-responsive" src="<?php echo $iconUrl; ?>" height=50 width=50>
              </li>
<?php } ?>
            </ul>
          </div>

          <div class="l-box pure-u-1 pure-u-md-1-2">
            <ul class="summoner-listing">
<?php
for($i=3; $i < 6; $i++) {
    $summoner = $api->summoner()->info($captains[$i]);
    $iconUrl = 'http://ddragon.leagueoflegends.com/cdn/' . $currentPatch .'/img/profileicon/' . $summoner->profileIconId . '.png';
?>
              <li>
                <span class="captain"><?php echo $captains[$i]; ?></span>
                <img class="pure-img-responsive" src="<?php echo $iconUrl; ?>" height=50 width=50>
              </li>
<?php
}

for($i=12; $i < 24; $i++) {
    $summoner = $api->summoner()->info($summoners[$i]);
    $iconUrl = 'http://ddragon.leagueoflegends.com/cdn/' . $currentPatch .'/img/profileicon/' . $summoner->profileIconId . '.png';
?>
              <li>
                <?php echo $summoners[$i]; ?>
                <img class="pure-img-responsive" src="<?php echo $iconUrl; ?>" height=50 width=50>
              </li>
<?php } ?>
            </ul>
          </div>

        </div>
      </div>

      <div class="ribbon l-box-lrg">
        <h2 class=" content-head content-head-ribbon is-center">
          Mother. Fucking. Prizes.
        </h2>
      </div>

      <div class="content">
        <div class="pure-g">

          <div class="l-box pure-u-1">
            <div class="img-box">
              <img class="pure-img" src="img/Ryze_4.jpg">
            </div>
          </div>

        </div>

        <div class="pure-g prizes">

          <div class="pure-u-1 pure-u-md-1-4">
            <div class="l-box">
              <h3>First Place</h3>
              <p>3200 RP & Triumphant Ryze</p>
            </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-4">
            <div class="l-box">
              <h3>Second Place</h3>
              <p>2400 RP</p>
            </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-4">
            <div class="l-box">
              <h3>Third Place</h3>
              <p>1600 RP</p>
            </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-4">
            <div class="l-box">
              <h3>Fourth Place</h3>
              <p>A warm handshake</p>
              <p class="tiny">800 RP</p>
            </div>
          </div>

        </div>
      </div>

      <div class="ribbon l-box-lrg">
        <h2 class="content-head content-head-ribbon is-center">
          Previous season magic
        </h2>
      </div>

      <div class="content">

        <div class="pure-g">

          <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box pull-right">
              <h3>Season Two</h3>
              <iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvHmlDv6l-X1uDFvHSkap435xJpzkUEd7" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
              <h3>Season One</h3>
              <iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLCGYC5AqN8cHqO_FU4ZnxOX8BiCUD_UvU" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </div>

      <div class="footer l-box is-center">
        <h4 class="content-head content-head-ribbon">
          Made with mild disgust by <a href="http://matthewcantelon.ca">Matthew Cantelon</a>
        </h3>
      </div>

    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
       function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
       e=o.createElement(i);r=o.getElementsByTagName(i)[0];
       e.src='//www.google-analytics.com/analytics.js';
       r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
       ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>