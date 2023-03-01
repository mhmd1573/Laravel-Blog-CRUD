
@extends('layouts.app')
@section('content')


<div class="container m-auto text-center pt-15 pb-5 mb-10 mt-10">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>

@if(Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
   <p class="mb-5">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold ">Add New Post</a>
</p>
</div>
@endif

@foreach ($posts as $post)
    
<div class="container mt-20 sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 md:gap-10 border-b border-gray-300 pb-10  ">

    <div class="flex">
        <img class="object-cover" src="/images/{{($post->image_path)}}" alt="">
    </div>

    <div class="p-17">
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
            {{$post->title}}
        </h2>
        <span>
            By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
            on <span class="text-gray-500 italic">{{ date('d-m-Y', strtotime($post->updated_at))   }}</span>
        
            <p class="text-l text-gray-700 py-8 leading-6">
                {{$post->description}}
            </p>

            <a href="/blog/{{$post->slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold">Read More</a>
        </span>
    </div>
</div>




@endforeach







@endsection