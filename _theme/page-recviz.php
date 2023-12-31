
<?php 
/*
Template Name: Реквизиты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/page-subhead');?>
<section class="section">
    <div class="_container">

        <?
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
            }
        ?>

        <div class="text_styles">
            <h2>Карточка: <?php echo carbon_get_theme_option( 'org_name' ); ?></h2>
    
            <? the_content(); ?>
        </div>

    </div>
</section>
    

<?php get_footer(); ?>