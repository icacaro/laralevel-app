<template>
    <div class="w-full h-2 bg-[#141E33] rounded-md">
        <div
            class="h-full bg-[#6D28D9] rounded-md"
            :style="{ width: `${percent}%` }"
        ></div>
    </div>
</template>

<script setup>
defineProps({
    percent: Number
})
</script>
