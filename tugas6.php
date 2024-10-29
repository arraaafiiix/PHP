<?php 
//PHP Function
// function tampilkan_nama(){
//     echo "Arrafix malas ngoding tapi bakal sukses";
// } 
// tampilkan_nama();

//String Function
// $nama = "Arrafix Al-hafidz S.kom";
// echo '<br/>';
// echo strtoupper($nama);
// echo '<br/>';
// echo ucwords($nama);
// echo '<br/>';
// echo lcfirst($nama);
// echo '<br/>';
// echo strtolower($nama);

//Function define By User :: void
// function salam($nama){
//     echo "<h1>Assalamu'alaikum P War!!!".strtoupper($nama)."</h1>";
// }
// salam("Arra");
// salam("FIX");
// salam("salam");

//Function define By User :: return value
// function jumlah($a , $b){
//     return $a + $b;
// }
// echo '$234 + $834 = '.jumlah(234,834);

//Function define By User :: void
// function perkenalkan(){
//     echo "assalamu'alaikum, ";
//     echo "perkenalkan, nama ana Arrafix<br/>";
//     echo "senang berkenalan karo kowe😘😘💕❤️💖🥰😍<br/>";
// }
// // memanggil fungsi yang wes digae
// perkenalkan();
// echo "<hr/>";
// //memanggil neh
// perkenalkan();

//Function define By User :: void
// function perkenalkan($nama, $salam){
//     echo $salam.",";
//     echo "perkenalkan, nama ana ".$nama."<br/>";
//     echo "senang berkenalan karo kowe<br/>";
// }
// //memanggil fungsi yg digae
// perkenalkan("arrafix", "woii");

// echo "<hr/>";

// $saya = "bedu";
// $ucapansalam = "selamat pagi";

// //mamnaggil neh
// perkenalan($saya, $ucapansalam);

//Function define By User :: void
// function perkenalkan($nama, $salam="assalamualaikum"){
//     echo $salam.", ";
//     echo "perkenalkan,nama saya ".$nama."<br/>";
// }
// //memanggil fungsi yangdibuat
// perkenalkan("moon", "hii");
// echo "<hr>";
// $saya ="mula";
// $ucapansalam = "selamat pagi";
// //memanggilnya lagi tnp mengisi prmeter salam
// perkenalkan($saya);

//Function define By User :: void 
// function hitunganumur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "umur saya adalah ". hitungumur(2004, 2024) ." tahun";

//Function define By User :: void
// function hitungumur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan($nama, $salam="assalamualaikum"){
//     echo $salam.",";
//     echo "perkenalkan, nama saya ".$nama."<br/>";
//     //paling yg lain
//     echo "saya umur ".hitungumur(1994, 2015) ." tahun<br/>";
//     echo "senang bisa kenal dgnmu<br/>";
// }
// //memanggil fungsi kenalan
// perkenalan("fixx")

//Function define By User :: void
// function faktorial($angka){
//     if ($angka < 2){
//         return 1;
//     }else{
//         //memanggil diri dwe
//         return ($angka * faktorial($angka-1));
//     }
// }
// //memangill fungsi
// echo "faktorial 5 adlh " , faktorial(5);

//Variable local Function
// function pankatdua($a){
//     $a = $a * $a;
// }
// $a = 20;
// echo 'sblom nilai $a :' .$a;
// pangkatdua($a);
// echo '<br/>sesudah nilai $a :'.$a;

//Variable Global Function
// function pangkatdua($a){
//     global $a;
//     $a = $a * $a;
// }
// $a = 20;
// echo 'sebelum nilai $a :'.$a;
// pangkatdua($a);
// echo '<br/>sesudah nilai $a :'.$a;

//Login Form – Fungsi Validasi
// function otentikasi($uname,$pass){
//     // user admin , password 1234
//     if($uname=="admin" && $pass=="123456"){
//         return true;
//     }else{
//         return false;
//     }
// }
?>