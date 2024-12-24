<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <div class="container mx-auto">
        <h1 class="text-2xl">Greetings, Everyone</h1>
        <p>
            <!-- go back -->
            <!-- <a href="/hello">Hello</a> -->
            <!-- <Link href="/hello">Hello</Link> -->
            <Link :href="route('hello-x')">Hello</Link>
        </p>
    </div>
</template>

<style scoped>

</style>
