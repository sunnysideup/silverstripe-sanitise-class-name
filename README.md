# usage:

To turn backslashes into hyphens:
```php
Sanitiser::sanitise(MyClass::class);
```

To turn hyphens into backslashes:
```php
Sanitiser::unsanitise(MyClass::class);
```

Use shortened class names:
```php
Sanitiser::scramble(MyClass::class);
```

Reverse shortened class names:
```php
Sanitiser::unscramble(MyClass::class);
```
