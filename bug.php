function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This code has a potential bug if there are multiple 'bar' values in the array because unset() will modify the keys of the array, leading to unexpected behavior. Consider using array_filter instead.

function fooFixed(array $arr): array {
    return array_filter($arr, fn($value) => $value !== 'bar');
}