<?php
if (isset($_COOKIE['kunjungan'])){
echo "Selamat datang kembali";
} else {
echo "Selamat datang";
}
// mendefinisikan cookie dengan masa aktif 1 jam 
setcookie('kunjungan','pernah',time()+3600);