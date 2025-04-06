<template>
    <div class="w-xs h-screen bg-[#131e33]">
        <div class="w-full h-16 flex justify-center items-center text-xl uppercase font-bold">
            <h2 class="text-white">icaro <span class="text-gray-500">dev</span>code</h2>
        </div>

        <button @click="open"
                class="py-3 w-[80%] bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">
            Adicionar tarefa
        </button>


        <div class="w-full h-80 px-2">
            <ul class="flex flex-col gap-2">
                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Todas as atividades (10)</li>
                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Importantes (8)</li>
                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Finalizadas (3)</li>
                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Não finalizadas (7)</li>
            </ul>
        </div>
    </div>
</template>


<script setup>
const emit = defineEmits(['openModal'])

function open() {
    emit('openModal')
}
</script>
