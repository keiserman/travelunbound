<?php
$faq_query = new WP_Query([
    "post_type" => "faq",
    "posts_per_page" => -1,
]);

if ($faq_query->have_posts()):
    while ($faq_query->have_posts()):
        $faq_query->the_post(); ?>
        <div faq class="border-b border-white overflow-hidden">
            <div faq-trigger class="text-xl py-4 flex gap-4 justify-between items-center cursor-pointer">
                <?php the_title(); ?>
                <div class="relative w-4 h-4 flex items-center">
                    <div class="w-4 h-0.5 bg-white"></div>
                    <div faq-icon-line class="absolute rotate-90 w-4 h-0.5 bg-white"></div>
                </div>
            </div>
            <div faq-content class="text-xl h-0 opacity-0">
                <div class="pb-8">
                    <?php echo apply_filters(
                        "the_content",
                        get_the_content()
                    ); ?>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;

wp_reset_postdata();
?>