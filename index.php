<!DOCTYPE HTML>
<head>
<title>Jayaratne Funerals</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.eislideshow.js"></script>
<script>
jQuery.noConflict()(function ($) {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 3000,
        titlesFactor: 0
    });
});
</script>
<!-- get fancybox -->
<link rel="stylesheet" type="text/css" itemprop="javascript" href="js/fancybox/jquery.fancybox.css" media="all">
<!-- END Dynamic Menu -->
</head>
<body>
<!-- include header -->
<?php include 'temp/header.php';  ?>
<div class="wrapper">
  <div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
      <li> <img src="img/large/1.jpg" alt=""></li>
      <li> <img src="img/large/2.jpg" alt=""></li>
      <li> <img src="img/large/3.jpg" alt=""></li>
      <li> <img src="img/large/4.jpg" alt=""></li>
      <li> <img src="img/large/5.jpg" alt=""></li>
      <li> <img src="img/large/6.jpg" alt=""></li>
      <li> <img src="img/large/7.jpg" alt=""></li>
    </ul>
    <!-- ei-slider-large -->
    <ul class="ei-slider-thumbs">
      <li class="ei-slider-element">Current</li>
      <li><a href="#">Slide 1</a><img src="img/thumbs/1.jpg" alt=""></li>
      <li><a href="#">Slide 2</a><img src="img/thumbs/2.jpg" alt=""></li>
      <li><a href="#">Slide 3</a><img src="img/thumbs/3.jpg" alt=""></li>
      <li><a href="#">Slide 4</a><img src="img/thumbs/4.jpg" alt=""></li>
      <li><a href="#">Slide 5</a><img src="img/thumbs/5.jpg" alt=""></li>
      <li><a href="#">Slide 6</a><img src="img/thumbs/6.jpg" alt=""></li>
      <li><a href="#">Slide 7</a><img src="img/thumbs/7.jpg" alt=""></li>
    </ul>
    <!-- ei-slider-thumbs -->
  </div>
  <!-- ei-slider -->
</div>
<!-- wrapper -->
<div id="container" style="box-shadow: none; border: none">
  <div class="one-third">
    <a class = "pic_button1" target="_blank" href="#" style="color: gray;" >
    <img src="img/candel.jpg" alt="blah" width="300" height="170" style="border-radius: 10%;">
    <div class="desc">Condolence Screen Message</div>
    </a>
  </div>
  <div class="one-third">
    <a class = "pic_button2" target="_blank" href="#" style="color: gray">
    <img src="img/candel.jpg" alt="blah" width="300" height="170" style="border-radius: 10%;">
    <div class="desc">Web Casting</div>
    </a>
  </div>
  <div class="one-third last">
    <a class = "pic_button3" target="_blank" href="#" style="color: gray">
    <img src="img/candel.jpg" alt="blah" width="300" height="170" style="border-radius: 10%;">
    <div class="desc">Feed-Back</div>
    </a>
  </div>


  <div class="one-third" >
    <h2 style="color: white; font-family:myfont;">Condolence Screen Message</h2>
    <p style="color: gray;">.............................................................</p>
    
  </div>
  <div class="one-third" >
    <h2 style="color: white; color: white; font-family:myfont;">Web Casting</h2>
    <p style="color: gray;">.............................................................</p>
    
  </div>
  <div class="one-third last" >
    <h2 style="color: white; color: white; font-family:myfont;">Feed-Back</h2>
    <p style="color: gray;">.............................................................</p>
    
  </div>
  <div class="disc" style="color: gray;">
	<p>Funeral is a ceremony marking a person's death. Funerary customs comprise the complex of beliefs and practices used by a culture to remember the dead, from the funeral itself, to various monuments, prayers, and rituals undertaken in their honor. These customs vary widely between cultures, and between religious affiliations within cultures.</p>
</div>
</div>

<!-- ANOTHER -->


<!-- include footer -->
<?php include 'temp/footer.php';  ?>
</body>
</html>