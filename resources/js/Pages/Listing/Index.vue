<template>
  
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-2">
        <Listing v-for="listing in listings.data" :key="listing.id" :listing="listing" />

    </div>

    <div v-if="listings.data.length" class="w-full flex justify-center mt-8 mb-0">

        <Pagination :links="listings.links" />

    </div>
 



</template>

<script setup>

// import Listing from './Index/Components/Listing.vue';
import Pagination from '@/Components/UI/Pagination.vue';
import Listing from '@/Pages/Listing/Index/Components/Listing.vue';


defineProps(
    {
        listings : Object
    }
)
</script>

