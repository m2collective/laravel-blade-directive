# Blade Directive

This package simplifies and systematizes the creation and registration of user directives.

![PHP](https://img.shields.io/badge/php-^8.3-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/laravel-^13.0-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)

___

## Installation

You can install the package via composer:

```shell
composer require m2collective/laravel-blade-directive
```

The package will automatically register itself.

## Usage

### Default Blade Directive

Creating a simple directive for displaying or formatting incoming arguments.

```php
use M2Collective\BladeDirective\DefaultBladeDirective;

final class Example implements DefaultBladeDirective
{
    /**
     * @return string
     */
    public function tag(): string {
        return 'example';
    }
    
    /**
     * @param mixed $expression
     * @return string
     */
    public function handler(mixed $expression) : string
    {
        //...
    }
}
```

### Logical Blade Directive

Creating a logical directive that satisfies certain conditions.

```php
use M2Collective\BladeDirective\LogicalBladeDirective;

final class Example implements DefaultBladeDirective
{
    /**
     * @return string
     */
    public function openingTag(): string {
        return 'example';
    }
    
    /**
     * @param mixed $expression
     * @return string
     */
    public function openingHandler(mixed $expression) : string
    {
        //...
    }
    
    /**
     * @return string
     */
    public function elseTag(): string {
        return 'elseExample';
    }
    
    /**
     * @param mixed $expression
     * @return string
     */
    public function elseHandler(mixed $expression) : string
    {
        //...
    }
    
    /**
     * @return string
     */
    public function closingTag(): string {
        return 'endExample';
    }
    
    /**
     * @param mixed $expression
     * @return string
     */
    public function closingHandler(mixed $expression) : string
    {
        //...
    }
}
```

### Registering Blade Directives

```php
use M2Collective\BladeDirective\Concerns\RegisterBladeDirectives;

final class ExampleServiceProvider extends ServiceProvider
{
    use RegisterBladeDirectives;
    
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerBladeDirectives([
            new ExampleDirective(),
            //...
        ]);
    }
}
```

## License

The MIT License (MIT). Please see the [License file](LICENSE.txt) for more information.
