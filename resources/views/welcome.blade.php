<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.scss">

</head>

<body class="antialiased">
    <div class="row header">
        <div class="row header-row">
            <div class="col-md-7 header-col-1">
                <div class="row">
                    <div class="col-md-6 header-col-1-left">
                        <h1>"</h1>
                        <h3>Ours custumers <br> Love what to do</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                            sed do eiusmod tempor. <br>
                            <br>
                        </p>
                    </div>

                    <div class="col-md-6 header-col-1-right">
                        <h1>Testimonials</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-5 header-col-2">
                <div class="row">
                    <div class="carousel-1 col-md-4 col-lg-3">
                        <div class="card-body">
                            <div class="card-head">
                                <img src="/images/index.jpeg" alt="" class="card-title " width="60" height="60">
                                <div class="card-text autor">
                                    <h3>Anne Pechou </h3>
                                    <p>developpeur</p>
                                </div>
                            </div>

                            <div class="cart-content description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                                sed do eiusmod tempor.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-2 col-md-4 col-lg-3">
                        <div class="card-body">
                            <div class="card-head">
                                <img src="/images/index.jpeg" alt="" class="card-title " width="60" height="60">
                                <div class="card-text autor">
                                    <h3>Anne Pechou </h3>
                                    <p>developpeur</p>
                                </div>
                            </div>

                            <div class="cart-content description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                                sed do eiusmod tempor.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card-group contenu">
        <div class="row contenu-principale">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our Pricing</h3>
                </div>

            </div>
            <div class="row">
                <div class="card col-md-4 contenu-card-1">
                    <div class="card-body">
                        <h5 class="card-title devise">Small</h5>
                        <div class="card-text price"><span class="sup">$</span>1.200</div>
                        <hr>
                        <ul class="card-content">
                            <li>10 Fields</li>
                            <li>Harvest up to 18 Kg</li>
                            <li>Sack Packaging</li>
                        </ul>
                    </div>
                    <div class="contenu-card-1-footer">
                        <button type="button" class="btn btn-danger"> MORE</button>
                    </div>
                </div>
                <div class="card col-md-4 contenu-card-2">
                    <div class="card-body">
                        <h5 class="card-title devise">Medium</h5>
                        <div class="card-text price"><span class="sup">$</span>2.400</div>
                        <hr>
                        <ul class="card-content">
                            <li>10 Fields</li>
                            <li>Harvest up to 18 Kg</li>
                            <li>Sack Packaging</li>
                        </ul>
                    </div>
                    <div class="contenu-card-2-footer">
                        <button type="button" class="btn btn-danger"> MORE</button>
                    </div>
                </div>
                <div class=" card col-md-4 contenu-card-3">
                    <div class="card-body">
                        <h5 class="card-title devise">Large</h5>
                        <div class="card-text price"><span class="sup">$</span>4.200</div>
                        <hr>
                        <ul class="cart-content">
                            <li>10 Fields</li>
                            <li>Harvest up to 18 Kg</li>
                            <li>Sack Packaging</li>
                        </ul>
                    </div>
                    <div class="contenu-card-3-footer">
                        <button type="button" class="btn btn-danger"> MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="footer-header row content">
            <div class="col-md-6 contact">
                <h3>Contact Us</h3>

                <div class="address">
                    <h4>Address</h4>
                    <p> 01 Bp 5927 Abidjan 01 <br>
                        01 Bp 4715 Abidjan 01 </p>

                </div>

                <div class="phone">
                    <h4>Phone</h4>
                    <p> +225 01 01010101 <br>
                        +225 07 07000000 </p>
                </div>
                <div class="email">
                    <h4>Email</h4>
                    <p> test@laravel.com <br>
                        formationlaravel@gmail.com </p>
                </div>
            </div>
            <div class="col-md-6">

                <form>
                    <h3>Send Us Message</h3>
                    <label for="inputName" class="for-label">Name</label>
                    <input type="text" class="form-control" id="inputName">
                    <label for="inputEmail" class="for-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                    <label for="inputMessage" class="for-label">Message</label>
                    <input type="textarea" class="form-control" id="inputMessage">

                    <button type="submit" class="btn btn-primary" id="submitBtn">Send Message</button>

                </form>
            </div>
        </div>
        <div class="row content footer-link">
            <div class="col-md-3">
                <h4>About us</h4>
                <a href="">how it work</a> <br>
                <a href="">Blog</a>
            </div>
            <div class="col-md-3">
                <h4>Inoformation</h4>
                <a href="">Faqs</a><br>
                <a href="">Termes et Conditions</a>
            </div>
            <div class="col-md-3">
                <h4>Conditions</h4>
                <a href="">warranty Politic</a><br>
                <a href="">Shipping Policy</a>
            </div>
            <div class="col-md-3">
                <h4>Connect With Us</h4>
                <a href="">facebook</a> <br>
                <a href="">instagram</a><br>
                <a href="">twitter</a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 copyright">
                <p>@2021 - Laravel | All Right Reserved </p>
            </div>
        </div>
    </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</body>

</html>
