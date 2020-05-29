# usage:

To turn backslashes into hyphens:
```php
Sanitiser::sanitise(MyClass::class);
```

To turn hyphens into backslashes:
```php
Sanitiser::unsanitise(MyClass::class);

Use shortened class names
```php
Sanitiser::scamble(MyClass::class);
```

```php
Sanitiser::unscamble(MyClass::class);
```
