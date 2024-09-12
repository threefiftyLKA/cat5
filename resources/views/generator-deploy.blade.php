@extends('layouts.front')

@section('content')
<div class="bg-white py-5 sm:py-5">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl flex justify-center">

            <div class="w-full">
                <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">GENERATOR DEPLOY</h2>
                @livewire('generator-deploy')
            </div>
        </div>
    </div>
</div>
@endsection
