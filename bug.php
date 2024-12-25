In PHP, a common yet subtle error arises when dealing with array keys that aren't strictly numeric.  Consider this scenario:

```php
$data = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

//Attempting to access using array index
echo $data[0]; // Notice: Undefined offset: 0 in ...
```

While iterating works fine, directly accessing `$data[0]` throws a notice because PHP arrays are fundamentally ordered maps, not strictly indexed arrays like in some other languages. Trying to access elements using numeric indexes only works reliably if the keys are consecutive integers starting from 0.