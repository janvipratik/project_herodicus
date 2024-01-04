<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERODIKUS</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar-bg">
        <div class="container">
            <div class="navbar-main">
                <div>
                    <a class="logolink" href="$">HERODIKUS <img src="" alt=""></a>
                </div>
                <div>
                    <ul class="navbar-item">
                        <li><a href="#" class="navbar-active">Home</a></li>
                        <li><a href="#">Become Physio</a></li>
                        <li><a href="#">Get a Coach</a></li>
                        <li><a href="#">Membership</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <a class="navbar-sign-upbtn" href="#">SIGN UP</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- footer start  -->
    <div class="footer-section-bg">
        <div class="newsletter-text-main">
            <div class="container">
                <div class="row ">
                    <div class="col-6">
                        <div class="newsletter-text">
                            <h5>Newsletter</h5>
                            <p>Subscribe for latest NEWS from our company </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-email-input">
                            <input class="form-control" type="email" placeholder="Email">
                            <button class="subscrib-footer"> SUBSCRIBE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-menu-main">
            <div class="container">
                <div class="row ">
                    <div class="col-6">
                        <div class="newsletter-text">
                            <h2 class="text-light">HERODIKUS</h2>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <p class="copyright-text">Copyright © 2023 Herodikus. All Rights Reserved.</p>
                    </div>
                    <div class="col-6">
                        <div class="social-icon">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end  -->


    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.min.js') }}"></script>

    <script>
		var time = undefined;
		$(function(){
			//init
			$('.msrItems').msrItems({
				'colums': 4, //columns number
				'margin': 15 //right and bottom margin
			});

			//update columns size on window resize
			$( window ).on('resize', function(e) {
				clearTimeout(time);
				time = setTimeout(function(){
					$('.msrItems').msrItems('refresh');
				}, 200);
			})

			//load new elements(without updating existing)
			$('.msrItems').msrItems('doload', [
				'<div class="itm8 msrItem"></div>',
				'<div class="itm9 msrItem"></div>',
				'<div class="itm10 msrItem"></div>'
			]);
		});
	</script>
</body>

</html>
