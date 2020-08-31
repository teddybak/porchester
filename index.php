<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="video_wrapper">

    <video autoplay muted loop>
        <source src="video/intro.mp4" type="video/mp4">
    </video>

    <div id="wrapper">
        <h1>Porchester Interiors</h1>
        <span class="experience">'First Hand Experience'</span>
    </div>

</div>
</body>
<script>
var body = document.querySelector("body");
body.addEventListener('click', function (){
document.location.href = '<?php echo "home.php"; ?>';
})
</script>
</html>