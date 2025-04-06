<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
{{--    fontes--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="app">

</div>
{{--    menu    --}}
{{--    <div class="w-xs h-screen bg-[#131e33]">--}}
{{--        <div class="w-full h-16 flex justify-center items-center text-xl uppercase font-bold">--}}
{{--            <h2 class="text-white">icaro <span class="text-gray-500">dev</span>code</h2>--}}
{{--        </div>--}}

{{--        <div class="flex justify-center my-6">--}}
{{--            <button class="py-3 w-[80%] bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80">Adicionar tarefa</button>--}}
{{--        </div>--}}

{{--        <div class="w-full h-80 px-2">--}}
{{--            <ul class="flex flex-col gap-2">--}}
{{--                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Todas as atividades (10)</li>--}}
{{--                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Importantes (8)</li>--}}
{{--                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Finalizadas (3)</li>--}}
{{--                <li class="py-3 text-[#94A3B8] pl-3 hover:text-white cursor-pointer">Não finalizadas (7)</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    parte do content   --}}
{{--    <div class="w-full h-screen bg-[#0F172A]">--}}
{{--        <div class="w-full h-16 flex items-center justify-between px-6">--}}
{{--            <input type="text" class="w-xs bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]--}}
{{--             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"--}}
{{--           placeholder="Pesquisar">--}}

{{--            <div class="w-56">--}}
{{--                <p class="text-xs font-bold text-[#94A3B8]">Execução (%)</p>--}}
{{--                <div class="flex items-center gap-2">--}}
{{--                    <div class="w-full h-2 bg-[#141E33] rounded-md">--}}
{{--                        <div class="w-[40%] h-full bg-[#6D28D9] rounded-md"></div>--}}
{{--                    </div>--}}
{{--                    <p class="text-xs font-bold text-[#94A3B8]">5/12</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <button class="py-2 px-4 bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80"> Adicionar Tarefa</button>--}}
{{--        </div>--}}

{{--        <h2 class="px-6 text-xl font-bold text-[#94A3b8] mt-7">Todas as atividades (0)</h2>--}}

{{--        <div class="flex gap-2 px-6 mt-12">--}}
{{--            <i class="fa-solid fa-list text-2xl cursor-pointer text-[#94A3B8]"></i>--}}
{{--            <i class="fa-brands fa-buromobelexperte text-2xl cursor-pointer text-[#5B26B8]"></i>--}}
{{--        </div>--}}

{{--        <div class="w-full">--}}
{{--            <div class="w-full px-6 mt-4 grid grid-cols-4 gap-4">--}}
{{--                <div class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">--}}
{{--                    <p class="font-bold text-white text-xl">Estudar React</p>--}}

{{--                    <div class="flex flex-col justify-between h-[90%]">--}}
{{--                        <p class="text-xs text-[#94A3B8]">2x por dia</p>--}}


{{--                        <div>--}}
{{--                            <div class="flex items-center gap-2 text-white text-sm">--}}
{{--                                <i class="fa-solid fa-calendar-days"></i>--}}
{{--                                <p>01/04/2025</p>--}}
{{--                            </div>--}}

{{--                            <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>--}}

{{--                            <div class="flex justify-between items-center mt-4">--}}
{{--                                <div class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border-1 border-[#6827D0] hover:border-white--}}
{{--                                 hover:text-white cursor-pointer">Finalizado</div>--}}
{{--                                    <div>--}}
{{--                                        <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>--}}
{{--                                        <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">--}}
{{--                    <p class="font-bold text-white text-xl">Estudar React</p>--}}

{{--                    <div class="flex flex-col justify-between h-[90%]">--}}
{{--                        <p class="text-xs text-[#94A3B8]">2x por dia</p>--}}


{{--                        <div>--}}
{{--                            <div class="flex items-center gap-2 text-white text-sm">--}}
{{--                                <i class="fa-solid fa-calendar-days"></i>--}}
{{--                                <p>01/04/2025</p>--}}
{{--                            </div>--}}

{{--                            <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>--}}

{{--                            <div class="flex justify-between items-center mt-4">--}}
{{--                                <div class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border-1 border-[#6827D0] hover:border-white--}}
{{--                                 hover:text-white cursor-pointer">Finalizado</div>--}}
{{--                                <div>--}}
{{--                                    <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>--}}
{{--                                    <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">--}}
{{--                    <p class="font-bold text-white text-xl">Estudar React</p>--}}

{{--                    <div class="flex flex-col justify-between h-[90%]">--}}
{{--                        <p class="text-xs text-[#94A3B8]">2x por dia</p>--}}


{{--                        <div>--}}
{{--                            <div class="flex items-center gap-2 text-white text-sm">--}}
{{--                                <i class="fa-solid fa-calendar-days"></i>--}}
{{--                                <p>01/04/2025</p>--}}
{{--                            </div>--}}

{{--                            <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>--}}

{{--                            <div class="flex justify-between items-center mt-4">--}}
{{--                                <div class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border-1 border-[#6827D0] hover:border-white--}}
{{--                                 hover:text-white cursor-pointer">Finalizado</div>--}}
{{--                                <div>--}}
{{--                                    <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>--}}
{{--                                    <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="h-56 bg-[#6827D0] rounded-md p-6 hover:opacity-90">--}}
{{--                    <p class="font-bold text-white text-xl">Estudar React</p>--}}

{{--                    <div class="flex flex-col justify-between h-[90%]">--}}
{{--                        <p class="text-xs text-[#94A3B8]">2x por dia</p>--}}


{{--                        <div>--}}
{{--                            <div class="flex items-center gap-2 text-white text-sm">--}}
{{--                                <i class="fa-solid fa-calendar-days"></i>--}}
{{--                                <p>01/04/2025</p>--}}
{{--                            </div>--}}

{{--                            <div class="w-full border-b-1 border-dashed border-[#94A3B8] mt-4"></div>--}}

{{--                            <div class="flex justify-between items-center mt-4">--}}
{{--                                <div class="py-2 px-4 bg-white rounded-md hover:bg-[#6827D0] border-1 border-[#6827D0] hover:border-white--}}
{{--                                 hover:text-white cursor-pointer">Finalizado</div>--}}
{{--                                <div>--}}
{{--                                    <i class="fa-solid fa-trash-can text-red-400 cursor-pointer"></i>--}}
{{--                                    <i class="fa-solid fa-pen-to-square text-green-300 cursor-pointer pl-2"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


   <!-- modal de adicionar tarefa -->
    <!--<div class="w-full h-screen bgTransparente absolute flex justify-center items-center" style="background-color: rgba(0, 0, 0, 0.411);">
        <div class="w-lg bg-[#0F172A] p-6">
            <div class="flex justify-between items-center ">
                <p class="text-xl font-bold text-white">Adicionar tarefa</p>
                <i class="fa-solid fa-xmark font-bold text-xl cursor-pointer text-white"></i>
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Atividade</label>
                <input type="text" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                placeholder="Ir ao mercado">
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Descrição</label>
                <input type="text" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                       placeholder="Comprar algo">
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Prazo</label>
                <input type="text" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                       placeholder="Pesquisar">
            </div>

            <div class="flex gap-2 items-center mt-2">
                <input type="checkbox"  id="checkbox-importante" class="w-4">
                <label class="text-white" for="checkbox-importante">Marcar como importante</label>
            </div>

            <button class="mt-10 py-3 w-full bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80"> Adicionar Tarefa</button>

        </div>
    </div> -->

   <!--  modal de editar tarefa -->
    <!-- <div class="w-full h-screen bgTransparente absolute flex justify-center items-center" style="background-color: rgba(0, 0, 0, 0.411);">
        <div class="w-lg bg-[#0F172A] p-6">
            <div class="flex justify-between items-center ">
                <p class="text-xl font-bold text-white">Editar tarefa</p>
                <i class="fa-solid fa-xmark font-bold text-xl cursor-pointer text-white"></i>
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Atividade</label>
                <input type="text" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                placeholder="Ir ao mercado" value="Musculação">
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Descrição</label>
                <input type="text" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                       placeholder="Comprar algo" value="Peito e biceps">
            </div>

            <div class="mt-4">
                <label class="text-[#94A3BB] text-sm">Prazo</label>
                <input type="date" class="w-full bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md border-2 border-[#0F172A]
             hover:border-[#6D28D9] focus:border-[#6D28D9] outline-none"
                       placeholder="Pesquisar" value="2025-04-01">
            </div>

            <div class="flex gap-2 items-center mt-2">
                <input type="checkbox"  id="checkbox-importante" class="w-4">
                <label class="text-white" for="checkbox-importante">Marcar como importante</label>
            </div>

            <button class="mt-10 py-3 w-full bg-[#6D28D9] rounded-md text-white cursor-pointer hover:opacity-80"> Adicionar Tarefa</button>
        </div>


    </div> -->


</body>
</html>
