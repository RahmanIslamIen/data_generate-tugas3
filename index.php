<?php
    // gunakan require_once ketika diinstall menggunakan composer 
    // require_once digunakan untuk mengambil fungsi yang ada di file tersebut
    require_once('vendor/autoload.php');
    use Faker\Factory;
    
    // inisialisasi sesuai dengan negara yang dipilih
    // id_ID adalah negara indonesia, teresedia negara lain seperti jepang, usa dll di dokumentasinya
    $faker = Factory::create('id_iD');
    
    // membuat random jenis kelamin yang akan kita gunakan nanti
    $gender = $faker->randomElement(['laki-laki', 'perempuan']);
    
    // gunakan perulangan untuk membuat data sebanyak yang diinginkan
    // disini kita akan input data sebanyak 50 kali
    for($i=1; $i<=50; $i++){
    
        //$faker->name untuk membuat nama indonesia random
        $kd_brg       = $faker->numerify('B ####');
    
        //$faker->address untuk membuat alamat jalan sesuai yang ada di indonesia
        $nm_brg     = $faker->name;
    
        //$faker->phonenumber untuk membuat nomor hp indonesia
        $satuan    = $faker->randomElement($array = array ('pcs','rim','dus'));
    
        //membuat koneksi ke database
        $koneksi    = mysqli_connect("localhost","root","","barang");
    
        //input data ke tabel pegawai
        mysqli_query($koneksi, "insert into data_barang set kd_brg='$kd_brg', nm_brg='$nm_brg', satuan='$satuan'");
    }
?>