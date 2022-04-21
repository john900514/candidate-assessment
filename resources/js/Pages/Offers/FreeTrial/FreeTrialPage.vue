<template>
    <default-layout
        :show-prefooter="prefooter"
    >
        <template v-slot:content>

        </template>
    </default-layout>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import DefaultLayout from "@/Layouts/DefaultLayout";
export default {
    name: "FreeTrialPage",
    components: {
        DefaultLayout
    },
    props: ['prefooter'],
    data() {
        return {}
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
