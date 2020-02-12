<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Dosen;
use App\Wali;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat Data Dosen
        $dosen = Dosen::create(array(
            'nipd' => '123456789',
            'nama' => 'Abdul Musthafa'
        ));
        $this->command->info('Data Dosen telah di Isi!');

        // Membuat Data Mahasiswa
        $nauly = Mahasiswa::create(
            array(
                'nama' => 'Nauly Virya',
                'nim' => '1010101',
                'id_dosen' => $dosen->id
            ));

        $ntut = Mahasiswa::create(
            array(
                'nama' => 'Entut Marsinah',
                'nim' => '1010102',
                'id_dosen' => $dosen->id
            ));

        $icih = Mahasiswa::create(
            array(
                'nama' => 'Icih Bersin',
                'nim' => '1010103',
                'id_dosen' => $dosen->id
            ));
        $this->command->info('Data Mahasiswa telah di Isi!');

        // Membuat Data Wali
        $ucup = Wali::create(array(
            'nama' => 'Ucup Mambo',
            'id_mahasiswa' => $ntut->id
        ));

        $agus = Wali::create(array(
            'nama' => 'Agus Tanos',
            'id_mahasiswa' => $icih->id
        ));
        $this->command->info('Data Wali telah di Isi!');

        // Membuat Data Hobi
        $melukis_langit = Hobi::create(array('hobi' => 'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

        $nauly->hobi()->attach($melukis_langit->id);
        $nauly->hobi()->attach($ambyar->id);
        $ntut->hobi()->attach($mandi_hujan->id);
        $icih->hobi()->attach($ambyar->id);

        $this->command->info('Mahasiswa Beserta Hobi Telah di Isi!');
    }
}
