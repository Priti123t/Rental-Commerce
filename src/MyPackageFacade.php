<?php

namespace Beyondcode\MyPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Beyondcode\MyPackage\Skeleton\SkeletonClass
 */
class MyPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-package';
    }
}
