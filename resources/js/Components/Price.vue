<template>
    <span>
        {{ formattedPrice }}
    </span>
</template>


<script setup>

    import {computed} from 'vue'

    const props = defineProps({
        price : [Number, String]
    })

    const formattedPrice = computed(
        () => Number (props.price).toLocaleString('pt-PT', {
            style: 'currency',
            currency : 'EUR',
            maximumFractionDigits : 0
        })
    )

</script>