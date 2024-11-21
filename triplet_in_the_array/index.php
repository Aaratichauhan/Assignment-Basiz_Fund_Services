function findTriplet($arr, $val) {
    $n = count($arr);
    sort($arr);

    for ($i = 0; $i < $n - 2; $i++) {
        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $current_sum = $arr[$i] + $arr[$left] + $arr[$right];
            if ($current_sum == $val) {
                return array($arr[$i], $arr[$left], $arr[$right]);
            } elseif ($current_sum < $val) {
                $left++;
            } else {
                $right--;
            }
        }
    }
    return false;
}

// Sample input
$arr = array(12, 3, 4, 1, 6, 9);
$val = 24;

$triplet = findTriplet($arr, $val);
if ($triplet) {
    echo "Triplet found: {" . implode(", ", $triplet) . "}";
} else {
    echo "No triplet found";
}
