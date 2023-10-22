<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<!-- HEADER NORMAL -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--  --> <?php wp_head(); ?>
</head>

<body id="body" <?php body_class($class = 'duration-200 bg-background relative overflow-x-hidden'); ?>>
    <div class="bg-noiose m-1 sm:m-4 rounded-xl"></div>
    <header class="fixed z-50 backdrop-blur-2xl top-0 w-screen" x-data="{ mobileMenu: false }">
        <nav class="mx-auto flex container items-center justify-between p-6 duration-200 backdrop-blur-lg"
            aria-label="Global">
            <div id="logo" class="flex">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="w-auto h-9" src="<?php echo get_bloginfo('template_url'); ?>/Assests/picture/logo/Logo.png"
                        alt="" />
                </a>
            </div>
            <div id="buttonContainer" class="lg:order-3 flex">
                <a id="" href="https://forms.gle/eQEBzhtcCvTHcuC38" target="_blank"
                    class="joinWaitListButton inline-flex mr-4 lg:mr-0 items-center px-5 py-2.5 text-base font-medium text-center text-white bg-gradient-to-br from-darkGreen to-lightGreen rounded-lg focus:ring-4 focus:outline-none focus:ring-darkGreen">
                    <span
                        class="inline-flex items-center justify-center w-4 h-4 mr-2 text-xs font-semibold text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd"
                            viewBox="0 0 256 256">
                            <path
                                d="M172,156a12,12,0,0,1-12,12H96a12,12,0,0,1,0-24h64A12,12,0,0,1,172,156Zm-12-52H96a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm60-56V216a20,20,0,0,1-20,20H56a20,20,0,0,1-20-20V48A20,20,0,0,1,56,28H90.53a51.88,51.88,0,0,1,74.94,0H200A20,20,0,0,1,220,48ZM128,36a28,28,0,0,0-27.71,24h55.42A28,28,0,0,0,128,36Zm68,16H178.59A52.13,52.13,0,0,1,180,64v8a12,12,0,0,1-12,12H88A12,12,0,0,1,76,72V64a52.13,52.13,0,0,1,1.41-12H60V212H196Z">
                            </path>
                        </svg>
                    </span>
                    <p class="leading-3 pt-1">Join Waitlist</p>
                </a>
                <div id="mobileMenuButton" id class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
                        @click="mobileMenu = !mobileMenu">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="desktopMenuButtons" class="hidden lg:flex md:gap-x-12">
                <a href="#aktienanalyse" class="text-lg font-normal leading-6 text-white">Aktienanalyse</a>
                <a href="#aktienscreener" class="text-lg font-normal leading-6 text-white">Aktienscreener</a>
                <a href="#unternehmen" class="text-lg font-normal leading-6 text-white">Unternehmen</a>
                <a href="#kontakt" class="text-lg font-normal leading-6 text-white">Kontakt</a>
                <a href="<?php echo home_url(); ?>/blog" class="text-lg font-normal leading-6 text-white">Blog</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="mobileMenu" class="lg:hidden">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10 w-3/4 h-screen" @click="mobileMenu = !mobileMenu"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto px-6 py-6 sm:max-w-sm h-screen bg-background shadow-left shadow-black shadow-2xl">
                <div class="flex items-center justify-between">
                    <a href="#" @click="mobileMenu = !mobileMenu" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="w-auto h-9"
                            src="<?php echo get_bloginfo('template_url'); ?>/Assests/picture/logo/Logo.png" alt="" />
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-white" @click="mobileMenu = !mobileMenu">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a @click="mobileMenu = !mobileMenu" href="#aktienanalyse"
                                class="-mx-3 block rounded-lg px-3 py-2 text-xl font-medium leading-7 text-white hover:bg-lightBackground">Aktienanalyse</a>
                            <a @click="mobileMenu = !mobileMenu" href="#aktienscreener"
                                class="-mx-3 block rounded-lg px-3 py-2 text-xl font-medium leading-7 text-white hover:bg-lightBackground">Aktienscreener</a>
                            <a @click="mobileMenu = !mobileMenu" href="#unternehmen"
                                class="-mx-3 block rounded-lg px-3 py-2 text-xl font-medium leading-7 text-white hover:bg-lightBackground">Unternehmen</a>
                            <a @click="mobileMenu = !mobileMenu" href="#kontakt"
                                class="-mx-3 block rounded-lg px-3 py-2 text-xl font-medium leading-7 text-white hover:bg-lightBackground">Kontakt</a>
                            <a @click="mobileMenu = !mobileMenu" href="<?php echo home_url(); ?>/blog"
                                class="-mx-3 block rounded-lg px-3 py-2 text-xl font-medium leading-7 text-white hover:bg-lightBackground">Blog</a>
                        </div>
                        <div class="py-6">
                            <a @click="mobileMenu = !mobileMenu"  href="https://forms.gle/eQEBzhtcCvTHcuC38" target="_blank"
                                class="joinWaitListButton inline-flex w-full justify-center mr-4 lg:mr-0 items-center px-5 py-2.5 text-base font-medium text-center text-white bg-gradient-to-br from-darkGreen to-lightGreen rounded-lg focus:ring-4 focus:outline-none focus:ring-darkGreen">
                                <span
                                    class="inline-flex items-center justify-center w-4 h-4 mr-2 text-xs font-semibold text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M172,156a12,12,0,0,1-12,12H96a12,12,0,0,1,0-24h64A12,12,0,0,1,172,156Zm-12-52H96a12,12,0,0,0,0,24h64a12,12,0,0,0,0-24Zm60-56V216a20,20,0,0,1-20,20H56a20,20,0,0,1-20-20V48A20,20,0,0,1,56,28H90.53a51.88,51.88,0,0,1,74.94,0H200A20,20,0,0,1,220,48ZM128,36a28,28,0,0,0-27.71,24h55.42A28,28,0,0,0,128,36Zm68,16H178.59A52.13,52.13,0,0,1,180,64v8a12,12,0,0,1-12,12H88A12,12,0,0,1,76,72V64a52.13,52.13,0,0,1,1.41-12H60V212H196Z">
                                        </path>
                                    </svg>
                                </span>
                                <p class="leading-3 pt-1">Join Waitlist</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>