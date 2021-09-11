<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class UserRole
 * @package App\Enums
 */
final class UserRole extends Enum
{
    /**
     * role admin, is the one with all the access
     *  Admin == 1
     */
    const Admin = 1;

    /**
     * role author
     * author lam gi day
     */
    const Author = 2;

    /**
     *  role username not login to view admin
     */
    const User = 3;
}
