@extends('layouts.app')

@section('titulo')
    Inicia Session en Cyclegram
@endsection

@section('contenido')
    <div class='md:flex justify-center md:gap-10 md:items-center'>
        <div class='md:w-6/12 p-5'>
            <img src="img/IMG_9434.jpg" alt="imagen Login usuarios">
        </div>
        <div class='md:w-4/12 bg-white p-6 rounded-lg   shadow-xl'>
            <form method='POST' action={{ route('login')}} novalidate>
                @csrf
                @if(session('mensaje'))
                    <p class='text-red-600 font-semibold' >{{ session('mensaje')}}</p>
                @endif
                <div  class='mb-5'>    
                    <label for='email' class='mb-2 block uppercase text-gray-500 font-bold'>
                        email
                    </label>
                    <input 
                        id='email'
                        name='email'
                        type='email'
                        placeholder="email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500  @enderror"
                        value="{{old('email')}}"
                    />
                    @error('email')
                    <p class='text-red-600 font-semibold' >{{ $message}}</p>
                    @enderror
                </div>
                <div  class='mb-5'>    
                    <label for='password' class='mb-2 block uppercase text-gray-500 font-bold'>
                        password
                    </label>
                    <input 
                        id='password'
                        name='password'
                        type='password'
                        placeholder="email"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500  @enderror"
                        
                    />
                    @error('password')
                    <p class='text-red-600 font-semibold' >{{ $message}}</p>
                 @enderror
                </div>
                <div class='mb-5 '>
                    <input type='checkbox' name='remember'><label class=' text-gray-500 text-sm'>Mantener session abierta</label>
                </div>
                

                <input 
                    type='submit'
                    value='Iniciar Sesion'
                    class='bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg'
                />
            </form>

        </div>

    </div>



@endsection