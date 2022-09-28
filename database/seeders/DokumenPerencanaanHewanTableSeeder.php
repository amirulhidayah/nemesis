<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DokumenPerencanaanHewanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dokumen_perencanaan_hewan')->delete();
        
        \DB::table('dokumen_perencanaan_hewan')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-06 14:02:34',
                'file' => '694195025-Dokumen Perencanaan Hewan r-Mendata Jumlah Hewan Ternak-1.pdf',
                'id' => '2786f5b3-1f59-4221-9fc3-18e8b923b68e',
                'nama' => 'Dokumen Perencanaan Hewan r',
                'no_urut' => 1,
                'perencanaan_hewan_id' => 'cc85aa2c-d07b-45e9-9629-f2590f12ee63',
                'updated_at' => '2022-09-06 14:02:34',
            ),
            1 => 
            array (
                'created_at' => '2022-08-27 12:39:44',
                'file' => '1034202017-Dokumen Perencaan Hewan 1-Pengecekan Ternak-1.pdf',
                'id' => '4c5c17d3-5cf5-4aca-bbde-d06131999276',
                'nama' => 'Dokumen Perencaan Hewan 1',
                'no_urut' => 1,
                'perencanaan_hewan_id' => '5aabc047-e5bb-4d9c-bf0a-12ee1e88eb68',
                'updated_at' => '2022-08-27 12:39:44',
            ),
            2 => 
            array (
                'created_at' => '2022-08-27 12:45:27',
                'file' => '72969830-Dokumen Perencanaan Hewan 2 g-Pemberian obat-2.pdf',
                'id' => '5505062e-5538-4222-830d-bbf9658fcfd0',
                'nama' => 'Dokumen Perencanaan Hewan 2 g',
                'no_urut' => 2,
                'perencanaan_hewan_id' => '3e6d54e2-995c-44ab-9530-47ab2b628773',
                'updated_at' => '2022-08-27 12:45:27',
            ),
            3 => 
            array (
                'created_at' => '2022-08-27 13:11:57',
                'file' => '2054080024-Dokumen Perencanaan Hewan  p-Penyuntikan Vaklsin-1.pdf',
                'id' => '59a1adfc-5d71-4ba3-91a2-bfb8045c4a2f',
                'nama' => 'Dokumen Perencanaan Hewan  p',
                'no_urut' => 1,
                'perencanaan_hewan_id' => '6aa72a31-194d-4363-a282-084f5e6362d3',
                'updated_at' => '2022-08-27 13:11:57',
            ),
            4 => 
            array (
                'created_at' => '2022-08-27 12:45:27',
                'file' => '265875148-Dokumen Perencanaan Hewan 1 p-Pemberian obat-1.pdf',
                'id' => '8192e8a7-ab93-45b7-b942-92fa9c8f1ef0',
                'nama' => 'Dokumen Perencanaan Hewan 1 p',
                'no_urut' => 1,
                'perencanaan_hewan_id' => '3e6d54e2-995c-44ab-9530-47ab2b628773',
                'updated_at' => '2022-08-27 12:45:27',
            ),
            5 => 
            array (
                'created_at' => '2022-08-27 13:09:57',
                'file' => '1568313271-Dokumen Perencaan Hewan 1 g-Sosialisasi Kepada Pemillik Ternak-1.pdf',
                'id' => '87a458dc-5666-4a18-b7ca-1ac966ad277a',
                'nama' => 'Dokumen Perencaan Hewan 1 g',
                'no_urut' => 1,
                'perencanaan_hewan_id' => '47c49fdb-370e-426c-99e9-ebe0bfe14787',
                'updated_at' => '2022-08-27 13:09:57',
            ),
            6 => 
            array (
                'created_at' => '2022-08-27 13:09:57',
                'file' => '885979186-Dokumen Perencanaan Hewan 2 p-Sosialisasi Kepada Pemillik Ternak-2.pdf',
                'id' => 'c1a7274f-5a88-4af1-abc4-a04fea4f122a',
                'nama' => 'Dokumen Perencanaan Hewan 2 p',
                'no_urut' => 2,
                'perencanaan_hewan_id' => '47c49fdb-370e-426c-99e9-ebe0bfe14787',
                'updated_at' => '2022-08-27 13:09:57',
            ),
            7 => 
            array (
                'created_at' => '2022-09-06 13:29:41',
                'file' => '355232164-Dokumen Perencanaan Hewan b-Pemeriksaan Tinja Ternak-1.pdf',
                'id' => 'ec90bddb-f491-476c-b61c-595c8ed94151',
                'nama' => 'Dokumen Perencanaan Hewan b',
                'no_urut' => 1,
                'perencanaan_hewan_id' => 'c913a980-7786-4008-ae5b-62f581a35945',
                'updated_at' => '2022-09-06 13:29:41',
            ),
        ));
        
        
    }
}