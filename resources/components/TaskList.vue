<template>
    <div class="w-full px-6 mt-4 grid grid-cols-4 gap-4">
        <TaskCard
            v-for="(task, index) in tasks"
            :key="index"
            :title="task.title"
            :frequency="task.frequency"
            :date="task.date"
        />
    </div>
</template>

<script setup>
import TaskCard from './TaskCard.vue'

const tasks = [
    { title: 'Estudar React', frequency: '2x por dia', date: '01/04/2025' },
    { title: 'Estudar React', frequency: '2x por dia', date: '01/04/2025' },
    { title: 'Estudar React', frequency: '2x por dia', date: '01/04/2025' },
    { title: 'Estudar React', frequency: '2x por dia', date: '01/04/2025' }
]
</script>
