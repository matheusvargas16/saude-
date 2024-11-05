<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plano;

class PlanoSeeder extends Seeder
{
    public function run()
    {
        $planos = [
            [
                'nome' => 'Plano Individual',
                'tipo' => 'Individual',
                'beneficios' => 'Consultas ilimitadas, Acesso a especialistas, Exames laboratoriais básicos',
                'faixaetaria' => '18-65 anos',
                'preco' => 200.00
            ],
            [
                'nome' => 'Plano Familiar',
                'tipo' => 'Familiar',
                'beneficios' => 'Atendimento pediátrico, Consultas ilimitadas, Cobertura odontológica básica',
                'faixaetaria' => '0-65 anos',
                'preco' => 450.00
            ],
            [
                'nome' => 'Plano MEI',
                'tipo' => 'MEI',
                'beneficios' => 'Descontos em farmácias parceiras, Exames de rotina, Acesso a clínicas conveniadas',
                'faixaetaria' => '18-65 anos',
                'preco' => 150.00
            ],
            [
                'nome' => 'Plano Coletivo Empresarial',
                'tipo' => 'Empresarial',
                'beneficios' => 'Atendimento emergencial, Cobertura nacional, Suporte 24 horas',
                'faixaetaria' => '18-65 anos',
                'preco' => 300.00
            ],
            [
                'nome' => 'Plano Coletivo por Adesão',
                'tipo' => 'Adesão',
                'beneficios' => 'Programas de saúde mental, Check-up anual, Consultas com nutricionistas',
                'faixaetaria' => '18-65 anos',
                'preco' => 250.00
            ],
        ];

        foreach ($planos as $plano) {
            Plano::create($plano);
        }
    }
}
