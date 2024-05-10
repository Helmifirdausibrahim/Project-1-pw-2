<?php
//function untuk menghitung luas segitiga
function luas_segitiga($alas, $tinggi){$luas =0.5*$alas*$tinggi;echo$luas;
}

//panggil function
luas_segitiga(2,10);

<?php
//membuat variabel
$mahasiswa1 = ["Helmi Firdaus Ibrahim", "Sistem Informasi", 011, [3.6,3.5, 4.0]];

//panggil variabel
echo 'Nama: '.$mahasiswa1[0]
"<br>";//concatenation
echo "Jurusan: $maghasiswa1[1] <br>";//string interpolation
echo "IPS semester 1: ".$mahasiswa1[3]
[0];
<?php
$mhs1 = [
    'nama' => 'Helmi Firduas Ibrahim',
    'nim' => '0110123074',
    'jurusan' => 'Sistem Informasi',
];

// memanggil array asosiatif
echo 'nama: '.$mhs1['nama'];