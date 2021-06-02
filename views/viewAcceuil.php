<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- fontawsome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link href="public/css/bootstrap.css" rel="stylesheet" <!-- fontawsome -->
    <!-- css -->
    <link rel="stylesheet" href="public/css/style.css">
    <style>
    body {
        background-color: #126e82;
        ;
    }

    .navbar {
        background-color: #0c084c;
    }
    </style>
</head>

<body>

    <!-- header star -->
    <header>
        <!-- navbar star -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-trp ">
            <div class="container-xxl">
                <a class="navbar-brand" href="index.html"><img src="./images/Groupe 1.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <?php 
                    if(!isset($_SESSION['id'])){
                    ?>
                        <a class="nav-link2" aria-current="page" href="acceuil">Home</a>
                        <a class="nav-link2" href="login">Login</a>
                        <a class="nav-link2 float-right" href="register">Register</a>
                        <?php } else{?>
                        
                         
                         <a class="nav-link2" aria-current="page" href="acceuil">Home</a>
                        <a class="nav-link2" href="page_reservation">Reserver</a>
                        <a class="nav-link2" href="dasboard">Mon reservation</a>
                     
                    <?php } ?>

                    </div>

                </div>
            </div>
        </nav>v
        <!-- navbar end -->


        <!-- header end -->
        <!-- ======================================================= -->
        <!-- Featured Destination Star -->
        <section class="featured pb-5">
            <div class="container">
                <h2 class="text-center mt-5 text-secondary fw-normal">featured... <span
                        class="text-primary fw-bolder">destination</span></h2>
                <P class="text-center mb-5 text-secondary fw-normal">Lorem Ipsum is simply dummy text of the printing
                    and
                    Lorem Ipsum has been standard.......</P>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/1.jpg"
                                    class="img img-fluid" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="text-center text-secondary fw-normal">france country</h5>
                                <h2 class="card-title text-center text-secondary fw-bolder">Card title</h2>
                                <p class="card-text text-center">Book Economy Class Return Until 29 Apr 19 Lorem Ipsum
                                    is
                                    simply dummy text of the
                                    printing industry.</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-lg m-3">Primary</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/2.jpg"
                                    class="img img-fluid" alt="...">
                            </div>
                            <div class="card-body ">
                                <h5 class="text-center text-secondary fw-normal">france country</h5>
                                <h2 class="card-title text-center text-secondary fw-bolder">Card title</h2>
                                <p class="card-text text-center">Book Economy Class Return Until 29 Apr 19 Lorem Ipsum
                                    is
                                    simply dummy text of the
                                    printing industry.</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-lg m-3">Primary</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/3.jpg"
                                    class="img img-fluid" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="text-center text-secondary fw-normal">france country</h5>
                                <h2 class="card-title text-center text-secondary fw-bolder">Card title</h2>
                                <p class="card-text text-center">Book Economy Class Return Until 29 Apr 19 Lorem Ipsum
                                    is
                                    simply dummy text of the
                                    printing industry.</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-lg m-3">Primary</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- Featured Destination Star -->

        <!-- Offer section star -->
        <section class="offer mt-5 pb-3">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <div class="box ">
                            <h5 class="text-center">RICA AIRLINES</h5>
                            <h2 class="card-title text-center  fw-bolder">Student Offer</h2>
                            <h5 class="card-text text-center">Enjoy Extra Baggage Allowance</h5>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger btn-lg m-3">Primary</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="box ">
                            <h5 class="text-center">AIRLINES</h5>
                            <h2 class="card-title text-center  fw-bolder">10% Bonus</h2>
                            <h5 class="card-text text-center">Enjoy Extra Baggage Allowance</h5>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger btn-lg m-3">Primary</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="box ">
                            <h5 class="text-center">RICA AIRLINES</h5>
                            <h2 class="card-title text-center  fw-bolder">New Offer</h2>
                            <h5 class="card-text text-center">Enjoy Extra Baggage Allowance</h5>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger btn-lg m-3">Primary</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer section end -->

        <!-- Top Flight star -->
        <div class="container pb-5">
            <h2 class="text-center mt-5 text-secondary fw-normal">Top Flight Routes...<span
                    class="text-primary fw-bolder">Within Usa</span></h2>
            <P class="text-center mb-5 text-secondary fw-normal">Lorem Ipsum is simply dummy text of the printing and
                Lorem Ipsum has been standard.......</P>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-md-3">
                    <div class="card card-hover shadow-sm border-0 rounded">
                        <div class="card-img-top">
                            <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/4.jpg"
                                class="img img-fluid" alt="...">
                        </div>

                        <div class="card-body">

                            <div class="text-content d-flex">
                                <h5 class=" text-secondary text-dark fw-bolder">france country</h5>
                                <p class="ms-4">Arrival : 20:30</p>
                            </div>
                            <div class="text-content d-flex">
                                <h6 class=" text-secondary text-danger fw-bolder">Departure : 14:20</h6>
                                <div class="rating ms-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-hover shadow-sm border-0 rounded">
                        <div class="card-img-top">
                            <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/5.jpg"
                                class="img img-fluid" alt="...">
                        </div>
                        <div class="card-body ">
                            <div class="text-content d-flex">
                                <h5 class=" text-secondary text-dark fw-bolder">france country</h5>
                                <p class="ms-4">Arrival : 20:30</p>
                            </div>
                            <div class="text-content d-flex">
                                <h6 class=" text-secondary text-danger fw-bolder">Departure : 14:20</h6>
                                <div class="rating ms-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-hover shadow-sm border-0 rounded">
                        <div class="card-img-top">
                            <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/6.jpg"
                                class="img img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="text-content d-flex">
                                <h5 class=" text-secondary text-dark fw-bolder">france country</h5>
                                <p class="ms-4">Arrival : 20:30</p>
                            </div>
                            <div class="text-content d-flex">
                                <h6 class=" text-secondary text-danger fw-bolder">Departure : 14:20</h6>
                                <div class="rating ms-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-hover shadow-sm border-0 rounded">
                        <div class="card-img-top">
                            <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/7.jpg"
                                class="img img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="text-content d-flex">
                                <h5 class=" text-secondary text-dark fw-bolder">france country</h5>
                                <p class="ms-4">Arrival : 20:30</p>
                            </div>
                            <div class="text-content d-flex">
                                <h6 class=" text-secondary text-danger fw-bolder">Departure : 14:20</h6>
                                <div class="rating ms-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Flight end -->

        <!-- Discount section star -->
        <section class="discount pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- <img class="pt-5 me-5" src="http://themes.pixelstrap.com/rica/assets/images/flights/place.png"
                        alt="world image"> -->
                        <img src="public/images/world.png" alt="" class="img-fluid blur-up wow zoomIn  lazyloaded"
                            style="visibility: visible; animation-name: zoomIn;">
                    </div>
                    <div class="col-md-5">
                        <div class="banner-content ms-5">
                            <div>
                                <h5 class="fw-bold">special nature tour offer</h5>
                                <h2 class="fw-bold">discount <span>20-30%</span></h2>
                                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and type setti ng
                                    industry. Lorem
                                    Ipsum has been the of industry standard dum my text ever since the 1500s,</p>
                                <h2 class="fw-bold">$420</h2>
                            </div>
                            <div class="bottom-section d-flex align-items-center">
                                <button type="button" class="btn btn-danger btn-lg mb-3 ">BOOK NOW</button>
                                <div class="info-btn">
                                    <button type="button" class="btn btn-primary btn rounded mb-3 ms-4">7 days &nbsp; |
                                        &nbsp; 8 nights</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Discount section end -->

        <!-- Blog section star -->
        <section class="featured pb-5">
            <div class="container">
                <h2 class="text-center mt-5 text-secondary fw-normal">featured... <span
                        class="text-primary fw-bolder">destination</span></h2>
                <P class="text-center mb-5 text-secondary fw-normal">Lorem Ipsum is simply dummy text of the printing
                    and
                    Lorem Ipsum has been standard.......</P>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/1.jpg"
                                    class="img img-fluid" alt="...">
                            </div>
                            <div class="card-body ">
                                <h6 class="text-star text-secondary fw-normal"> <i
                                        class="fas fa-map-marker-alt me-2"></i>
                                    phonics, newyork</h6>
                                <h5 class="card-title text-star text-secondary fw-bold">Twice profit than before you.
                                </h5>
                                <p class="card-text text-star text-secondary">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Deleniti, vitae repellat .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/1.jpg"
                                    class="img img-fluid" alt="...">
                            </div>
                            <div class="card-body ">
                                <h6 class="text-star text-secondary fw-normal"> <i
                                        class="fas fa-map-marker-alt me-2"></i>
                                    phonics, newyork</h6>
                                <h5 class="card-title text-star text-secondary fw-bold">Twice profit than before you.
                                </h5>
                                <p class="card-text text-star text-secondary">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Deleniti, vitae repellat .</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-hover shadow-sm border-0 rounded">
                            <div class="card-img-top">
                                <img src="http://themes.pixelstrap.com/rica/assets/images/flights/destination/1.jpg"
                                    class="img img-fluid" alt="...">
                            </div>
                            <div class="card-body ">
                                <h6 class="text-star text-secondary fw-normal"> <i
                                        class="fas fa-map-marker-alt me-2"></i>
                                    phonics, newyork</h6>
                                <h5 class="card-title text-star text-secondary fw-bold">Twice profit than before you.
                                </h5>
                                <p class="card-text text-star text-secondary">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Deleniti, vitae repellat .</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- Blog section end -->

        <!-- service section star -->
        <section class=" bg-trp">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box d-flex align-items-center">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 476 476" style="enable-background:new 0 0 476 476;"
                            xml:space="preserve">
                            <g>
                                <path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48
                                        c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
                                        V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
                                        c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
                                        c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
                                        c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
                                        c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
                                        s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
                                        h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z"></path>
                            </g>
                        </svg>
                        <div class="box-content ms-3 pt-3">
                            <div>
                                <h5 class="fw-bold">call us</h5>
                                <p class="text-light">+91 123-456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box d-flex align-items-center">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 486.025 486.025"
                            style="enable-background:new 0 0 486.025 486.025;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M420.725,85.413c-42.1-42.1-98.1-65.3-157.6-65.3c-60.6,0-117.3,23.9-159.6,67.3c-4.6,4.7-4.5,12.3,0.2,17
                                            c4.7,4.6,12.3,4.5,17-0.2c37.8-38.7,88.3-60,142.4-60c109.7-0.1,198.9,89.1,198.9,198.8s-89.2,198.9-198.9,198.9
                                            s-198.9-89.2-198.9-198.9v-2.5l19.8,19.8c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-40.2-40.3
                                            c-4.7-4.7-12.3-4.7-17,0l-40.3,40.3c-4.7,4.7-4.7,12.3,0,17s12.3,4.7,17,0l19.8-19.8v2.5c0,59.5,23.2,115.5,65.3,157.6
                                            s98.1,65.3,157.6,65.3s115.5-23.2,157.6-65.3s65.2-98.1,65.2-157.6S462.825,127.513,420.725,85.413z">
                                    </path>
                                    <path d="M326.925,161.913l-147.4,147.3c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l147.4-147.4
                                            c4.7-4.7,4.7-12.3,0-17C339.225,157.213,331.625,157.213,326.925,161.913z">
                                    </path>
                                    <path d="M288.325,261.113c-16.7,16.7-16.7,44,0,60.7c8.1,8.1,18.9,12.6,30.4,12.6s22.3-4.5,30.4-12.6c16.7-16.7,16.7-44,0-60.7
                                            c-8.1-8.1-18.9-12.6-30.4-12.6C307.225,248.513,296.525,253.013,288.325,261.113z M332.125,304.913c-3.6,3.6-8.3,5.5-13.4,5.5
                                            s-9.8-2-13.4-5.5c-7.4-7.4-7.4-19.4,0-26.8c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5
                                            C339.525,285.513,339.525,297.513,332.125,304.913z"></path>
                                    <path
                                        d="M207.925,151.213c-11.5,0-22.3,4.5-30.4,12.6s-12.6,18.9-12.6,30.4s4.5,22.3,12.6,30.4s18.9,12.6,30.4,12.6
                                            s22.3-4.5,30.4-12.6c8.1-8.1,12.6-18.9,12.6-30.4s-4.5-22.3-12.6-30.4C230.125,155.713,219.425,151.213,207.925,151.213z
                                            M221.325,207.613c-3.6,3.6-8.3,5.5-13.4,5.5s-9.8-2-13.4-5.5c-3.6-3.6-5.5-8.3-5.5-13.4c0-5.1,2-9.8,5.5-13.4
                                            c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5c3.6,3.6,5.5,8.3,5.5,13.4C226.825,199.213,224.925,204.013,221.325,207.613z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="box-content ms-3 pt-3">
                            <div>
                                <h5 class="fw-bold">SPECIAL DISCOUNT</h5>
                                <p class="text-light">First Booking In 25% Off</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box d-flex align-items-center">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 483.3 483.3" style="enable-background:new 0 0 483.3 483.3;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
                                                v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
                                                c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z">
                                    </path>
                                    <path
                                        d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
                                                c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
                                                c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
                                                c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="box-content ms-3 pt-3">
                            <div>
                                <h5 class="fw-bold">NEWSLETTER</h5>
                                <p class="text-light">Scrambled It To Make.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <!-- <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                      </div> -->
                    <div class="input-group m-3">
                        <input type="text" class="form-control rounded-start" placeholder="Enter your email"
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-subscribe btn-primary rounded-end" type="button"
                                id="button-addon">subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- service section end -->

      
        <!-- footer end -->







        <!-- ===============javascript================= -->
        <!-- fontawsome -->
        <script src="js/all.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- typed js -->
        <script src="js/typed.js"></script>
        <!-- typed style -->
        <script src="js/type.js"></script>
</body>


</html>