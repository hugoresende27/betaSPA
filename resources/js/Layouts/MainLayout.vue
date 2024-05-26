<template>

    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-600 w-full">

        <div class="container mx-auto">

            <nav class="p-4 flex items-center justify-between">
                <!-- <div class="text-lg font-medium">
                    <Link href="/hello">Show Page</Link> &nbsp;
                </div> -->
                <div class="text-lg font-medium">
        
                    <Link :href="route('listing.index')">Listing</Link>
                </div> 
                <div class="text-xl ftext-indigo-600 dark:text-indigo-300 font-bold text-center">
                    <Link :href="route('index')">betaSPA</Link>
                </div>
                <div class="flex items-center gap-4" v-if="user">
                    <div class="text-sm text-gray-500 dark:text-gray-800">
                        {{ user.name }}
                    </div>

                    <Link :href="route('listing.create')"
                            class="btn-primary"
                            >+ New Listing
                    </Link>


                    <div>
                        <Link :href="route('logout')"
                        class="" method="delete" as="button">
                            Logout
                        </Link>
                    </div>

                </div>
                <div v-else class="flex items-center gap-2">
                    <Link :href="route('user-account.create')">Register</Link>
                    <Link :href="route('login')">Sign-In</Link>
                </div>
            
            </nav>
        </div>
    </header>
    <!-- <div>The page with time {{ timer }}</div> -->

    <main class="container mx-auto p-4">
        <!-- <div v-if="page.props.flash.success" class="success"> -->
            <!-- {{ page.props.flash.success }} -->
            <!-- {{ flashSuccess}} -->
        <!-- </div> -->
        <!-- <div v-if="page.props.flash.danger" class="warning">
            {{ flashDanger}}
        </div> -->

        <div v-if="page.props.flash.success" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
            {{ flashSuccess }}
        </div>
        <div v-if="page.props.flash.danger" class="mb-4 border rounded-md shadow-sm border-white-200 dark:border-white-800 bg-red-50 dark:bg-red-900 p-2">
            {{ flashDanger }}
        </div>
    
            <!-- <div>
                {{ y }}
            </div> -->
    
    
    
        <slot>Default</slot>
    </main>
  
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


    const user = computed(
        () => page.props.user
    )


</script>


<!-- <style scoped>

    .success {
        background-color: green;
        color: white;
    }
    .warning {
        background-color: blue;
        color: white;
    }
</style> -->

