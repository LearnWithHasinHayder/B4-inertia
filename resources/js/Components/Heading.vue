<script setup>
defineProps({
    title: {
        type: String,
        default:"This is a heading"
    },
});
</script>

<template>
    <h1 class="text-2xl text-red-500 font-bold">{{ title }}</h1>
</template>

<style scoped>

</style>
