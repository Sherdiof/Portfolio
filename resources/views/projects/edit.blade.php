@extends('layouts.app')

@section('title')
    Editar proyecto
@endsection

@section('container')


    <div class="container flex justify-between">

        <div class="p-10 bg-white rounded-lg mb-5 w-9/12">

            <form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

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
                           class="border p-3 w-full rounded-lg"
                           value="{{ $project->title }}">

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
                           class="border p-3 w-full rounded-lg" value="{{ $project->link }}">

                    @error('link')
                    <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="detail" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </label>
                    <input    id="detail"
                              name="detail"
                              placeholder="Descripción del proyecto"
                              class="border p-3 w-full rounded-lg" value="{{ $project->detail }}">
                    @error('detail')
                    <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                    @enderror


                    <div class="mb-5 mt-5">

                        <label for="detail" class="mb-2 block uppercase text-gray-500 font-bold">
                            Imagen
                        </label>

                        <div class="flex justify-between">
                            <img src="{{ asset('projects_img/'. $project->image_project) }}" alt="Editar la imagen" class=" py-2 object-cover h-48 w-50">
                        </div>

                        <input type="file"
                               id="image_project"
                               name="image_project"
                               class="border p-3 w-full rounded-lg">

                        @error('image_project')
                        <p class="text-red-700 rounded-lg text-sm my-2">{{ $message }}</p>
                        @enderror

                    </div>


                    <div class="flex justify-end mt-10">
                        <button type="submit" class="mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            Guardar
                        </button>

                        &nbsp;
                        <button type="submit" class="mt-10 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <a href="{{route('projects.index')}}" class="w-48"> Regresar </a>
                        </button>
                    </div>

                </div>
            </form>

        </div>

    </div>

@endsection
