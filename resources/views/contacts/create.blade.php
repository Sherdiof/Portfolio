@extends('layouts.app')

@section('title')
    Contacto
@endsection

@section('container')

    @if(session('enviado'))
        <div class="flex justify-center px-32 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
             {{ session('enviado') }}
        </div>
    @endif

    <div class="container flex justify-center">
        <div class="bg-white max-w-6xl w-full rounded-lg shadow-2xl py-5 flex justify-center mx-auto mb-10">


            <div class="bg-white max-w-xl w-full py-5">
                <form method="POST" class="space-y-5 px-10" action="{{ route('contacts.store') }}">
                    @csrf

                    <h5 class="font-semibold text-xl text-violet-800 dark:text-white">
                        LLENA ESTE FORMULARIO PARA CONTACTARME </h5>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nombre </label>
                        <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Correo electrónico </label>
                        <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Teléfono </label>
                        <input type="number" name="phone" id="phone" placeholder="########" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tema </label>
                        <input type="text" name="reason" id="reason" placeholder="Motivo por la cual me contactas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Comentarios </label>
                        <textarea id="detail" name="detail" rows="4" placeholder="Comentario..." class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </textarea>
                    </div>

                    <button type="submit" class="mt-10 w-32 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                             Enviar
                    </button>

                </form>
            </div>

        </div>
    </div>

@endsection
