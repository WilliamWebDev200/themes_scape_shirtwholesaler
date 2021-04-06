<?php
$link_url = 'https://newswc.shirtwholesaler.com/';
?>


<header class="header-static">

<nav class="navbar mb-3">
<div class="navbar__main">
<div class="container navbar__top">

<div class="navbar__left-holder">
    <button class="btn navbar__hamburger-btn n-mobile-only wtbx_mobile_trigger" id="burger-btn">
    <span></span>
    <div class="magni">
    <span class="icon">
        <svg viewBox="0 0 26 26" fill="#6B6B6B" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.862 19.544c2.148 0 4.235-.72 5.927-2.043l5.32 5.32 1.712-1.711-5.32-5.32a9.625 9.625 0 002.044-5.929C19.545 4.523 15.2.18 9.862.18 4.522.179.179 4.523.179 9.86c0 5.339 4.344 9.683 9.683 9.683zm0-16.945a7.27 7.27 0 017.262 7.262 7.27 7.27 0 01-7.262 7.262c-4.005 0-7.263-3.257-7.263-7.262C2.6 5.856 5.857 2.6 9.862 2.6z"></path>
        </svg>
    </span>
    </div>
    </button>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar__logo mr-auto">

    <!-- <img src="https://newswc.shirtwholesaler.com/images/new/shirtwholesaler_logo.png" alt="Shirtwholesaler"> -->
    <img src="<?php echo WTBX_URI . '/library/images/shirtwholesaler_logo.png' ?>" alt="Shirtwholesaler">
    </a>
</div>

<!-- navbar__right-holder -->
    <div class="navbar__right-holder">
        <div class="navbar__right-holder--desktop">
            <?php echo do_shortcode('[content_block slug=thumbnails]'); ?>
        </div>

        <div class="navbar__right-holder--mobile">
            <?php echo do_shortcode('[content_block slug=thumbnails]'); ?>


    </div>
</div>
<!-- navbar__right-holder -->

  </div>

<div class="container navbar__bottom">
    <div class="navbar__full-desktop">
        <?php echo do_shortcode('[content_block slug=thumbnails]'); ?>
    </div>

  </div>




</div>


</nav>

</header>