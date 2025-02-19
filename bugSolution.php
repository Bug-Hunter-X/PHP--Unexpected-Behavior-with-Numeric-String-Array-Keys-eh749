To solve the issue, you must explicitly compare the key using a string comparison:

```php
$myArray = ['1' => 'value'];

if (array_key_exists('1', $myArray)) {
    echo $myArray['1']; // This will output 'value'
} else {
    echo 'Key does not exist';
}

//Alternatively, you can cast your key to a string:

if (isset($myArray[(string)1])){
  echo $myArray[(string)1]; //This will also output 'value'
}
```

By using string comparison ('1'), we accurately check for the presence of the string key '1', regardless of integer attempts to access it.  The solution ensures that the key comparison is consistent with the actual key type within the array.