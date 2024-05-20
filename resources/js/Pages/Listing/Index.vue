<template>
  
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-2">
        <Listing v-for="listing in listings" :key="listing.id" :listing="listing" />

    </div>
 



</template>

<script setup>

// import Listing from './Index/Components/Listing.vue';
import Listing from '@/Pages/Listing/Index/Components/Listing.vue';

defineProps(
    {
        listings : Array
    }
)
</script>

