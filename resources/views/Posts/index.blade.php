<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>


    @section('content')
        <div class="text-white pt-6">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 ">
                @foreach (Auth::user()->posts as $post)
                    <div class="block max-w-sm p-6  border border-gray-200 rounded-lg shadow dark:bg-gray-500 dark:border-gray-700">
                        
                        <div class="container mt-1">
                            <div class="row g-3 mb-4">
                                <div class="col-md-2">
                                    {{$post->user->name}}
                                </div>
                                <div class="col-md-8">
                                    {{$post->user->tags->nametag}}
                                </div>
                                <div class="col">
                                    <a href="#!" class="link-muted "><i class="fas fa-pencil-alt ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            {{ $post->post }}
                        </div>
                        
                    </div>
                @endforeach
                
            </div>
            
        </div>
    @endsection

</x-app-layout>
