<template>
    <main class="w-full h-screen bg-[#0F172A]">

<!--        <h2 class="px-6 text-xl font-bold text-[#94A3b8] mt-7">Todas as atividades (0)</h2>-->
        <h2 class="px-6 text-xl font-bold text-[#94A3b8] mt-7">
            Todas as atividades ({{ tasks.length }})
        </h2>
        <div class="flex gap-2 px-6 mt-12">
            <i class="fa-solid fa-list text-2xl cursor-pointer text-[#94A3B8]"></i>
            <i class="fa-brands fa-buromobelexperte text-2xl cursor-pointer text-[#5B26B8]"></i>
        </div>

        <div class="w-full px-6 mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <TaskCard
                v-for="task in tasks"
                :key="task.id"
                :title="task.title"
                :frequency="task.frequency"
                :dueDate="task.dueDate"
            />
<!--            <TaskCard title="Estudar React" frequency="2x por dia" dueDate="01/04/2025" />-->
<!--            <TaskCard title="Estudar Vue" frequency="1x por dia" dueDate="05/04/2025" />-->
<!--            <TaskCard title="Musculação" frequency="3x por semana" dueDate="07/04/2025" />-->
<!--            <TaskCard title="Leitura" frequency="1h por dia" dueDate="10/04/2025" />-->
        </div>
    </main>
</template>

<script setup>
import TaskCard from './TaskCard.vue'
defineEmits(['openModal'])

defineProps({
    tasks: Array
})

</script>
