<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Level;
use App\Models\City;
use App\Models\District;
use App\Models\Member;
use App\Models\MemberParent;
use App\Models\Province;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Admin Utama'
        ]);

        Level::create([
            'name' => 'Admin Wilayah'
        ]);

        Province::create([
            'name' => 'Aceh'
        ]);

        City::create([
            'name' => 'Aceh Utara',
            'province_id' => 1,
        ]);
        //1

        City::create([
            'name' => 'Aceh Timur',
            'province_id' => 1,
        ]); //2

        City::create([
            'name' => 'Kota Langsa',
            'province_id' => 1,
        ]); //3

        City::create([
            'name' => 'Aceh Tamiang',
            'province_id' => 1,
        ]); //4

        City::create([
            'name' => 'Kota Lhokseumawe',
            'province_id' => 1,
        ]); //5

        City::create([
            'name' => 'Bireuen',
            'province_id' => 1,
        ]); //6

        City::create([
            'name' => 'Pidie Jaya',
            'province_id' => 1,
        ]); //7

        City::create([
            'name' => 'Pidie',
            'province_id' => 1,
        ]); //8

        City::create([
            'name' => 'Aceh Besar',
            'province_id' => 1,
        ]); //9

        City::create([
            'name' => 'Kota Banda Aceh',
            'province_id' => 1,
        ]); //10

        City::create([
            'name' => 'Kota Sabang',
            'province_id' => 1,
        ]); //11

        City::create([
            'name' => 'Bener Meriah',
            'province_id' => 1,
        ]); //12

        City::create([
            'name' => 'Aceh Tengah',
            'province_id' => 1,
        ]); //13

        City::create([
            'name' => 'Gayo Lues',
            'province_id' => 1,
        ]); //14

        City::create([
            'name' => 'Aceh Jaya',
            'province_id' => 1,
        ]); //15

        City::create([
            'name' => 'Aceh Barat',
            'province_id' => 1,
        ]); //16

        City::create([
            'name' => 'Aceh Barat Daya',
            'province_id' => 1,
        ]); //17

        City::create([
            'name' => 'Aceh Selatan',
            'province_id' => 1,
        ]); //18

        City::create([
            'name' => 'Aceh Tenggara',
            'province_id' => 1,
        ]); //19

        City::create([
            'name' => 'Aceh Singkil',
            'province_id' => 1,
        ]); //20

        City::create([
            'name' => 'Nagan Raya',
            'province_id' => 1,
        ]); //21

        City::create([
            'name' => 'Kota Subulussalam',
            'province_id' => 1,
        ]); //22

        City::create([
            'name' => 'Simeulue',
            'province_id' => 1,
        ]); //23

        // kabupaten

        District::create([
            'name' => 'Arongan Lambalek',
            'city_id' => 16,
        ]);

        District::create([
            'name' => 'Bubon',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Johan Pahlawan',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Kaway XVI',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Meureubo',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Pantee Ceureumen',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Panton Reu',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Samatiga',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Sungai Mas',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Woyla',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Woyla Barat',
            'city_id' => 16,
        ]);
        District::create([
            'name' => 'Woyla Timur',
            'city_id' => 16,
        ]); //aceh barat

        District::create([
            'name' => 'Babahrot',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Blangpidie',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Jeumpa',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Kuala Batee',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Lembah Sabil',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Manggeng',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Setia',
            'city_id' => 17,
        ]);
        District::create([
            'name' => 'Susoh',
            'city_id' => 17,
        ]);

        District::create([
            'name' => 'Tangan-Tangan',
            'city_id' => 17,
        ]); //aceh barat daya

        District::create([
            'name' => 'Baitussalam',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Blang Bintang',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Darul Imarah',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Darul Kamal',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Darussalam',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Indrapuri',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Ingin Jaya',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Kota Jantho',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Krung Barona Jaya',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Kuta Baro',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Kuta Cot Glie',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Kuta Malaka',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Lembah Seulawah',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Leupung',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Lhoknga',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Lhoong',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Mesjid Raya',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Montasik',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Peukan Bada',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Pulo Aceh',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Seulimeum',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Simpang Tiga',
            'city_id' => 9,
        ]);
        District::create([
            'name' => 'Suka Makmur',
            'city_id' => 9,
        ]); //aceh besar

        District::create([
            'name' => 'Darul Hikmah',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Indra Jaya',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Jaya',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Krueng Sabee',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Panga',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Pasie Raya',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Sampoiniet',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Setia Bakti',
            'city_id' => 15,
        ]);
        District::create([
            'name' => 'Teunom',
            'city_id' => 15,
        ]); //aceh jaya

        District::create([
            'name' => 'Bakongan',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Bakongan Timur',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Kluet Selatan',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Kluet Tengah',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Kluet Timur',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Kluet Utara',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Kota Bahagia',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Labuhan Haji',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Labuhan Haji Barat',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Labuhan Haji Timur',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Meukek',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Pasie Raja',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Samadua',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Sawang',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Tapak Tuan',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Trumon',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Trumon Tengah',
            'city_id' => 18,
        ]);
        District::create([
            'name' => 'Trumon Timur',
            'city_id' => 18,
        ]); //aceh selatan

        District::create([
            'name' => 'Danau Paris',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Gunung Mariah',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Kuala Baru',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Kuta Baharu',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Pulau Banyak',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Pulau Banyak Barat',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Simpang Kanan',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Singkil',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Singkil Utara',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Singkohor',
            'city_id' => 20,
        ]);
        District::create([
            'name' => 'Suro Makmur',
            'city_id' => 20,
        ]); // aceh singkil

        District::create([
            'name' => 'Banda Mulya',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Bandar Pusaka',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Bendahara',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Karang Baru',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Kejuruan Muda',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Kualasimpang',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Manyak Payed',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Rantau',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Sekerak',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Seruway',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Tamiang Hulu',
            'city_id' => 4,
        ]);
        District::create([
            'name' => 'Tenggulun',
            'city_id' => 4,
        ]); //aceh tamiang

        District::create([
            'name' => 'Atu Lintang',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Bebesen',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Bies',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Bintang',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Celala',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Jagong Jeget',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Kebayakan',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Ketol',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Kute Panang',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Laut Tawar',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Linge',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Pegasing',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Rusip Antara',
            'city_id' => 13,
        ]);
        District::create([
            'name' => 'Silih Nara',
            'city_id' => 13,
        ]); //aceh tengah

        District::create([
            'name' => 'Babul Makmur',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Babul Rahmat',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Babussalam',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Badar',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Bambel',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Bukit Tusam',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Darul Hasanah',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Deleng Pokhkisen',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Ketambe',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Lawe Alas',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Lawe Bulan',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Lawe Sigala-Gala',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Lawe Sumur',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Lueser',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Semadam',
            'city_id' => 19,
        ]);
        District::create([
            'name' => 'Tanoh Alas',
            'city_id' => 19,
        ]); //aceh tenggara

        District::create([
            'name' => 'Banda Alam',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Birem Bayeun',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Darul Aman',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Darul Falah',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Darul Ihsan',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Idi Rayeuk',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Idi Timur',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Idi Tunong',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Indra Makmur',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Julok',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Madat',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Nurussalam',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Pante Beudari',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Peudawa',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Peunaron',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Peureulak',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Peureulak Barat',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Peureulak Timur',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Rantau Selamat',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Ranto Peureulak',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Serba Jadi',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Simpang Jernih',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Simpang Ulim',
            'city_id' => 2,
        ]);
        District::create([
            'name' => 'Sungai Raya',
            'city_id' => 2,
        ]); //aceh timur

        District::create([
            'name' => 'Baktiya',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Baktiya Barat',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Banda Baro',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Cot Girek',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Dewantara',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Geureudong Pase',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Kuta Makmur',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Langkahan',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Lapang',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Lhoksukon',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Matangkuli',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Meurah Mulia',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Muara Batu',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Nibong',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Nisam',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Nisam Antara',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Paya Bakong',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Pirak Timu',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Samudera',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Sawang',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Seunuddon',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Simpang Keramat',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Syamtalira Aron',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Syamtalira Bayu',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Tanah Jambo Aye',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Tanah Luas',
            'city_id' => 1,
        ]);
        District::create([
            'name' => 'Tanah Pasir',
            'city_id' => 1,
        ]); //aceh utara

        District::create([
            'name' => 'Bandar',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Bener Kelipah',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Bukit',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Gajah Putih',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Mesidah',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Permata',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Pintu Rime Gayo',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Syiah Utama',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Timang Gajah',
            'city_id' => 12,
        ]);
        District::create([
            'name' => 'Wih Pesam',
            'city_id' => 12,
        ]); //bener meriah

        District::create([
            'name' => 'Ganda Pura',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Jangka',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Jeumpa',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Jeunib',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Juli',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Kota Juang',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Kuala',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Kuta Blang',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Makmur',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Pandrah',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Peudada',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Peulimbang',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Peusangan',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Peusangan Selatan',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Peusangan Siblah Krueng',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Samalanga',
            'city_id' => 6,
        ]);
        District::create([
            'name' => 'Simpang Mamplam',
            'city_id' => 6,
        ]); //bireun

        District::create([
            'name' => 'Blang Pegayon',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Blangjerango',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Blangkejeren',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Dabun Gelang',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Kutapanjang',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Pantan Cuaca',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Pining',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Putri Betung',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Rikit Gaib',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Terangun',
            'city_id' => 14,
        ]);
        District::create([
            'name' => 'Tripe Jaya',
            'city_id' => 14,
        ]); //gayo lues

        District::create([
            'name' => 'Beutong',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Beutong Ateuh Banggalan',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Darul Makmur',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Kuala',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Kuala Pesisir',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Seunagan',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Seunagan Timur',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Suka Makmue',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Tadu Raya',
            'city_id' => 21,
        ]);
        District::create([
            'name' => 'Tripa Makmur',
            'city_id' => 21,
        ]); //nagan raya

        District::create([
            'name' => 'Batee',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Delima',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Geumpang',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Glumpang Baro',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Glumpang Tiga',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Grong-Grong',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Indrajaya',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Kembang Tanjung',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Keumala',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Kota Sigli',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Mane',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Mila',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Muara Tiga',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Mutiara',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Mutiara Timur',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Padang Tiji',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Peukan Baro',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Pidie',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Sakti',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Simpang Tiga',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Tangse',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Tiro/Truseb',
            'city_id' => 8,
        ]);
        District::create([
            'name' => 'Titeu',
            'city_id' => 8,
        ]); //pidie

        District::create([
            'name' => 'Bandar Baru',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Bandar Dua',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Jangka Buya',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Meurah Dua',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Meureudu',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Panteraja',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Trienggadeng',
            'city_id' => 7,
        ]);
        District::create([
            'name' => 'Ulim',
            'city_id' => 7,
        ]); //

        District::create([
            'name' => 'Alafan',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Salang',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Simeulue Barat',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Simeulue Cut',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Simeulue Tengah',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Simeulue Timur',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Teluk Dalam',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Teupah Barat',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Teupah Selatan',
            'city_id' => 23,
        ]);
        District::create([
            'name' => 'Teupah Tengah',
            'city_id' => 23,
        ]);

        District::create([
            'name' => 'Baiturrahman',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Banda Raya',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Jaya Baru',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Kuta Alam',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Kuta Raja',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Lueng Bata',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Meuraxa',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Syiah Kuala',
            'city_id' => 10,
        ]);
        District::create([
            'name' => 'Ulee Kareng',
            'city_id' => 10,
        ]);

        District::create([
            'name' => 'Langsa Barat',
            'city_id' => 3,
        ]);
        District::create([
            'name' => 'Langsa Baro',
            'city_id' => 3,
        ]);
        District::create([
            'name' => 'Langsa Kota',
            'city_id' => 3,
        ]);
        District::create([
            'name' => 'Langsa Lama',
            'city_id' => 3,
        ]);
        District::create([
            'name' => 'Langsa Timur',
            'city_id' => 3,
        ]);

        District::create([
            'name' => 'Banda Sakti',
            'city_id' => 5,
        ]);
        District::create([
            'name' => 'Blang Mangat',
            'city_id' => 5,
        ]);
        District::create([
            'name' => 'Muara Dua',
            'city_id' => 5,
        ]);
        District::create([
            'name' => 'Muara Satu',
            'city_id' => 5,
        ]);

        District::create([
            'name' => 'Sukajaya',
            'city_id' => 11,
        ]);
        District::create([
            'name' => 'Sukakarya',
            'city_id' => 11,
        ]);

        District::create([
            'name' => 'Longkib',
            'city_id' => 22,
        ]);
        District::create([
            'name' => 'Penanggalan',
            'city_id' => 22,
        ]);
        District::create([
            'name' => 'Rundeng',
            'city_id' => 22,
        ]);
        District::create([
            'name' => 'Simpang Kiri',
            'city_id' => 22,
        ]);
        District::create([
            'name' => 'Sultan Daulat',
            'city_id' => 22,
        ]);



        User::create([
            'name' => 'Admin JASA',
            'email' => 'adminjasa@gmail.com',
            'password' => bcrypt('password'),
            'level_id' => 1,
            'city_id' => 1,
            'is_admin' => True,
        ]);

        Member::factory(20)->create();
    }
}
