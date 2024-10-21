<?php
$content = array();
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
$content[] = array("id"=>"90Chn1wgm_M","text"=>"Burrito of Amazement","location"=>"Toronto, Ontario");
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Welcome to our website</title>
  <meta charset="utf-8"/>
  <link href="main.css" rel="stylesheet" type="text/css" />
  <link href="tablet.css" rel="stylesheet" type="text/css" />
  <link href="mobile.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1, user-scalable=no" />
</head>
<body>
  <div id="skiptocontent" ><a href="#begin-content" title="skip to main content">skip to main content</a></div>
  <nav>
    <a href="./" class="logo" title="This is Home Page"><img src="images/logo.png" alt="Logo of Home Page"/></a>
    <ul>
      <li><a href="./" title="See our services">Services</a></li>
      <li><a href="./" title="See our portfolio">Portfolio</a></li>
      <li><a href="./" title="Please reach out">Contact Us</a></li>
    </ul>
    <div class="overlay"></div>
  </nav>
  <div id="main">
    <a name="begin-content" title="The content begins here" class="page-mark">Begin Content on Page</a>
    <section id="hero">
      <div class="content">
        <h1>Welcome to Our Company!</h1>
        <p>You can learn a lot about us by reading here.</p>
      </div>
      <a href="#results" title="Go to results">See Results</a>
    </section>
    <a name="results" title="view the results" class="page-mark">These are the results</a>
    <section id="results">
      <?php foreach($content as $c) : ?>
      <div class="item">
        <div class="thumb">
          <img src="images/results/<?php echo $c["id"]; ?>.jpg" alt="See video <?php echo $c["id"]; ?>"/>
        </div>
        <div class="description">
          <a href="https://www.youtube.com/watch?v=<?php echo $c["id"]; ?>" title="See <?php echo $c["text"]; ?>"><?php echo $c["text"]; ?></a>
          <span class="location"><?php echo $c["location"]; ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </section>
  </div>
  <footer>
    <p>Copyright 2016. All rights reserved.</p>
  </footer>
</body>
</html>
