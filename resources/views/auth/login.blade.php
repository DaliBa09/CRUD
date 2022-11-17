<x-layouts.app title="Login">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Login</h1>

        <form class=" max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('login')}}" method="POST">
            @csrf <!--SIEMPRE AGREGAR ESTO-->

            @error('name')
                <small style="color: red">{{$message}}</small>
            @enderror
            <br>
            <label>
                Ingresa tu correo <br>
                <input value="{{old('email')}}" type="email" name="email">
            </label>
            <br>
            @error('email')
                <small style="color: red">{{$message}}</small>
            @enderror
            <br>
            <label>
                Ingresa tu contrasenia <br>
                <input value="{{old('password')}}" type="password" name="password">
            </label>
            <br>
            @error('password')
                <small style="color: red">{{$message}}</small>
            @enderror
            <br>
            <input type="checkbox" name="remember">
            <span class="cursor-pointer">
                Recordarme <br>
            </span>
            <br>
            <br>
            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" type="submit">Login</button>
        </form>

</x-layouts.app>
