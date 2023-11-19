@extends('layouts.app')

@section('title')
    Crear proyecto
@endsection

@section('container')

    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @endpush

    <div class="md:flex md:items-center">

        <div class="md:w-1/2 px-10">
            <form
                action="{{route('imagen.store')}}"
                method="POST"
                enctype="multipart/form-data"
                id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"
            >
                @csrf

            </form>
        </div>
        <div class="md:w-1/2 p-6 bg-white border border-violet-700 rounded-lg shadow-xl mt-10 md:mt-0">

            <form method="POST" action="{{ route('projects.store') }}">
                @csrf

                @if(session('status'))
                    {{session('status')}}
                @endif

                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input type="text"
                           id="title"
                           name="title"
                           placeholder="Título del proyecto"
                           class="p-3 w-full bg-violet-300 border border-violet-700 rounded-lg" value="{{ old('title') }}">

                    @error('title')
                    <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="link" class="mb-2 block uppercase text-gray-500 font-bold">
                        Enlace
                    </label>
                    <input type="url"
                           id="link"
                           name="link"
                           placeholder="Enlace del proyecto"
                           class="p-3 w-full bg-violet-300 border border-violet-700 rounded-lg" value="{{ old('link') }}">

                    @error('link')
                    <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="detail" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </label>
                    <textarea id="detail"
                              name="detail"
                              placeholder="Descripción del proyecto"
                              class="bg-violet-300 border border-violet-700 p-3 w-full rounded-lg" value="{{ old('detail') }}">
                        </textarea>
                    @error('detail')
                    <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                    @enderror
                    <div class="mb-5">

                        <input type="hidden"
                               id="image_project"
                               name="image_project"
                               value="{{ old('image_project') }}">

                        @error('image_project')
                        <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="mt-10 flex justify-end">
                        <button type="submit" class="mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Guardar
                        </button>

                        &nbsp;
                        <button type="submit" class=" mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <a href="{{route('projects.index')}}" class="w-48"> Regresar </a>
                        </button>
                    </div>

                </div>
            </form>

        </div>

    </div>

@endsection
