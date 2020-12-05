@extends('layouts.app')

@section('content')
    <div class='container txt-style-intro'>
        <p class="text-justify font-weight-bold">
            El Código Alimentario Español (CAE) aplica la denominación de cereal a “las plantas gramíneas y a sus frutos maduros, enteros, sanos y secos”.
        </p><br>
        <p style="font-size:40px"><b>Características nutricionales de los cereales</b></p>
        <p><img src="{{asset('img/menu/GdA/C/trigo.png')}}" style="width: 80%;"/></p><br>
        <p class="text-justify font-weight-bold">
            Entre un 65-75% de su peso total como carbohidratos, entre un  6-12%  proteína y entre un 1-5% grasa.
        </p>
        <p class="text-justify mt-5">
            La proteína más abundante es el gluten, responsable de la enfermedad celíaca. Los cereales exentos de esta proteína son, entre otros, el arroz y el maíz.
        </p>
        <p class="text-justify mt-5">
            Aportan una gran cantidad de energía y nutrientes en comparación con otras fuentes de carbohidratos.
        </p>
        <p class="text-justify mt-5">
            Destaca su contenido en hierro, potasio, fósforo y calcio, aunque este último se absorbe menos por la presencia del ácido fítico.
        </p>
        <p class="text-justify mt-5">
            Son ricos en vitaminas del complejo B y carecen de vitamina C.
        </p>
        <p class="text-justify mt-5">
            Son muy buena fuente de fibra y vitaminas si se consumen integrales.
        </p>
        <p class="text-justify mt-5">
            Las pastas derivadas del trigo contienen vitaminas A, B1 y B2 que facilitan la asimilación de los almidones.
        </p>
        <p class="text-justify mt-5">
            El arroz integral contiene vitamina E y vitaminas del grupo B. También es rico en fibra.
        </p>
        <p class="text-justify mt-5 mb-5">
            El maíz se diferencia del resto de cereales por su alto contenido en carotenos o provitamina A.
        </p>
        <p class="text-justify mt-5">
            Tabla de composición
        </p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Energía(Kcal)</th>
                      <th scope="col">HC (g)</th>
                      <th scope="col">P (g)</th>
                      <th scope="col">A.A. limitante</th>
                      <th scope="col">Ca (mg)</th>
                      <th scope="col">B1 (mg)</th>
                      <th scope="col">B2 (mg)</th>
                      <th scope="col">Niacina (mg)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Trigo</th>
                      <td>334</td>
                      <td>61</td>
                      <td>12.0</td>
                      <td>Lisina</td>
                      <td>3.0</td>
                      <td>0.4</td>
                      <td>0.2</td>
                      <td>5.0</td>
                    </tr>
                    <tr>
                        <th scope="row">Pan blanco</th>
                        <td>258</td>
                        <td>58</td>
                        <td>7.8</td>
                        <td>Lisina</td>
                        <td>19</td>
                        <td>0.12</td>
                        <td>0.05</td>
                        <td>1.7</td>
                      </tr>
                      <tr>
                        <th scope="row">Arroz</th>
                        <td>357</td>
                        <td>77</td>
                        <td>7.5</td>
                        <td>Lisina</td>
                        <td>2.8</td>
                        <td>0.2</td>
                        <td>0.1</td>
                        <td>4.0</td>
                      </tr>
                      <tr>
                        <th scope="row">Maíz</th>
                        <td>356</td>
                        <td>70</td>
                        <td>9.5</td>
                        <td>Lisina<br>Triptófano</td>
                        <td>5.0</td>
                        <td>0.3</td>
                        <td>0.1</td>
                        <td>1.5</td>
                      </tr>
                      <tr>
                        <th scope="row">Centeno</th>
                        <td>319</td>
                        <td>45</td>
                        <td>11.0</td>
                        <td>Lisina</td>
                        <td>3.5</td>
                        <td>0.3</td>
                        <td>0.</td>
                        <td>1.2</td>
                      </tr>
                      <tr>
                        <th scope="row">Avena</th>
                        <td>385</td>
                        <td>66.5</td>
                        <td>13.0</td>
                        <td>Lisina</td>
                        <td>3.8</td>
                        <td>0.5</td>
                        <td>0.1</td>
                        <td>1.3</td>
                      </tr>
                  </tbody>
            </table>
        </div>
        <p class="text-justify font-weight-bold mb-5">
            Kcal: kilocalorías; HC: hidratos de carbono; P: proteínas; Ca: calcio; B1: vitamina B1; B2: vitamina B2. AA: aminoácido
        </p>

        <br>
        <p style="font-size:40px"><b>¿Qué aporta cada cereal?</b></p>
        <p><img src="{{asset('img/menu/GdA/C/maiz.png')}}" style="width: 80%;"/></p><br>
        <p class="text-justify">
            Estos son algunos de los principales cereales que se consumen en la actualidad y sus propiedades más destacables:
        </p>
        <p class="text-left  text-darkorange">
            Trigo
        </p>
        <p class="text-justify">
            Es el más ampliamente cultivado en el mundo y muy característico de la <b>dieta mediterránea</b>. Tiene <b>vitaminas, principalmente E</b> y del grupo B, y entre los minerales que posee están el <b>potasio</b>, el fósforo, el <b>magnesio</b> y el <b>calcio</b>.
        </p>
        <p class="text-left  text-darkorange">
            Espelta
        </p>
        <p class="text-justify">
            Es una variedad muy antigua del trigo. A veces se la denomina trigo salvaje y contiene elementos similares al trigo, como el gluten, aunque también tiene la particularidad de contar con micronutrientes como vitaminas de manera singular. El kamut es otra de las variedades de trigo arcaico.
        </p>
        <p class="text-left  text-darkorange">
            Avena
        </p>
        <p class="text-justify">
            Se suele considerar el cereal más rico en <b>fibra</b> de todos. También destaca por su contenido en proteínas.
        </p>
        <p class="text-left  text-darkorange">
            Centeno
        </p>
        <p class="text-justify">
            Posee mucha fibra y es rico en <b>vitamina A</b> y <b>ácido fólico</b>.
        </p>
        <p class="text-left  text-darkorange">
            Arroz
        </p>
        <p class="text-justify">
            El componente mayoritario del <b>arroz</b> son los hidratos de carbono. Apenas tiene grasa y aporta vitaminas, sobre todo del grupo B como el ácido fólico, y minerales como el potasio.
        </p>
        <p class="text-left  text-darkorange">
            Maíz
        </p>
        <p class="text-justify">
            Se diferencia del resto de cereales por su alto contenido en carotenos o provitamina A.
        </p>
        <p class="text-left  text-darkorange">
            Cebada
        </p>
        <p class="text-justify">
            Es rica en un tipo de fibra soluble, los betaglucanos, que han demostrado su eficacia en la reducción del <b>colesterol</b> LDL (colesterol malo).
        </p>

        <h3 class="mt-5 font-weight-bold text-uppercase">
            <em>
            Diferencias entre cereales y pseudocereales
            </em>
        </h3>
        <p class="text-justify">
            Muchos de los cereales que se consumen hoy en día no son tales. Los cereales son granos o frutos y los pseudocereales son semillas de flores. En cuanto a su composición, nutricional difieren principalmente en el contenido de gluten, ausente en los pseudocereales. “Por ello, donde interesa más la diferenciación entre cereales y pseudocereales es en lo que se refiere a la tecnología de alimentos, ya que no crean harinas de fuerza y, por eso, no serían los más adecuados para realizar procesos de panificación”, precisa Salinas-Roca.
        </p>
        <p class="text-justify">
            “Los pseudocereales tienen mayor cantidad de proteína, fibra y algunos como la chía aportan <b>ácidos grasos omega-3</b>”, apunta Frechoso. Quinoa, bulgur, o trigo sarraceno son otros ejemplos de estas semillas comestibles.
        </p>

        <h3 class="mt-5 font-weight-bold text-uppercase">
            <em>
            Cereales con y sin gluten
            </em>
        </h3>
        <p class="text-justify">
            No todos los cereales tienen gluten en su composición, algo que deben vigilar las personas con enfermedad celíaca, alergia o sensibilidad a esta proteína.  Dos de los cereales más característicos que no tienen gluten son el arroz y el maíz.
        </p>
        <p class="text-justify mb-5">
            Entre los que sí lo contienen cabe señalar el trigo, la espelta, la cebada y el triticale. La avena se incluía tradicionalmente en el grupo de cereales con gluten, pero hoy en día existen variedades libres de este elemento, característica que debe constar en el etiquetado de estos productos.
        </p>

        <h2 class="mt-5 font-weight-bold text-uppercase">
            <em>
            Consejos
            </em>
        </h2>
        <p>
            <blockquote class="font-weight-bold">Consumir cereales integrales para aumentar el contenido en fibra de la dieta.
Elegir mejor la bollería y la repostería casera que la de origen industrial, ya que esta última suele ser más rica en grasas saturadas y grasas trans.
            </blockquote></p>
        <p class="text-justify mt-5">
            <em>
            Ingesta recomendada de cereales
            </em>
        </p>
        <p>
            <blockquote class='font-weight-bold'>
                <em>
                    Se recomienda consumir de 4 a 6 raciones al día.
                </em>
            </blockquote>
        </p>
        <p><img src="{{asset('img/menu/GdA/C/arroz.png')}}" style="width: 80%;"/></p><br>

    </div>
@endsection

