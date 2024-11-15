<?php get_header(); ?>

<main class="container mx-auto p-4">
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-bold">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p class="text-sm text-gray-600"><?php the_excerpt(); ?></p>
                    <a class="text-blue-500 hover:underline" href="<?php the_permalink(); ?>">
                        Read More
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>