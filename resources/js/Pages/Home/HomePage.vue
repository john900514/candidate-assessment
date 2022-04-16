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
            <div class="max-w-3xl px-4 pt-8 mx-auto lg:max-w-screen-xl sm:pt-10 sm:px-6 lg:px-8 bg-primary">
                <div class="flex flex-row flex-wrap items-center justify-between">
                    <div class="sm:w-1/2 lg:w-1/3">
                        <div class="relative inline-block text-left sm:w-52" data-controller="toggle" data-action="click@window->toggle#clickAway">
                            <div class="">
                                <button type="button" class="inline-flex justify-between w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 shadow-sm rounded-2lg hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:border-cool-indigo-300" aria-haspopup="true" aria-expanded="true" data-action="click->toggle#toggle">
                                    Trending
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="w-5 h-5 ml-2 -mr-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="absolute left-0 z-10 hidden w-56 mt-2 overflow-hidden origin-top-right bg-white divide-y divide-gray-100 shadow-lg rounded-2lg ring-1 ring-black ring-opacity-5" data-toggle-target="toggleable toggleArea" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
                                <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <a class="font-semibold text-cool-indigo-600 hover:text-cool-indigo-700 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?order=trending&amp;price=all">
                                        Trending
                                        <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-cool-indigo-600">
                  <!-- Heroicon name: solid/check -->
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
                                    </a>            <a class="font-normal text-gray-700 hover:text-gray-900 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?order=popular&amp;price=all">
                                    Popular
                                </a>            <a class="font-normal text-gray-700 hover:text-gray-900 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?order=newest&amp;price=all">
                                    Newest
                                </a>          </div>
                                <div class="py-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <a class="font-normal text-gray-700 hover:text-gray-900 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?order=price_high&amp;price=premium">
                                        Price high
                                    </a>            <a class="font-normal text-gray-700 hover:text-gray-900 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?order=price_low&amp;price=premium">
                                    Price low
                                </a>            <a class="font-normal text-gray-700 hover:text-gray-900 relative block px-4 py-2 text-sm hover:bg-cool-indigo-100" role="menuitem" href="/?price=free">
                                    Free
                                </a>          </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-last w-full pt-4 mt-4 border-t border-gray-200 lg:border-0 lg:mt-0 lg:pt-0 lg:order-none lg:w-1/3 sm:flex sm:flex-col sm:align-center">
                        <div class="relative self-center bg-gray-100 rounded-2lg p-0.5 flex">
                            <a class="bg-white border-gray-200 shadow-sm flex justify-center relative w-1/3 rounded-2lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-400 focus:z-10 sm:w-1/3 sm:px-8" href="/?type=all">All</a>
                            <a class="border-transparent hover:text-gray-900 flex justify-center relative w-1/3 rounded-2lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8 ml-0.5" href="/?type=template">Templates</a>
                            <a class="border-transparent hover:text-gray-900 ml-0.5 flex justify-center relative w-1/3 rounded-2lg py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:z-10 sm:w-1/3 sm:px-8" href="/?type=kit">UI kits</a>
                        </div>
                    </div>

                    <div class="sm:w-1/2 lg:w-1/3">
                        <div class="ml-auto sm:w-52">
                            <div class="relative" data-controller="toggle" data-action="click@window->toggle#clickAway">
                                <button type="button" aria-haspopup="true" aria-expanded="true" class="relative w-full py-2 pl-4 pr-10 text-sm font-medium text-left text-gray-700 bg-white border border-gray-300 shadow-sm cursor-default cursor-pointer rounded-2lg focus:outline-none focus:ring-2 focus:ring-cool-indigo-300 focus:border-cool-indigo-300 hover:bg-gray-50 hover:text-gray-900" data-action="click->toggle#toggle">
            <span class="flex items-center">
              <span class="block truncate">
                Any technology
              </span>
            </span>
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 ml-3 pointer-events-none">
              <!-- Heroicon name: solid/selector -->
              <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </span>
                                </button>

                                <div class="absolute z-10 hidden w-full mt-1 bg-white shadow-lg rounded-2lg" data-toggle-target="toggleable toggleArea" x-transition:enter="" x-transition:enter-start="" x-transition:enter-end="" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                    <div class="py-2 overflow-auto text-base max-h-56 rounded-2lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                        <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=any">
                                            <div class="flex items-center">
                                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                <span class="font-semibold text-cool-indigo-600 hover:text-cool-indigo-700 block truncate">
                    Any technology
                  </span>
                                            </div>

                                            <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-cool-indigo-600">
                    <!-- Heroicon name: solid/check -->
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </span>
                                        </a>
                                        <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=5">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                    <img alt="Alpine.js icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaElCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--35db54ebeae71f706ff054605682654f4bff16ed/Alpine.js" data-lazy-loader-target="entry" src="">
                                                </div>
                                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Alpine.js
                    </span>
                                            </div>

                                        </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=1">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Angular icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaFFCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--5d18fc98e2d982039049bb2df9f45c0fc1bc2f87/Angular" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Angular
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=14">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Eleventy icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBczRCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ef0713396195547002c05892fe689432f8373528/Eleventy" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Eleventy
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=11">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Gatsby icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaVVCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--76e6760b977dcd09513fd570b9d02461b2a599a2/Gatsby" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Gatsby
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=2">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="HTML icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ1lCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--925d1d6bc19758771fa5e3dd8283826d1fc7cb0f/HTML" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      HTML
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=10">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Hugo icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaG9CIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--eea38c6671c91253f8657d9e02205693942aa7e5/Hugo" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Hugo
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=13">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Jekyll icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc0VCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--4e46aa2e9bbd8e3f492a897df0c5c073d0ca838b/Jekyll" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Jekyll
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=12">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Laravel icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBazBCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--22e945ec649908938a9e690d2de273979d0dced8/Laravel" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Laravel
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=7">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Next.js icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaEFCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--21a85f6b1a8ec43bc969a21b923e37ca0c1a399d/Next.js" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Next.js
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=18">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="NuxtJS icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcjhDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--bc743825b01bed2508a5a2a087ee9fc3e5cce1ed/NuxtJS" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      NuxtJS
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=3">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="React icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ2NCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--72c6db05fb8e3de8a34a3cd89d396ebc31ae67a9/React" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      React
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Redux icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ3dCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--465d3081c10f72fd9621b344ee189d89c7df4f3c/Redux" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Redux
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=16">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Shopify icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcWNDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--219d4673031d86bd8c617647fb577d9072456a06/Shopify" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Shopify
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=8">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="TypeScript icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ0lCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--2d6ca69f8f588a521278101051cf302a1afed64f/TypeScript" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      TypeScript
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="Vue.js icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ1VCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d73142785273a93b311f74dd62effbead925e13f/Vue.js" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      Vue.js
                    </span>
                                        </div>

                                    </a>                <a class="block cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-cool-indigo-100 hover:text-gray-900 cursor-pointer text-sm" role="menuitem" href="/?technology=9">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5 transition duration-300 ease-in-out bg-gray-100 rounded-sm animate-pulse">
                                                <img alt="WordPress icon" class="opacity-0 rounded-sm object-cover object-center transition ease-in-out duration-300" data-src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaFVCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8bbfdca3ebf8d06ad5b6f0dc1fd62d5c74e52b86/WordPress" data-lazy-loader-target="entry" src="">
                                            </div>
                                            <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                            <span class="font-normal text-gray-700 hover:text-gray-900 ml-3 block truncate">
                      WordPress
                    </span>
                                        </div>

                                    </a>            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-lg px-4 pt-12 mx-auto md:max-w-screen-2xl md:px-6 xl:px-8 2xl:px-12">
                <div data-controller="pagination lazy-loader">
                    <div class="grid gap-6 mx-auto md:grid-cols-2 lg:grid-cols-3 xl:gap-8 2xl:gap-12" data-pagination-target="entries">
                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Daisy UI" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcmtDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8fc431d2f3ebd9bf60efebc9ef23a3505f52c948/daisy-ui.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://daisyui.com">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/daisy-ui">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/daisy-ui">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Daisy UI
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Beautiful reusable UI components for Tailwind CSS
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Cruip Bundle" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcjRDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--dad4e9b86c3061c270e9b2dad58cae23192fbe99/cruip-bundle.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/cruip-bundle">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/cruip-bundle">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Cruip Bundle
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $79
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A collection of beautifully designed SaaS &amp; landing page templates for startups
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="HyperUI" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaFlDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e8a3b8207f062f72ea1ca2bfd279e013d8049fa1/feature.webp">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://hyperui.dev">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailwind-component-library">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailwind-component-library">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    HyperUI
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A free, open source library of Tailwind CSS components.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Nextjs Starter" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcmdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--4bc3809005c172f076ff65ef22511bb0102dbb27/nextjs-starter-banner.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/nextjs-starter/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/nextjs-starter">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/nextjs-starter">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Nextjs Starter
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A starter Nextjs Boilerplate theme built with Tailwind CSS
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Crator Studio" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcmdCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8f64bc1227fb09a0ad099fb37cba83c65ff98dad/feature-image-1800x1100-compressed.jpg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/crator-studio/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/crator-studio">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/crator-studio">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Crator Studio
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $29
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A creative dark agency Tailwind CSS template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Meraki UI" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcklDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--7a2c89e340f0f2f331e932d5410e8ebc2cc3be50/merakiui-thumbnail.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://merakiui.com">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/meraki-ui">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/meraki-ui">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Meraki UI
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Beautiful &amp; responsive Tailwind components that support RTL languages
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Wicked Bundle" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbGNDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e0bfe4b1bbd77906aaab4b0e2f0b1cb057511a74/wicked-templates.jpg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/wicked-bundle">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/wicked-bundle">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Wicked Bundle
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $99
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A wicked collection of 9 premium templates &amp; UI kits for all your needs.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Tailwind Nextjs Starter Blog" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbklDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0efd8a8b9ccc420c3f83970850e228eff06413fd/tailwind-nextjs-starter-blog">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://tailwind-nextjs-starter-blog.vercel.app/">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailwind-nextjs-starter-blog">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailwind-nextjs-starter-blog">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Tailwind Nextjs Starter Blog
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A minimalist blogging starter template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Banter" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdW9DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--53e9246effc78bd52c6067e8f06fbffb500926ca/banter-feature-image.jpg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/banter/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/banter">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/banter">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Banter
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $29
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Multipurpose Blog/Magazine Tailwind CSS Template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Bright" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBa2dDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--cfc56162c7a6d090383d7b400923928ad7b58719/preview-small.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/bright/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/bright">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/bright">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Bright
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $29
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A modern and creative HTML Tailwind CSS template for any early education school
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Taildash" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdWtDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--42926bda35b8742ce973a87139af9a5535b77a12/taildash-tailwind-dashboard-template.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/taildash/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/taildash">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/taildash">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Taildash
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $23
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A fully featured Tailwind dashboard admin template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Eureka" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc29CIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--4f3383aa174fdb364068847e0d1f7ce26209a573/feature.jpg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/eureka/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/eureka">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/eureka">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Eureka
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A feature-rich and highly customizable Hugo theme
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="TailGrids Free Core Version" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdG9DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d873d826ec5beb10e65915bbcdf5696c72bc34b3/tailgrids-free.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://tailgrids.com/">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailgrids-free-core-version">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailgrids-free-core-version">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    TailGrids Free Core Version
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Free Tailwind CSS UI Components Crafted for modern websites
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Shopify Starter" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdkVCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e80bfaab9abd56938b5a5f7e7f6371bd9ab90062/demo-store.gif">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/shopify-starter/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/shopify-starter">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/shopify-starter">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Shopify Starter
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A fully functional eCommerce store that uses Next.js + Tailwind CSS
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Harmony Pro" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbE1DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--9898f605f7b34aadebf2731b63868306c0fe4e4f/harmony.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://harmony.wickedtemplates.com/">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/for-modern-saas">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/for-modern-saas">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Harmony Pro
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $89
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A fully equipped UI kit for your SaaS or business.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Tailpro" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdWdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0504600fbf42a8ec8ca5b4031ecc279f578d1694/tailpro-tailwind-css-templates.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/tailpro/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailpro">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailpro">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Tailpro
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $23
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A well designed multipurpose Tailwind template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Mosaic" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdThCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--414a9f4124d933c58222945a8b5479a54a7942ac/home.jfif">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/mosaic/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/mosaic">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/mosaic">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Mosaic
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $39
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Elegant and powerful HTML, React, and Vue.js dashboard template for startups.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Shadow Pro" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbElDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e2f77820c52b028b210855bc26a329359c50d196/shadow.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://shadow.wickedtemplates.com/">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/shadow">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/shadow">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Shadow Pro
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $89
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A super template / UI kit for your startup.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Tailus" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdXdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--995bb9e321001cdccf51f2383fac510056d2fd7b/tailus-feature-image.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://www.tailus.io/">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailus">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailus">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Tailus
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A collection of 50+ beautiful Tailwind CSS blocks
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Menu Kit" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2tDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--580f11f82143ea41e2a1eb8dd597d98c9d41b6ef/nav%20ui%20kit.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://www.elegant-goodies.com/preview/menu-kit">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/menu-kit">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/menu-kit">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Menu Kit
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                30+ Tailwind CSS menu examples
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Wicked Blocks" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcU1DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--1e8e981aa0a09adc1f34e9392eb19a4b9f9d7178/zradsxkycfyx2ydgqd92.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://wickedblocks.dev/#elements">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/wicked-blocks">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/wicked-blocks">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Wicked Blocks
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Ready to copy-paste Tailwind components and layout blocks
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Nefa" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc0VDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--697c916ffb606a697a73d599bee2f9b8d51cacf7/nefa.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/nefa/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/nefa">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/nefa">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Nefa
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Free landing page template built using nuxt and tailwindcss
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="nine4-4" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcmNDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--9486fc8132154ec8bcf738d697102a7729c5f6d6/nine4_4.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/nine4-4/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/nine4-4">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/nine4-4">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    nine4-4
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A simple landing page template for any SaaS or business
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="NextJS Landing Page Starter" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdjBCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ecfb69bdd9185017c227547b5cfe94f600a48e39/nextjs-landing-page-banner.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/nextjs-landing-page-starter-template/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/nextjs-landing-page-starter-template">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/nextjs-landing-page-starter-template">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    NextJS Landing Page Starter
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Free NextJS Landing Page Template written in Tailwind CSS and TypeScript
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Dockerz" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdHdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3cdb40a3270dc6974f7248cb8ddd903dc70ce341/Dockers.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/cool-docs/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/cool-docs">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/cool-docs">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Dockerz
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A documentation website template made with Tailwind and Alpine.js
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Mosaic Lite" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ0VDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--673468c2e10b463dcf36c0b1a1a8f10701cc5fd9/115404502-ad322d80-a1ed-11eb-91c0-1aa79b0949f0.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/mosaic-lite/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/mosaic-lite">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/mosaic-lite">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Mosaic Lite
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Free Tailwind dashboard template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Tailwind Blog Template" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbmdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--49c0af1500298fda13caafb68f17bb71c266595e/tailwind-blog-template">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/tailwind-blog-template/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailwind-blog-template">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailwind-blog-template">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Tailwind Blog Template
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A beautiful minimalist blog template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Podcast" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdHNDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--960f27363e5ca90d2a1d3702a3004cc92e7c041f/podcast-header-760w.webp">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/podcast/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/podcast">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/podcast">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Podcast
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $39
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A modern Tailwind CSS podcast template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Tailwind Admin Template" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbW9DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8c2407f4e16f526f5ba1362b9ccaab9810e91655/tailwind-admin-template">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/tailwind-admin-template/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailwind-admin-template">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailwind-admin-template">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Tailwind Admin Template
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A beautiful admin dashboard
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Porto" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc01DIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--db14663d2ad4b5582d5126585a08010dc67b0d96/Porto.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/porto/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/porto">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/porto">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Porto
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A minimal, but elegant personal website template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Myna UI" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBclVDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--963ef63675f4ce6607606c90213b174d99e98bd5/mynaui.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://mynaui.com">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/myna-ui">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/myna-ui">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Myna UI
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Fully responsive and accessible components and templates
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Monotone Starter Template" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdUlDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--eb743c70d557f5c263126252406afdd64f9d6f55/monotone.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/app001/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/app001">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/app001">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Monotone Starter Template
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $29
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A beautiful Tailwind CSS template for your app or extension
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="VPN Landing Page" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcUlDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--c73691fef00cd93d274df1b47bb23ced14c77ce7/vpn-landing.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/vpn-landing-page/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/vpn-landing-page">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/vpn-landing-page">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    VPN Landing Page
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                An Open Source landing page for a VPN, SaaS or App.
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="TailGrids" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdGdDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e724cf7ae0ff72fc74dcd613433ca71786a2236d/tailgrids.avif">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="https://tailgrids.com/components">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/tailgrids">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/tailgrids">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    TailGrids
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              $119
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                A 300+ Handcrafted Library of Tailwind CSS UI Components &amp; Blocks
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Mercy" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2dDIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3a7c1ffa98b2cdbe62b22576f2f121a8bce168b4/Charity.jpeg">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/mercy/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/mercy">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/mercy">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Mercy
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Charity template with a minimalistic design
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex flex-col w-full overflow-hidden bg-gray-100 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80">
                                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                                    <img class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300" alt="Simple Light" data-lazy-loader-target="entry" src="/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBWjA9IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--b2ac7ff7bd8a20dac0858c50e859d9c4557afbdf/feature-image.png">
                                    <div class="absolute inset-0 transition duration-200 bg-gray-900 opacity-0 rounded-2xl group-hover:opacity-60"></div>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                                        <div class="mb-4 shadow-sm w-33 rounded-2xl">
                                            <a class="inline-flex w-full justify-center items-center px-6 py-2 rounded-2xl shadow-sm border border-transparent text-sm font-medium rounded-2xl text-cool-indigo-700 bg-white transition duration-150 hover:bg-cool-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" target="_blank" href="/resources/simple-light/demo">Preview</a>
                                        </div>
                                        <div class="shadow-sm w-33 rounded-2xl">
                                            <a class="w-full justify-center inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500" href="/resources/simple-light">View details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-between flex-1 p-6">
                                    <div class="flex-1">
                                        <a class="block group" href="/resources/simple-light">
                                            <div class="flex items-center justify-between">
                                                <h3 class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600">
                                                    Simple Light
                                                </h3>
                                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
              Free
            </span>
                                            </div>
                                            <p class="mt-1 text-base font-medium leading-6 text-gray-500">
                                                Free Tailwind landing page template
                                            </p>

                                        </a>      </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="flex justify-center mt-14">
                        <button name="button" type="button" class="inline-flex items-center justify-center px-8 py-3 text-base font-medium text-cool-indigo-700 border border-transparent rounded-2xl bg-cool-indigo-100 hover:bg-cool-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-cool-indigo-500" target="_blank" data-action="click->pagination#loadMore" data-pagination-target="next" data-next-url="/?page=2" data-button-loader-target="button" data-controller="button-loader" data-button-loader-hidden-class="hidden">
                            <svg class="hidden w-5 h-5 animate-spin text-cool-indigo-500" data-button-loader-target="loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span data-button-loader-target="text">Load more designs</span>
                        </button></div>

                </div>
            </div>
            <div class="pt-20 bg-white">
                <div class="relative sm:py-16">
                    <div aria-hidden="true" class="hidden sm:block">
                        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
                        <img class="absolute top-4 left-1/2 -ml-3 w-96 h-auto transition ease-in-out duration-300" data-lazy-loader-target="entry" src="/assets/patterns/dots-d961e9ea516df1683f513c8b487098915d6d8e473b5c3fbebccf0d801c6d09e1.png">
                        <svg class="absolute top-0 hidden -ml-3 left-1/2" width="404" height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)"></rect>
                        </svg>
                    </div>
                    <div class="relative max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="relative px-6 py-10 overflow-hidden shadow-xl rounded-3xl bg-cool-indigo-600 sm:px-12 sm:py-20">
                            <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                                <svg class="absolute inset-0 w-full h-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                                    <path class="text-cool-indigo-500 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"></path>
                                    <path class="text-cool-indigo-700 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"></path>
                                </svg>
                            </div>
                            <div class="relative">
                                <div class="mb-12 sm:text-center">
                                    <h2 class="text-4xl font-extrabold text-white tracking-tight sm:text-4.5xl font-display">
                                        Get notified when we add new designs.
                                    </h2>
                                    <p class="max-w-2xl mx-auto mt-6 text-lg text-cool-indigo-100">
                                        Twice a month I share the best Tailwind templates, UI kits and components in <strong>my newsletter</strong>. <strong>99</strong> Tailwind hackers find it useful. I'd love you to join.
                                    </p>
                                </div>
                                <form target="_blank" data-controller="newsletter" data-action="submit->newsletter#onSubmit" data-newsletter-target="form" class="sm:mx-auto sm:max-w-lg sm:flex" action="https://www.getrevue.co/profile/tailwindawesome/add_subscriber" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="JTBlxuzpZ9zQnEyYhcXx9DqcquGrAzTtSdOVKEi_Yggzg7PGIqZewD0uMJMjlwgN5LbePB0hxxlO-Jqc45ntbw" autocomplete="off">
                                    <div class="relative w-full max-w-xl mx-auto bg-white rounded-full h-14 lg:max-w-none">
                                        <input class="rounded-full w-full h-14 bg-transparent py-0 sm:pl-6 pl-5 pr-16 sm:pr-32 outline-none border-2 border-gray-100 shadow-md hover:outline-none focus:ring-cool-indigo-200 focus:border-cool-indigo-200" data-newsletter-target="email" required="required" placeholder="Enter your email" autocomplete="email" type="email" name="member[email]" id="member[email]">
                                        <button type="submit" class="absolute inline-flex items-center h-12 p-4 text-sm text-white transition duration-150 duration-300 ease-in-out rounded-r-full rounded-bl-full outline-none right-1 top-1 bg-cool-indigo-600 sm:py-2 sm:px-6 sm:rounded-full sm:text-base sm:font-medium hover:bg-cool-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cool-indigo-500">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="-ml-0.5 sm:-ml-1 sm:mr-2 h-5 w-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <line x1="10" y1="14" x2="21" y2="3"></line>
                                                <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"></path>
                                            </svg>
                                            <span class="hidden sm:inline-block">
							  Try it
                </span>
                                        </button>
                                    </div>
                                </form>        </div>
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
