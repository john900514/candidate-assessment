<template>
    <div class="min-h-screen overflow-hidden">
        <div class="relative mt-16 overflow-hidden md:mt-18 bg-gradient-to-b from-gray-50 to-white">
            <div class="relative pb-4">
                <default-header></default-header>

                <main class="px-4 mx-auto mt-10 max-w-7xl sm:mt-14">
                    <slot></slot>
                </main>
            </div>
        </div>


        <default-footer></default-footer>
    </div>
</template>

<script>
import DefaultHeader from "@/Layouts/Includes/DefaultHeader";
import DefaultFooter from "@/Layouts/Includes/DefaultFooter";
export default {
    name: "DefaultLayout",
    components: {
        DefaultHeader,
        DefaultFooter
    }
}
</script>

<style scoped>

</style>
