<template>
  
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-2">
        <Box v-for="listing in listings" :key="listing.id">

            <div>
                <!-- <Link :href="`\\listing\\${listing.id}`"> -->
                <Link :href="route('listing.show', listing.id)">

                    <Price :price="listing.price" class="text-2xl font-bold"/>
                    <ListingAddress :listing="listing" />
                    <ListingSpace :listing="listing" />    
     
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
        
           
            
        </Box>
    </div>
 



</template>

<script setup>

import {Link} from '@inertiajs/vue3';

import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
// import ListingAddress from '../../Components/ListingAddress.vue';
defineProps(
    {
        listings : Array
    }
)

</script>

