# usage

To turn backslashes into hyphens:
```php

Sunnysideup\SanitiseClassName\Sanitiser::sanitise(MyClass::class);
```

To turn hyphens into backslashes:
```php
Sunnysideup\SanitiseClassName\Sanitiser::unsanitise(MyClass::class);
```

## shortened class names
Sometimes, you do not want a class name to be visible in its full glory
- e.g. in URLS when it mentions your competitors' name.
For this, you can use the scrambled version:

```yml
Sunnysideup\SanitiseClassName\Sanitiser:
  scramble_registry:
    Nincompoop\Ecommerce\Product: awesomeproduct
```

Use shortened class names:
```php
Sunnysideup\SanitiseClassName\Sanitiser::scramble(Product::class);
```

Reverse shortened class names:
```php
Sunnysideup\SanitiseClassName\Sanitiser::unscramble(Product::class);
```
