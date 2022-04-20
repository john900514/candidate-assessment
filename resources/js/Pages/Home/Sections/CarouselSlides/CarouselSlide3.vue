<template>
    <div id="MustLoveClubs" class="banner-wrapper-s" :style="slide3Img()">
        <div class="banner-bottom">
            <div class="inner-bottom">
                <div class="bottom-section">
                    <div class="bottom-left">
                        <div class="big-ol-copy-box">
                            <div class="inner-copy-box">
                                <div class="lg-copy-box">
                                    <p style="padding-top:1em;&quot;"> <span class="the-blue-text">THE</span><span style="color: #fff;font-size: .5em;"> DESTINATION FOR</span></p>
                                    <p><span style="color: #fff;font-size: .8em;">FAMILY SUMMER FUN</span></p>
                                </div>
                                <div class="sm-copy-box2">

                                </div>
                                <div class="copy-divider"></div>
                                <div class="sm-copy-box">
                                    <p><span style="color: #fff;"> POOLS, THE KIDS CLUB, CAMPS &amp; MORE!</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="outer-button-panel">
                            <div class="inner-button-panel">
                                <div class="button-panel">
                                    <div class="button-wrapper">
                                        <button type="button" id="joinButton" class="join-button" onclick="window.location.href = '/locations'" tabindex="-1">Enroll Now</button>
                                    </div>
                                    <div class="button-wrapper alt">
                                        <button type="button" id="learnButton" class="join-button" onclick="window.location.href = '/free-pass'" tabindex="-1">3 DAY COMPLIMENTARY MEMBERSHIP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CarouselSlide3",
    methods: {
        slide3Img() {
            let n = this.$page.props.homeCarouselBGs.CarouselSlide3;
            let m = this.$page.props.homeCarouselBGs.CarouselSlide3Mobile

            return {
                '--slideThreeImg': n,
                '--slideThreeImgMobile': m
            };
        }
    },
}
</script>

<style scoped>
@media screen and (max-width: 1023px) {
    .banner-wrapper-s {
        background-image: var(--slideThreeImgMobile);
    }
}

@media screen and (min-width: 1024px) {
    .banner-wrapper-s {
        background-image: var(--slideThreeImg);
    }
}

.banner-wrapper-s {
    background-size: cover;
    display: grid;
    grid-template-columns: auto;
    grid-auto-rows: 11% auto;
    padding-top: 3em;
    height: 48em;
    width: 100%;
    background-position-x: 40%;
}
</style>
