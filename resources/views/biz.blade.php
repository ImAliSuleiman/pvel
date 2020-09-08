<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</head>

<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light>
            <a class=" navbar-brand" href="#">Biz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" ml>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-------------------------- BANNER -------------------------->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Best Biz Platform</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                    <a href=""><img src="" class="icon-btn">Watch Demo</a>
                </div>

                <div class="col-md-6 text-center">
                    <img src="images/biz-team-work.png" alt="Biz people picture" class="img-fluid" width="80%">
                </div>
            </div>
        </div>
        <img src="images/wave.png" alt="Wave" class="shape-wave" width="100%">
    </section>

    <section class="services">
        <div class="container text-center">
            <!-- <div class="text-center"> -->
            <h1 class="title">What We Do?</h1>
            <!-- </div> -->
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="images/biz-team-work.png" alt="service image" class="service-image">
                    <h4>Service Title</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/biz-team-work.png" alt="service image" class="service-image">
                    <h4>Service Title</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/biz-team-work.png" alt="service image" class="service-image">
                    <h4>Service Title</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                </div>
            </div>

            <button type="button" class="btn btn-primary">All Services</button>
        </div>
    </section>

    <section id="about-us">
        <div class="container">
            <h1 class="title text-center">Why Biz Biz?</h1>

            <div class="row">
                <div class="col-md-6 about-us">
                    <h4 class="about-title">Lorem ipsum minima</h4>
                    <ul>
                        <li>Lorem ipsum sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor, consectetur adipisicing sit.</li>
                        <li>Lorem ipsum amet consectetur adipisicing amet.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    </ul>
                </div>

                <div class="col-md-6 text-center">
                    <img src="images/biz-team-work.png" alt="Biz people picture" class="img-fluid" width="60%">
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <h1 class="title text-center">Our Clients</h1>
            <div class="row offset-1">
                <div class="col-md-5 testimonial">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                    <img src="images/dev.jpg">
                    <p class="user-details"><b>Baba Njerekera</b><br>Co-Founder at Futuhi</p>
                </div>

                <div class="col-md-5 testimonial">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                    <img src="images/dev.jpg">
                    <p class="user-details"><b>Baba Njerekera</b><br>Co-Founder at Futuhi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="social-media">
        <div class="container text-center">
            <p>Find Us On Social Media</p>
            <div class="social-icons text-center">
                <a href="#"><img src="images/biz-team-work.png" alt="Twitter icon"></a>
                <a href="#"><img src="images/biz-team-work.png" alt="LinkedIn icon"></a>
                <a href="#"><img src="images/biz-team-work.png" alt="GitHub icon"></a>
                <a href="#"><img src="images/biz-team-work.png" alt="YouTube icon"></a>
            </div>
        </div>
    </section>

    <section id="footer">
        <img src="images/wave-inverted.png" alt="A wave" width="100%">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-box">
                    <img src="images/biz-team-work.png" alt="Logo" width="40%">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p class="footer-title"><b>Contact Us</b></p>
                    <p><i class="fa fa-phone"></i> +255 111 200 200</p>
                    <p><i class="fa fa-envelope"></i> info@biz.com</p>
                    <p><i class="fa fa-map-pin"></i> Kwa Mwalimu</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p class="footer-title"><b>Subscribe</b></p>
                    <input type="text" class="form-control" placeholder="Enter Email...">
                    <button type="button" class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
        <div>
            <hr>
            <p class="copyright">(c) 2020 Biz Inc.</p>
        </div>
    </section>

</body>

</html>