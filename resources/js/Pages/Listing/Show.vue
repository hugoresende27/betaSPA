<template>
    <div>
   
        {{ listing.id }} -
        {{ listing.city }} -
        {{ listing.area }} - 
        {{ listing.street }} - 
        {{ listing.street_nr }} - 
        {{ listing.price }} - 
        {{ listing.beds }} 
     
    </div>
</template>

<script setup>


defineProps(
    {
        listing : Object
    }
)

</script>