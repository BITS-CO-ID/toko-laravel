<?php

date_default_timezone_set('asia/jakarta');

include 'simple_html_dom.php';
require_once('twitteroauth.php');
$now = date('H:i');
$html = file_get_html('http://www.jadwalsholat.org/adzan/ajax/ajax.daily1.php?id=307');
$es = $html->find('tbody tr td');
$i = 0;
foreach ($es as $e) {
    $telo[$i] = $e->plaintext;
    $i++;
}


$consumerKey = 'lJvnGM8YrVXT2sRo5wJpw';
$consumerSecret = 'mZQLVhhWUlkYpYDUe33xinMCkrdIDUFAtWWEePXd3E';
$oAuthToken = '63434803-4tsxbVOuUl0mYJ7kyAQFYKWW5J32wGW4LtHIFlo0o';
$oAuthSecret = 'y3RJB4Y0fxDJOhQCRqLBd4bW0SKTl1HWVnV4PAOmZL06M';
$subuh = array(
    '(( Adzan Subuh ))',
    'Tangi',
    'Turu Meneh',
    'Jogging',
    'Sarapan',
    'Ngegame',
    'Selamat Pagi Duhai Djuwita Hati',
    'Pagi Selamat',
    'Apakah sudah pagi?',
    'Mandi bar subuh biar seger'
);
$dhuhur = array(
    '((( Adzan Dhuzur )))',
    'Madang',
    'Njuk Turu',
    'Hae',
    'Hmm',
    'Durjana',
    'Makan Siang',
    'Selamat Siang Kelayak Ramai',
    'Siang selamat',
    'Panas ya?'
);
$ashar = array(
    '((( Adzan Ashar )))',
    'Ngopi',
    'Telo',
    'Turu',
    'Dolan',
    'NgeFilm',
    'Selamat Sore Para Pengelana',
    'Ohhhh..',
    'Nganu',
    'Gitu loh'
);
$maghrib = array(
    '((( Adzan Maghrib )))',
    'Oh yeah?',
    'madang?',
    'Pulang?',
    'Overtime?',
    'Ah tenane?',
    'Kamu , ya kamu...',
    'Olahraga',
    'Piala Dunia nih',
    'Selamat Petang Sodara Sejawat'
);
$isya = array(
    '((( Adzan Isya )))',
    'Bali sri',
    'Dolan sek',
    'Ngopi sek',
    'Turu sek',
    'NgeGame sek',
    'Nonton Film',
    'Selamat Malam Masyarakat',
    'Ada yang begadang?',
    'Begadang buat apps nih yee, cieee',
);
$jumat = array(
    'Jumatan yook.',
    'Jumatan , hukum wajib dinggo cah lanang muslim',
    'Jumatan , hukum wajib muslim , dengerin ceramah nya ya',
    'Jumatan , hukum wajib muslim, ndang mandi besar njuk mangkat',
    'Jumatan , hukum wajib muslim, Jo lali infaq nek turah',
    'Jumatan , hukum wajib muslim, mangkat',
    'Jumatan , hukum wajib muslim, ra mangkat karepmu dosa tanggung dewe',
    'Jumatan , hukum wajib muslim, adus sik njuk minyakan',
    'Jumatan , hukum wajib muslim, baik sih tpi nek rak jumatan koyo pie ngono loh',
    'Jumatan , hukum wajib muslim, jo ngoding ae bray , jumatan kono.'
);
$status = rand(0, 9);
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
if ($now == date('H:i', strtotime($telo[4]))) {
    $tweet->post('statuses/update', array('status' => $subuh[$status]));
} elseif ($now == date('H:i', strtotime($telo[6]))) {
    if (strtolower(date('D', strtotime($now))) == 'fri') {
        $tweet->post('statuses/update', array('status' => $jumat[$status]));
    } else {
        $tweet->post('statuses/update', array('status' => $dhuhur[$status]));
    }
} elseif ($now == date('H:i', strtotime($telo[8]))) {
    $tweet->post('statuses/update', array('status' => $ashar[$status]));
} elseif ($now == date('H:i', strtotime($telo[10]))) {
    $tweet->post('statuses/update', array('status' => $maghrib[$status]));
} elseif ($now == date('H:i', strtotime($telo[12]))) {
    $tweet->post('statuses/update', array('status' => $isya[$status]));
} 
?>