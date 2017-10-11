<?php get_header(); ?>
<section class="showcase"
         style="background: url('<?= get_theme_mod('showcase_image', get_bloginfo('template_directory') . '/assets/images/showcase.jpg') ?>') no-repeat center center;">
    <div class="container">
        <h1><?= get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme') ?></h1>
        <p><?= get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam') ?></p>
        <a class="btn btn-primary btn-lg"><?= get_theme_mod('showcase_button_text', 'Get Started') ?></a>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if (is_active_sidebar('box1')): ?>
                    <?php dynamic_sidebar('box1') ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (is_active_sidebar('box2')): ?>
                    <?php dynamic_sidebar('box2') ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (is_active_sidebar('box3')): ?>
                    <?php dynamic_sidebar('box3') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
