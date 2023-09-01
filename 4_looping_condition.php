<?php

for ($i = 1; $i <= 50; $i++) {
    $output = '';

    if ($i % 3 === 0) {
        $output .= 'Foo';
    }

    if ($i % 5 === 0) {
        $output .= 'Bar';
    }

    echo $output !== '' ? $output : $i;
    echo "<br>";
}

?>