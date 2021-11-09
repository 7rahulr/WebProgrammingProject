<?php 

include 'config.php';

error_reporting(0);

session_start();

try{
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $flavour = $_POST['flavour'];
        $kg = $_POST['kg'];
    
        $sql = "INSERT INTO users (name, email, address, phone, date, time, flavour, kg) VALUES ('$name', '$email', '$address', '$phone', '$date', '$time', '$flavour', '$kg')";
        $result = mysqli_query($conn, $sql);
            echo "<script>alert('Cake has been booked successfully!')</script>";
            $name = "";
            $email = "";  
            $address = "";  
            $phone = ""; 
            $date = ""; 
            $time = ""; 
            $flavour = ""; 
            $kg = ""; 
        }
}
catch(err) {
        echo `<script>alert($err)</script>`;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="cakefavicon.ico">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="style.css">
    <title>Priya's Kitchen</title>
</head>

<body>


    <!-- navigation starts -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand">Priya's Kitchen</a>

            <div class="collpase navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="#testimonial" class="nav-link">Testimonials</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Chef</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Order a cake</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navigation ends -->

    <!-- slider  section start -->
    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Priya's Kitchen</span>
                        <h1 class="mb-4">Birthday Cake</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Priya's Kitchen</span>
                        <h1 class="mb-4">Wedding Cake</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Priya's Kitchen</span>
                        <h1 class="mb-4"> Special Dessert</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(images/bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Priya's Kitchen</span>
                        <h1 class="mb-4"> Special Pastries</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- slider  section end  -->

    <!-- featured section starts  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/b1.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Desert</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/b2.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Chocolate Cake</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/b3.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Pastry</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url(images/b4.jpg);"></div>
                                    <div class="text text-center">
                                        <h3>Donuts</h3>
                                        <p><span>Chocolate</span>,
                                            <span>Sprinkles</span>,<span>Strawberry</span>,<span>Waffers</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- featured section ends  -->


    <!-- about us section starts  -->

    <section class="ftco-wrap-about" id="about">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_content">
                            <div class="intro_subtitle page_subtitle">About Us</div>
                            <div class="intro_title">
                                <h2>Beautiful Story</h2>
                            </div>
                            <div class="intro_text">
                                <p> Priya's Kitchen  is known as bakery unique for our square cupcakes and cakes. We take pride in using natural ingredients in our cupcakes, cakes and desserts.

Our treats are as deliciously wholesome as they are beautifully decorated. Choose from our signature cupcakes, weekly and holiday specials or custom created desserts.Our vision is to create upscale, quick-serve bakery with a focus on simple and satisfying souther style desserts and baked goods.Priys's Kitchen philosophy is to offer simple and delicious desserts that are easily accessible to clients via location or delivery options. Our ingredients are high quality; each dessert is carefully made with only the finest, all-natural ingredients.



</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/intro_1.jpg" alt="intro"></div>
                            </div>
                            <div class="col-xl-4 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/intro_2.jpg" alt="intro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-9">
                    <div class="row d-md-flex align-items-center">
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="11">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Cakes/Variety</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                    <span>Staffs</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="1500">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center text-md-left">
                    <p>The amount of love gained by you people is just pure and we are keep on improving our services
                        and tastes.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- about us section ends  -->

    <!-- gallery section starts  -->
    <section class="ftco-section bg-light" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-12 text-center heading-section ftco-animate">
                                <span class="subheading">Gallery</span>
                                <h2 class="mb-4">Our Hot Picked Cakes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish5.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish6.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish7.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="images/dish8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- gallery section ends  -->

    <!-- menu section starts -->
    <section class="ftco-section" id="menu">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialities</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Cakes</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Strawberry</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Chocolate Cake</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹399</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Red Valvet</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹500</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Wedding Cake</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu4.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Pineapple</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹450</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu5.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Belgium Cake</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu6.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Cookies</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Pastries</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu7.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Blackberries</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu8.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Orange</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/menu9.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Mango</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <p><span>Strawberry</span>, <span>Chocolate</span>, <span>Berry</span>, <span>Cream</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu section ends -->

    <!-- testimonial section starts -->
    <section class="ftco-section testimony-section img" id="testimonial"
        style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonials</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                      So happy to write a review for Priya's Kitchen. The cake they made for my wedding was perfect. From the cake tasting to the delivery of the cake everyone at Priya's Kitchen was helpful and enthusiastic. They worked within the parameters set by the venue and were open when I made changes. I cannot speak highly enough about the experience… and the cake itself! Beautiful, exactly as I imagined, and soooooo tasty! Thank you, Priya's Kitchen, for helping make our wedding a beautiful day!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Nilay Hirpara</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        These cupcakes are AMAZING!!!!‍ My dad got me some cupcakes for my birthday in April, and ever since then, I fell in love. I have taken my best friend to get cupcakes there, and she’s been hooked! For family birthdays, I get my cakes here!! It never fails me and people always ask me where I buy my cakes!! If you want something different and yummy, I highly recommend it!!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Nilay Hirpara</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        Fresh, light, fluffy, delicious! We don’t go anywhere else for cupcakes. We’ve tried the cupcakes, the grab & go cakes, AND the custom, pre-ordered cakes. It’s just such superior quality to other cakes and cupcakes, and it’s a no-brainer. The price point reflects the quality – and it’s worth every penny! Most people just tolerate cupcakes. These are ones you’ll crave.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Nilay Hirpara</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                      My family has been buying from Priya's Kitchen for many years, so it was a no-brainer that we would be using them to design our wedding cake! From the tasting to the wedding day, they were very helpful and made our cake dreams come to life! And of course, everything they make is delicious as well!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_4.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Nilay Hirpara</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-quote-left"></span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">
                                        This place is amazing. They sell cupcakes, ice cream, cake pops, cookies, and cakes. The place is always clean, and the staff is very friendly. You can place an order or come in and buy what they have available. They also have gluten-free options.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg);"></div>
                                        <div class="pl-3">
                                            <p class="name">Nilay Hirpara</p>
                                            <span class="position">Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial section ends -->

    <!-- staff section --- chef starts -->

    <section class="ftco-section" id="chef">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Chef</span>
                    <h2 class="mb-4">Our Master Chef</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef4.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Navnit Kumar</h3>
                            <span class="position mb-2">Cake Designer</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef1.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Nilay Hirpara</h3>
                            <span class="position mb-2">Owner</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef2.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Ravi Kumawat</h3>
                            <span class="position mb-2">Cake Maker</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/chef3.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Somyadeep Dey</h3>
                            <span class="position mb-2">Manager</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- staff section --- chef ends -->

    <!-- order a cake section starts -->

    <section class="ftco-section img" id="order" style="background-image: url(images/order_bg.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section ftco-animate mb-5 text-center">
                        <span class="subheading">Order</span>
                        <h2 class="mb-4">Your Cake</h2>
                    </div>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="John Doe" value="<?php echo $name; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="johndoe@gmail.com" value="<?php echo $email; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="123 Avenue Street" value="<?php echo $address; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input name="phone" type="text" class="form-control" placeholder="9874563215" value="<?php echo $phone; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input name="date" type="text" class="form-control" id="book_date" placeholder="Date" value="<?php echo $date; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input name="time" type="text" class="form-control" id="book_time" placeholder="Time" value="<?php echo $time; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cake Flavour</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select name="flavour" class="form-control" value="<?php echo $flavour; ?>" required>
                                            <option value="">Black Forest</option>
                                            <option value="">Yellow Butter Cake</option>
                                            <option value="">Pound Cake</option>
                                            <option value="">Red Velvet Cake</option>
                                            <option value="">Carrot Cake</option>
                                            <option value="">Sponge Cake</option>
                                            <option value="">Genoise Cake</option>
                                            <option value="">Chiffon Cake</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kg</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select name="kg" class="form-control" value="<?php echo $kg; ?>" required>
                                            <option value="">0.5</option>
                                            <option value="">1</option>
                                            <option value="">1.5</option>
                                            <option value="">2.5</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">Custom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <button name="submit" class="btn btn-primary py-3 px-5">
                                        Order Your Cake
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- order a cake section ends -->

    <!-- blog section starts -->
    <section class="ftco-section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget1.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Social Life</h4>
                                    <span></span>
                                    <p>Enjoy your social life.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget2.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Politics</h4>
                                    <span></span>
                                    <p>Be a part of politics.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="#" target="_blank">
                                <div class="thumb">
                                    <img src="images/cat-widget3.jpg" alt=""
                                        class="content-image img-fluid d-block mx-auto">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Food</h4>
                                    <span></span>
                                    <p>Let the food be finished.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section ends -->

    <!-- footer section starts -->
    <section class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Priya's Kitchen</h2>
                        <p>We serve and take all type of cake orders. You undertake  personalised cake of your own choice. We
                            have the best chef in the city working for us and happy in   serving  you.
                            <br><br><br>
                            Priyaskitchen@gmail.com
                            <br>
                            8888888888
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);"></a>
                        </div>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);"></a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>To get cake catalogue every month by subscribing below.</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Priyaskitchen@gmail.com">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section ends -->





    <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
