<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Fading Fullscreenr Background Images</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

    <div class="container">
    
        <header>
        	<h1>Fading Fullscreenr</h1>
            <h2>Example Page</h2>
        </header>
        <div id="main" role="main">
        	
            <section id="leftColumn">
            	
                <article class="content">
                
                	<p>
                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar augue vel dolor interdum ullamcorper. Ut auctor orci eu nibh aliquam blandit at eu justo. Mauris dictum, tellus vehicula tempor scelerisque, diam turpis mattis magna, ut fringilla lectus nisi vitae odio. Sed sodales pharetra lacus, non euismod elit accumsan et. Quisque lacus tellus, semper at rutrum ut, adipiscing id enim. Morbi tortor enim, imperdiet et tempus rutrum, lacinia at ligula. Donec ac facilisis mi.
					</p><p>
						Phasellus faucibus odio et lectus consequat ut convallis augue pretium. Integer malesuada, massa eget cursus lobortis, nulla tellus ultrices nunc, quis semper mi nulla luctus nibh. Nam in nisl nibh. Integer non diam ac lectus facilisis bibendum. Pellentesque in nisi dolor. Donec dapibus turpis a massa congue et vehicula ante viverra. Maecenas eros lorem, fringilla ac dignissim et, eleifend sit amet felis. In hac habitasse platea dictumst. Morbi urna sapien, fringilla vel adipiscing nec, gravida nec nibh. Praesent ultricies fringilla convallis. Vivamus mattis congue dui, id placerat justo porttitor et. Vivamus ultricies dictum vehicula. Quisque dolor tellus, faucibus quis interdum pellentesque, sagittis eget neque.
					</p>
                
                </article>
                <div class="userContainer">
                
                	<article id="serverUsers">
                    	<h3>Users on Server</h3>
						<ul>
                        	<li>Player 1</li>
                            <li>Player 2</li>
                        </ul>
                    </article>
                    
                    <article id="teamspeakUsers">
                    	<h3>We have Mumble!</h3>
                        <a href="#">Join us on our mumble server!</a> Don't have mumble? You can get it for free, <a href="http://mumble.sourceforge.net/" target="_blank">right here</a>.
                    </article>
		            <div class="clear"></div>
                
                </div>
                
            </section>
            <section id="rightColumn">
            	
                <article class="moduleContainer" id="mapModule" style="background-image: url('images/layout/map.png');">
                	<a href="#" class="button">View Map</a>
                </article>
                
            </section>
            <div class="clear"></div>
            
        </div>
    </div> <!-- end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <!-- scripts -->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
