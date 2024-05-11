<template>
    <div>
        Index
    </div>
    <Link href="/hello">Show Page</Link>

    <div>
        The message is {{ message }}
    </div>
</template>

<script setup>
    // import {ref} from 'vue'
    // const counter = ref(0)
    // setInterval(() => counter.value++ , 1000)

    import {Link} from '@inertiajs/vue3'

    defineProps(
        {
            message : String
        }
    )
    
</script>