<template>
  
    <div v-for="listing in listings" :key="listing.id">

        <div>
            <Link :href="`\\listing\\${listing.id}`">
                <ListingAddress :listing="listing" />     
            </Link>
        </div>
        <div>
            <Link :href="`\\listing\\${listing.id}\\edit`">
                <button>Edit</button>
            </Link>
        </div>
        <div>
            <Link :href="`\\listing\\${listing.id}`" method="DELETE">
                <button>Delete</button>
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

