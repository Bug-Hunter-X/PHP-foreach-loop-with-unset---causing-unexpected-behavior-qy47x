function fooFixed(array $arr): array {
    return array_filter($arr, fn($value) => $value !== 'bar');
}

$arr = ['foo', 'bar', 'baz', 'bar'];
$result = fooFixed($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )