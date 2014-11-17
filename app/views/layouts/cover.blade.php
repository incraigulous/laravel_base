<!DOCTYPE html>
<html lang="en-US" class="no-js">

@include('elements.head')

<body data-spy="scroll" data-target="#main-nav" data-offset="400">

<header id="home" class="parallax-bg" data-parallax-background="/images/header-bg2.jpg" data-stellar-background-ratio=".3">

    <div class="header-content">

        <img class="header-logo" src="/images/logo.png" alt=""/>

        <div class="flexslider header-slider">

            <ul class="slides">

                <li><h1 class="bordered-text">Welcome to <span class="primary">Quattro</span> Studio</h1></li>
                <li><h1 class="bordered-text">We are <span class="primary">Young</span></h1></li>
                <li><h1 class="bordered-text">We are <span class="primary">Passionate</span></h1></li>
                <li><h1 class="bordered-text">We have <span class="primary">Fresh</span> Ideas</h1></li>

            </ul>

        </div><!--End home-slider -->

        <a class="scroll-button scrollto" href="#coming-soon"><i class="fa fa-angle-down"></i></a>

    </div>

</header>

@include('elements.menu')

<!-- ==============================================
CONTACT
=============================================== -->
<section id="contact" class="parallax-bg light-typo padding-top-bottom " data-parallax-background="/images/contact-bg.jpg" data-stellar-background-ratio=".1">

    <div class="container">

        <a name="coming-soon" class="scrollto"></a>

        <h1 class="section-title">Coming Soon!</h1>
        <p class="section-description">Join our mailing list for more information as soon as it's available!</p>

        <div class="row">

            <!--=== Contact Form ===-->

            <form id="contact-form" class="col-sm-8 col-sm-offset-2" action="contact.php" method="post" novalidate>

                <div class="form-group">
                    <label class="control-label" for="contact-name">Name</label>
                    <div class="controls">
                        <input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" type="text" data-error-empty="Please enter your name">
                    </div>
                </div><!-- End name input -->

                <div class="form-group">
                    <label class="control-label" for="contact-mail">Email</label>
                    <div class=" controls">
                        <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                    </div>
                </div><!-- End email input -->

                <p class="text-center"><button name="submit" type="submit" class="btn btn-quattro" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Join List</button></p>
                <input type="hidden" name="submitted" id="submitted" value="true" />

            </form><!-- End contact-form -->

        </div>

    </div>

</section>

@include('elements.footer')

</body>

</html>