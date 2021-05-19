<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- topbar -->
    <section class="topbar">
        <article class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="text-white">Call support: 062218454</span>
                    
                </div>
                <div class="col-md-8">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Superdeals</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Best sellng</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Tech discovery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Future Brands</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Trending styles</a>
                      </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/happy-shop-logo-cropped.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beauty &amp; health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
    </nav>    

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Big beats on the go</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">See imagination on display</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Life without limits</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- popular -->
<section class="popular container py-5">
    <h2 class="text-center">What's popular</h2>
    <article class="owl-carousel owl-theme text-center">
        <a class="item border d-block" href="">
            <img src="img/pop1.jpg" alt="">
            <h5>Product 1</h5>
        </a>
        <a class="item border d-block" href="">
            <img src="img/pop2.jpg" alt="">
            <h5>Product 2</h5>
        </a>
        <a class="item border d-block" href="">
            <img src="img/pop3.jpg" alt="">
            <h5>Product 3</h5>
        </a>
        <a class="item border d-block" href="">
            <img src="img/pop4.jpg" alt="">
            <h5>Product 4</h5>
        </a>
        <a class="item border d-block" href="">
            <img src="img/pop5.jpg" alt="">
            <h5>Product 5</h5>
        </a>
        <a class="item border d-block" href="">
            <img src="img/pop6.jpg" alt="">
            <h5>Product 6</h5>
        </a>
    </article>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script>
   $('.carousel').carousel({
  interval: 5000
})

</script>
</body>
</html>