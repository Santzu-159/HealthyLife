<?php

use Illuminate\Database\Seeder;
use App\Diet;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets');
        Diet::create([
            'name'=>'Menú de primavera para niños de bajo peso',
            'content'=>'menu_semanal_primavera_para_ninios_con_bajo_peso',
            'category'=>'infantil',
        ]);
        
        Diet::create([
            'name'=>'Menú de invierno para niños de bajo peso',
            'content'=>'menu_semanal_invierno_para_ninios_con_bajo_peso',
            'category'=>'infantil',
        ]);
        
        Diet::create([
            'name'=>'Menú de verano para niños de bajo peso',
            'content'=>'menu_semanal_verano_para_ninios_con_bajo_peso',
            'category'=>'infantil',
        ]);
        
        Diet::create([
            'name'=>'Menú de otoño para niños de bajo peso',
            'content'=>'menu_semanal_otono_para_ninios_con_bajo_peso',
            'category'=>'infantil',
        ]);
       
        Diet::create([
            'name'=>'Menú semanal para niños',
            'content'=>'menu_semanal_ninios',
            'category'=>'infantil',
        ]);
        
        Diet::create([
            'name'=>'Dieta niños con hipotiroidismo',
            'content'=>'dieta_ninios_con_hipotiroidismo',
            'category'=>'infantil',
        ]);
        
        Diet::create([
            'name'=>'Dieta blanda para niños y bebés',
            'content'=>'dieta_blanda_para_ninios_y_bebes',
            'category'=>'infantil',
        ]);

        
        Diet::create([
            'name'=>'Primer Trimestre - Opción 1',
            'content'=>'primer_trimestre_primera_opcion',
            'category'=>'embarazadas',
        ]);
        
        Diet::create([
            'name'=>'Primer Trimestre - Opción 2',
            'content'=>'primer_trimestre_segunda_opcion',
            'category'=>'embarazadas',
        ]);

        
        Diet::create([
            'name'=>'Segundo Trimestre - Opción 1',
            'content'=>'segundo_trimestre_primera_opcion',
            'category'=>'embarazadas',
        ]);
        
        Diet::create([
            'name'=>'Segundo Trimestre - Opción 2',
            'content'=>'segundo_trimestre_segunda_opcion',
            'category'=>'embarazadas',
        ]);

        
        Diet::create([
            'name'=>'Tercer Trimestre - Opción 1',
            'content'=>'tercer_trimestre_primera_opcion',
            'category'=>'embarazadas',
        ]);
        
        Diet::create([
            'name'=>'Tercer Trimestre - Opción 2',
            'content'=>'tercer_trimestre_segunda_opcion',
            'category'=>'embarazadas',
        ]);

        Diet::create([
            'name'=>'Dieta de días alternos',
            'content'=>'dieta_de_dias_alternos',
            'category'=>'perder_peso',
        ]);

        Diet::create([
            'name'=>'Dieta del vino y del jamón',
            'content'=>'dieta_del_vino_y_del_jamon',
            'category'=>'perder_peso',
        ]);

        Diet::create([
            'name'=>'Dieta Sonoma',
            'content'=>'dieta_sonoma',
            'category'=>'perder_peso',
        ]);    

        Diet::create([
            'name'=>'Pierde 10Kg de manera saludable.',
            'content'=>'dieta_perder_diez_kilos',
            'category'=>'perder_peso',
        ]);

        Diet::create([
            'name'=>'Dieta Mediterránea.',
            'content'=>'dieta_mediterranea',
            'category'=>'perder_peso',
        ]);

        Diet::create([
            'name'=>'Dieta Dash.',
            'content'=>'dieta_dash',
            'category'=>'perder_peso',
        ]);
        Diet::create([
            'name'=>'Dieta para aumentar el peso',
            'content'=>'dieta_aumentar_peso',
            'category'=>'ganar_peso',
        ]);

        Diet::create([
            'name'=>'Dieta para celíacos',
            'content'=>'celiacos',
            'category'=>'celiacos',
        ]);

        Diet::create([
            'name'=>'Menú para atletas de resistencia',
            'content'=>'menu_atletas_alta_resistencia',
            'category'=>'deportista',
        ]);

        Diet::create([
            'name'=>'Menú para aumentar la masa muscular. Opción 1',
            'content'=>'menu_uno_para_aumentar_masa_muscular',
            'category'=>'deportista',
        ]);
            
        Diet::create([
            'name'=>'Menú para aumentar la masa muscular. Opción 2',
            'content'=>'menu_dos_para_aumentar_masa_muscular',
            'category'=>'deportista',
        ]);

        Diet::create([
            'name'=>'Menú para la menopausia.',
            'content'=>'menu_menopausia',
            'category'=>'menopausia',
        ]);
        Diet::create([
            'name'=>'Consejos para la menopausia',
            'content'=>'consejos_para_menopausia',
            'category'=>'menopausia',
        ]);

        Diet::create([
            'name'=>'Menu diabetes de 1500 calorías',
            'content'=>'dieta_uno_diabetes',
            'category'=>'diabetes',
        ]);
        Diet::create([
            'name'=>'Menu diabetes de 1800 calorías',
            'content'=>'dieta_dos_diabetes',
            'category'=>'diabetes',
        ]);

        Diet::create([
            'name'=>'Menu diabetes de 2000 calorías',
            'content'=>'dieta_tres_diabetes',
            'category'=>'diabetes',
        ]);

        Diet::create([
            'name'=>'Menu diabetes de 2500 calorías',
            'content'=>'dieta_cuatro_diabetes',
            'category'=>'diabetes',
        ]);

        Diet::create([
            'name'=>'Dieta Vegana para iniciarse',
            'content'=>'dieta_vegana_para_iniciarse',
            'category'=>'veganos_y_vegetarianos',
        ]);

        Diet::create([
            'name'=>'Dieta de Mantenimiento',
            'content'=>'mantenimiento_peso',
            'category'=>'mantenimiento',
        ]);
    }   
}
