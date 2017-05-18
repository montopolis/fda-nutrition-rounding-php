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
$rounder->calorie(123)->toString(); // outputs "120 g"

$rounder->carbohydrate(0.51)->toString(); // outputs "less than 1 g"
```

## Supported nutrient types

At the time of writing, the library supports all nutrient types defined by the [FDA guidelines](https://www.fda.gov/Food/GuidanceRegulation/GuidanceDocumentsRegulatoryInformation/LabelingNutrition/ucm064932.htm). Some of the nutrients are named slightly differently, such as:

* otherFiber: for soluble and insoluble fiber.
* alcohol: for sugar alcohol.
* carbohydrate should also be used for "other carbohydrates" (rounding scheme is the same).

## Run the tests

```bash
./vendor/bin/phpunit
PHPUnit 4.8.35 by Sebastian Bergmann and contributors.

.......

Time: 113 ms, Memory: 4.00MB

OK (7 tests, 44 assertions)
```