@extends('layouts.app')

@section('title')
    Crear usuarios
@endsection

@section('container')

    <div class="container relative overflow-x-auto px-10 py-3">
        <table class="bg-white w-full text-sm text-left text-gray-500 dark:text-gray-400">

            <form method="POST" action="{{ route( 'users.store' )}}">
                @csrf

                <label for="name" class="block mb-2 text-dm font-medium text-gray-900 dark:text-white">
                    Nombre de usuario </label>

                <div class="flex mb-10">

                    <input type="text" id="name" name="name" value="{{ old('name')}}" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu nombre">
                </div>

                <label for="email" class="block mb-2 text-dm font-medium text-gray-900 dark:text-white">
                    Correo electrónico </label>

                <div class="flex mb-10">

                    <input type="email" id="email" name="email" value="{{ old('email')}}" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu correo electrónico">
                </div>

                <label for="password" class="block mb-2 text-dm font-medium text-gray-900 dark:text-white">
                    Contraseña </label>

                <div class="flex mb-10">

                    <input type="password" id="password" name="password" value="{{ old('password')}}" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu contraseña">
                </div>

                <div class="mt-10">
                    <button type="submit" class="mt-10 w-32 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Guardar
                    </button>

                    &nbsp;
                    <button type="submit" class="text-white bg-gradient-to-r w-32 from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        <a href="{{route('users.index')}}"> Regresar </a>
                    </button>
                </div>

            </form>

        </table>
    </div>


@endsection
