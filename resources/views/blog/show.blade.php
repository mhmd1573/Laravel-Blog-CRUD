@extends('layouts.app')

@section('content')


@if (session()->has('message'))
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">{{ session()->get('message') }}</span>
  </div>
@endif

<div class="container m-auto text-center pt-15 pb-5 mb-10 mt-10">
    <h1 class="text-6xl font-bold">{{ $post->title  }}</h1>
    By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
    on <span class="text-gray-500 italic">{{ date('d-m-Y', strtotime($post->updated_at))   }}</span>

</div>

<div class="container m-auto pt-15 pb-5">

    <div class="flex h-30">
        <img class="object-cover w-full" src="/images/{{($post->image_path)}}" alt="">
    </div>


    <p class="text-l text-gray-700 py-8 leading-6">
        {{$post->description}}
    </p>

    @if(Auth::user() && Auth::user()->id == $post->user_id)
    <div class="container sm:grid mx-auto p-5  ">
        <p class="mb-5">
         <a href="/blog/{{$post->slug}}/edit" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold ">Edit Post</a>
     </p>
     </div>

         <form action="/blog/{{$post->slug}}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-700 text-gray-100 py-4 px-5 rounded-lg font-bold inline-block">Delete Post</button>
         </form>


        @endif

</div>


    @endsection