<template>
    <div>
        <span class="font-bold">
            {{ listing.beds }} 
        </span>
        <span class="text-gray-600">
            beds |
        </span>
       
        <span class="font-bold">
             {{ listing.baths }} 
        </span>
        <span class="text-gray-600">
            baths |
        </span>
        <span class="font-bold">
            {{ listing.area }}
        </span> 
        <span class="text-gray-600">
            m<sup>2</sup>
        </span>
     
    </div>
  </template>
  
  <script setup>
  defineProps({
    listing: Object,
  })
  </script>