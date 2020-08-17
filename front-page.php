<!-- This is the front page for the Wordpress font-->

<?php 

$image = get_field('about_image');
$picture = $image['sizes']['large'];
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

get_header();?>

<!-- page wrapper -->
<section class = 'page-wrap'>

<!-- hero container -->
<div class = 'hero-container' style="background-image: url('<?php echo $backgroundImg[0];?>'); background-position: 0px -600px; background-size: 100%;">
    <!-- page title -->
    <h1><?php the_title();?></h1>
</div>
<!-- end hero container -->

<!-- content container -->

<div class='content-container'>

    <!-- call content title from Advanced Form Field -->
    <h2><?php the_field('content_title'); ?></h2>

    <!-- call the content section of the page -->
    <?php get_template_part('includes/section', 'content');?>

</div>

<!-- end content container -->

<!-- about container -->
<div class='about-container'>

    <div class='about-content-container'>
        <div class='image-container'>
        <div class='about-image'>
            <img src="<?php echo $picture;?>" alt="fireplace">
        </div>
        </div>

        <div class='about-content'>
            <h2>About Hearth and Home</h2>
            <p>At Hearth and Home, we have a passion for creating homes unique to the individual or family. We focus on tying in the home around places in the home that bring people the most comfort and warmth: the kitchen and the fireplace. We believe that a home built around the ability to make great meals and bring warmth and light is the best place to start. While we focus on the kitchen and a fireplace, we focus on the whole house as well.</p>
            <p>We offer a wide range of products and services, from buying a simple kitchen appliance online to a full, custom home-decor redesign with one of our interior design professionals. Contact us today by clicking the button below and filling out the form, and we will get back to you within 24-48 hours!</p>

        <div class='cta-button'>
            <a href="#cta" class='button'>Contact Us Now!</a>
        </div>

        </div>

    </div>

</div>
<!-- end about container -->

<!-- contact container -->
<div class='contact-wrapper'>
<div id="cta" class="contact-container">
    <!-- form container -->
    <div class='contact-form'>
        
        <?php gravity_form(1, 'Contact Us', null, false, [], true, 100, true);?>

    </div>
    <!-- end form container -->
</div>
<!-- end contact container -->
</div>
<!-- end of contact wrapper -->
</section>

<?php get_footer();?>