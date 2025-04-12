<template>
    <div class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-[#1E293B] text-black dark:text-white p-6 rounded-2xl w-full max-w-md shadow-lg relative">
            <h2 class="text-xl font-bold mb-4">O início da vida (Criar Personagem)</h2>

            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Nome</label>
                    <input
                        v-model="form.name"
                        type="text"
                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"
                        placeholder="Digite o nome do personagem"
                        required
                    />
                </div>

<!--                <div class="mb-4">-->
<!--                    <label class="block text-sm font-semibold mb-1">E-mail</label>-->
<!--                    <input-->
<!--                        v-model="form.email"-->
<!--                        type="email"-->
<!--                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"-->
<!--                        placeholder="Digite o e-mail"-->
<!--                        required-->
<!--                    />-->
<!--                </div>-->

<!--                <div class="mb-6">-->
<!--                    <label class="block text-sm font-semibold mb-1">Senha</label>-->
<!--                    <input-->
<!--                        v-model="form.password"-->
<!--                        type="password"-->
<!--                        class="w-full px-3 py-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"-->
<!--                        placeholder="Digite a senha"-->
<!--                        required-->
<!--                    />-->
<!--                </div>-->

                <div class="mb-4">
                    <label class="block mb-2 font-semibold">Selecione uma classe inicial</label>
                    <select
                        v-model="selectedValue"
                        @change="handleChange"
                        class="w-full p-2 border rounded-md bg-gray-100 dark:bg-[#0F172A] dark:border-gray-600"
                    >
                        <option disabled value="">Selecione...</option>
                        <option
                            v-for="classe in classes"
                            :key="classe.value"
                            :value="classe.value"
                        >
                            {{ classe.text }}
                        </option>
                    </select>

                    <div class="mt-4">
                        <p><strong>Texto selecionado:</strong> {{ selectedText }}</p>
                        <p><strong>Valor selecionado:</strong> {{ selectedValue }}</p>
                        <p><strong>Descrição:</strong> {{ selectedDescription }}</p>
                    </div>
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
                        Cadastrar
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
import { ref } from 'vue'
import { reactive } from 'vue'

const emit = defineEmits(['close', 'register'])

const form = reactive({
    name: '',
    email: '',
    password: '',
})

const classes = [
    {
        text: '⚔️ Guerreiro',
        value: 'guerreiro',
        description: 'Atributo principal força 💪. Evolui com tarefas físicas como treinos e exercícios.'
    },
    {
        text: '🧙 Mago',
        value: 'mago',
        description: 'Atributo principal inteligência 🧠. Evolui com estudos e leitura.'
    },
    {
        text: '🛡️ Paladino',
        value: 'paladino',
        description: 'Atributo principal fé 🧘. Evolui com meditação e boas ações.'
    },
]

const selectedValue = ref('')
const selectedText = ref('')
const selectedDescription = ref('')

function handleChange() {
    const found = classes.find(classe => classe.value === selectedValue.value)
    selectedText.value = found?.text || ''
    selectedDescription.value = found?.description || ''
}

function submit() {
    emit('register', { ...form })
    emit('close')
}
</script>
