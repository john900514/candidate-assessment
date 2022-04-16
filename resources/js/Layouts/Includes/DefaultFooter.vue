<template>
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
    name: "DefaultFooter"
}
</script>

<style scoped>

</style>
