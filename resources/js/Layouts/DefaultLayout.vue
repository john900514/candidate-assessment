<template>
    <div class="min-h-screen overflow-hidden">
        <div class="relative overflow-hidden md:mt-18 bg-primary from-gray-50 to-white">
            <div class="relative pb-4">
                <default-header>
                    <template #extraHead>
                        <main class="px-4 mx-auto mt-10 max-w-7xl sm:mt-14 pt-16 bg-primary">
                            <slot name="layoutExtraHead"></slot>
                        </main>
                    </template>
                </default-header>
            </div>
        </div>

        <slot name="content"></slot>

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
