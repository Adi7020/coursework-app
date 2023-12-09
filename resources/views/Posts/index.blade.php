@extends('layouts.app')


@section('Posts')

<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="color: white">
    <p>All posts</p>
    <ul>
        @foreach ($posts as $post)
         <li class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            {{$post->post}}</li>   
        @endforeach
    </ul>
</div>
    
@endsection