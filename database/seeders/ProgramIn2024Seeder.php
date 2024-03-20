<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Program;

class ProgramIn2024Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ================ UMAR ================
        Program::factory()->create([
            'title' => 'KISMALA',
            'description' => "Kismala menyajikan dakwah yang fleksibel dengan berbagai tema seperti fiqih, akademik, dan rutinitas. Di samping itu jama'ah akan mendapatkan makanan gratis untuk berbuka puasa bersama.",
            'time' => "Setiap hari senin dan kamis ba'da ashar",
            'icon' => "/img/programs/kismala.png",
            'role_id' => '4', // UMAR
            'program_category_id' => '2', // MINGGUAN
        ]);

        // Program::factory()->create([
            // 'title' => 'KAJIAN BA\'DA MAGHRIB',
            // 'description' =>  "Kajian rutinan MRP tiga kali seminggu, pada Selasa, Rabu, dan Jum'at setelah maghrib. Tema meliputi akhlak, fiqih, dan ketauhidan. Berlokasi di Ruang Utama MRP UB, dilaksanakan ba'da sholat maghrib hingga menjelang isya'.",
            // 'time' => "Setiap hari selasa, rabu, dan jum'at",
            // 'role_id' => "4", // UMAR
            // 'program_category_id' => "1", // HARIAN
        // ]);
        Program::factory()->create([
            'title' => "KELAS PRANIKAH DAN PARENTING",
            'description' =>  "Kajian rutinan MRP setiap minggu. Membahas tentang fiqih pranikah dan parenting dalam perspektif Islam.",
            'time' => "Setiap jum'at ba'da ashar",
            'icon' => "/img/programs/Kelas_Pranikah.png",
            'role_id' => "4", // UMAR
            'program_category_id' => "2", // MINGGUAN
        ]);
        // Program::factory()->create([
            // 'title' => "KELAS PSIKOLOGI ISLAM",
            // 'description' => "Kajian rutin MRP yang membahas dunia psikologi Islam dan aplikasinya dalam kehidupan sehari-hari khususnya bagi civitas akademika.  Kajian ini memberikan gambaran serta pemahaman terkait langkah langkah yang harus diambil seseorang untuk menyelesaikan setiap permasalahan dalam hidupnya berdasarkan ilmu psikologi islam.",
            // 'time' => "Setiap hari rabu ba'da ashar",
            // 'role_id' => "4", // UMAR
            // 'program_category_id' => "2",
        // ]);
        Program::factory()->create([
            'title' => "GEBYAR RAMADHAN",
            'description' => "Kegiatan yang dilakukan selama bulan Ramadhan. Mulai dari kultum, kajian-kajian, buka bersama, taraweh dan masih banyak lagi.",
            'time' => "Selama bulan ramadhan",
            'icon' => "/img/programs/Gebyar_Ramadhan.png",
            'role_id' => "4", // UMAR
            'program_category_id' => "4",
        ]);
        // ================ PTQ ================
        Program::factory()->create([
            'title' => "TAHFIDZ",
            'description' => "Program Tahfidz Pusat Tahfidz Al Qur’an adalah program utama dari ptq itu sendiri. Tahfidz ini merupakan setoran hafalan Al Qur’an yang menjadi kewajiban bagi anggota program PTQ baik bin-nadzor maupun bil-ghoib. Kegiatan menghafal ini dilaksanakan setiap hari kecuali hari sabtu dan ahad.",
            'icon' => "/img/programs/Tahfidz.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "1", // HARIAN
        ]);
        Program::factory()->create([
            'title' => "UJIAN TAHFIDZ",
            'description' => "Ujian tahfidz merupakan rangkaian lanjutan wajib dari program tahfidz untuk anggota program PTQ. Ujian tahfidz ini dilaksanakan setiap akhir semester dengan tujuan untuk muroja’ah apa yang sudah di hafal.",
            'icon' => "/img/programs/Ujian_Tahfidz.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "4", // TAHUNAN
        ]);
        Program::factory()->create([
            'title' => "Tasmi’",
            'description' => "Program tasmi’ ini adalah kegiatan untuk menjaga kualitas hafalan bagi para anggota program PTQ yang telah mencapai setoran dengan minimal hafalan 1 Juz Al Qur’an.",
            'role_id' => "5", // PTQ
            'program_category_id' => "3", // TRIWULAN
        ]);
        Program::factory()->create([
            'title' => "TAHSIN",
            'description' => "Kelas pembelajaran tajwid untuk meningkatkan bacaan Al-Qur'an. Fokus pada memahami kaidah-kaidah tajwid, membaca dengan baik dan benar.",
            'icon' => "/img/programs/Kelas_Tahsin.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "2", // MINGGUAN
        ]);
        Program::factory()->create([
            'title' => "KHOTMIL",
            'description' => "Khotmil Qur'an adalah suatu kegiatan di mana seseorang menyelesaikan membaca seluruh Al-Qur'an dari awal hingga akhir dengan membacakan setiap Juz Al Qur’an baik bin-nadzor maupun bil-ghoib. Kegiatan Khotmil ini diadakan setiap dua pekan sekali.",
            'icon' => "/img/programs/Khotmil.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "2", // MINGGUAN
        ]);
        Program::factory()->create([
            'title' => "KAJIAN KITAB",
            'description' => "kajian terhadap kitab-kitab Islam melalui kajian bersama ustadz. Yang bertujuan untuk memperoleh pemahaman yang mendalam terhadap isi Al-Qur’an sebagai panduan sehari-hari.",
            'icon' => "/img/programs/Kajian_Kitab.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "2", // MINGGUAN
        ]);
        Program::factory()->create([
            'title' => "PTQ BERKARYA",
            'description' => "PTQ Berkarya adalah pentas seni atau challenge berupa pembuatan postingan dakwah yang akan dikumpulkan melalui feed instagram pribadi peserta dengan karya original atau karya seni lainnya. Kegiatan ini memiliki tujuan untuk memanfaatkan waktu liburan untuk meningkatkan kreativitas, produktivitas dan kecintaan peserta terhadap Al-Qur’an.",
            'icon' => "/img/programs/PTQ_Berkarya.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "4", // TAHUNAN
        ]);
        Program::factory()->create([
            'title' => "SEMINAR QUR'ANI",
            'description' => "Seminar yang mengundang pembicara terpercaya untuk memberikan motivasi dan edukasi, mendorong kecintaan terhadap Al-Qur’an, serta memberikan motivasi untuk menghafal. Ikuti untuk mendapatkan inspirasi dan pengetahuan baru.",
            'icon' => "/img/programs/Seminar_Qurani.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "4", // TAHUNAN
        ]);
        Program::factory()->create([
            'title' => "BTA (Baca Tulis Al-Qur'an)",
            'description' => "Program belajar membaca dan menulis Al-Qur'an dengan metode Iqro’ bagi mahasiswa. Dilaksanakan setiap hari untuk meningkatkan kualitas bacaan Al-Qur’an.",
            'icon' => "/img/programs/BTA.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "1", // HARIAN
        ]);
        Program::factory()->create([
            'title' => "TAHFIDZ CAMP",
            'description' => "Kegiatan membersamai Al-Qur'an berupa ziyaadah, muroja'ah, tilawah, dan kegiatan interaktif lainnya selama satu di Mesjid Rade Patah UB.",
            'icon' => "/img/programs/Tahfidz_Camp.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "4", // TAHUNAN
        ]);
        Program::factory()->create([
            'title' => "WISUDA TAHFIDZ",
            'description' => "Merupakan kegiatan yang diadakan bertujuan untuk sertifikasi terhadap hafalan yang sudah dicapai dan untuk mendorong fastabiqul khoirot dalam menghafal Al-Qur'an.",
            'icon' => "/img/programs/Wisuda_Tahfidz.png",
            'role_id' => "5", // PTQ
            'program_category_id' => "4", // TAHUNAN
        ]);
    }
}
