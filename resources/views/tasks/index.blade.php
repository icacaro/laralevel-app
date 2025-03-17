<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="flex">
    <div class="w-xs h-screen bg-[#131e33]">
        <div class="w-full h-16 bg-red-500 flex justify-center items-center text-xl uppercase font-bold">
            <h2>to do <span class="text-gray-500">dev</span>code</h2>
        </div>
    </div>
    <div class="w-full h-screen bg-[#0F172A]">
        <div class="w-full h-16 bg-blue-500 flex items-center justify-between px-6">
            <input type="text" class="w-xs bg-[#141E33] py-2 text-[#94A3BB] pl-2 rounded-md hover:border-[#6D28D9]" placeholder="Pesquisar">
            <p>Execução</p>
            <button> Adicionar Tarefa</button>
        </div>
    </div>

</body>
</html>
