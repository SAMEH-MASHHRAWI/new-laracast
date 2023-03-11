@extends('components.layout')

@section('content')
        <main class="max-w-lg mx-auto mt-20 bg-gray-200 rounded-xl border border-gray-500 p-6 ">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form action="/register" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">


                        <label class="block
                         mb-2 uppercase font-bold text-xs" for="name">
                                Name
                        </label>
                        <input
                         class="border border-gray-400 p-2 w-full"
                          type="text"
                           name="name"
                            id="name"
                            value="{{ old('name')}}"
                            required
                            >

                        @error('name')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror

                        <label for="username" class="block
                         mb-2 uppercase font-bold text-xs ">
                            UserName
                        </label>
                        <input
                         class="border border-gray-400 p-2 w-full"
                          type="text"
                           name="username"
                           id="username"
                            value="{{ old('username')}}"

                            required
                            >
                         @error('username')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror

                          <label for="email" class="block
                           mb-2 uppercase font-bold text-xs ">
                            Email
                        </label>
                        <input
                         class="border border-gray-400 p-2 w-full"
                          type="email"
                           name="email"
                           id="email"
                            value="{{ old('email')}}"

                            required
                             >

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror

                        <label for="password"
                         class="block mb-2 uppercase font-bold text-xs ">
                            Password
                        </label>
                        <input
                         class="border border-gray-400 p-2 w-full"
                         type="password"
                          name="password"
                          id="password"
                          required
                           >
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror

                    <div class="mb-6">

                        <button type="submit"
                        class="bg-blue-400 text-white rounded py-2
                        px-4 hover:bg-blue-600">
                            Submit
                        </button>
                    </div>

                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-sm">{{$error}}</li>
                    @endforeach
                </ul>
            </form>
        </main>
@endsection

