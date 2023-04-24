<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"
                    <h3>Post index page</h3>
                <br>
                    <button><a href="/post/create">Create new post</a></button>
                    <ul>
                        @foreach($posts as $index => $post)
                            <li><h2><a href="/post/{{$post->id}}">{{$index+1}}: {{$post->title}}  </a> by {{$post->user->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

