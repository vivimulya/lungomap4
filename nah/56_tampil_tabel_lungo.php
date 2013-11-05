<?php
mysql_connect("localhost","root","");
mysql_select_db("wisata");

if($_POST['aksi']=='tampil'){
    $tampil=mysql_query("select * from infra_pemerintah order by nama");
	echo "<table border=2><tr><th>NO</th><th>NAMA</th><th>POSISI PADA PETA</th></tr>";
	$i=1;
    while ($r=  mysql_fetch_array($tampil)){
        echo "<tr><td>$i</td><td>$r[1]</td><td><a href='#' onClick=\"cari($r[2],$r[3],'$r[4]')\" class='button'>Lihat Lokasi</a></td></tr>";
		$i++;
    }
	echo "</table><br />";
}
?>