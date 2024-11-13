<?php
function findTriplet($arr, $sum) {
    $n = count($arr);

    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] == $sum) {
                    echo "{" . $arr[$i] . ", " . $arr[$j] . ", " . $arr[$k] . "}\n";
                    return true;
                }
            }
        }
    }

    return false;
}

// Sample Input
$a = array(12, 3, 4, 1, 6, 9);
$val = 24;

// Find and print the triplet
if (!findTriplet($a, $val)) {
    echo "No triplet found\n";
}
?>
