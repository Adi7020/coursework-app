<div class="bg-gray-600 dark:bg-gray-600 overflow-hidden shadow-sm sm:rounded-lg w-3/5 m-4 ">
    <form class="max-w-2xl bg-gray-600 rounded-lg p-2 mx-auto m-4" action="{{route('comment.create')}}" method="post"  >
        @csrf
        <div class="px-3 mb-2 mt-2">
            <textarea placeholder="Comment"
                class="w-full bg-gray-500 rounded border border-gray-400 leading-normal resize-none h-20 py-2 px-3 font-medium placeholder-gray-900  focus:outline-none text-white"></textarea>
        </div>
        <div class="flex justify-end px-4">
            <input type="submit" class="px-2.5 py-1.5 rounded-md text-white text-sm bg-indigo-500" value="Comment">
        </div>
    </form>
</div>