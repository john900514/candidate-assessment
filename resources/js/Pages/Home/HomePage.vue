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
