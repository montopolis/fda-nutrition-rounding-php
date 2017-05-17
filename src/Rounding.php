<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 *
 */

namespace Montopolis\Fda;

/**
 * Class Rounding
 * @package Montopolis\Fda
 *
 * @method Rounders\AbstractRounder betaCarotene($value)
 * @method Rounders\AbstractRounder calorie($value)
 * @method Rounders\AbstractRounder carbohydrate($value)
 * @method Rounders\AbstractRounder cholesterol($value)
 * @method Rounders\AbstractRounder fat($value)
 * @method Rounders\AbstractRounder fiber($value)
 * @method Rounders\AbstractRounder mineral($value)
 * @method Rounders\AbstractRounder potassium($value)
 * @method Rounders\AbstractRounder sodium($value)
 * @method Rounders\AbstractRounder sugar($value)
 * @method Rounders\AbstractRounder vitamin($value)
 */
class Rounding
{
    public function __call($name, $arguments)
    {
        $className = __NAMESPACE__ . '\\Rounders\\' . ucwords($name);
        return new $className($arguments[0]);
    }
}