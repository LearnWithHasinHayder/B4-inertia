<script setup>
import Heading from '@/Components/Heading.vue';
defineProps({
    name: String,
    posts: {
        type: Array,
        default: []
    }
});

// defineProps(['name']);
</script>

<template>
    <div class="container mx-auto">
        <h1 class="text-2xl">Hello, {{ name }}</h1>
        <Heading title="Hello World From Vue" />
        <hr>
        <p>
            Number of Posts = {{ posts.length == 0 ? 'Loading....' : posts.length }}
        </p>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.title }}
            </li>
        </ul>
    </div>
</template>

<style scoped></style>
