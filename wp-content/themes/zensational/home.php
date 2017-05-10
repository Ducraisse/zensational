<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="home">
    <div class="home__slider">
        <div class="home-slider owl-carousel">
            <div class="owl-stage-outer">
                <div class="owl-item">
                    <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/slider-img.jpg">
                </div>
            </div>
            <div class="owl-sage-outer">
                <div class="owl-item">
                    <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/slider-img.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="home__introduction">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Welcome to Zensational Beauty </h1>
                    <p>At Zensational Beauty we believe in the power of looking good and feeling great. Having “me-time” allows you to reconnect, rejuvenate and pamper yourself, and because we are centrally located in Piccadilly, we are able to offer a little escapism from the daily grind at your convenience, whether this is a quick spa treatment during your lunch, or a more indulgent experience when you have more time on your hands.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="home__services">
                <div class="col-xs-12 col-sm-4">
                    <div class="home__services__item">
                        <div class="service-img">
                            <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/services-one.jpg">
                        </div>
                        <div class="service-content">
                            <h3>Advanced Skin Treatments</h3>
                            <a href="#" title="view btn">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="home__services__item">
                        <div class="service-img">
                            <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/services-two.jpg">
                        </div>
                        <div class="service-content">
                            <h3>Advanced Skin Treatments</h3>
                            <a href="#" title="view btn">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="home__services__item">
                        <div class="service-img">
                            <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/services-three.jpg">
                        </div>
                        <div class="service-content">
                            <h3>Advanced Skin Treatments</h3>
                            <a href="#" title="view btn">VIEW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__about">
                <div class="home__about__text">
                    <h2>Each detail of our spa has been carefully crafted</h2>
                    <p>While our fully trained and accredited staff specialise in a range of beauty treatments, including Manicures (gel & shellac nails), Pedicures, HD Brows & Lashes, Lava Shell Massage, Lycon Brazilian Waxing, Shrinking Violet Body Wrap, Skin Treatments, Facials, Sienna Spray Tanning and Teeth Whitening. All our in-house brands have been picked by us with care, ensuring that only the finest ingredients make it onto our treatment menu.</p>
                    <p>Just a few moments with us and you will feel whole again. So explore our website to find out how we can add a little bit of style and oomph into your week. You’ve earned it!</p>
                    <p>We hope to see you soon.</p>
                    <p>
                        69 Lever Street, Northern Quarter <br>
                        Manchester, M1 1FL
                    </p>
                </div>
                <div class="home__about__img">
                    <img class="img-responsive" alt="about section image regarding passion" src="<?php bloginfo('template_url'); ?>/images/salong-img.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>