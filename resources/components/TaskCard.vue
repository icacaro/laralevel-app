<template>
    <div class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">
        <p class="font-bold text-white text-xl">{{ title }}</p>

        <div class="flex flex-col justify-between h-[90%]">
            <p class="text-xs text-[#94A3B8]">{{ frequency }}</p>

            <div>
                <div class="flex items-center gap-2 text-white text-sm">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p>{{ date }}</p>
                </div>

                <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>

                <div class="flex justify-between items-center mt-4">
                    <div
                        class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border-1 border-[#6827D0]
            hover:border-white hover:text-white cursor-pointer"
                    >
                        Finalizado
                    </div>
                    <div>
                        <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>
                        <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    frequency: String,
    date: String
})
</script>
