@extends('layouts.app')

@section('content')
<div id="iCabecera2">
    <img src="{{asset('img/galeria/1.PNG')}}" style="width: 100%;">
 </div>

<div class='container-fluid text-center row'>
    <div class="txt-style-intro col">

            <p><b><i>“El cuerpo es una máquina perfecta”</i></b></p>
            ¿Cuántas veces hemos escuchado eso?<br>
            Lo interesante es que si lo es. Todo el cuerpo tiene una perfecta sincronización,<br>
            y además siempre se encuentra en trabajo constante, por lo que debemos <br>de proporcionarle 
            la energía suficiente para su buen funcionamiento.<br><br>
    </div>

    <div class="txt-style-intro col ml-2">        
            <p><b>¿Y cómo se consigue? </b>&nbsp;Preguntarás...</p>
            ¡Comiendo saludablemente!<br>
            En esta web, aprenderás a comer sano y a evitar las dietas milagrosas.<br>
            Desmantelaremos mitos y hablaremos de las propiedades y las curiosidades <br>de los alimentos.<br><br>       

    </div>
</div>

 <div id="textIntroC" class='text-center'>
         <p><a href="{{route('register')}}" class='size-big font-weight-bold txt-style-intro text-decoration-none'>¡Regístrate en nuestra página para obtener muchas más ventajas!</a></p>
 </div>

@endsection