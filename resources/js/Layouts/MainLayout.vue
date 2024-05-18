<template>
        <Link href="/hello">Show Page</Link> &nbsp;
        <Link href="/">Index Page</Link> &nbsp;
        <Link :href="route('listing.index')">Listing</Link> &nbsp;
        <Link :href="route('listing.create')">New Listing</Link>
        <!-- <div>The page with time {{ timer }}</div> -->

        <div v-if="page.props.flash.success" class="success">
            <!-- {{ page.props.flash.success }} -->
            {{ flashSuccess}}
        </div>
        <div v-if="page.props.flash.danger" class="warning">
            {{ flashDanger}}
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
    const flashDanger = computed( () => 
        page.props.flash.danger
    );

    const x = ref(0);
    const y = computed( () => x.value * 2);


</script>


<style scoped>

    .success {
        background-color: green;
        color: white;
    }
    .warning {
        background-color: blue;
        color: white;
    }
</style>

