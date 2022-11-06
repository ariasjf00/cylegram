@extends('layouts.app')

@section('titulo')

Home

@endsection

@section('contenido')
    <div class='container flex '>
        <div class="md:w-1/2 flex-col">
            <img src="img/portada.jpg" alt="Portada">
            <p>Imagen de <a href="https://pixabay.com/es/users/giammatime-1792314/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1099583">roberto giammarini</a> en <a href="https://pixabay.com/es//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1099583">Pixabay</a></p>
        </div>
        
        <div class="md:w-1/2">
            <h2 class='font-black text-center text-3xl mb-10'>A rodar....</h2>
            <p class='text-2xl mb-5 text-center'>“Pedalea mucho o poco, largo o corto. Pero pedalea“.</p>
            <p class='text-2xl mb-5 text-center'>“Los ciclistas viven con dolor. Si no puedes manejarlo, nunca ganarás nada“</p>
            <p class='text-2xl mb-5 text-center'>“La vida es como montar en bicicleta. Para mantener el equilibrio, debes seguir moviéndote“</p>
        </div>   
        
    </div>
@endsection
