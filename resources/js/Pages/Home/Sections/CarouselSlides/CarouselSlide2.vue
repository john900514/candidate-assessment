<template>
    <div id="THENewClubs" class="banner-wrapper-s" :style="slide2Img()">
        <div class="banner-bottom">
            <div class="inner-bottom">
                <div class="bottom-section">
                    <div class="bottom-left">
                        <div class="big-ol-copy-box">
                            <div class="inner-copy-box">
                                <div class="lg-copy-box">
                                    <p> <span class="the-blue-text">THE</span></p>
                                    <p>NEW CLUBS</p>
                                </div>
                                <div class="sm-copy-box2">
                                    <p>BE READY TO BE WOWED!<br>4 CLUBS DONE - 3 MORE TO GO
                                    </p></div>
                                <div class="copy-divider"></div>
                                <div class="sm-copy-box">
                                    <p>Over $4 Million invested</p>
                                    <p>in your fitness experience!</p>
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
                                        <button type="button" id="learnButton" class="join-button" onclick="window.location.href = '/remodel'" tabindex="-1">View Remodels</button>
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
    name: "CarouselSlide2",
    methods: {
        slide2Img() {
            let n = this.$page.props.homeCarouselBGs.CarouselSlide2;
            let m = this.$page.props.homeCarouselBGs.CarouselSlide2Mobile

            return {
                '--slideTwoImg': n,
                '--slideTwoImgMobile': m
            };
        }
    },
}
</script>

<style scoped>
@media screen and (max-width: 1023px) {
    .banner-wrapper-s {
        background-image: var(--slideTwoImgMobile);
    }
}

@media screen and (min-width: 1024px) {
    .banner-wrapper-s {
        background-image: var(--slideTwoImg);
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
