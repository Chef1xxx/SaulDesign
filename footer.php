<footer>
    <hr>
    <div class="container">
        <?php wp_nav_menu([
            "theme_location" => "top",
            "container" => "nav",
        ]); ?>
        <div class="links">
            <a href="#"><img src="<?php echo mix('images/facebook.svg')?>" alt=""></a>
            <a href="#"><img src="<?php echo mix('images/instagram.svg')?>" alt=""></a>
            <a href="#"><img src="<?php echo mix('images/twitter.svg')?>" alt=""></a>
            <a href="#"><img src="<?php echo mix('images/youtube.svg')?>" alt=""></a>
        </div>
        <p class="privacy-policy">
            Terms of Service - Privacy Policy
        </p>
    </div>
</footer>


<?php wp_footer() ?>
</body>

</html>