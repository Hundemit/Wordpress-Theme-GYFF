<div class='my-24 sm:my-48 px-4 mx-auto max-w-screen-lg'>
    <!-- HEADER -->
    <div class="flex flex-col">
        <h2 class="bg-gradient-to-br from-darkGreen to-lightGreen bg-clip-text text-transparent text-base font-medium">
            Blog </h2>
        <h1 class="mb-8 text-4xl font-bold text-white">Hier sind unsere Artikel.</h1>
    </div>
    <!-- BLOGS -->
    <!--  --> <?php $args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'orderby' => 'date');
            $query = new WP_Query($args);?>
    <!--  -->
    <!--  --> <?php if ($query->have_posts()) : ?>
    <!--  -->
    <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3 mx-auto justify-center">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php get_template_part('template_parts/content'); ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?>
        <!--  -->
    </div>
    <!--  -->
    <!--  --> <?php else : ?> <?php get_template_part('template_parts/content', 'error'); ?> <?php endif; ?>
</div>