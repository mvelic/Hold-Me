<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="main-content">
    <header>
        <?php $hm_brand_logo = get_option('hm_brand_logo');
            if(!empty($hm_brand_logo)) {
                ?><h1><?php bloginfo('name'); ?></h1>
                  <img src="<?php echo $hm_brand_logo; ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="logo" /><?php
            } else {
                ?><h1 class="no-logo"><?php bloginfo('name'); ?></h1><?php
            }
        ?>
    </header>

    <section class="message">
        <h2><?php echo get_option('hm_coming_soon_label'); ?></h2>
        <p><?php echo get_option('hm_coming_soon_message'); ?></p>
    </section>

    <section class="stay-tuned">
        <h3>Subscribe to Updates</h3>
        <?php include_once('mailchimp_form.php'); ?>
        <ul class="social">
            <?php $hm_brand_facebook = get_option('hm_brand_facebook'); if(!empty($hm_brand_facebook)) { ?><li><a href="<?php echo $hm_brand_facebook; ?>" title="Like us on Facebook" class="facebook">Like us on Facebook</a></li><?php } ?>
            <?php $hm_brand_twitter = get_option('hm_brand_twitter'); if(!empty($hm_brand_twitter)) { ?><li><a href="<?php echo $hm_brand_twitter; ?>" title="Follow us on Twitter" class="twitter">Follow us on Twitter</a></li><?php } ?>
        </ul>
        <?php echo $user_message; ?>
    </section>
<?php get_footer(); ?>