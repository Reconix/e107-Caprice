<?php

/** Copyright stuff **/

if ( ! defined('e107_INIT')) { exit(); }

// No Defaults.

// Theme Language.
e107::lan('theme');

// Custom Shortcodes.

// CSS
$no_core_css = TRUE;

e107::css('url', 'http://fonts.googleapis.com/css?family=Amaranth');
e107::css('url', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic');

// JS
e107::js("theme", "style/js/jquery-1.6.4.min.js");
e107::js("theme", "style/js/ddsmoothmenu.js");
e107::js("theme", "style/js/jquery.jcarousel.js");
e107::js("theme", "style/js/jquery.prettyPhoto.js");
e107::js("theme", "style/js/carousel.js");
e107::js("theme", "style/js/jquery.flexslider-min.js");
e107::js("theme", "style/js/jquery.masonry.min.js");
e107::js("theme", "style/js/jquery.slickforms.jss");

function tablestyle($caption, $text, $id='', $mode='')
{
    global $style;

	//Welcome Message
		// Missing '.$caption.'
	if (($id == 'wm') && ($caption == 'Welcome'))
	{
		echo '

				'.$text.'

		';
		return;
	}

    switch($style)
    {

    case 'home':
      echo $caption;
      echo $text;
		break;

    case 'menu':
       echo $caption;
       echo $text;
		break;

    case 'full':
      echo $caption;
      echo $text;
		break;

		case 'none':
      echo $caption;
			echo $text;
		break;

		case 'notitle':
			echo $text;
		break;

		default:
      echo $caption;
			echo $text;
		break;
	}

}

/*
	TEMPLATES:
	 ¬ Headers
		- Default
		- Home Page

	 ¬ Footers
		- Default
		- Home Page

	 ¬ Layouts
		default
		[Custom HOME Page]
		[BLOG / NEWS]
		[Forums]
		[Sign Up]
		[Sidebar TEST]
*/

//----------- Headers & Footers ----------\\

// Default
$LAYOUT['_header_'] = <<<TMPL

<!-- Begin Wrapper -->
<div id="wrapper">
	<!-- Begin Sidebar -->
	<div id="sidebar">
		 <div id="logo"><a href="{SITEURL}"><img src="{SITEURL}e107_themes/caprice/style/images/logo.png" alt="Caprice" /></a></div>

  {NAVIGATION=main}

    <div class="sidebox">
    <ul class="share">
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-rss.png" alt="RSS" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-facebook.png" alt="Facebook" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-twitter.png" alt="Twitter" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
    </ul>
    </div>


	</div>
	<!-- End Sidebar -->

TMPL;

$LAYOUT['_footer_'] = <<<TMPL

<!-- Begin Footer -->
<div id="footer">
<div class="footer-box one-third">
<h3>Popular Posts</h3>
  <ul class="popular-posts">
    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s1.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s2.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s3.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

  </ul>
</div>
<div class="footer-box one-third">
<h3>About</h3>
<p>Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla.</p>
<p>Lorem Ipsum Dolor Sit
      Moon Avenue No:11/21
      Planet City, Earth<br>
      <br>
      <span class="lite1">Fax:</span> +555 797 534 01<br>
      <span class="lite1">Tel:</span> +555 636 646 62<br>
      <span class="lite1">E-mail:</span> name@domain.com</p>


</div>

<div class="footer-box one-third last">
<h3>Custom Text</h3>
<p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit. </p>
<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</p>
</div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->

</div>
<!-- End Wrapper -->

<div class="clear"></div>

<script type="text/javascript" src="{SITEURL}e107_themes/caprice/style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="{SITEURL}e107_themes/caprice/style/js/jquery.corner.js"></script>
<!-- <![endif]-->

TMPL;

// custom_home
if(THEME_LAYOUT === "custom_home")
{

$LAYOUT['_header_'] = <<<TMPL

<!-- Begin Wrapper -->
<div id="wrapper">
	<!-- Begin Sidebar -->
	<div id="sidebar">
		 <div id="logo"><a href="{SITEURL}"><img src="{SITEURL}e107_themes/caprice/style/images/logo.png" alt="Caprice" /></a></div>

  {NAVIGATION=main}

    <div class="sidebox">
    <ul class="share">
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-rss.png" alt="RSS" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-facebook.png" alt="Facebook" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-twitter.png" alt="Twitter" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
    	<li><a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
    </ul>
    </div>


	</div>
	<!-- End Sidebar -->

TMPL;

$LAYOUT['_footer_'] = <<<TMPL

<!-- Begin Footer -->
<div id="footer">
<div class="footer-box one-third">
<h3>Popular Posts</h3>
  <ul class="popular-posts">
    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s1.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s2.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

    <li>
      <a href="#"><img src="{SITEURL}e107_themes/caprice/style/images/art/s3.jpg" alt="" /></a>
      <h5><a href="#">Dolor Commodo Consectetur</a></h5>
      <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
    </li>

  </ul>
</div>
<div class="footer-box one-third">
<h3>About</h3>
<p>Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla.</p>
<p>Lorem Ipsum Dolor Sit
      Moon Avenue No:11/21
      Planet City, Earth<br>
      <br>
      <span class="lite1">Fax:</span> +555 797 534 01<br>
      <span class="lite1">Tel:</span> +555 636 646 62<br>
      <span class="lite1">E-mail:</span> name@domain.com</p>


</div>

<div class="footer-box one-third last">
<h3>Custom Text</h3>
<p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit. </p>
<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</p>
</div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->

</div>
<!-- End Wrapper -->

<div class="clear"></div>

<script type="text/javascript" src="{SITEURL}e107_themes/caprice/style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="{SITEURL}e107_themes/caprice/style/js/jquery.corner.js"></script>
<!-- <![endif]-->

TMPL;
}

//----------- Layouts ----------\\

//=-----[ Blank Page ]-----=\\

$LAYOUT['blank'] = '{---}';

//=-----[ Default Page]-----=\\

$LAYOUT['default'] = <<<TMPL
<!-- Content start -->
<div class="pageContent">

	<div class="md-padding">

		<div class="container">

			{ALERTS}

			{---}

		</div>

	</div>

</div>
<!-- Content END -->
TMPL;

//=-----[ Custom Home Page]-----=\\

$LAYOUT['custom_home'] = <<<TMPL

<!-- Begin Content -->
<div id="content">
<h1 class="title">Welcome</h1>
<div class="line"></div>
<div class="intro">Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

<!-- Begin Slider -->
<div id="slider">

  <div class="flexslider">
    <ul class="slides">
      <li><img src="{SITEURL}e107_themes/caprice/style/images/art/slide1.jpg" alt=""/></li>
      <li><img src="{SITEURL}e107_themes/caprice/style/images/art/slide2.jpg" alt=""/></li>
      <li><img src="{SITEURL}e107_themes/caprice/style/images/art/slide3.jpg" alt=""/></li>
      <li><img src="{SITEURL}e107_themes/caprice/style/images/art/slide4.jpg" alt=""/></li>
    </ul>
  </div>

</div>
  <!-- End Slider -->


  <h3>Ipsum Tortor Vestibulum Sollicitudin</h3>

  <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>



  <div class="one-half">
  <h3><img src="{SITEURL}e107_themes/caprice/style/images/icon-web.png" alt="" />Web Design</h3>
  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
  </div>

  <div class="one-half last">
  <h3><img src="{SITEURL}e107_themes/caprice/style/images/icon-illus.png" alt="" />Illustration</h3>
  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>

  <div class="clear"></div>



  <div class="one-half">
  <h3><img src="{SITEURL}e107_themes/caprice/style/images/icon-motion.png" alt="" />Motion Graphic</h3>
  <p>Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
  </div>

  <div class="one-half last">
  <h3><img src="{SITEURL}e107_themes/caprice/style/images/icon-pack.png" alt="" />Package Design</h3>
  <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, posuere velit aliquet. Donec id elit non mi porta gravida. </p>
  </div>

  <div class="clear"></div>

  <div class="line"></div>

  <!-- Begin Latest Works -->
  <h2>Latest Works</h2>
  <div class="carousel">
    <div id="carousel-scroll"><a href="#" id="prev"></a><a href="#" id="next"></a></div>
    <ul>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p1.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p2.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p3.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p4.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p5.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p6.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p7.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p8.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p9.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p10.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p11.jpg" alt="" /> </a> </li>
      <li> <a href="#"> <span class="overlay details"></span><img src="{SITEURL}e107_themes/caprice/style/images/art/p12.jpg" alt="" /> </a> </li>
    </ul>
  </div>
  <!-- End Latest Works -->

  <div class="line"></div>

  <h3>Malesuada Condimentum Inceptos Vehicula</h3>
  <p>Sed posuere consectetur est at lobortis. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

  <ul>
  <li>Sed posuere consectetur est at lobortis, Nullam id dolor id nibh ultricies vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
  </ul>




  {ALERTS}

  {WMESSAGE}

  {SETSTYLE=notitle}
  {---}

TMPL;

//=-----[ News ]-----=\\

$LAYOUT['news'] = <<<TMPL

  <!-- Begin Content -->
  <div id="content">
    <h1 class="title">Blog</h1>
    <div class="line"></div>
    <div class="intro">Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>
    <div class="primary">

    {---}

      <!-- Begin Page Navi -->
      <div class="page-navi">
        <ul>
          <li><a href="#" class="current">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">›</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
      <!-- End Page Navi -->
    </div>
    <!-- End Primary -->

    <!-- Begin Secondary -->
    <div class="secondary">


      <div class="sidebox">
        <h3>Categories</h3>
        <ul class="sidelist">
          <li><a href="#">Web Design (12)</a></li>
          <li><a href="#">Photography (10)</a></li>
          <li><a href="#">Manipulation (18)</a></li>
          <li><a href="#">Motion Graphic (13)</a></li>
          <li><a href="#">Graphic Design (10)</a></li>
        </ul>
      </div>

      <div class="sidebox">
        <h3>Popular Posts</h3>
        <ul class="popular-posts">
          <li> <a href="#"><img src="style/images/art/s1.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="style/images/art/s2.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="style/images/art/s3.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
        </ul>
      </div>

      <div class="sidebox">
        <h3>Custom Text</h3>
        <p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p> <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
      </div>


      <div class="sidebox">
        <h3>Archives</h3>
        <ul class="sidelist">
          <li><a href="#">January 2011 (12)</a></li>
          <li><a href="#">February 2011 (10)</a></li>
          <li><a href="#">March 2011 (18)</a></li>
          <li><a href="#">April 2011 (13)</a></li>
          <li><a href="#">May 2011 (10)</a></li>
          <li><a href="#">June 2011 (18)</a></li>
        </ul>
      </div>

      <div class="sidebox">
        <h3>Tags</h3>
        <ul class="sidelist">
          <li><a href="#">Web Design (12)</a></li>
          <li><a href="#">Photography (10)</a></li>
          <li><a href="#">Manipulation (18)</a></li>
          <li><a href="#">Motion Graphic (13)</a></li>
          <li><a href="#">Graphic Design (10)</a></li>
        </ul>
      </div>
    </div>
    <!-- End Secondary -->

    <div class="clear"></div>

TMPL;

//=-----[ Forums ]-----=\\

$LAYOUT['forums'] = <<<TMPL

  {---}

TMPL;
