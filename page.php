<?php
get_header();
?>

<main id="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="bg-primary text-white">
                <div class="padding-global pt-40 pb-24">
                    <h1 class="heading-h1 text-center"><?php the_title(); ?></h1>
                </div>
            </section>
            <section>
                <div class="padding-global py-12">
                    <div class="container-medium"><?php the_content(); ?></div>
                </div>
            </section>
    <?php endwhile;
    endif; ?>
</main>

<?php
get_footer();
?>