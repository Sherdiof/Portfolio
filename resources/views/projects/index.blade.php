@extends('layouts.app')

@section('title')
    Proyectos
@endsection

@section('container')

    @auth
        <a href="{{route('projects.create')}}">
    <div class="mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
         Nuevo
    </div>
        </a>
    @endauth


    <div class="p-5 pt-8 border ignore border-gray-200 not-prose dark:border-gray-800 relative bg-gray-50 dark:bg-gray-800">

        <div class="max-w-5xl mx-auto">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3  gap-3 sm:gap-5 not-prose">

                @foreach($projects as $project)
                    <div class="relative flex flex-col items-start justify-between p-6 overflow-hidden rounded-xl border border-gray-200 dark:border-gray-800 dark:bg-black bg-white group">
                <a href="{{ $project->link }}" target="_blank"
                   class="relative flex flex-col items-start justify-between p-6 overflow-hidden rounded-xl dark:border-gray-800 dark:bg-black bg-white group">

                    <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900">{{ $project->title }}</h5>

                    <span class=" w-full h-full bg-white dark:bg-black inset-0 dark:group-hover:bg-gray-900 group-hover:bg-gray-50"></span>
                    <div class="flex items-center justify-between w-full mb-4 ">
                        <img class="rounded-t-lg" src="{{ asset('projects_img/'. $project->image_project) }}" alt="Imagen del proyecto" />
                        <span class="opacity-0 -translate-x-2 flex-shrink-0 group-hover:translate-x-0 py-1 px-2.5 text-[0.6rem] group-hover:opacity-100 transition-all ease-out duration-200 rounded-full bg-blue-50 dark:bg-blue-500 dark:text-white text-blue-500 flex items-center justify-center">
                        <span>View Website</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="w-3 translate-x-0.5 h-3">
                        <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"></path>
                    </svg>
                    </span>
                    </div>
                    <span class="relative text-xs md:text-sm text-gray-600 dark:text-gray-400">
                        {{ $project->detail }}
                    </span>

                </a>

                        <div class="flex gap-6 justify-center mx-auto">
                        <a class=" inline-block px-5 py-3 text-sm font-medium text-white bg-violet-600 border border-violet-600 rounded active:text-violet-500 hover:bg-transparent hover:text-violet-600 focus:outline-none focus:ring" href="{{ route('projects.edit', $project) }}">
                            Editar
                        </a>

                            <form method="POST" action="{{route('projects.destroy', $project)}}" class="inline-flex">
                                @csrf
                                @method('DELETE')
                        <button type="submit" class="inline-block px-2 py-3 text-sm font-medium text-violet-600 border border-violet-600 rounded hover:bg-violet-600 hover:text-white active:bg-indigo-500 focus:outline-none focus:ring" href="/download">
                            Eliminar
                        </button>
                            </form>

                        </div>

                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
