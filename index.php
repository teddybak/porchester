<div id="fullwidth-video">
  <div class="fullwidth-video-bg">
    <video
      playsinline
      autoplay
      muted
      onplaying="this.controls=false"
      loop
      id="myvid"
    >
      <source
        src="assets/videos/video.mp4"
        type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'
      />
    </video>
  </div>
</div>
<div id="porchester">
  <h1 class="display-3">Porchester Interiors</h1>
  <h3 c>"First hand experience"</h3>
  <a href="home.html" class="close">Skip intro</a>
</div>

<script>
  video = document.getElementById("myvid");
  video.addEventListener("ended", function () {
    alert("video is ended");
    window.location.href = "home.html";
  });
</script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>

<style>
  #porchester {
    position: fixed;
    top: 3%;
    margin-left: 5%;
    z-index: 5000;
    color: white;
  }
  #fullwidth-video {
    max-width: 100%;
    min-height: 100%;
    position: relative;
  }

  #fullwidth-video .fullwidth-video-bg {
    position: absolute;
    z-index: 1;
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    overflow: hidden;
    background-size: cover;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: 0% 50%;
    background-image: url(http://mysite.com/assets/images/bg/myvideobg.jpg);
  }

  #fullwidth-video video {
    margin: auto;
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 0%;
    transform: translate(0%, -50%);
    visibility: visible;
    opacity: 1;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /** For Edge**/
  @supports (-ms-ime-align: auto) {
    #fullwidth-video video {
      object-fit: none;
      margin: none;
      position: inherit;
      z-index: 1;
      top: 50%;
      left: 0%;
      transform: translate(0%, -50%);
      height: auto;
      width: 100%;
    }
    h3 {
      font-style: italic;
    }
  }
  .close {
    position: fixed;
    color: white !important;
    z-index: 5000;
  }
</style>
