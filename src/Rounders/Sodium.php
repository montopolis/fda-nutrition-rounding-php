<?php
/**
 * Sodium
 *
 * < 5 mg - express as 0
 * 5 - 140 mg - express to nearest 5 mg increment
 * > 140 mg - express to nearest 10 mg increment
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Sodium extends Potassium
{

}