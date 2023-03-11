@props(['comment'])
@extends('components.layout')
@section('content')


        </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="/catigories/{{$post->category->slug}}"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">{{$post->category->name}} </a>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    {{$post->title}}
                               </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at->diffForHumans()}} </time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                {{$post->body}}
                            </p>

                            <p class="mt-4">
                                {{$post->slug}}
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8 ">
                            <div class="flex items-center text-sm">
                                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold"><a href="/authers/{{ $post->auther->username }}">
                                            {{$post->auther->name}}</a></h5>

                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="#"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
            <section class="col-span-8 col-start-5 mt-10 ml-20 space-y-6">

           {{-- @auth --}}
            <form action="/posts/{{$post->slug}}/comments" method="post" class="bg-gray-200 p-8 rounded-xl ">
                @csrf

                <header>
                    <img src="https://i.pravatar.cc/100?u=" width="60" height="60" class="rounded-xl" alt="">
                <h2 class="ml-4">Want To Comment ?!</h2>
                </header>

                <div class="mt-6">
                    <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" required placeholder="What Do You Thinking About" rows="5"></textarea>
                </div>

                 @error('body')
                <span class="text-sm text-red-500">{{$message}} </span>
            @enderror
                <div class="flex justify-end border-t border-gray-400 pt-5">
                    <button type="submit" class="bg-blue-400 rounded-2xl py-2 font-bold px-10 hover:bg-blue-600 text-sm">Post</button>
                </div>
            </form>

           {{-- @endauth --}}


                @foreach ($post->comments as $comment)
                <x-post-comment :comment="$comment"/>

                @endforeach

            </section>
        </main>
    </section>

@endsection
