<template>
    <Box>

        <div>
            <!-- <Link :href="`\\listing\\${listing.id}`"> -->
            <Link :href="route('listing.show', listing.id)">


                <div  class="flex items-center gap-1">
                    <Price :price="listing.price" class="text-2xl font-bold"/>
                    <div class="text-xs text-gray-500"></div>
                        <Price :price="monthlyPayment"/> per month
                </div>
  
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
</template>

<script setup >


import {Link} from '@inertiajs/vue3';

import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { useMonthlyPayment } from '@/Composables/useMonthlyPayment';

const props = defineProps(
    {
        listing : Object
    }
)

const {monthlyPayment} = useMonthlyPayment(props.listing.price, 2.5, 25);

// console.log(props)
</script>