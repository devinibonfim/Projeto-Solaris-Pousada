<?php

namespace Database\Seeders;

use App\Models\Quarto;
use App\Models\TipoQuarto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_quartos')->insert([
            'nome' => 'Standard',
            'valor' => 100,
            'tamanho' => '24m²',
            'limite_pessoa' => 4,
            'descricao' => 'Este quarto dispõe de ventilador. O banheiro privativo inclui secador de cabelo e chuveiro. No seu banheiro privativo: Vaso sanitário, chuveiro, Toalhas, Papel higiênico. Comodidades dos quartos: Frigobar, Ventilador, Sofá, Mesa de trabalho, Telefone, TV, Canais via satélite, Canais a cabo e Varanda',
        ]);
        DB::table('tipo_quartos')->insert([
            'nome' => 'Premium',
            'valor' => 130,
            'tamanho' => '30m²',
            'limite_pessoa' => 6,
            'descricao' => 'Esta suíte dispõe de ar-condicionado, área de estar com varanda, além de micro-ondas. O banheiro privativo inclui secador de cabelo e chuveiro. No seu banheiro privativo: Vaso sanitário, Banheira ou chuveiro, Toalhas, Papel higiênico. Comodidades dos quartos: Guarda-roupa, Frigobar, Ar-condicionado, Instalações hipoalergênicas, Micro-ondas, Sofá, Mesa de trabalho, Área de estar, Telefone, Canais via satélite, TV de tela plasma, Canais a cabo e Varanda.',
        ]);

        DB::table('tipo_quartos')->insert([
            'nome' => 'Deluxe',
            'valor' => 170,
            'tamanho' => '39m²',
            'limite_pessoa' => 8,
            'descricao' => 'Esta suíte dispõe de ar-condicionado, espaço adicional, área de estar com sofá-cama e varanda, além de cozinha com micro-ondas, fogão e pia. O banheiro privativo inclui secador de cabelo e chuveiro. Tamanho do quarto 39 m². No seu banheiro privativo: Vaso sanitário, Banheira ou chuveiro, Toalhas, Papel higiênico. Comodidades dos quartos: Guarda-roupa, Frigobar, Ar-condicionado, Cofre, Instalações hipoalergênicas, Isolamento acústico, Micro-ondas, Cozinha, Sofá, Mesa de trabalho, Área de estar, TV, Telefone, Canais via satélite, TV de tela plasma, Canais a cabo, Varanda, Arara para roupas e Sofá-cama.',
        ]);
    }
}
