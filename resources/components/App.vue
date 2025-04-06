<template>
  <div class="flex relative">
    <Sidebar @openModal="openModal = true"/>

    <div class="w-full h-screen bg-[#0F172A] text-white">
      <Header />

      <MainContent :tasks="tasks" @openModal="openModal = true" />
    </div>

    <TaskModal v-if="openModal" @close="openModal = false" @add="addTask"/>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import Sidebar from './Sidebar.vue'
import Header from './Header.vue'
import MainContent from './MainContent.vue'
import TaskModal from './TaskModal.vue'

function addTask(task) {
  tasks.value.push({
    id: Date.now(), // simples id único
    ...task,
  })
}

const openModal = ref(false)

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




<!--<template>-->
<!--    <div class="flex relative">-->
<!--        <Sidebar />-->

<!--        <div class="w-full h-screen bg-[#0F172A]">-->
<!--            <Header />-->

<!--            <h2 class="px-6 text-xl font-bold text-[#94A3b8] mt-7">Todas as atividades ({{ tasks.length }})</h2>-->

<!--            <div class="flex gap-2 px-6 mt-12">-->
<!--                <i class="fa-solid fa-list text-2xl cursor-pointer text-[#94A3B8]"></i>-->
<!--                <i class="fa-brands fa-buromobelexperte text-2xl cursor-pointer text-[#5B26B8]"></i>-->
<!--            </div>-->

<!--            <TaskList />-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script setup>-->
<!--import Sidebar from './Sidebar.vue'-->
<!--import Header from './Header.vue'-->
<!--import TaskList from './TaskList.vue'-->

<!--const tasks = [1, 2, 3, 4] // Substituir por reatividade real depois-->
<!--</script>-->


<!--<template>-->
<!--    <div class="flex relative">-->
<!--        &lt;!&ndash; Sidebar &ndash;&gt;-->
<!--        <aside class="w-xs h-screen bg-[#131e33]">-->
<!--            <div class="w-full h-16 flex justify-center items-center text-xl uppercase font-bold">-->
<!--                <h2 class="text-white">icaro <span class="text-gray-500">dev</span>code</h2>-->
<!--            </div>-->

<!--            <div class="flex justify-center my-6">-->
<!--                <button @click="showAddModal = true"-->
<!--                        class="py-3 w-[80%] bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">-->
<!--                    Adicionar tarefa-->
<!--                </button>-->
<!--            </div>-->

<!--            <div class="w-full h-80 px-2">-->
<!--                <ul class="flex flex-col gap-2">-->
<!--                    <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Todas as atividades (10)</li>-->
<!--                    <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Importantes (8)</li>-->
<!--                    <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Finalizadas (3)</li>-->
<!--                    <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Não finalizadas (7)</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </aside>-->

<!--        &lt;!&ndash; Main Content &ndash;&gt;-->
<!--        <main class="w-full h-screen bg-[#0F172A]">-->
<!--            <div class="w-full h-16 flex items-center justify-between px-6">-->
<!--                <input type="text"-->
<!--                       class="w-xs bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]-->
<!--               hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"-->
<!--                       placeholder="Pesquisar">-->

<!--                <div class="w-56">-->
<!--                    <p class="text-xs font-bold text-[#94A3B8]">Execução (%)</p>-->
<!--                    <div class="flex items-center gap-2">-->
<!--                        <div class="w-full h-2 bg-[#141E33] rounded-md">-->
<!--                            <div class="w-[40%] h-full bg-[#6D28D9] rounded-md"></div>-->
<!--                        </div>-->
<!--                        <p class="text-xs font-bold text-[#94A3B8]">5/12</p>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <button class="py-2 px-4 bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">-->
<!--                    Adicionar Tarefa-->
<!--                </button>-->
<!--            </div>-->

<!--            <h2 class="px-6 text-xl font-bold text-[#94A3b8] mt-7">Todas as atividades (0)</h2>-->

<!--            <div class="flex gap-2 px-6 mt-12">-->
<!--                <i class="fa-solid fa-list text-2xl cursor-pointer text-[#94A3B8]"></i>-->
<!--                <i class="fa-brands fa-buromobelexperte text-2xl cursor-pointer text-[#5B26B8]"></i>-->
<!--            </div>-->

<!--            <div class="w-full px-6 mt-4 grid grid-cols-4 gap-4">-->
<!--                <div v-for="task in tasks" :key="task.id" class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">-->
<!--                    <p class="font-bold text-white text-xl">{{ task.title }}</p>-->

<!--                    <div class="flex flex-col justify-between h-[90%]">-->
<!--                        <p class="text-xs text-[#94A3B8]">{{ task.description }}</p>-->

<!--                        <div>-->
<!--                            <div class="flex items-center gap-2 text-white text-sm">-->
<!--                                <i class="fa-solid fa-calendar-days"></i>-->
<!--                                <p>{{ task.due_date }}</p>-->
<!--                            </div>-->

<!--                            <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>-->

<!--                            <div class="flex justify-between items-center mt-4">-->
<!--                                <div class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border border-[#6827D0] hover:border-white-->
<!--                     hover:text-white cursor-pointer">-->
<!--&lt;!&ndash;                                    {{ task.done ? 'Finalizado' : 'Marcar como feito' }}&ndash;&gt;-->
<!--                                    Finalizado-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>-->
<!--                                    <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </main>-->

<!--        &lt;!&ndash; Modal Adicionar &ndash;&gt;-->
<!--        <div v-if="showAddModal"-->
<!--             class="w-full h-screen absolute top-0 left-0 bg-black/40 flex justify-center items-center">-->
<!--            <div class="w-lg bg-[#0F172A] p-6">-->
<!--                <div class="flex justify-between items-center ">-->
<!--                    <p class="text-xl font-bold text-white">Adicionar tarefa</p>-->
<!--                    <i class="fa-solid fa-xmark font-bold text-xl cursor-pointer text-white" @click="showAddModal = false"></i>-->
<!--                </div>-->

<!--                <div class="mt-4">-->
<!--                    <label class="text-[#94A3BB] text-sm">Atividade</label>-->
<!--                    <input v-model="form.title" type="text"-->
<!--                           class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]-->
<!--                        hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"-->
<!--                           placeholder="Ir ao mercado">-->
<!--                </div>-->

<!--                <div class="mt-4">-->
<!--                    <label class="text-[#94A3BB] text-sm">Descrição</label>-->
<!--                    <input v-model="form.description" type="text"-->
<!--                           class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]-->
<!--                        hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"-->
<!--                           placeholder="Comprar algo">-->
<!--                </div>-->

<!--                <div class="mt-4">-->
<!--                    <label class="text-[#94A3BB] text-sm">Prazo</label>-->
<!--                    <input v-model="form.due_date" type="date"-->
<!--                           class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]-->
<!--                        hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none">-->
<!--                </div>-->

<!--                <div class="flex gap-2 items-center mt-2">-->
<!--                    <input v-model="form.important" type="checkbox" id="checkbox-importante" class="w-4">-->
<!--                    <label class="text-white" for="checkbox-importante">Marcar como importante</label>-->
<!--                </div>-->

<!--                <button @click="addTask"-->
<!--                        class="mt-10 py-3 w-full bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">-->
<!--                    Adicionar Tarefa-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script setup>-->
<!--import { ref } from 'vue'-->

<!--const showAddModal = ref(false)-->

<!--const form = ref({-->
<!--    title: '',-->
<!--    description: '',-->
<!--    due_date: '',-->
<!--    important: false-->
<!--})-->

<!--const tasks = ref([-->
<!--    {-->
<!--        id: 1,-->
<!--        title: 'Estudar React',-->
<!--        description: '2x por dia',-->
<!--        due_date: '2025-04-01',-->
<!--        done: false-->
<!--    }-->
<!--])-->

<!--function addTask() {-->
<!--    const newTask = {-->
<!--        ...form.value,-->
<!--        id: Date.now(),-->
<!--        done: false-->
<!--    }-->

<!--    tasks.value.push(newTask)-->
<!--    showAddModal.value = false-->
<!--    form.value = { title: '', description: '', due_date: '', important: false }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->
<!--.w-xs {-->
<!--    width: 250px;-->
<!--}-->
<!--.w-lg {-->
<!--    width: 500px;-->
<!--}-->
<!--</style>-->
