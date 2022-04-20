<template>
    <div id="prefootCallToAction" class="bg-black md:flex" v-if="prefooter">
        <div id="actualCallToAction" class="md:w-2/5 pt-16 md:pt-48">
            <h1 class="text-7xl mr-32 font-black -ml-2">START YOUR ATHLETIC CLUB EXPERIENCE</h1>
            <div id="ctaButtonPanel" class="pt-8 pl-16 pb-8 md:pb-2">
                <h3 class="text-2xl font-bold pb-8">CHECK OUT OUR MEMBERSHIP OPTIONS TODAY</h3>
                <button type="button" id="anotherJoinButton" class="panel-button-full btn rounded-[0px] tracking-widest btn-secondary hover:bg-black hover:border-white" onclick="window.location.href= '/locations'"><b>JOIN THE CLUB</b></button>
                <button type="button" id="freePassButton" class="panel-button btn ml-4 rounded-[0px] tracking-widest hover:btn-secondary border-white bg-black" onclick="window.location.href= '/free-pass'"><b>FREE PASS</b></button>
            </div>
        </div>
        <div id="rhombusImageWrapper" class="hidden md:flex md:w-3/5 object-contain">
            <img :src="$page.props.footerShardImg" id="rhombusImg" alt="Rhombus Image" class="h-[47rem] w-full">
        </div>

        <div id="emptyRow"></div>
    </div>
    <footer class="bg-white" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="text-center">
                <div id="socialMediaIcons">
                    <div id="iconsWrapper">
                        <a href="https://twitter.com/THE_Ath_Club" target="_blank" class="text-black mx-2"><i class="lab la-twitter text-6xl"></i></a>
                        <a href="https://www.facebook.com/THEAthleticlub/" target="_blank" class="text-black mx-2"><i class="lab la-facebook-f text-6xl"></i></a>
                        <a href="https://www.instagram.com/the_athleticclub/" target="_blank" class="text-black mx-2"><i class="lab la-instagram text-6xl"></i></a>
                        <a href="https://www.youtube.com/channel/UCiOWp0BXR-NnbRffJOP4RxQ/videos" target="_blank" class="text-black mx-2"><i class="lab la-youtube-square text-6xl"></i></a>
                    </div>
                </div>
                <div id="navigationLinks">
                    <div class="row pt-4">
                        <a href="/" class="mx-2 text-black">Home</a>
                        <a href="/programs" class="mx-2 text-black">Programs &amp; Services</a>
                        <a href="/classes" class="mx-2 text-black">Classes</a>
                        <a href="/about" class="mx-2 text-black">About</a>
                        <a href="/contact" class="mx-2 text-black">Contact Us</a>
                        <a href="/faq" class="mx-2 text-black">FAQs</a>
                    </div>
                </div>
                <div id="legalMumboJumbo" class="pt-2 md:flex md:justify-center">
                    <div>
                        <p class="text-gray text-xs">
                            The Athletic Club <i class="las la-copyright"></i>
                            <span>2020 - 2022. Cape & Bay, LLC. All rights reserved.</span>
                        </p>
                    </div>
                    <div>
                        <p class="text-gray text-xs">
                            <a href="/privacy" class="ml-4">Privacy Policy</a> |
                            <a href="/terms">Terms of use</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "DefaultFooter",
    props: ['prefooter'],
    mounted() {

    },
}
</script>

<style scoped>

</style>
