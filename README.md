### JS/PHP Debugging

#### Find the JS errors!

##### Hints

* Something is spelled wrong
* Wrong function name
* Some array is undefined
* Why is there an undefined word next to the titles?

#### For PHP I will just illustrate two debugging techniques

```php
	...
	$items = array("oranges" => 4, "apples" => 10, "grapes" => 12, "limes" => 4);
	var_dump($items); exit();
	...
```

or even


```php
	...
	$items = array("oranges" => 4, "apples" => 10, "grapes" => 12, "limes" => 4);
	echo "<script>";
		echo "console.log($items)";
	echo "</script>";
	...
```