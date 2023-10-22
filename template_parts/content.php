<article
    <?php post_class(" projectCard hover:-translate-y-2 hover:scale-105 hover:last:text-dark duration-200 rounded-xl"); ?>>
    <a href="<?php the_permalink(); ?>">
        <img src="<?php get_first_image(get_the_ID()) ?>" class="mb-5 h-44 rounded-lg object-cover w-full"
            alt="Image 1" />
    </a>
    <h2 class="mb-2 text-2xl font-bold text-white">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <a href="<?php the_permalink(); ?>" class="inline-flex items-center font-medium text-darkGreen hover:underline">
        Hier gehts zum Blog <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
</article>