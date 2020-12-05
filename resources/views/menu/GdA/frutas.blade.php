@extends('layouts.app')

@section('content')
    <div class='container txt-style-intro'>
        <p class="text-justify mt-5">Aportan fibra, vitaminas, minerales, antioxidantes, flavonoides, terpenos, selenio, compuestos fenólicos y sustancias fitoquímicas.</p>
        <br><p><u><b>Definición de frutas</b></u></p>
        <p class="text-justify mt-5">Según el Código Alimentario Español (CAE) se denomina fruta al “fruto, la inflorescencia, la semilla o partes carnosas de órganos florales que hayan alcanzado el grado de madurez y sean adecuadas para el consumo humano”.</p>
        <br>
        <p><img src="{{asset('img/menu/GdA/F/frutas.png')}}" style="width: 80%;"/></p><br>
        <br><p><u><b>Características Nutricionales de las frutas</b></u></p>
        <p class="text-justify mt-5">
            <ul class="text-justify mt-5">
                <li>Presentan un alto contenido de hidratos de carbono, frecuentemente como azúcares mono y disacáridos (glucosa, fructosa y sacarosa) que le confieren dulzor a las frutas. </li>
                <li>Cuanto más maduras son, mayor concentración de azúcares tienen.
                    Proporcionan un importante aporte vitamínico (vitaminas A, C, B1, B2, B6, ácido fólico) y mineral (potasio, hierro, calcio, magnesio, sílice, zinc, sulfatos, fosfatos, cloruros).</li>
                <li>Aportan fibra, principalmente celulosa y pectinas.</li>
                <li>La mayoría tienen un alto contenido de agua que oscila entre un 80 y 95 por ciento.</li>
                <li>Poseen antioxidantes, flavonoides, terpenos, selenio, compuestos fenólicos y sustancias fitoquímicas.</li>
            </ul> 
        </p>
        <br><p><u><b>Tabla de composición de frutas</b></u></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Energía(Kcal)</th>
                      <th scope="col">HC (g)</th>
                      <th scope="col">P (g)</th>
                      <th scope="col">Fibra(g)</th>
                      <th scope="col">Vit C (mg)</th>
                      <th scope="col">B1 (mg)</th>
                      <th scope="col">B2 (mg)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Ciruela</th>
                      <td>44</td>
                      <td>10</td>
                      <td>0.8</td>
                      <td>0.1</td>
                      <td>1</td>
                      <td>3.5</td>
                      <td>0.1</td>
                      <td>0.07</td>
                    </tr>
                    <tr>
                        <th scope="row">Fresas</th>
                        <td>36</td>
                        <td>7</td>
                        <td>0.7</td>
                        <td>0.6</td>
                        <td>2</td>
                        <td>60</td>
                        <td>0.03</td>
                        <td>0.05</td>
                      </tr>
                      <tr>
                        <th scope="row">Kiwi</th>
                        <td>51</td>
                        <td>9.12</td>
                        <td>1</td>
                        <td>0.63</td>
                        <td>2.12</td>
                        <td>71</td>
                        <td>0.017</td>
                        <td>0.05</td>
                      </tr>
                      <tr>
                        <th scope="row">Manzana</th>
                        <td>52</td>
                        <td>12</td>
                        <td>0.3</td>
                        <td>0.35</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0.04</td>
                        <td>0.02</td>
                      </tr>
                      <tr>
                        <th scope="row">Melocotón</th>
                        <td>52</td>
                        <td>12</td>
                        <td>0.5</td>
                        <td>0.1</td>
                        <td>1</td>
                        <td>7</td>
                        <td>0.03</td>
                        <td>0.05</td>
                      </tr>
                      <tr>
                        <th scope="row">Melón</th>
                        <td>31</td>
                        <td>6.5</td>
                        <td>0.8</td>
                        <td>0.2</td>
                        <td>1</td>
                        <td>10</td>
                        <td>0.02</td>
                        <td>0.05</td>
                      </tr>
                      <tr>
                        <th scope="row">Naranja</th>
                        <td>44</td>
                        <td>9</td>
                        <td>1.1</td>
                        <td>0.2</td>
                        <td>2</td>
                        <td>50</td>
                        <td>0.1</td>
                        <td>0.03</td>
                      </tr>
                      <tr>
                        <th scope="row">Pera</th>
                        <td>61</td>
                        <td>14</td>
                        <td>0.4</td>
                        <td>0.4</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0.02</td>
                        <td>0.05</td>
                      </tr>
                      <tr>
                        <th scope="row">Uva</th>
                        <td>81</td>
                        <td>17</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0.5</td>
                        <td>4</td>
                        <td>0.04</td>
                        <td>0.02</td>
                      </tr>
                  </tbody>
            </table>
        </div>
        <br><p><i>Kcal: kilocalorías; P: proteínas; G: grasas; HC: Hidratos de carbono</i></p>
        <br><p><u><b>Consejos</b></u></p>
        <p class="text-justify mt-5">
            <ul>
                <li>Siempre que sea posible, consume la fruta fresca de temporada con piel y bien lavada, ya que así se conservan las vitaminas, la fibra y los minerales. Sin embargo, la fruta cruda presenta menor digestibilidad que la cocida</li>
                <li>Una buena manera de aprovechar las frutas que estén demasiado maduras o estropeadas es cocinarlas y prepararlas en compota.</li>
                <li>La vitamina C se oxida muy fácilmente al contacto con el oxígeno, por este motivo se aconseja consumir los zumos recién hechos.</li>
            </ul> 
        </p>
        <br><p><u><b>Ingesta recomendada de frutas:</b></u></p>
        <p class="text-justify mt-5">Más de 3 raciones/día (120-200 g por ración).<br><br><b>Una ración equivale a:</b><br>1 pieza mediana.<br>1 taza de cerezas o fresas.<br>2 rodajas de melón.</p>
        <br><p><img src="{{asset('img/menu/GdA/F/fresa.png')}}" style="width: 80%;"/></p><br>
      </div>
@endsection

