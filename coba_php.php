<!-- //1. Output Standar -->
<?php
  $hello ="Hello World!";
  // echo
  echo $hello;
  
  // print
  print $hello;
  
  // print_r
  print_r($hello);

  // var_dump
  var_dump($hello);

?>

<!-- untuk menampilkan output berupa tipe data string biasanya digunakan echo atau print . Sedangkan print_r dapat juga digunakan untuk menampilkan tipe data array. var_dump akan  -->
<!-- menampilkan output berupa nilai dari yang ingin ditampilkan dilengkapi dengan informasi berupa tipe data dan panjang data. -->

<!-- 2. Tipe Data String -->
<?php
  $sapa = "Halo Guys!";
  $hello = 'Hello World!';
?>

<!-- a. strlen  -->
<!-- metode strlen dipakai untuk mengetahui panjang dari sebuah string : -->

<?php
  $jargon = "Tetap Santai dan Berkualitas";
  // akan menampilkan panjang variabel $jargon yaitu 28 karakter
  echo strlen($jargon); 
  
  // akan menampilkan panjang string 11
  echo strlen("Halo semua!")
?>

<!-- b. strcmp -->
<!-- metode strcmp digunakan untuk membandingkan kesamaan di antara dua variabel string. output dari metode ini yaitu berupa tipe data logika boolean (true atau false). -->

<?php
$passwordasli = "belajarPHP";
$passwordinput = "belajarPHP";
$output = strcmp($passwordasli, $passwordinput);
if ($output !== 0)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password anda benar.";
  }
?>
 
<!-- booelan di PHP yaitu true dan false bisa juga ditulis dengan integer 1 untuk true, integer 0 untuk false -->

<!-- c. strtoupper -->
<!-- metode strtoupper digunakan untuk membuat sebuah string menjadi ditulis ke dalam karakter kapital. -->

<?php
  $statement = "ini gak marah, cuman caps";
  
  // menampilkan INI GAK MARAH, CUMAN CAPS
  echo strtoupper($statement);
?>

<!-- d. strtolower -->
<!-- metode strtolwer kebalikan dari strtoupper yaitu membuat suatu string ditulis menjadi karakter-karakter non-kapital. -->

<?php
  $marah = "INI MARAH";
  
  // menampilkan ini marah
  echo strtolower($marah);
?>

<!-- e. strpos -->
<?php
  $kalimat = "Saya sedang belajar PHP";
  $katayangdicari = "PHP";
  $posisi = strpos($kalimat, $katayangdicari);
  echo $posisi;
?>

<!-- f. str_word_count -->
<!-- metode str_word_count berfungsi untuk menghitung jumlah kata pada string -->

<?php

$kalimat = "Selamat Datang Di Sanbercode";

//menampilkan 4 bersarkan jumlah kata pada variabel kalimat

echo str_word_count($kalimat);
?>

<!-- g. substr -->
<!-- metode substr untuk mengambil beberapa karakter pada string. menerima 3 parameter (<string yang ingin dipotong>, <indeks mulai potong>, <panjang yang ingin dipotong>). -->

<!-- indeks mulai potong dapat bernilai minus yang berarti mulai indeks dari karakter paling belakang. -->

<?php
$string = "Saya suka PHP";

// akan menampilkan suka PHP
echo substr($string, 5, 8);

// akan menampilkan PH
echo substr($string, -3, 2); 
?>

<!-- 3. Tipe Data Array -->
<!-- tipe data array adalah tipe data yang mampu menampung lebih dari satu data. Elemen dari array ditandai dengan indeks agar dapat diakses. 
indeks array selalu diawali dengan indeks 0. -->

<!-- a. Deklarasi Array -->

<!-- membuat array baru dengan cara seperti berikut: -->

<?php
  
  $siswa = array("regi", "bobby", "ahmad");
  print_r($siswa);

  $trainer = ["abduh", "aghnat", "yoga"];
  print_r($trainer);

?>
<!-- ingat! untuk menampilkan array ke output gunakan sintaks print_r. -->

<!-- b. Mengakses Elemen Array -->
<!-- untuk mengakses elemen pada array kita dapat arahkan dengan menunjuk indeks elemen yang kita inginkan: -->

<?php
$nilai = [12, 14, 19];
// akan menampilkan 12 yang merupakan elemen array indeks ke 0
echo $nilai[0];
?>

<!-- c. Menambahkan elemen baru pada array -->
<!-- terkadang kita ingin menambahkan isi dari array dengan suatu data. caranya adalah dengan $array[] = <data yang ingin ditambahkan> -->

<?php
  $siswa = array("regi", "bobby", "ahmad");
  // siswa awal sebelum ditambah
  print_r($siswa);
  $siswa[] = "putri";
  // menampilkan siswa setelah ditambah data baru "putri"
  print_r($siswa);
?>
<!-- jika data yang ingin ditambahkan lebih dari satu data, kita bisa gunakan metode array_push(). berikut ini -->

<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

<!-- d. count() untuk menghitung panjang array -->
<!-- metode count digunakan untuk menghitung panjang dari sebuah array. -->

<?php
$keranjang = ["pisang", "apel", "mangga"];
// menampilkan panjang array $keranjang
echo count($keranjang);
?>

<!-- // e. Array Asosiatif
// Array Asosiatif adalah tipe array yang dapat menyimpan banyak data sebagai pasangan key dan value. Berbeda dengan array biasa 
// yang menggunakan angka untuk menandai indeks, array asosiatif menggunakan key sebagai indeks yang dapat kita set sendiri.
// penulisan array asosiatif yaitu dengan memasangkan key dan value dengan pemisah tanda panah => .

// Contohnya sebagai berikut -->

<?php
$siswa1 = [ "nama" => "abduh",
            "kelas" => "laravel",
            "nilai" => 70
          ];
echo "<pre>";
print_r($siswa1);
echo "</pre>";

// menambahkan key value baru ke array $siswa1
$siswa1["nama"] = "abduh";

print_r($siswa1);
?>

<!-- f. Array Multidimentional -->
<!-- Array Multidimentional adalah tipe array yang dapat menyimpan array dalam sebuah array  -->

<!-- Contohnya sebagai berikut: -->
<?php
$trainer = array (
  array("Rezky","Laravel"),
  array("Abduh","Adonis"),
  array("Iqbal","VueJs"),
);

echo "<pre>";
print_r($trainer);
echo "</pre>";
?>

<!-- //output

Array
(
    [0] => Array
        (
            [0] => Rezky
            [1] => Laravel
        )

    [1] => Array
        (
            [0] => Abduh
            [1] => Adonis
        )

    [2] => Array
        (
            [0] => Iqbal
            [1] => VueJs
        )
) -->