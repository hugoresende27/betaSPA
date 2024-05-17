<template>
  
    <div v-for="listing in listings" :key="listing.id">

        <div>
            <!-- <Link :href="`\\listing\\${listing.id}`"> -->
            <Link :href="route('listing.show', listing.id)">
                <ListingAddress :listing="listing" />     
            </Link>
        </div>
        <div>
            <Link :href="route('listing.edit', [listing.id])"> 
                <!-- you can pass parameters in route as 2 parm, if more then one use array, or use array always its ok -->
                <button>Edit</button>
            </Link>
        </div>
        <div>
            <Link :href="route('listing.destroy', [listing.id])" method="DELETE" as="button">
                <span>Delete</span>
            </Link>
        </div>
       
        
    </div>



</template>

<script setup>

import {Link} from '@inertiajs/vue3';

import ListingAddress from '@/Components/ListingAddress.vue';
// import ListingAddress from '../../Components/ListingAddress.vue';
defineProps(
    {
        listings : Array
    }
)

</script>

