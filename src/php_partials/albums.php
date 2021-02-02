<?php
// $albums = [];

#mia soluzione
$raw = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");
$decoded = json_decode($raw, true);
$albums = $decoded["response"];
//var_dump($albums);

/*
PRECOMPILATO DA POSTMAN
 */
// $curl = curl_init();
// curl_setopt_array($curl, array(
//     CURLOPT_URL => 'https://flynn.boolean.careers/exercises/api/array/music',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'GET',
//     CURLOPT_HTTPHEADER => array(
//         'Cookie: XSRF-TOKEN=eyJpdiI6IllrYXY1Q3pRZ21PK1FCMkdUMk5zVnc9PSIsInZhbHVlIjoiMXRrRm4rOEFURk1OQ2YzN2lCM1B0eWhTRHhZYVRHVjNNZW1Ld09ZOGpXSjRCMENlYXVDUjhyT1F0V3RsMmdUeCIsIm1hYyI6IjY5M2I4YjBiNzI5ZDE3YmRiMjBkZmRhODFhYjZlMzI4ZGZlMzI0NThhYWE1ZGE0MzYxMjNjYzFhMDg2NjBkZDUifQ%3D%3D; laravel_session=eyJpdiI6IkVrbUNSOFZ3VWdsUGExOGFZV21jb2c9PSIsInZhbHVlIjoiZVk5S1NtMVlqMUd4c0FCc3lZWkFqUGw1NWo4blR1d25UOThkcTNGZHVEYys3TTFjcHB2WEluV25wOTlzWndMSSIsIm1hYyI6IjQ0ZTEzMTAwYjg1ZTgwYjA1ZmQ4NTYxMGU3NDcxMmY4ZWJiMTQ0ZGM2ZGQzNDYzNzNkZjZiYzg2NTBiMzY3M2UifQ%3D%3D',
//     ),
// ));
// $response = curl_exec($curl);
// curl_close($curl);
// $albums = json_decode($response, true);
// var_dump($albums);