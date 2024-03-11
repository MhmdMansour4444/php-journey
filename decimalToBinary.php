<?php
function decTobin_i($decimal_i)
{
    $binary_i = '';
    do {
        $binary_i = ($decimal_i % 2) . $binary_i;
        $decimal_i = (int)($decimal_i / 2);
    } while ($decimal_i > 0);

    return $binary_i;
}

echo decTobin_i(2);