
<?php
$conn_string = "host=satao.db.elephantsql.com port=5432 " . 
    "dbname=hrpawlxx user=hrpawlxx " .
    "password=7HPJO6zCvce5EnrqcP69eMhyJ1A-HK-B";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi DB Tersambung";
} else {
    echo "Koneksi DB GAGAL";
}
?>