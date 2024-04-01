<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('tb_alternatif')->insert([
            [
                
                'nama_alternatif' => 'Laptop 1',
            ],
            [

                'nama_alternatif' => 'Laptop 2',
            ],
            [
                
                'nama_alternatif' => 'Laptop 3',
            ],
            [
                
                'nama_alternatif' => 'Laptop 4',
            ],
            [
               
                'nama_alternatif' => 'Laptop 5',
            ],
            [
                
                'nama_alternatif' => 'Laptop 6',
            ],
            [
                
                'nama_alternatif' => 'Laptop 7',
            ],
            [
                
                'nama_alternatif' => 'Laptop 8',
            ],
            [
                
                'nama_alternatif' => 'Laptop 9',
            ],
            [
                
                'nama_alternatif' => 'Laptop 10',
            ],
            [
                
                'nama_alternatif' => 'Laptop 11',
            ],
            [
               
                'nama_alternatif' => 'Laptop 12',
            ],
            [
                
                'nama_alternatif' => 'Laptop 13',
            ],
            [
               
                'nama_alternatif' => 'Laptop 14',
            ],
            [
                
                'nama_alternatif' => 'Laptop 15',
            ],
            [
                
                'nama_alternatif' => 'Laptop 16',
            ],
            [
                
                'nama_alternatif' => 'Laptop 17',
            ],
            [
                
                'nama_alternatif' => 'Laptop 18',
            ],
            [
                
                'nama_alternatif' => 'Laptop 19',
            ],
            [
               
                'nama_alternatif' => 'Laptop 20',
            ],
            [
               
                'nama_alternatif' => 'Laptop 21',
            ],
            [
                
                'nama_alternatif' => 'Laptop 22',
            ],
            [
               
                'nama_alternatif' => 'Laptop 23',
            ],
            [
                
                'nama_alternatif' => 'Laptop 24',
            ],
            [
                
                'nama_alternatif' => 'Laptop 25',
            ],
            [
                
                'nama_alternatif' => 'Laptop  26',
            ],
            [
               
                'nama_alternatif' => 'Laptop  27',
            ],
            [
               
                'nama_alternatif' => 'Laptop  28',
            ],
            [
                
                'nama_alternatif' => 'Laptop  29',
            ],
            [
               
                'nama_alternatif' => 'Laptop 30',
            ],
            
        ]);

        DB::table('tb_kriteria')->insert([
            [
                
                'nama_kriteria' => 'Harga',
                'atribut' => 'Cost',
                'bobot' => 0.25,
            ],
            [
                
                'nama_kriteria' => 'Performa',
                'atribut' => 'Benefit',
                'bobot' => 0.3,
            ],
            [
               
                'nama_kriteria' => 'Ukuran Layar',
                'atribut' => 'Benefit',
                'bobot' => 0.2,
            ],
            [
                
                'nama_kriteria' => 'Berat',
                'atribut' => 'Cost',
                'bobot' => 0.15,
            ],
            [
                'nama_kriteria' => 'Kapasitas Baterai',
                'atribut' => 'Benefit',
                'bobot' => 0.1,
            ],
        ]);
        DB::statement("INSERT INTO tb_nilai (id_alternatif, id_kriteria, nilai) SELECT tb_alternatif.id, tb_kriteria.id, ROUND(RAND() * 5) FROM tb_alternatif, tb_kriteria");

    }
}
