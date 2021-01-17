<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wagenabled - @yield("title","Home")</title>
    @section("css")
    <link rel="stylesheet" href="{{Asset('css/style.css')}}">
    <link rel="icon" href="logo.jpg">
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="initial-scale=1.0, width=device-width"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    @show
</head>

<body>

    @section("header")
    <!-- HEADER START HERE  -->
    <div class="container-fluid header_div">
        <div class="container">
            <div class="row">
                <div class="col-3" id="header_logo">
                    <img src="images/logo.png">
                </div>
                <div class="col-sm-6" id="header_nav_item">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Pet Pros</a></li>
                        <li><a href="#">Watch and Learn</a></li>
                    </ul>
                </div>
                <div class="col-3" id="header_button">
                    <a href="#" id="header_btn_login"> Login</a>
                    <button class="btn1" id="header_btn_2"> Become a Pro</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <h3 class="pet_people">For Pet People, By Pet People</h3>
                    <p class="explore_paragraph">Explore from 100’s of pet care professionals around your areas, learn
                        from pet care videos and look for best pet products </p>

                    <h5 class="would_like">I would like to </h5>
                    <div class="row" id="header_div_imgs">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <img class="header_imgs" src="images/Professional.png">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <img class="header_imgs" src="images/Shop.png">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <img class="header_imgs" src="images/Watch and learn.png">
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <img src="images/Dog Graphic 1.png" id="header_big_dog">
                </div>
            </div>

        </div>
    </div>
    <!-- HEADER END HERE -->
    @show


    @section("body-content")
    
    @include("website.component.body")
    @include("website.component.third_part")
    @include("website.component.form")
    
    @show
    <!-- FOOTER START HERE -->
    @section("footer")
    <section>
        <footer>

            <div class="container">
                <div class="row" id="footer-main-div">
                    <!-- FOOTER LOGO START -->
                    <div class="footer col-xs-12 col-sm-12 col-md-3 col-md-3 col-lg-3 ">
                        <img src="images/footer-logo.png" id="footer-logo">
                    </div>
                    <!-- END FOOTER LOGO HERE -->

                    <!-- FOOTER MENU START -->
                    <div class="footer footer-menu col-xs-12 col-sm-12 col-md-3 col-md-3 col-lg-3">
                        <h5 id="footer_hd">Menu</h5>
                        <div class="footer-menu" id="footer-menu-div">
                            <p>Home</p>
                            <p>About us</p>
                            <p>Find a pro</p>
                        </div>
                    </div>
                    <!-- END FOOTER MENU HERE -->


                    <!-- FOOTER LEGAL START -->
                    <div class="footer  footer-legal col-xs-12 col-sm-12 col-md-3 col-md-3 col-lg-3 ">
                        <h5 id="footer_hd">Legal</h5>
                        <div class="footer-menu" id="footer-legal-div">
                            <p>Terms and Conditions</p>
                            <p>Privacy Policy</p>
                            <p>Cookie Policy</p>
                        </div>
                    </div>
                    <!-- END FOOTER LEGAL HERE -->


                    <!-- FOOTER CONTACT START -->
                    <div class="footer footer-contact col-xs-12 col-sm-12 col-md-3 col-md-3 col-lg-3">
                        <h5 id="footer_hd">Contact</h5>
                        <div class="footer-menu" id="footer-contact-div">
                            <p>Support@wagenabled.com</p>
                            <p>Contact us <a href="#" id="contact-link">Here</a></p>
                            <div id="links_div">
                                <a href="#" class="footer-links"><img src="images/facebook.png"
                                        class="footer_links"></a>
                                <a href="#" class="footer-links"><img src="images/twitter.png" class="footer_links"></a>
                                <a href="#" class="footer-links"><img src="images/instagram.png"
                                        class="footer_links"></a>
                                <a href="#" class="footer-links"><img src="images/youtube.png" class="footer_links"></a>
                            </div>
                        </div>
                    </div>
                    <!-- END FOOTER CONTEACT HER -->
                </div>
        </footer>
    </section>
    <!-- FOOTER END HERE -->
    @show





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>