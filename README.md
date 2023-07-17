# argument_addition_package
you can add multiple number using sum() method
---
## Installation
```sh
composer require bappi/sum
```

## Use from controller

### Import first the Add facade 
```php
use Bappi\Sum\Facades\Add;
```
```php
//You can add multiple  number as your wish

Add::sum(12,23,12,..............);

//82
```


## Publish Configuration 

```sh
php artisan vendor:publish Bappi\Sum
```

## Contribution 

You can used to add any number of addition just use the instruction.
