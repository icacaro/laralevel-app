<template>
    <div class="flex h-screen ">
        <Sidebar @openModal="openModal = true" @openCharCreateModal="openCharCreateModal = true"/>

        <div class="w-full h-full bg-[#0F172A] text-white flex flex-col">
            <Header @openModal="openModal = true" />
            <MainContent :tasks="tasks" @openModal="openModal = true" />
        </div>

        <CharCreateModal v-if="openCharCreateModal" @close="openCharCreateModal = false"/>

        <TaskModal v-if="openModal" @close="openModal = false" @add="addTask"/>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Sidebar from './Sidebar.vue'
import Header from './Header.vue'
import MainContent from './MainContent.vue'
import TaskModal from './TaskModal.vue'
import CharCreateModal from "./CharCreateModal.vue";

function addTask(task) {
  tasks.value.push({
    id: Date.now(), // simples id único
    ...task,
  })
}

const openModal = ref(false)
const openCharCreateModal = ref(true)

const tasks = ref([
  {
    id: 1,
    title: 'Estudar React',
    frequency: '2x por dia',
    dueDate: '01/04/2025',
  },
  {
    id: 2,
    title: 'Estudar Vue',
    frequency: '1x por dia',
    dueDate: '05/04/2025',
  },
  {
    id: 3,
    title: 'Musculação',
    frequency: '3x por semana',
    dueDate: '07/04/2025',
  },
  {
    id: 4,
    title: 'Leitura',
    frequency: '1h por dia',
    dueDate: '10/04/2025',
  },
])
</script>
