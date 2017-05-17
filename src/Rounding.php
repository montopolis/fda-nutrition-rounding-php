<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 *
 * @method \Montopolis\Fda\Rounders\AbstractRounder betaCarotene($value)
 * @method \Montopolis\Fda\Rounders\AbstractRounder calorie($value)
 */

namespace Montopolis\Fda;

class Rounding
{
    public function __call($name, $arguments)
    {
        $className = __NAMESPACE__ . '\\Rounders\\' . ucwords($name);
        return new $className($arguments[0]);
    }
}