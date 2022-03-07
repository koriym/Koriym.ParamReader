# Koriym.ParamReader

This is a meta-information reader for method parameter to get attributes or annotations.

Although doctine/annotation cannot annotate method parameters, this reader treats annotations of properties with the same names as method parameters as method parameter metadata.

This is especially useful when you want to prepare metadata for injection.

## Installation

    composer require koriym/param-reader

## Getting Started

```php
$reader = new PramReader();
$user = $reader->getParametrAnnotation(new ReflectionParameter([Consumer::class, '__construct'], 'name'), User::class);
assert($user instanceof User);

$users = $reader->getParametrAnnotation(new ReflectionParameter([Consumer::class, '__construct'], 'name'));
assert($users[0] instanceof User);
assert($users[1] instanceof Foo);
````

The following two codes provide the same meta information.

```php
class Consumer
{
    private $name;
    
    public function __construct(#[User, Foo] string $name) {
        $this->name = $name;
    }
}
```

```php
class Consumer
{
    /**
     * @User
     * @Foo
     */
    private $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
}
```

