<?php
function numInStr($arr) {
    $result = [];
    foreach ($arr as $str) {
        if (preg_match('/\d/', $str)) { // Check if string contains a digit
            $result[] = $str;
        }
    }
    return $result;
}

// Test cases
print_r(numInStr(["1a", "a", "2b", "b"])); // Output: ["1a", "2b"]
print_r(numInStr(["abc", "abc10"])); // Output: ["abc10"]
print_r(numInStr(["abc", "ab10c", "a10bc", "bcd"])); // Output: ["ab10c", "a10bc"]
print_r(numInStr(["this is a test", "test1"])); // Output: ["test1"]
?>
