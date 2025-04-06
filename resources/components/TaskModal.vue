<template>
    <div class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-[#1E293B] text-black dark:text-white p-6 rounded-2xl w-full max-w-md shadow-lg relative">
            <h2 class="text-xl font-bold mb-4">Adicionar nova tarefa</h2>

            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Título</label>
                    <input
                        v-model="form.title"
                        type="text"
                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"
                        placeholder="Digite o título da tarefa"
                        required
                    />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Frequência</label>
                    <input
                        v-model="form.frequency"
                        type="text"
                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"
                        placeholder="Ex: 2x por semana"
                        required
                    />
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-1">Data Limite</label>
                    <input
                        v-model="form.dueDate"
                        type="date"
                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"
                        required
                    />
                </div>

                <div class="flex justify-end gap-2">
                    <button
                        type="button"
                        @click="$emit('close')"
                        class="px-4 py-2 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-200 dark:border-gray-500 dark:text-white dark:hover:bg-[#334155]"
                    >
                        Cancelar
                    </button>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-[#6D28D9] text-white rounded-md hover:opacity-90"
                    >
                        Salvar
                    </button>
                </div>
            </form>

            <button
                @click="$emit('close')"
                class="absolute top-2 right-2 text-xl text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white"
            >
                &times;
            </button>
        </div>
    </div>
</template>

<script setup>
import { reactive } from 'vue'

const emit = defineEmits(['close', 'add'])

const form = reactive({
    title: '',
    frequency: '',
    dueDate: '',
})

function submit() {
    emit('add', { ...form })
    emit('close')
}
</script>
