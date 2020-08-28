<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Porchester Interiors</title>
    <meta
      name="description"
      content="A simple video opening animation based on the one seen on http://momentsapp.com/"
    />
    <meta
      name="keywords"
      content="html5 video, animation, moments app, fullscreen, effect, web design, tutorial"
    />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.3.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/styleindex.css" />
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header class="codrops-header">
        <h1>Welcome to Porchester Interior</h1>
      </header>
      <!-- /codrops-header -->

      <div class="video-wrap">
        <div class="video-inner">
          <video
            class="video-player"
            src="media/woods.mp4"
            poster="media/woods.jpg"
            preload="auto"
          >
            <p>Sorry, but your browser does not support this video format.</p>
          </video>
          <button class="action action--close" id="close">
            <i class="fa fa-close"></i
            ><span class="action__label action__label--hidden"
              >Close preview</span
            >
          </button>
        </div>
        <!-- /video-inner --> 
      </div>
      <!-- /video-wrap-->
      <div class="content">
        <div class="loader">
          <i class="fa fa-spinner fa-pulse"></i>
        </div>
        <button class="action action--hidden action--play">
          <i class="fa fa-play"></i
          ><span class="action__label">Watch the video</span>
        </button>
      </div>
    </div>
    <!-- /container -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/main.js"></script>
    <script>
      $("#close").click(function (e) {
         e.preventDefault(); //will stop the link href to call the blog page
        setTimeout(function () {
          window.location.href = "home.html"; //will redirect to your blog page (an ex: blog.html)
        }, 2000); //will call the function after 2 secs.
      });
    </script>
  </body>
</html>
