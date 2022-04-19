<template>
    <default-layout>
        <template #layoutExtraHead>
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 font-display sm:text-5xl md:text-6xl xl:text-7xl">
                    <span class="block xl:inline">Discover the best</span>
                    <span class="block text-cool-indigo-600">Tailwind templates &amp; UI kits</span>
                </h1>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Tailwind Awesome is a curated list of the best Tailwind templates &amp;
                    UI kits in the internet. We are actively searching, and curating the
                    coolest resources out there.
                </p>
                <div class="relative max-w-3xl px-4 mx-auto mt-10 sm:px-6">
                    <form action="/" accept-charset="UTF-8" method="get">
                        <input value="all" autocomplete="off" type="hidden" name="price" id="price">
                        <input value="all" autocomplete="off" type="hidden" name="type" id="type">
                        <input value="any" autocomplete="off" type="hidden" name="technology" id="technology">
                        <input value="trending" autocomplete="off" type="hidden" name="order" id="order">

                        <div class="relative w-full max-w-xl mx-auto bg-white rounded-full h-18 lg:max-w-none">
                            <input placeholder="e.g. Blog" class="rounded-full w-full h-18 bg-transparent py-0 pl-8 pr-32 outline-none border-2 border-gray-100 shadow-md hover:outline-none focus:ring-cool-indigo-200 focus:border-cool-indigo-200" type="text" name="query" id="query">
                            <button type="submit" class="absolute inline-flex items-center h-12 px-4 py-2 text-sm text-white transition duration-150 duration-300 ease-in-out rounded-full outline-none right-3 top-3 bg-cool-indigo-600 sm:px-6 sm:text-base sm:font-medium hover:bg-cool-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500">
                                <svg class="-ml-0.5 sm:-ml-1 mr-2 w-4 h-4 sm:h-5 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Search
                            </button>
                        </div>
                    </form>			  </div>
            </div>
        </template>

        <template v-slot:content>
            <div class="bg-slate-600">
                <div id="salesPoints" class="max-w-4xl px-4 py-8 mx-auto sm:py-32 sm:px-6 lg:px-8">
                    <div id="detailsWrapper" class="w-full">
                        <div class="section-heading text-center w-full">
                            <h1 class="text-black text-5xl">WHAT MAKES US DIFFERENT</h1>
                            <h4 class="text-black pt-2 pb-8">LEARN MORE ABOUT <br class="md:hidden"> THE ATHLETIC CLUB <a href="/about"><i class="las la-arrow-alt-circle-right text-black"></i></a></h4>
                        </div>

                        <div id="detailsGrid" class="pt-4">
                            <div id="details" class="sm:flex justify-between  gap-x-20">
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i class="las la-users text-5xl"></i>
                                        <h2 class="mt-2 uppercase text-2xl">A PLACE FOR <br> FAMILIES</h2>
                                        <p class="pt-4">Our mission is to meet the health and fitness goals of our members and guests in an environment that is friendly, clean, welcoming and enjoyable for all ages.</p>
                                    </div>
                                </div>
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i class="las la-book-dead text-5xl"></i>
                                        <h2 class="mt-2 uppercase text-2xl">WHO WE ARE <br><br></h2>
                                        <p class="pt-4">We provide a high-level luxury health club experience to our members and guests, integrating cutting edge technology, the best equipment and impeccable customer service.</p>
                                    </div>
                                </div>
                                <div class="grid-detail min-w-64">
                                    <div class="">
                                        <i class="las la-trophy text-5xl"></i>
                                        <h2 class="mt-2 uppercase text-2xl w-64">SUPERIOR QUALITY, <br>  SUPERIOR VALUE</h2>
                                        <p class="pt-4">We are strongly committed to providing services for and actively engaging our members in programs and activities for all ages and ability levels.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-20 bg-slate-600">
                <div id="callToAction" class="">
                    <div id="galleryWrapper ">
                        <div class="section-heading text-center pb-4 max-w-5xl mx-auto">
                            <h1 class="text-5xl">COMMITTED TO A CUTTING EDGE, INNOVATIVE EXPERIENCE</h1>
                        </div>

                        <div id="mediaWrapper" class="embed-container w-full">
                            <iframe class="video w-full object-fit" width="800" height="700" src="https://www.youtube-nocookie.com/embed/VBm3UoxThrQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                            <!-- <img src="https://www.youtube-nocookie.com/embed/VBm3UoxThrQ" alt="Video" id="placeholderImg" onclick="$(this).hide();$('#placeholderImg2').show()"/>
                            <img src="/img/Video-Placeholder-coming-soon.jpg" alt="Video" id="placeholderImg2" style="display:none;" onmouseout="$(this).hide();$('#placeholderImg').show()"/> -->
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </default-layout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";

export default {
    name: "HomePage",
    components: {
        DefaultLayout
    }
}
</script>

<style scoped>

</style>
