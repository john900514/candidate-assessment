<template>
    <div class="drawer drawer-end">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" :checked="showSidebar">
        <div class="drawer-side fixed" :class="showSidebar ? 'z-50 h-screen' : ''">
            <label for="my-drawer-4" class="drawer-overlay"></label>
            <ul class="menu p-4 overflow-y-auto w-screen sm:w-96 bg-slightly-transparent-black text-base-content">
                <div class="text-right">
                    <label for="my-drawer-4" class="">
                        <button type="button" class="inline-flex items-center justify-center p-2 ml-3 text-white rounded-full hover:text-secondary hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cool-indigo-500" @click="toggleShowSidebar()">
                            <span class="sr-only">Close main menu</span>
                            x
                        </button>
                    </label>
                </div>
                <!-- Sidebar content here -->
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Home</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Programs & Services</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Combo6</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Classes</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">About</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Remodel</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Latest News</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Faq</a></li>
                <li><a class="uppercase font-bold text-xl hover:text-secondary">Contact Us</a></li>
                <li><a class="uppercase hover:text-secondary"><i class="lar la-user text-xl mr-2 text-secondary"></i> Memberships</a></li>
                <li><a class="uppercase hover:text-secondary"><i class="las la-map-marker text-xl mr-2 text-secondary"></i> Locations</a></li>
                <li><a class="uppercase hover:text-secondary"><i class="las la-lock text-xl mr-2 text-secondary"></i> Member Login</a></li>
            </ul>

        </div>
    </div>
    <nav class="bg-transparent border-b border-gray-200 fixed top-0 w-full py-2" :class="showSidebar ? '' : 'z-50'">
        <div class="px-2 mx-auto max-w-screen-2xl sm:px-4 lg:px-8">
            <div class="flex justify-between h-16 md:h-18">
                <!-- Hero Logo -->
                <div class="flex px-2 lg:px-0">
                    <div class="flex items-center flex-shrink-0">
                        <a class="inline-flex items-center font-black font-display text-cool-indigo-800 text-xl" href="/">
                            <img class="h-10 sm:h-9 w-3/5 md:h-10 xl:h-8 object-contain" :src="$page.props.headerLogo" />
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-end flex-1 px-2 sm:justify-center lg:ml-6 lg:justify-end">
                    <div class="hidden md:flex lg:ml-6 xl:ml-8 lg:space-x-8" data-turbo="false">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/"><i class="lar la-user text-xl mr-2 text-secondary font-bold"></i> Current Offers</a>
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/?type=template"><i class="las la-lock text-xl mr-2 text-secondary font-bold"></i> Member Login</a>
                        <a class="border-transparent text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold uppercase tracking-wide" href="/?type=kit"><i class="lar la-map-marker text-xl mr-2 text-secondary font-bold"></i> Locations</a>
                        <button type="button" class="md:visible inline-flex items-center justify-center p-2 ml-3 text-white rounded-full hover:text-secondary hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cool-indigo-500"
                                @click="toggleShowSidebar()">
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
                    <button type="button" class="md:hidden inline-flex items-center justify-center p-2 ml-3 text-red rounded-full hover:text-secondary hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cool-indigo-500" @click="toggleShowSidebar">
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
    </nav>

    <slot name="extraHead">Extra Stuff</slot>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "DefaultHeader",
    data() {
        return {
            showSidebar: false,
        }
    },
    methods: {
        toggleShowSidebar() {
            this.showSidebar = !this.showSidebar;
        }
    },
    mounted() {
        console.log(this.$page.props.headerLogo)
    }
}
</script>

<style scoped>

</style>
