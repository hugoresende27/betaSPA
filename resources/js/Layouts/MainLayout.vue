<template>
        <Link href="/hello">Show Page</Link> &nbsp;
        <Link href="/">Index Page</Link> &nbsp;
        <Link href="/listing">Listing</Link> &nbsp;
        <Link href="/listing/create">Listing Create</Link>
        <!-- <div>The page with time {{ timer }}</div> -->

        <div v-if="page.props.flash.success" class="success">
            <!-- {{ page.props.flash.success }} -->
            {{ flashSuccess}}
        </div>

        <div>
            {{ y }}
        </div>


        <slot></slot>
</template>


<script setup>

    import {Link, usePage} from '@inertiajs/vue3'
    import {ref} from 'vue'
    import {computed} from 'vue';

    // const timer = ref(0)
    // setInterval(() => timer.value++, 1000)

    //page.props.flash.success
    const page = usePage();

    const flashSuccess = computed( () => 
        page.props.flash.success
    );

    const x = ref(0);
    const y = computed( () => x.value * 2);


</script>


<style scoped>

    .success {
        background-color: green;
        color: white;
    }
</style>

