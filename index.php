<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilo.css" />

  <title>Document</title>
</head>
<body>
<div class="vid-container">
  <video
          class="bgvid"
          autoplay="autoplay"
          muted="muted"
          preload="auto"
          loop
  >
    <source src="assets/videos/video.mp4" type="video/mp4" />
  </video>
  <div class="inner-container">
    <video
            class="bgvid inner"
            autoplay="autoplay"
            muted="muted"
            preload="auto"
            loop
    >
      <source src="assets/videos/video.mp4" type="video/mp4" />
    </video>
    <div class="box">
      <h1>Porchester Interiors</h1>
      <button>Skip Intro</button>
    </div>
  </div>
</div>
</body>
<script>
  document.querySelector("body").onclick = function () {
    location.href = "home.html";
  };
</script>
</html>