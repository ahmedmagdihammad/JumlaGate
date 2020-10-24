<?php

namespace App\Enums;

use Rexlabs\Enum\Enum;

/**
 * The UserType enum.
 *
 * @method static self ''()
 */
class UserType extends Enum
{
    const Admin = 1;
    const User  = 2;
}
