<?php
/*
Template Name: Base Page
*/
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="px-4 sm:px-8 flex relative h-screen items-center justify-center text-center text-white">
            <div class="padding-global">
                <h1 class="heading-h1 relative z-10">base <span class="font-sans">/page</span></h1>
            </div>
            <?php
            $hero_video_id = get_theme_mod("contact_hero_video");
            $hero_video_url = $hero_video_id ? wp_get_attachment_url($hero_video_id) : "";
            $hero_image = get_theme_mod("contact_hero_image");

            if ($hero_video_url): ?>
                <video class="absolute w-full h-full object-cover bg-black" autoplay muted loop>
                    <source src="<?php echo esc_url($hero_video_url); ?>" type="video/mp4">
                    <?php if ($hero_image): ?>
                        <img src="<?php echo esc_url($hero_image); ?>" alt="Fallback Hero Background">
                    <?php endif; ?>
                </video>
            <?php elseif ($hero_image): ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
            <?php endif;
            ?>
        </div>
        <div class="padding-global">
            <div class="flex justify-between gap-6 py-6">
                <div class="text-2xl"><span class="font-serif">secondary</span> page title</div>
                <div class="text-base">Image or video caption goes here</div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="padding-global py-44">
            <div class="container-small">
                <div class="grid gap-12">
                    <h1 class="heading-h1">first thing is first h1.</h1>
                    <h2 class="heading-h2">first thing is first h2.</h2>
                    <h3 class="heading-h3">a fresh take on luxury travel, unlocking a world of remarkable and memorable journeys h3.</h3>
                    <h4 class="heading-h4">Crafted for the modern traveller h4</h4>
                    <p class="text-2xl">with over 40 years of industry experience, we combine connections, insight, and creativity to redefine travel design with a personal and modern touch</p>
                    <h5 class="heading-h5">our approach h5</h5>
                    <p class="heading-h5">we do our best to create the perfect travel expenece for you through the nature modern life where multitasking is almost second mature; constant demands on our time and attention, the relentless struggle.</p>
                    <h6 class="heading-h6">our approach h6</h6>
                    <p class="heading-h6">Lorem ipsum dolor sit amet consectetur. Sit hac arcu lacus lobortis consequat nisi mattis. Ullamcorper eget mollis hendrerit tellus felis pretium at et erat. Nulla bibendum feugiat turpis enim sed ultricies dui adipiscing. Nunc integer mauris aliquam a molestie amet.</p>
                    <ol class="pl-8 border-l-8 border-secondary list-decimal list-inside text-xl flex flex-col gap-2">
                        <li>fill out enquiry or message us below</li>
                        <li>we'll get back to you with xyz</li>
                    </ol>
                    <ul class="text-lg list-disc list-inside">
                        <li>Hotel & Villa Bookings</li>
                        <li>Complex Itinerary Planning / Design</li>
                        <li>In-Destination Experiences</li>
                        <li>Restaurant recommendations / Bookings<sup>[1]</sup></li>
                        <li>Ground Transportation<sup>[2]</sup></li>
                        <li>Air / Rail Ticketing<sup>[1]</sup></li>
                        <li>Private Jet Charter</li>
                        <li>Cruise Planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>