@extends('layouts.app')

@section('title')
    {{$contact->name}}
@endsection

@section('container')

    <div class="container flex justify-center mb-10">
    <div class="w-1/2 block rounded-lg bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
    <div
        class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600">
        Mensaje
    </div>
    <div class="p-6">
        <h5
            class="mb-2 text-xl font-medium leading-tight text-neutral-800">
            {{$contact->reason}}
        </h5>
        <p class="mb-4 text-base text-neutral-600">
            {{$contact->detail}}
        </p>
    </div>
    <div
        class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600">
        {{$contact->created_at->diffForHumans()}}
    </div>
    </div>
    </div>

    <button type="button" class=" flex items-center justify-center h-5 px-5 py-5 mb-10 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto">
        <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        <a class="flex justify-center" href="{{url()->previous()}}"> Regresar </a>
    </button>

@endsection
