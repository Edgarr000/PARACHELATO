<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 10; $i++) {
            $rne = fake()->randomNumber(9);
            $sexo = fake()->randomElement(["Femenino", "Masculino"]);
            if ($sexo == "Femenino")
                $nombres = fake()->firstNameFemale();
            else
                $nombres = fake()->firstNameMale();
    
            $colegio = fake()->randomElement(["IGFDR", "IGFM", "IGJHC", "CEMNGS", "CEMNGABCD", "CEMNGSCJ"]);
            $curso = fake()->randomElement(["Septimo", "Octavo", "Noveno", "Decimo", "Undecimo", "Duodecimo"]);
            $carrera = fake()->randomElement(["Tercer Ciclo", "BTP-Info", "BTP-Conta", "BCH", "BTP-Elect", "BTP-Conf"]);
            $jornada = fake()->randomElement(["Matutina", "Vespertina", "Nocturna"]);
            $seccion = fake()->randomDigitNot(0);
            $nacimiento = fake()->dateTimeBetween($startDate = '-20 years', $endDate = '-12 years');

            DB::table('students')->insert([
                'rne' => $rne,
                'nombres' => $nombres,
                'apellidos' => fake()->lastName(),
                'sexo' => $sexo,
                'fechanac' => $nacimiento,
                'colegio' => $colegio,
                'curso' => $curso,
                'carrera' => $carrera,
                'jornada' => $jornada,
                'seccion' => $seccion
            ]);
        }
        }
    }
