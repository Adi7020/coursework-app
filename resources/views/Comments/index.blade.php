@extends('layouts.app')

@section('header')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@endsection


@section('Comments')

<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="color: white">
    <p>All Comments</p>
    <ul>
        @foreach ($comments as $comment)
         <li class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            {{$comment->comment}}</li>   
        @endforeach
    </ul>
</div>
    
@endsection