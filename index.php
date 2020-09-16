<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="dist/jquery.vidbacking.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <title>Porchester Interiors</title>
  </head>
  <body>
    <video
      poster="assets/screenshot1.jpg"
      autoplay
      muted
      loop
      class="vidbacking"
    >
      <source src="assets/intro.webm" type="video/webm" />
      <source src="assets/intro.mp4" type="video/mp4" />
    </video>
    <div class="video-back">
      <h1>Porchester Interiors</h1>
          <span style="font-style: italic;font-size:38px;color:white">'First Hand Experience'</span>
      <div class="clearfix"></div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"
    ></script>
    <script src="dist/jquery.vidbacking.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $("body").vidbacking({
          masked: true,
        });
        $('body').click(function() {
          $(location).attr('href', 'home.php')
});
        
      });
    </script>
  </body>
</html>
