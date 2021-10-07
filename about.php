<?php

session_start();
echo '<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>';
if (isset($_SESSION['username'])) 
{
    
    if (isset($_SESSION['unread_notifications'])) 
    {
        echo '<script>console.log("new notifications - '.$_SESSION['unread_notifications'].'");</script>';
    }
    
}
else {
	$_SESSION['user_id'] = 0; //not logged in
}

$_SESSION['curFilm'] = 5;
echo '<script>console.log("test - '.$_SESSION['curFilm'].'");</script>';

?>

<!DOCTYPE html>
<html>
<head>
    <title>FindFilm</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <link href="fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="fonts/material-icon/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>


<body>



    <div class="popup-container">
	    <span class="popuptext" id="popup"> </span>
    </div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Practica_project/header.php"; ?>


    <div class="wrapper main"> 
        <div class="about-main-wrapper">
            <div class="logo-name">
                <h1> 
                    FindYourMovie
                </h1>

                <p class="short-desc"> 
                    Bun venit la siteul FindYourMovie, aici aveți posibilitatea de a găsi filmul potrivit pentru dumneavoastră,
                    cât și de a deține o listă de filme favorite.
                </p>
                
                <a class="links" href="search"> 
                    <div class="start-button">
                        Get Started 
                    </div>
                </a>

            </div>

            <div class="tv-icon">
                
            </div>

        </div>

    </div>

    <div class="wrapper details"> 

 
        <div class="about-details">
            <div class="icon-details"> 
                <image class="about-icon" src="css/assets/rating.png">
                <h1> Rating și comentarii </h1>
            </div>

            <p> 
                Sistemul dat oferă o conexiune mai mare cu alți utilizatori, deasemenea oferind posibilitatea
                de a observa filmele mai actuale și mai captivante după opinia celorlalți utilizatori
            </p>
            
        </div>

        <div class="about-details" style="margin-left: 9%;">
            <div class="icon-details"> 
                <img class="about-icon" src="css/assets/film.png">
                <h1> Biblioteca Filme </h1>
            </div>

            <p> 
                Aplicația oferă o gamă largă de filme de diferite genuri pentru fiecare gust a dumneavoastră

            </p>
            
        </div>


    </div>

    <!-- <div class="clearfix"> -->

        <div class="wrapper recent-films clearfix">
            <div class="new-films">

                <h1 class="title-films"> Filme Noi</h1>
                
                <div class="main-carousel" 
                    data-flickity='{
                        "cellAlign": "left", 
                        "contain": true,
                        "pageDots": false,
                        "prevNextButtons": false,
                        "autoPlay": 6000,
                        "pauseAutoPlayOnHover": false
                    }'>
                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>
                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>
                    
                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                    <div class="carousel-cell">
                        <img class="carousel-img" src="css/assets/wallpaper-test.jpg">
                    </div>

                </div>

            </div>

            
        </div>

    <!-- </div> -->

    

<footer class="footer">
    <nav class="nav footer-nav">
        <p class="logo"><i class="footer-txt fa fa-copyright" aria-hidden="true"> 2021, All Rights Reserved.</i></p>
        <ul class="menu">
            <li><i class="fa fa-facebook"></i></li>
            <li><i class="fa fa-twitter"></i> </li>
            <li><i class="fa fa-linkedin"></i></li>
            <li><i class="fa fa-vk"></i></li>
        </ul>
    </nav>
</footer>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>