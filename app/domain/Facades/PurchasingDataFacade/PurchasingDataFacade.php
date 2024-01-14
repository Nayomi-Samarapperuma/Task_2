<?php

namespace domain\Facades\PurchasingDataFacade;

use domain\Services\PurchasingDataService\PurchasingDataService;
use Illuminate\Support\Facades\Facade;

/**
 * PurchasingData Facade
 * php version 8
 *
 * @category Facade
 * @author   CyberElysium <contact@cyberelysium.com>
 * @license  https://cyberelysium.com Config
 * @link     https://cyberelysium.com
 * */
class PurchasingDataFacade extends Facade
{
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return PurchasingDataService::class;
    }
}
