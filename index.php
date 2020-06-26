<?php
session_start();

if(isset($_SESSION['username'])){
	echo "you are logged out";
	header('location:signin.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>bedncot </title>
		<meta name="author" content="QUINTET">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="vendor/style.css">
		<script src="https://use.fontawesome.com/0645b0ef8b.js"></script>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">
		<script src="vendor/bootstrap/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css"  href="vendor/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css"  href="vendor/owlcarousel/owl.theme.default.min.css">
	</head>
	<body>
		<!-- <i class="fa fa-facebook" aria-hidden="true"></i> -->
		<!-----==============================header section============----------->
		<header id="header" class="">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto text-center">
							
							<li class="nav-item">
								<a class="nav-link" href="#aboutus">ABOUT US</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#carousel">BRANDS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">PHOTO GALLERY</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product">OUR PRODUCTS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#footer">CONTACT US</a>
							</li>
							<li class="nav-item">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">LOGOUT</a></button>
							</li>

						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--============================ /header=================================== -->
		<!--======================= banner section================================ -->
		<section id="banner">
			<div class="container banner">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
					</ul>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/banner.png" alt="slider_one_img" width="100%" height="500">
							<div class="carousel-caption">
								<h1 class="hero-title">LET LUXURY <span class="block">REVIVE YOU</span></h1>
								<p class="hero-descn">Lorem Ipsum dolor sit amet,consectetur adipiscing elit.Ves-<span class="block">tibulum interdum posuere eleifend.Vivamus nec gravid</span> <span class="block">tellus.Sed lobortis orci et lorem tincidut  </span></p>
								<div class="btns text-center mt-5"><a href="#">LEARN MORE</a></div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/banner2.png" alt="Chicago" width="100%" height="500">
						</div>
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</section>
	<!---==============================section about us================------>
	<section id="aboutus">
		<div class="container text-center about pb-5">
			<h2 class="section-title">WHO WE ARE</h2>
			<div class="line"></div>
			<p class="section-para" style="font-weight:600";>We specialise in a wide ranfe of beds, mattresses and accessories.We sell to top quality beds and mattresses from the top companies including Kurl-on, sleepwell, peps, skyfoam, mediflex, coir-on, finesse, rubco.we provide ourselves with providing the highest quality beds and bedding accessories, we the top brands so that we can ensureyour confidence and happiness with your products.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
			<div class="text-center mt-4 "><a href="">LEARN MORE</a></div>
		</div>
	</section>
	<!-------===========================================----------------------->
	<!-------==================product section==============-------------------->
	<section id="product" class="pb-5 mb-3">
		<div class="container">
			<h2 class="section-title text-center">FEATURED PRODUCTS</h2>
			<div class="line"></div>
			<div class="row text-center">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/one.png" alt="cardpic" style="width:350px; height:300px;">
							</div>
							<div class="flip-card-back text-center">
								<h4>Bonnel Spring Mattress</h4>
								<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
								<a href="" class="">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/three.png" alt="cardpic" style="width:350px; height:300px;">
							</div>
							<div class="flip-card-back text-center">
								<h4>Bonnel Spring Mattress</h4>
								<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
								<a href="" class="">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12  mb-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/two.jfif" alt="cardpic" style="width:350px; height:300px;">
							</div>
							<div class="flip-card-back text-center">
								<h4>Bonnel Spring Mattress</h4>
								<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
								<a href="" class="">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/three.jfif" alt="cardpic" style="width:350px; height:300px;">
							</div>
							<div class="flip-card-back text-center">
								<h4>Bonnel Spring Mattress</h4>
								<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
								<a href="" class="">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-3"><div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/four.png" alt="cardpic" style="width:350px; height:300px;">
						</div>
						<div class="flip-card-back text-center">
							<h4>Bonnel Spring Mattress</h4>
							<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
							<a href="" class="">LEARN MORE</a>
						</div>
					</div>
				</div></div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-4 mb-3">
					<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/five.png" alt="cardpic" style="width:350px; height:300px;">
						</div>
						<div class="flip-card-back text-center">
							<h4>Bonnel Spring Mattress</h4>
							<p>We specialise in a wide ranfe of beds, mattresses and accessories.we sell bed frames and mattresses separately and we offer great bundle deals where you can buy the bed and mattresses together and save some money.</p>
							<a href="" class="">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-------===========================================----------------------->
<!---------------owl carousel section======================----========--->
<section id="carousel">
<div class="container">
	<div class="owl-carousel owl-theme text-sm-center">
		<div class="item"><img src="images/clients/client-1.png" alt=""></div>
		<div class="item"><img src="images/clients/client-2.png" alt=""></div>
		<div class="item"><img src="images/clients/client-3.png" alt=""></div>
		<div class="item"><img src="images/clients/client-4.png" alt=""></div>
		<div class="item"><img src="images/clients/client-5.png" alt=""></div>
		<div class="item"><img src="images/clients/client-6.png" alt=""></div>
		<div class="item"><img src="images/clients/client-5.png" alt=""></div>
		<div class="item"><img src="images/clients/client-4.png" alt=""></div>
		<div class="item"><img src="images/clients/client-3.png" alt=""></div>
		<div class="item"><img src="images/clients/client-2.png" alt=""></div>
		<div class="item"><img src="images/clients/client-6.png" alt=""></div>
		<div class="item"><img src="images/clients/client-5.png" alt=""></div>
		<div class="item"><img src="images/clients/client-4.png" alt=""></div>
		<div class="item"><img src="images/clients/client-3.png" alt=""></div>
		<div class="item"><img src="images/clients/client-2.png" alt=""></div>
	</div>
</div>
</section>
<!-------------------===================================================--->
	<!---------======== footer section==============================------------>
	<section id="footer">
<div class="footer pt-4 pb-4" >
    <div class="container">
        <div class="text-white r1">
            <div class="row ">
                <div class="col-md-6 col-lg-2">
                    <h6 class="r2">quick
                        links
                    </h6>
                    <ul class="menu r2">
                        <li><a href="#">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our products</a></li>
                        <li><a href="#">photo gallery</a></li>
                        <li><a href="#">contact us</a></li>
                        <li><a href="#">brands</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-5 pt-3 pt-md-0 pt-xl-0">
                    <h6 class="r2">
                        testimonials
                    </h6>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Vestibulum posuere interdum eleifend.
                        Vivamus nec gravida tellus. Sed lobortis orci et lorem tincidunt viverra. Phasellus
                    </p>
                    <div class="flex">
                        <div class="b1 left"></div>
                        <div class="flex">
                            <div class="triangle_down"></div>
                            <div class="triangle_inner"></div>
                        </div>
                        <div class="b1 right"></div>
                    </div>
            
                    <div class="spacebetween disp_flex">
                        <div>
                            <div
                                class="text_align_end ">
                                john smith </div>
                            <div class="text_align_end">
                                CEO,Company
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pt-3 pt-md-3 pt-xl-0">
                    <h6 class="r2">
                        address</h6>
                    <p class="content_font">JJ International, Opp Obron
                        Mall,<br>
                        NH
                        Bypass,
                        Edapally,<br> Ernakulam Dist, Kerela.</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i><span
                            class="content_font ">0484 3118
                            005, 0484
                            3916
                            379</span></p>
                    <p><i class="fa fa-lg fa-mobile " aria-hidden="true"></i><span
                            class="content_font ">9633072519,
                            9544552935</span></p>
                </div>
                <div class="col-md-6 col-lg-2 pt-3 pt-md-3 pt-xl-0">
                    <h6 class="r2">
                        follow us
                    </h6>
                    <div class='social_icon_group align_center disp_flex flex_wrap '>
                        <div class='icon position_relative align_center social fb color_fb_icon'><a
                                href="https://www.facebook.com/" target="_blank"><i
                                    class='fa fb fa-facebook'></i></a>
                        </div>
                        <div class='icon position_relative align_center social tw color_twitter_icon'><a
                                href="https://twitter.com/" target="_blank"><i class='fa tw fa-twitter'></i></a>
                        </div>
                        <div class='icon position_relative align_center social in color_linkedin_icon'><a
                                href="https://www.linkedin.com/" target="_blank"><i
                                    class='fa ln fa-linkedin'></i></a>
                        </div>
                    </div>


                    <a href="#"><img src="images/bc.png" class="mt-4 mb-2"></a>
                    <p class="content_font">&copy; 2015, BednCot Pvt.Ltd.
                        All rights Reserved</p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="credits-name" >
    <div class="container">
        <div class="credits-txt">
            <span class="r2 content_font">Powered by<a href="#"> Webjior Infotech Pvt. Ltd</a>
            </span>
        </div>

    </div>

</div>
</section>






	<!-------------------===================================================--->



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
autoplay:1000,
responsiveClass:true,
responsive:{
0:{
items:3,
nav:false
},
600:{
items:3,
nav:false
},
1000:{
items:5,
nav:false,
loop:false
}
}
})
</script>
</body>
</html>