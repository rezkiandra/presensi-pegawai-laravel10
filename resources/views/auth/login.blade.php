@extends('layouts.guest')
@section('title', 'Login Akun')

@section('content')
    <div
        class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-xl sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="" method="POST">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Login Untuk Masuk Ke Sistem</h5>
                <div>
                    <label for="email" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">
                        Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="loremipsum@gmail.com" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">
                        Password</label>
                    <input type="password" name="password" id="password" placeholder="********"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                </div>
                {{-- <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                        </div>
                        <label for="remember" class="ml-2 text-2sm font-medium text-gray-900 dark:text-gray-300">
                            Ingat Saya</label>
                    </div>
                </div> --}}
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login
                </button>
                <div class="text-2sm font-medium text-gray-500 dark:text-gray-300">
                    Belum punya akun? <a href="{{ url('register') }}"
                        class="text-blue-700 hover:underline dark:text-blue-500">
                        Register sekarang</a>
                </div>
            </form>
        </div>
    </div>
@endsection
