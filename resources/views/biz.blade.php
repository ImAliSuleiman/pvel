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

                <div class="col-md-6">
                    <img src="images/biz-team-work.png" alt="Biz people picture" class="img-fluid" width="60%">
                </div>
            </div>
        </div>
    </section>
</body>

</html>