@extends('layouts.app')

@section('content')




<div class="container m-auto text-center pt-15 pb-5 mb-10 mt-10">
    <h1 class="text-6xl font-bold">Edit Your Post</h1>
</div>

<div class="container m-auto  pt-15 pb-5">
    <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text"
            name="title"
            value="{{$post->title}}"
            class="w-full h-20 text-6xl rounded-lg shadow-lg border-b mb-5"        >




        <textarea name="description"  placeholder="Description" class="w-full h-60 text-l rounded-lg shadow-lg border-b mb-5"   >
                {{$post->description}}
        </textarea>
        
        

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size"></label>
        <input name="image" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">        


        <button type="submit"
        class="bg-green-700 hover:bg green-100 text-gray-200 hover:text-gray-700 transition-300 cursor-pointer p-5 font-bold rounded-lg uppercase "
        
        >Edit the post</button>
    
    
    </form>
</div>


    @endsection