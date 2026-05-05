<?php
$apiKey='AIzaSyCNpwLrCGEKIwXX-jEB8l4G0DnHYSFSwRk';
$url='https://generativelanguage.googleapis.com/v1beta/models?key=' . $apiKey;
$res=file_get_contents($url);
$data=json_decode($res, true);
foreach($data['models'] as $m) {
    if(strpos($m['name'], 'gemini') !== false) {
        echo $m['name'] . " - " . implode(',', $m['supportedGenerationMethods']) . PHP_EOL;
    }
}
