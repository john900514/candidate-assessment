<template>
    <nav class="bg-transparent border-b border-gray-200 z-30 fixed top-0 w-full py-2">
        <div class="px-2 mx-auto max-w-screen-2xl sm:px-4 lg:px-8">
            <div class="flex justify-between h-16 md:h-18">
                <!-- Hero Logo -->
                <div class="flex px-2 lg:px-0">
                    <div class="flex items-center flex-shrink-0">
                        <a class="inline-flex items-center font-black font-display text-cool-indigo-800 text-xl" href="/">
                            <img class="h-10 sm:h-9 w-3/5 md:h-10 xl:h-8 object-contain" :src="$page.props.headerLogo" />
                            <span class="hidden ml-3 xl:inline-block">Cap3 & <span class="text-cool-indigo-600"> B4y </span></span>
                        </a>
                    </div>
                </div>


                <div class="flex items-center justify-end flex-1 px-2 sm:justify-center lg:ml-6 lg:justify-end">
                    <div class="hidden lg:ml-6 xl:ml-8 lg:flex lg:space-x-8" data-turbo="false">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/"><i class="lar la-user text-xl mr-2 text-secondary font-bold"></i> Current Offers</a>
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/?type=template"><i class="las la-lock text-xl mr-2 text-secondary font-bold"></i> Member Login</a>
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/?type=kit"><i class="lar la-map-marker text-xl mr-2 text-secondary font-bold"></i> Locations</a>
                        <button type="button" class="inline-flex items-center justify-center p-2 ml-3 text-white rounded-full hover:text-secondary hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cool-indigo-500" aria-controls="mobile-menu" aria-expanded="false" data-controller="toggle" data-toggle-remote="#mobile-menu" data-action="click->toggle#toggleRemote">
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

    <slot name="extraHead">Extra Stuff</slot>
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
