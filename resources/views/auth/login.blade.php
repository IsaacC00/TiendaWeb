@extends('layouts.app')

@section('titulo')
    Inicia sesion en DevStagram
@endsection

@section('contenido')






    <div class="md:flex md:justify-center md:gap-10 md:items-center ">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login')}}" method="POST">
                @csrf

                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 
                rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email</label>
                    <input 
                    name="email" 
                    id="email" 
                    type="email" 
                    placeholder="Tu email de registro" 
                    class="border p-3 w-full rounded-lg"
                    value="{{ old('email') }}">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña</label>
                    <input 
                    name="password" 
                    id="password" 
                    type="password" 
                    placeholder="Contraseña" 
                    class="border p-3 w-full rounded-lg"
                    >
                    @error('password')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>

                <div class="m-5">
                    <input type="checkbox" name="remember"> 
                    <label for="" class=" text-gray-500 text-sm">
                        Mantener mi sesion abierta</label> 
                </div>

                <input 
                type="submit" 
                value="Iniciar Sesion"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg ">

            </form>
        </div>

    </div>

@endsection