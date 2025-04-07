<template>
    <div class="w-full h-16 flex items-center justify-between px-6">
        <input
            type="text"
            class="w-xs bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
        hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
            placeholder="Pesquisar"
        />

        <div class="w-56">
            <p class="text-xs font-bold text-[#94A3B8]">Execução (%)</p>
            <div class="flex items-center gap-2">
                <ProgressBar :percent="40" />
                <p class="text-xs font-bold text-[#94A3B8]">5/12</p>
            </div>
        </div>

        <button @click="open" class="py-2 px-4 bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">
            Adicionar Tarefa
        </button>
    </div>
</template>

<script setup>
import ProgressBar from './ProgressBar.vue'

const emit = defineEmits(['openModal'])

function open() {
    emit('openModal')
}
</script>
