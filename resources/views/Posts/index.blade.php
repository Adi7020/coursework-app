<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>


@section('content')
    <div class="text-white pt-6">
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 ">
        @foreach (Auth::user()->posts as $post)
        
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            {{$post->post}}
        </div>
        
        </div>
            
        @endforeach
        
    </div>
    <div class="flex items-center justify-center pb-6 px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            {{$posts->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection

 </x-app-layout>   
