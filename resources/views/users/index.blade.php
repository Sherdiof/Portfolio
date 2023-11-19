@extends('layouts.app')

@section('title')
    Usuarios
@endsection

@section('container')

    @if(session('eliminar'))
        <div class="flex justify-center px-32 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
            {{ session('eliminar') }}
        </div>
    @endif

    <div class="py-10 px-10">

        <a href="{{route('users.create')}}">
    <div class="mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
         Nuevo
    </div>
        </a>
    </div>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
            </thead>

            <tbody>

            @foreach($users as $user)
                <tr class="codd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$user->name}}
                    </th>
                    <td class="px-2 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-2 py-4">
                        <a href="{{ route('users.edit', $user) }}" class="text-green-600">
                            Editar
                        </a>

                        <form method="POST" action="{{route('users.destroy', $user)}}" class="inline-flex">
                            @csrf
                            @method('DELETE')

                            <button class="font-medium text-violet-600 ml-5 dark:text-red-500 hover:underline">
                                Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>




@endsection
