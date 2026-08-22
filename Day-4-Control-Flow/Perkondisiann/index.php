<?php 

// Perkondisian
// if else
// if else if else
// ternary
// switch

//if else 

// $nama = "Yae miko";
// $umur = 18;
// $hasil = "nama $nama dan umur $umur";
// echo $hasil;

// $nama_depan = "Yae";
// $nama_belakang = "Miko";
// $gabung_nama =  $nama_depan . $nama_belakang;
// echo $gabung_nama


// if else if else

// $x = 20;
// if ( $x < 20 ) {
//     echo "benar";
// } else if ( $x == 20 ) {
//     echo "umur matang";
// } else {
//     echo "salah";
// }



// Latihan Function

// function x ( $i,$x,$y) {
//     return $i + $x - $y;
// } $hasil = x ( 5 , 10 , 6 );
// echo $hasil;

// Function x ( $x,$y,$s) {
//     return $x * $y + $s;
// } $hasil = x ( 10 , 25 , 10 );
// echo $hasil;

// function x () {
//     echo "hello world";
// } print x();

// function x ( $x , $z , $y ) {
//     return $x - $z + $y;
// } $hasil = x ( 5,10,10);
// echo $hasil

// Latihan Gabungan 

// Function cekNilai ( $nilai ) {
//     if ($nilai == 100) {
//         return "S+";
//     } else if ( $nilai >= 90 && $nilai <=100 ) {
//         return "A+";
//     } else if ( $nilai >= 70) {
//         return "B-";
//     } else {
//         return "C-";
//     }  
// } $hasil = cekNilai(99);
// echo $hasil;

// function CekUmur ($umur) {
//     if ( $umur == 20 ) {
//         return "Bikin KTP";
//     } else if ( $umur <= 18) {
//         return "belum dewasa";
//     } else if ( $umur >= 20 ) {
//         return "dewasa";
//     }
// } $hasil = Cekumur (20);
//   echo $hasil;


// function HitungDIskon ($diskon) {
//     if ( $diskon == 90 ) {
//         return "diskon 90%";
//     } else if ( $diskon >= 50 && $diskon <=90 ) {
//         return "diskon 50%";
//     } else if ( $diskon >= 20 && $idskon <50) {
//         return "diskon 20%";
//     } else if ( $diskon == 10 ) {
//         return "DIskon 10%";
//     } else if ( $diskon <= 5 ) {
//         return "DIskon 5%";
//     } else if ( $diskon <= 5 ) {
//         return "tidak ada diskon";
//     } 
// }  $total = HitungDIskon(10);
//    echo $total; 

//    function CekAngka($angka) {
//     if ( $angka > 0 ) {
//         return "positif";
//     } else if ( $angka < 0 ) {
//         return "Negatif";
//     } else if ( $angka == 0 ){
//         return "Nol";
//     } 
//    } $totalAngka = CekAngka(1) ;
//    echo $totalAngka

// function CekSiswa ( $nama , $umur , $nilai ) {
//     if ( $umur < 13 ) {
//         return "belum cukup umur untuk daftar";
//     } else if ( $umur >= 13 && $umur <= 15 ) {
//         return "SMP";
//     } else if ( $umur >= 16 && $umur <= 18 ) {
//         return "SMA/SMK";
//     } else if ( $umur >= 18 ) {
//         return "dewasa";
//     } else if ( $nilai >= 90 ) {
//         return "siswa berperestasi";
//     } else {
//         return "balita";
//     }
// } $hasil = CekSiswa ("zekyu", 18 , 95 );
// echo $hasil;

// function Login ( $ussername,$password ) {
//     if ( $ussername == "zekyu" && $password == "admin12345" ) {
//       return "selamat datang $ussername";
//     } else {
//         return "ussername atau password salah";
//     }
// }  $hasilLogin = Login ("zekyu","admin12345");
// echo $hasilLogin

function Login ($ussername,$password) {
    if ($ussername != "zekyu" || $password != "admin1234" ) {
        return "ussername salah atau password salah";
    } else if ( $ussername == "" && $password == "") {
    return "silahkan isi form";
    } else {
        return "Berhasil login";
    }
}  $hasilLogin = Login("zekyu","admin1234");
echo $hasilLogin;
?>