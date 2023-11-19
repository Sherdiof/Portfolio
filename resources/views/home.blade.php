@extends('layouts.app')

    @section('title')
        Página Principal
    @endsection

    @section('container')

        <div class="container bg-white mx-auto md:flex">

            <div class="p-4 max-w-xl mx-auto">

                <h2 class="text-violet-800 font-heading mb-8 text-3xl font-bold lg:text-4xl">BIOGRAFÍA
                </h2>

                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-6 w-6 text-blue-800 dark:text-slate-200">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">Descripción</p>
                        <p class="text-gray-600 dark:text-slate-400">Mi nombre es Maria Paula Hernández Cabrera, nací en la ciudad de Guatemala el 31 de Enero de 1997. Desde mi niñez viví en
                            Escuintla Nueva Concepción, estudié la primaria en una aldea llamada Santa Ana mixtan. </p>
                    </div>
                </div>


                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-6 w-6 text-blue-800 dark:text-slate-200">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">Estudios</p>
                        <p class="text-gray-600 dark:text-slate-400">El Bachillerato lo estudie en Quetzaltenango en el Colegio Teresa Martín graduándome de Magisterio en educación primaria así culmine mis
                            estudios anhelando ser una buena profesional .</p>
                    </div>
                </div>


                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-6 w-6 text-blue-800 dark:text-slate-200">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">Centro Académico</p>
                        <p class="text-gray-600 dark:text-slate-400">La universidad actualmente la estudió en uvg campus sur la cual cursó el décimo
                            semestre de la carrera de licenciatura en sistemas de la tecnología.</p>
                    </div>
                </div>


                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900 bg-blue-900">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-6 w-6 text-blue-800 dark:text-slate-200">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1 ">
                        <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300"></p>
                    </div>
                </div>


            </div>

        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">


    @endsection

