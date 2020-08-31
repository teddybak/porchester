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

document.querySelector('body').addEventListener('click', function(){
transitionToPage("https://porchester.herokuapp.com/home.php")
})

transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
    setTimeout(function() {
        window.location.href = 'https://porchester.herokuapp.com/home.php'
    }, 500)
}

 document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})
</script>
</html>