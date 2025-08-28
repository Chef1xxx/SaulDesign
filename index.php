<?php

get_header();

?>

<div class="container">
    <div class="my-container">
        <div class="row">
            <div class="col-md-7 col-12">
                <div class="d-flex flex-column">
                    <h1 class="big">
                        CREATIVE UI <br><span class="blue">DESIGNER</span>
                    </h1>
                    <div class="d-flex" style="gap:24px">
                        <button class="btn my-btn bg-blue">Hire me</button>
                        <button class="btn my-btn">Download CV<img style="padding-left:10px;"
                                src="<?php echo mix('images/download.svg') ?>"></button>
                    </div>
                    <button class="btn arrow-btn"><img src="<?php echo mix('images/arrow-btn.svg') ?>" alt=""></button>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <img class="p1" src="<?php echo mix('images/p1.svg') ?>">
            </div>
        </div>
    </div>
    <div class="my-container">
        <div class="about-me">
            <div class="row">
                <div class="col-md-4 col-12">
                    <img class="arrow2 dd" src="<?php echo mix('images/arrow2.svg') ?>">
                    <img class="note dd" src="<?php echo mix('images/note.svg') ?>" alt="нота">
                    <img class="lightbulb dd" src="<?php echo mix('images/lightbulb.svg') ?>" alt="лампочка">
                    <h1>About <span class="blue"> me</span></h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                        interdum, ac
                        aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.... <a href="#"> Read
                            more</a>

                    </p>
                </div>
                <div class="col-md-7 col-12">
                    <img class="p2" src="<?php echo mix('images/p2.svg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="padding-bottom: 10%;">
<div class="container-works" style="">
    <div class="container">
        <div class="my-container">
            <h1>My recent <span class="blue">works</span></h1>
            <div class="carousel-container">
                <div class="owl-carousel owl-theme">
                    <div class="item" data-src="<?php echo mix('images/el1.svg') ?>">
                        <img src="<?php echo mix('images/el1.svg') ?>" alt="Work 1">
                    </div>
                    <div class="item" data-src="<?php echo mix('images/el2.svg') ?>">
                        <img src="<?php echo mix('images/el2.svg') ?>" alt="Work 2">
                    </div>
                    <div class="item" data-src="<?php echo mix('images/el3.svg') ?>">
                        <img src="<?php echo mix('images/el3.svg') ?>" alt="Work 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-container mfp-hide" id="image-popup">
        <img src="" alt="" class="popup-image">
    </div>
</div>
<div class="container">
    <div class="my-container">
        <img class="keyboard" src="<?php echo mix('images/keyboard.svg') ?>" alt="">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Got a project in <br> <span class="blue">mind?</span></h1>
                <img class="p3" src="<?php echo mix('images/p3.svg') ?>" alt="">
            </div>
            <div class="col-12 col-md-6">
                    <?php echo do_shortcode('[contact-form-7 id="784f8bf" title="Без названия"]');?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo mix('js/app.js') ?>"></script>
<?php
get_footer();