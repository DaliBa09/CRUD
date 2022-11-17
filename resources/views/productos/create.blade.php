<x-layouts.app>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Registrar un Producto</h1>

    <form class="dark:text-white max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('productos.store')}}" method="POST">
        @csrf <!--SIEMPRE AGREGAR ESTO-->
        <label>
            Ingresa el Nombre del Producto <br>
            <input value="{{old('nombre')}}" type="text" name="nombre">
        </label>
        <br>
        @error('nombre')
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <label>
            Ingresa la descripcion del Producto <br>
            <input value="{{old('descripcion')}}" type="text" name="descripcion">
        </label>
        <br>
        @error('descripcion')
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <label>
            Ingresa precio del Producto <br>
            <input value="{{old('precio')}}" type="number" name="precio">
        </label>
        <br>
        @error('precio')
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <label>
            Ingresa la cantidad <br>
            <input type="number" name="stock">
        </label>
        <br>
        <br>
        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" type="submit">Enviar</button>
    </form>
</x-layouts.app>
