<?php

function splitString($delimiter, $string) {
    $result = [];
    $current = '';

    for ($i = 0; $i < strlen($string); $i++) { 
        if ($string[$i] == $delimiter) {
            $result[] = $current;
            $current = '';
        } else {
            $current .= $string[$i];
        }
    }

    if (!empty($current)) {
        $result[] = $current;
    }

    return $result;
}

function evaluateOperation($operation) {
    $parts = splitString(' ', $operation);

    if (count($parts) != 3) {
        return "Error: Invalid operation format";
    }

    $operand1 = (float) $parts[0];
    $operator = $parts[1];
    $operand2 = (float) $parts[2];

    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        case '/':
            if ($operand2 == 0) {
                return "Error: You divided by zero :/";
            }
            return $operand1 / $operand2;
        default:
            return "Error: Invalid operator";
    }
}


$result = evaluateOperation("10 / 0");
echo $result;
