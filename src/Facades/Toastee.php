<?php

namespace Paolor\Toastee\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string success(string $title, string $message)
 * @method static string error(string $title, string $message)
 * @method static string warning(string $title, string $message)
 * @method static string info(string $title, string $message)
 *
 * @see \YourVendor\Toastee\Toastee
 */
class Toastee extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'toastee';
    }
}