    <?php
    /*
    Ambil Nilai Valuta Kurs Dari BCA Versi 1.0
    Tanggal: 2008-11-19 22:17
    Original dari azza (broadband.or.id/forum/)
    dimodif oleh: jinbatsu (http://www.nusansifor.com) 
    yg dimodif:
        - menggunakan CURL sebagai alternatif dari file_get_contents (hususnya buat yg gak bisa di hostingan2 tertentu)
        - penempatan output  titik koma dan tanda petik yg mengakibatkan fatal error dibeberapa hostingan
        - menambah number format, supaya terlihat ada titik pada ribuan nya
    */
    error_reporting (E_ALL);
    //
    // Ubah menjadi 3600 untuk cache 1 jam, ketika semuanya sudah berjalan normal.
    // Menggunakan cache berarti tidak perlu membuka koneksi ke klikbca
    // setiap kali halaman dibuka << ini PENTING! menghemat waktu, dan mengurangi proses server.
    //
    $nkurs['cachetime'] = 3600; /* ubah jadi 3600 atau lebih */
    //
    // Hilangkan mata uang yang tidak mau ditampilkan.
    //
    $nkurs['curr'] = array ('USD', 'SGD', 'HKD', 'CHF', 'GBP', 'AUD', 'JPY', 'SEK', 'DKK', 'CAD', 'EUR', 'SAR');
    //
    // Dari sini kebawah, ubah kalau mengerti aja.
    // Atau tanya dulu di: broadband.or.id/forum/viewforum.php?f=7 (database forumnya sekarang udah gak ada, silahkan dicek  lagi)
    //
    // menggunakan CURL, jika file_get_contents tidak bisa dihostingan Anda, baca manual PHP untuk selengkapnya
    //$output="";
	function curl_get_file_contents($URL) {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);
        if ($contents) return $contents;
        else return FALSE;
    }
    $nkurs['scriptpath'] = dirname (__FILE__);
    $nkurs['cachefile'] = $nkurs['scriptpath'] . '/cache.txt';
    if (!file_exists ($nkurs['cachefile']) || !is_writable ($nkurs['cachefile'])){ die ('File cache.txt belum ada atau belum writable.<br />Buat file: <code>' . $nkurs['cachefile'] . '</code><br />Lalu CHMOD ke 666'); }
    if (filemtime ($nkurs['cachefile']) <= ( time () - $nkurs['cachetime'] ) && $handle = curl_get_file_contents("http://www.klikbca.com/individual/silver/ind/rates.html"))  {
        $handle = explode ('<table border="0" cellspacing="0" cellpadding="0" class="testL">', $handle);
        $handle = explode ('</table>', $handle[1]);
        $handle = explode ('<TR', $handle[0]);
        $nkurs['data'] = array ();
        foreach ($handle as $val) {
            if (!isset ($nkurs['remotelastupdate'])) {
                $nkurs['remotelastupdate'] = explode ('<font color="black" size="1" face="Arial">', $val);
                $nkurs['remotelastupdate'] = explode ('</font>', $nkurs['remotelastupdate'][1]);
                $nkurs['remotelastupdate'] = explode ('/', $nkurs['remotelastupdate'][0]);
                $nkurs['remotelastupdate'] = trim ($nkurs['remotelastupdate'][0]) . ' / ' . trim ($nkurs['remotelastupdate'][1]);
            } else {
                $val = explode ('<center>', $val);
                $val = explode ('</center>', $val[1]);
                $curr = trim (str_replace ('&nbsp;', '', $val[0]));
                $val = explode ('&nbsp;', $val[1]);
                $sell = explode ('align="right">', $val[0]);
                $sell = trim ($sell[1]);
                $buy = explode ('align="right">', $val[1]);
                $buy = trim ($buy[1]);
                $nkurs['data'][$curr] = array ($sell, $buy);
            }
        }
        $tocache = array ();
        foreach ($nkurs['data'] as $key => $val) {
            $tocache[] = $key . '|' . $val[0] . '|' . $val[1];
        }
        $tocache[] = 'remotelastupdate|' . $nkurs['remotelastupdate'];
        $tocache = implode ("\n", $tocache);
        $handle = fopen ($nkurs['cachefile'], 'w');
        fwrite ($handle, $tocache);
        fclose ($handle);
    } else {
        $handle = file ($nkurs['cachefile']);
        $nkurs['data'] = array ();
        foreach ($handle as $val) {
            $val = explode ('|', $val);
            if ($val[0] != 'remotelastupdate') {
                $nkurs['data'][$val[0]] = array ($val[1], trim ($val[2]));
            }
            else
            {
                $nkurs['remotelastupdate'] = $val[1];
            }
        }
    }
    //
    // Output
    //
	$output = "\n";
    foreach ($nkurs['data'] as $key => $val) {
        if (in_array ($key, array('USD'))) { // hanya USA saja
            $output = $val[1]; // hanya ambil nilai jual
			$output2 = $val[0];
        }
    }
    $duit_dollar=$output; 
	$duit_dollar_beli=$output2;
	?>