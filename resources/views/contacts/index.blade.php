@extends('layouts.app')

@section('title')
    Lista de contactos
@endsection

@section('container')

    @if(session('eliminar_contacto'))
        <div class="flex justify-center px-32 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
            {{ session('eliminar_contacto') }}
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Teléfono
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($contacts as $contact)
            <tr class="codd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$contact->name}}
                </th>
                <td class="px-2 py-4">
                  +502 {{$contact->phone}}
                </td>
                <td class="px-2 py-4">
                    {{$contact->email}}
                </td>
                <td class="px-2 py-4">
                    <a href="{{ route('contacts.show', $contact) }}" class="text-green-600"> Ver mensaje </a>

                    <form method="POST" action="{{route('contacts.destroy', $contact)}}" class="inline-flex">
                        @csrf
                        @method('DELETE')

                        <button class="mx-3 font-medium text-violet-800 dark:text-red-500 hover:underline">Eliminar</button>
                    </form>                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
