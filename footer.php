</main>
<!-- FOOTER NORMAL -->
<footer class="">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="<?php echo home_url(); ?>" class="flex items-center">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/Assests/picture/logo/Logo.png" class="h-8"
                        alt="" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">LINK</h2>
                    <ul class="text-gray-600 font-medium">
                        <li class="mb-4">
                            <a href="<?php echo home_url(); ?>/blog" class="hover:underline">BLOG</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">FOLGE UNS</h2>
                    <ul class="text-gray-600 font-medium">
                        <li class="mb-4">
                            <a href="https://www.linkedin.com/company/gyff/" class="hover:underline">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/gyff.today/" class="hover:underline">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
                    <ul class="text-gray-600 font-medium">
                        <li class="mb-4">
                            <a href="https://www.gyff.today/impressum/" class="hover:underline">Impressum</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Datenschutz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-4 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 2023 GYFF™. All Rights Reserved.</span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a
                    class="text-white hover:bg-lightBackground focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#dddddd" viewBox="0 0 256 256">
                        <path
                            d="M216,20H40A20,20,0,0,0,20,40V216a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V40A20,20,0,0,0,216,20Zm-4,192H44V44H212ZM112,176V124a12,12,0,0,1,21.43-7.41A40,40,0,0,1,192,152v24a12,12,0,0,1-24,0V152a16,16,0,0,0-32,0v24a12,12,0,0,1-24,0ZM96,124v52a12,12,0,0,1-24,0V124a12,12,0,0,1,24,0ZM68,80A16,16,0,1,1,84,96,16,16,0,0,1,68,80Z">
                        </path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </a>
                <a
                    class="text-white hover:bg-lightBackground focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#dddddd" viewBox="0 0 256 256">
                        <path
                            d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,72a24,24,0,1,1,24-24A24,24,0,0,1,128,152ZM176,20H80A60.07,60.07,0,0,0,20,80v96a60.07,60.07,0,0,0,60,60h96a60.07,60.07,0,0,0,60-60V80A60.07,60.07,0,0,0,176,20Zm36,156a36,36,0,0,1-36,36H80a36,36,0,0,1-36-36V80A36,36,0,0,1,80,44h96a36,36,0,0,1,36,36ZM196,76a16,16,0,1,1-16-16A16,16,0,0,1,196,76Z">
                        </path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--  --><?php wp_footer(); ?>
<!--  -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/scrollPhoneAnimation.js"></script>
</body>

</html>