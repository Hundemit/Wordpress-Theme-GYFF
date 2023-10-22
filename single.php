<?php get_header('single'); ?>
<!--  -->
<article id="post-<?php the_ID(); ?>" <?php post_class("container max-w-[768px] mx-auto pt-24 sm:pt-[15vh]  px-4 "); ?>>
    <!-- Title Screen -->
    <section class='mb-24 sm:mb-48 sm:px-4'>
        <!-- IMG -->
        <img src="<?php get_first_image(get_the_ID()) ?>" alt=""
            class="w-full h-full max-h-[200px] sm:max-h-[350px] rounded-lg mb-10 shadow-2xl shadow-darkLight object-cover" />
        <!-- Überschrift -->
        <div class="w-fit mb-5 sm:mt-12">
            <span class="text-white text-4xl sm:text-6xl font-bold"> <?php the_title(); ?>
        </div>
        <!-- Text -->
        <p class="text-white font-medium opacity-80 text-xl mx-auto"> <?php get_first_text_paragraph(get_the_ID()); ?>
        </p>
        <!--  -->
        <!-- Author -->
        <!--  --> <?php $author_name = get_the_author_custom(get_the_ID()) ?>
			
        <!--  -->
        <div class="flex gap-4 mt-5">
			<img src="<?php echo get_the_author_img_custom(get_the_ID())  ?>"
                alt="" class="w-[50px] rounded-full hover:rotate-12 duration-700" />			
            <div>
                <p class="text-white text-base font-bold"><?php echo $author_name ?></p>
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"
                    class="text-white text-sm opacity-80 font-medium"><?php echo get_the_date(); ?></time>
            </div>
        </div>
    </section>
    <!-- BLOG TEXT -->
    <!--  -->
    <!--  --> <?php get_blog_text(get_the_ID());?>
    <!--  -->
    <!--  -->
</article>
<!--  -->
<!--  --> <?php get_template_part('template_parts/blog'); ?>
<!--  -->
<!--  --> <?php get_footer('special'); ?>