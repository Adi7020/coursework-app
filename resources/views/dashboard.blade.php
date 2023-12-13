<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid justify-items-center">
            @include('Posts.create')
            <div class="bg-gray-800 dark:bg-gray-600 overflow-hidden shadow-sm sm:rounded-lg w-3/5 ">
                
                <div class=" text-gray-900 dark:text-gray-100 grid justify-items-center content-evenly">
                    @foreach ($pos as $post)
                    
                    <div class="m-8 p-6 bg-gray-500 border border-gray-200 rounded-lg shadow dark:bg-gray-500 dark:border-gray-700 w-4/5">
                        <div class="grid-col-3">{{$post->user->name}} {{$post->user->tags->nametag}}
                            
                            <a href="#!" class="link-muted "><i class="fas fa-pencil-alt ms-2 hover-overlay"></i></a>
                        </div>
                        
                    <div class="mt-5 p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        {{$post->post}}
                    </div>
                    <div class="text-bottom pt-6 flex items-center justify-between ">
                        
                        <div class="small d-flex justify-content-start">
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-thumbs-up me-2"></i>
                <p class="mb-0">Like</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-comment-dots me-2 "></i>
                <p class="mb-0">Comment</p>
              </a>
              
            </div>
                       {{$post->created_at->format('Y-m-d')}}
                    </div>
                </div>
                    
                    @endforeach 
                    <div class="mt-4 ">
                        {{$pos->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

