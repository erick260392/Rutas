<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Carga de Master de Trabajo
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
       En este apartado podras carga el Master de trabajo para poder generar las el Rol de las rutas para los instaladores
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
  <div>

    <form action="{{route('upload.rolRoute')}}">
        <label for="file-upload" class="block text-sm font-medium text-gray-700">
            Subir archivo CSV
        </label>
        <input id="file-upload" name="file-upload" type="file" accept=".csv , .xlsx" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">

        <button type="submit" class="btn btn-primary">
            Cargar archivo
        </button>
    </form>
  </div>

</div>
