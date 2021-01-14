<?php
/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2021 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */

include(_PS_MODULE_DIR_ . 'clarobi/classes/ClaroHelper.php');

class ClaroConfig
{
    /**
     * Available configurations for this module.
     */
    const CONFIG = [
        'CLAROBI_API_KEY',
        'CLAROBI_API_SECRET',
        'CLAROBI_WS_KEY',
        'CLAROBI_WS_DOMAIN',
        'CLAROBI_LICENSE_KEY'
    ];

    /**
     * Remove all configurations on uninstall.
     */
    public static function removeAllConfig()
    {
        foreach (self::CONFIG as $configKey) {
            Configuration::deleteByName($configKey);
        }
    }

    public static function setConfig()
    {
        Configuration::updateValue('CLAROBI_WS_KEY', ClaroHelper::getRandomString(32));
    }
}
