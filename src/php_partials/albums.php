<?php
$raw = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");
$decoded = json_decode($raw, true);
$albums = $decoded["response"];
