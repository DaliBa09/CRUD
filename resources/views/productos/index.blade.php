<x-layouts.app title="Productos">


    <header class="px-6 py-6 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Productos</h1>
        @auth
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('productos.create')}}">Registrar un Producto</a>
        @endauth

    </header>


    <table>
        <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>

    @foreach ($productos as $producto)
        <tr>
            <td>
                <a href="{{ route('productos.show', $producto) }}">
                    {{ $producto->nombre }}
                </a>
            </td>
            <td>
                {{$producto->descripcion}}
            </td>
            @auth

            <td>
                <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-blue-500 uppercase transition duration-150 ease-in-out dark:text-blue-500/80 hover:text-blue-600 focus:outline-none" href="{{route('productos.edit', $producto)}}">Editar</a>
            </td>
            <td>
                <form action="{{route('productos.destroy', $producto)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
                </form>
            </td>
            @endauth
        </tr>
    @endforeach
    </table>


</x-layouts.app>
