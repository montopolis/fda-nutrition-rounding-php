# FDA Nutrition Rounding in PHP

Basic library for rounding nutritional information according to FDA guidelines ([source](https://www.fda.gov/Food/GuidanceRegulation/GuidanceDocumentsRegulatoryInformation/LabelingNutrition/ucm064932.htm))

## Install

```bash
composer install montopolis/fda-nutrition-rounding-php
```

## Usage

```php
<?php

$rounder = new Montopolis\Fda\Rounding();

$rounder->calorie(123)->toInt(); // outputs 120
$rounder->calorie(123)->toFloat(); // outputs 120.0
$rounder->calorie(123)->toString(); // outputs "120 g"

$rounder->carbohydrate(0.51)->toString(); // outputs "less than 1 g"
```

## Supported nutrient types

At the time of writing, the library supports all nutrient types defined by the [FDA guidelines](https://www.fda.gov/Food/GuidanceRegulation/GuidanceDocumentsRegulatoryInformation/LabelingNutrition/ucm064932.htm).

 ```php
 $rounder->alcohol($value)->toInt();
 $rounder->betaCarotene($value)->toInt();
 $rounder->calorie($value)->toInt();
 $rounder->carbohydrate($value)->toInt();
 $rounder->cholesterol($value)->toInt();
 $rounder->dietaryFiber($value)->toInt();
 $rounder->fat($value)->toInt();
 $rounder->mineral($value)->toInt();
 $rounder->otherFiber($value)->toInt();
 $rounder->potassium($value)->toInt();
 $rounder->protein($value)->toInt();
 $rounder->sodium($value)->toInt();
 $rounder->sugar($value)->toInt();
 $rounder->vitamin($value)->toInt();
 ```

## Run the tests

```bash
./vendor/bin/phpunit
PHPUnit 4.8.35 by Sebastian Bergmann and contributors.

.........

Time: 100 ms, Memory: 4.00MB

OK (9 tests, 46 assertions)
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.