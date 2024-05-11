<template>
  
        <div>
            Index
        </div>
   

        <div>
            The message is {{ message }}
        </div>


</template>

<script setup>
    // import {ref} from 'vue'
    // const counter = ref(0)
    // setInterval(() => counter.value++ , 1000)

    import {Link} from '@inertiajs/vue3'
    import MainLayout from '../../Layouts/MainLayout.vue';

    defineProps(
        {
            message : String
        }
    )
    
</script>

<!-- <script>
    REPLACED IN app.js BY    page.default.layout = page.default.layout || MainLayout
    import MainLayout from '../../Layouts/MainLayout.vue';
    export default {
        layout : MainLayout
    }
</script> -->