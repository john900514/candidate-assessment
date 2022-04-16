<template>
    <nav class="bg-black border-b border-gray-200 z-30 fixed top-0 w-full py-2">
        <div class="px-2 mx-auto max-w-screen-2xl sm:px-4 lg:px-8">
            <div class="flex justify-between h-16 md:h-18">
                <div class="flex px-2 lg:px-0">
                    <div class="flex items-center flex-shrink-0">
                        <a class="inline-flex items-center font-black font-display text-cool-indigo-800 text-xl" href="/">
                            <img class="h-10 sm:h-9 w-3/5 md:h-10 xl:h-8 object-contain" :src="$page.props.headerLogo" />

                            <span class="hidden ml-3 xl:inline-block">Tailwind <span class="text-cool-indigo-600"> Awesome </span></span>
                        </a>        </div>
                    <div class="hidden lg:ml-6 xl:ml-8 lg:flex lg:space-x-8" data-turbo="false">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" href="/">Home</a>
                        <a class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" href="/?type=template">Templates</a>
                        <a class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" href="/?type=kit">UI kits</a>
                        <a class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" href="/?price=free">Freebies</a>
                    </div>
                </div>

                <div class="flex items-center justify-end flex-1 px-2 sm:justify-center lg:ml-6 lg:justify-end">
                    <div class="relative hidden w-full h-12 max-w-lg rounded-full sm:block">
                        <form target="_blank" data-controller="newsletter" data-action="submit->newsletter#onSubmit" data-newsletter-target="form" action="https://www.getrevue.co/profile/tailwindawesome/add_subscriber" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="JTBlxuzpZ9zQnEyYhcXx9DqcquGrAzTtSdOVKEi_Yggzg7PGIqZewD0uMJMjlwgN5LbePB0hxxlO-Jqc45ntbw" autocomplete="off">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <!-- Heroicon name: solid/mail -->
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <input class="w-full pl-10 pr-24 py-3.5 border-0 bg-gray-100 border-transparent rounded-full leading-5 transition duration-150 placeholder-gray-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-cool-indigo-200 focus:border-cool-indigo-200 sm:text-sm" data-newsletter-target="email" required="required" placeholder="Get notified when we add new Tailwind templates" autocomplete="email" type="email" name="member[email]" id="member[email]">
                            <button type="submit" class="absolute inline-flex items-center h-10 px-4 py-2 text-sm text-white transition duration-150 duration-300 ease-in-out rounded-full outline-none right-1 top-1 bg-cool-indigo-600 md:px-6 sm:font-medium hover:bg-cool-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500">
                                Subscribe
                            </button>
                        </form>  </div>
                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white border border-transparent rounded-full shadow-sm sm:hidden bg-cool-indigo-600 hover:bg-cool-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" data-controller="toggle newsletter" data-toggle-remote="#newsletter-modal" data-action="click->toggle#toggleRemote click->newsletter#removePopupTimeout">
                        <!-- Heroicon name: solid/mail -->
                        <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Get new designs
                    </button>
                </div>
                <div class="flex items-center">

                    <!-- Mobile menu button -->
                    <button type="button" class="inline-flex items-center justify-center p-2 ml-3 text-gray-400 rounded-full lg:hidden hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cool-indigo-500" aria-controls="mobile-menu" aria-expanded="false" data-controller="toggle" data-toggle-remote="#mobile-menu" data-action="click->toggle#toggleRemote">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" data-toggle-target="toggleable">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>

                        <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" data-toggle-target="toggleable">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden lg:hidden" id="mobile-menu" data-controller="toggle" data-toggle-target="toggleable">
            <div class="px-2 pt-2 pb-3">
                <a class="block px-3 py-2 rounded-2lg text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/">Home</a>
                <a class="block px-3 py-2 rounded-2lg text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/?type=template">Templates</a>
                <a class="block px-3 py-2 rounded-2lg text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/?type=kit">UI kits</a>
                <a class="block px-3 py-2 rounded-2lg text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" href="/?price=free">Freebies</a>
            </div>
            <a class="inline-flex justify-center items-center w-full px-5 py-3 text-center font-medium text-cool-indigo-600 bg-gray-50 hover:bg-gray-100" href="https://twitter.com/intent/tweet?text=Check+out+Tailwind+Awesome&amp;url=https%3A%2F%2Fwww.tailwindawesome.com%2F&amp;via=tailwindawesome">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 -ml-1 opacity-80" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
                </svg>
                Tweet me
            </a>  </div>
    </nav>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "DefaultHeader",
    mounted() {
        console.log(this.$page.props.headerLogo)
    }
}
</script>

<style scoped>

</style>
