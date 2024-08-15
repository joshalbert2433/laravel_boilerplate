@section('title', 'Login')

@extends('layout.app')


@section('content')

    <section class="h-screen flex justify-center items-center">

        <div class="bg-slate-400 rounded p-4">

            <div class="space-y-3">
                <input placeholder="email" class="w-full p-2" />
                <input placeholder="password" class="w-full p-2" />
            </div>


            <div class="flex justify-end">
                <button class="px-4 py-2 bg-blue-400 rounded my-4">
                    Login
                </button>
            </div>

        </div>

    </section>
@endsection
