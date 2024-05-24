<template>
    <form @submit.prevent="login">

        <div class="w-1/2 mx-auto">
            <div>
                <label for="email">E-mail (username)</label>
                <input type="text" id="email" class="input" v-model="form.email" />

                <div class="input-error">
                    Potential errors
                </div>
            </div>

            <div class="mt-4">
                <label for="pass_secret">Password</label>
                <input type="password" id="pass_secret" class="input" v-model="form.pass_secret" />
            </div>

            <div class="mt-4">
                <button class="btn-primary w-full" type="submit">Login</button>
            </div>


        </div>


    </form>
</template>


<script setup>

import { useForm } from '@inertiajs/vue3';

const form = useForm( {
    email: null,
    password: null,
})

const login = () => form.post(route('login.store'));

</script>