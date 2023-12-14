<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>


    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid justify-items-center">
            @include('Posts.create')
            <div class="bg-gray-800 dark:bg-gray-600 overflow-hidden shadow-sm sm:rounded-lg w-3/5 ">
                
                <div class=" text-gray-900 dark:text-gray-100 grid justify-items-center content-evenly">
                    @foreach ($posts as $post)
                    
                    <div class="m-8 p-6 bg-gray-500 border border-gray-200 rounded-lg shadow dark:bg-gray-500 dark:border-gray-700 w-4/5">
                        
                        <div class="container mt-1">
                            <div class="row g-3 mb-2">
                                <div class="col-md-3">
                                    {{$post->user->name}}
                                </div>
                                <div class="col-md-7">
                                    {{$post->user->tags->nametag}}
                                </div>
                                <div class="col">
                                    @auth()
                                    @if (Auth::id() === $post->user->id)
                                        <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="link-muted "><i class="fas fa-pencil-alt ms-2"></i></a>
                                    @endif   
                                    @endauth
                                </div>
                            </div>
                        </div>
                        
                    <div class="mt-3 p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        {{$post->post}}
                        <div>
                                <img src="{{$post->image}}" alt="..."> 
                        </div>
                    </div>
                    <div class="text-bottom pt-6 flex items-center justify-between ">
                        
                        <div class="small d-flex justify-content-start">
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-thumbs-up me-2"></i>
                <p class="mb-0">Like</p>
              </a>
              <a href="{{ route('comment.index', ['post' => $post->id]) }}" class="d-flex align-items-center me-3">
    <i class="far fa-comment-dots me-2 "></i>
    <p class="mb-0">Comment</p>
</a>

              
              
            </div>
                       {{$post->created_at->format('Y-m-d')}}
                    </div>
                </div>
                    
                    @endforeach 
                    <div class="mt-4 ">
                        {{$posts->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
