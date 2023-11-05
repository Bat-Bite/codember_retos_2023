<?php

$string = trim(file_get_contents('https://codember.dev/data/message_01.txt'));
$array_words = array_count_values(explode(' ',$string));
foreach ($array_words as $word => $cant) echo $word.$cant;