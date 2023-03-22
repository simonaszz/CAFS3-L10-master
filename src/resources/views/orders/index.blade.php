@extends('layouts.app')

@section('content')
<div class="flex justify-center w-full">
    @forelse ($orders as $order)
    <div class="container text-center flex flex-row">
        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">#{{ $order['id']}} {{ $order['item'] }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $order['price'] }}</p>
        </a>
    </div>
    @empty
    <h3>not found</h3>
    @endforelse
</div>
@endsection