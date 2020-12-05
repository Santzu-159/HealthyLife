@extends('layouts.app')

@section('content')
    <div class='container txt-style-intro'>
        <p class="text-justify mt-5">Las hortalizas y las verduras forman una parte esencial de nuestra alimentación. Muchas veces, no se encuentran entre los alimentos favoritos de la gente, sobre todo de los más pequeños. Y, en ocasiones, tampoco sabemos cómo sacarles el mejor partido y el mejor sabor. De hecho, podríamos hasta decir que no tanta gente sabe distinguir entre los distintos tipos de hortalizas y verduras e, incluso, no sabe cuál es la diferencia entre ambos tipos de vegetales.</p>
        <p class="text-justify mt-5">Para todas estas dudas, y para muchas más información, vamos a adentrarnos aquí en el bonito mundo de las hortalizas y las verduras. Prometemos que, al menos, saldrás de este artículo con un poquito de conocimiento e interés sobre todas ellas.</p>
        <br><p><img src="{{asset('img/menu/GdA/VyH/verduras.png')}}" style="width: 80%;"/></p>
        <br><p style="font-size:35px"><b>¿Qué es una hortaliza?</b></p>
        <p class="text-justify mt-5">Las hortalizas son las plantas que se cultivan en una huerta y que tienen un destino comestible. Entre las hortalizas, no se incluyen los cereales ni las frutas, pero esto no quita para que sean muchísimas las hortalizas que existen y que se pueden comer.</p>
        <br><p style="font-size:35px"><b>¿Qué es una verdura?</b></p>
        <p class="text-justify mt-5">Las verduras, en términos botánicos, son las partes verdes de las hortalizas. Es decir, no son una categoría equivalente, aunque muchas veces dé esa sensación. Pero esta equivocación se debe a que muchas veces se habla en términos de alimentación y, ahí, sí que se suele diferenciar entre verduras y hortalizas.</p>
        <p class="text-justify mt-5">Entonces, ¿qué tipos de hortalizas hay?</p>
        <p class="text-justify mt-5">Aunque hay muchas maneras de clasificar las hortalizas (o las verduras para mucha gente), aquí vamos a hacerlo por la parte de la misma que se dedica al consumo humano. Según cuál sea ésta, podemos distinguir los siguientes tipos de hortalizas:</p>
        
        <p><img src="{{asset('img/menu/GdA/VyH/raices.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Este tipo de hortalizas son de las más populares y, sobre todo, de las que más tiempo llevamos comiendo como seres humanos. Probablemente, antes no eran tan apetecibles ni resultonas como hoy en día, porque el hombre lleva siglos haciendo una selección de las raíces más carnosas, pero gracias a eso hoy disfrutamos de raíces como zanahorias, rábanos o nabos y las tenemos muy accesibles en prácticamente cualquier lugar.</p>
        <p class="text-justify mt-5"><i>· Zanahoria: 88% agua; 9,6% hidratos de carbono, 2,8% fibra, 1% proteína vegetal. Ricas en potasio, sodio, calcio, fósforo, magnesio hierro. Vitamina C, vitamina E, vitaminas del grupo B. 41 kcal por cada 100 gramos.</i></p>
    
        <p><img src="{{asset('img/menu/GdA/VyH/bulbos.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">El bulbo es la parte de la hortaliza que va desde la raíz hasta el tallo y, normalmente, es donde estos alimentos acumulan sus reservas de nutrientes obtenidos de la tierra. Por este motivo, se puede considerar que son una de las partes más interesantes nutricionalmente. Entre los bulbos que más comúnmente comemos, algunos que resultan imprescindibles para nuestra gastronomía más tradicional, como la cebolla, el ajo o la puerro.</p>
        <p class="text-justify mt-5"><i>· Cebolla: 89% agua; 9,3% hidratos de carbono; fibra 1,7%; proteína vegetal 1,1%. Muy ricas en potasio, fósforo, calcio y yodo. Con altas cantidades de vitamina B9, betacarotenos, vitamina C y vitaminas del grupo A. 40 kcal por cada 100 gramos.</i></p>
   
        <p><img src="{{asset('img/menu/GdA/VyH/hojas.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Puede que aquí vayamos a encontrar gran parte de lo que, comúnmente, llamamos verduras. Al menos, cuando vamos al súper o cuando estamos pensando en recetas para cocinar. Las espinacas, las acelgas, la lechuga, la rúcula, la escarola, las endivias… Muy presentes en ensaladas, pero también en otros platos y guarniciones.</p>
        <p class="text-justify mt-5"><i>· Espinacas: 91% agua; 3,6% hidratos de carbono; 2,2% fibra; 2,8% proteína; Muy ricas en potasio, calcio, fósforo, magnesio y sodio. Altas cantidades de vitamina A, vitamina C y betacarotenos. 23 kcal por cada 100 gramos.</i></p>

        <p><img src="{{asset('img/menu/GdA/VyH/flores.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Aunque llamarlas así nos puede llevar a confusión, las flores de las hortalizas son otra de esas partes de las plantas a las que tan comúnmente llamamos verduras y que todos tenemos prácticamente a diario en nuestras neveras o estanterías. Y, si no, ¡deberíamos! Si tienes alguna duda sobre cuáles son este tipo de hortalizas llamadas flores, son las que compras como brócoli, coliflor, alcachofa, etc.</p>
        <p class="text-justify mt-5"><i>· Brócoli: 89% agua; 6,6% hidratos de carbono; 2,6% fibra; 2,8% de proteína. Muy ricos en ácido fólico, vitaminas A y C y betacarotenos. También en potasio, calcio, sodio, magnesio y yodo. 34 kcal por cada 100 gramos.</i></p>

        <p><img src="{{asset('img/menu/GdA/VyH/tallos.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Esta parte de la planta es la que, físicamente, sostiene a las flores y a los frutos. Puede que no sean las que ofrecen una riqueza más variada en las tiendas, pero hay que reconocer que este tipo de hortalizas son consumidas en prácticamente todo el mundo. Los espárragos son los tallos más populares, pero también el apio o los brotes de bambú.</p>
        <p class="text-justify mt-5"><i>· Espárragos verdes: 93,2% agua; 3,9% hidratos de carbono; 2,1% fibra; 2,2% proteína; 0,12% grasa. Muy ricos en vitaminas A y C, ácido fólico y betacarotenos. Altas cantidades de potasio, fósforo, calcio y magnesio. 20 kcal por cada 100 gramos.</i></p>

        <p><img src="{{asset('img/menu/GdA/VyH/tuberculos.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Los tubérculos son de las hortalizas más sabrosas, más populares y más utilizadas de la lista en términos gastronómicos. En términos nutritivos, se puede decir que son las más ricas en hidratos de carbono. Entre los tubérculos más consumidos, podemos destacar el boniato y, sobre todo, la patata.</i></p>
        <p class="text-justify mt-5"><i>· Patata: 79% agua; 17,5% hidratos de carbono; 2,2% fibra; 2% proteína. Ricas en potasio, magnesio, calcio y fósforo. También en vitaminas C, betaracotenos y ácido fólico. 77 kcal por cada cien gramos.</i></p>
   
        <p><img src="{{asset('img/menu/GdA/VyH/semillas.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">Incluso dentro de este grupo se podrían distinguir dos tipos de hortalizas: las semillas propiamente dichas, algunas de ellas muy de moda actualmente, como el sésamo o el lino, y otras de las que se llaman semillas verdes o legumbres, que son las alubias, los garbanzos, los guisantes, etc.</i></p>
        <p class="text-justify mt-5"><i>· Guisantes: 78% agua; 14,5% hidratos de carbono; 5% fibra; 5,4% proteínas. Riquísimos en potasio, magnesio, fósforo y calcio. Grandes cantidades de vitamina A, ácido fólico, vitamina C y betacarotenos. 81 kcal por cada 100 gramos.</i></p>
        
        <p><img src="{{asset('img/menu/GdA/VyH/frutos.png')}}" style="width: 80%;"/></p>
        <p class="text-justify mt-5">El último tipo de hortalizas que queremos comentar aquí es uno de los que seguramente hayas comido varias veces en los últimos días. En estos frutos es donde se encuentran las semillas de las plantas y, entre ellos, los calabacines, las berenjenas, los tomates, los pimientos, los pepinos, etc.</p>
        <p class="text-justify mt-5"><i>· Tomates: 94% agua; 3,9% hidratos de carbono; 1,2% fibra; 0,2% grasa. Muy ricos en vitamina A, vitamina C, vitamina B9, potasio, fósforo, calcio y magnesio. 18 kcal por cada 100 gramos.</i></p>

    
    </div>
@endsection

