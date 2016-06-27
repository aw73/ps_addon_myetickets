<?php
/**
* 2007-2015 PrestaShop.
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
*  @author    Sébastien Rufer <sebastien@rufer.fr>
*  @copyright 2016 Sébastien Rufer
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
if (!defined('_PS_VERSION_')) {
    exit;
}

class testmodule extends Module
{
    public function __construct()
    {
        $this->name = 'testmodule';
        $this->tab = 'administration';
        $this->need_instance = 1;

        parent::__construct();

        $this->displayName = $this->l('Test Module');
        $this->description = $this->l('Juste un test sur les contrôleurs');

        $this->version = '1.0.0';
        $this->author = 'Besens';
    }

    public function install()
    {
        // Install Tabs
            $tab = new Tab();

        foreach (Language::getLanguages() as $language) {
            $tab->name[$language['id_lang']] = 'My Module';
        }

        $tab->class_name = 'AdminTestmodule';
        $tab->module = $this->name;

        $idParent = (int) Tab::getIdFromClassName('AdminParentCustomer');
        $tab->id_parent = $idParent;
        $tab->position = Tab::getNbTabs($idParent);

        if (!$tab->save()) {
            return false;
        }

        Configuration::updateValue('MYMODULE_ADMIN_TAB', $tab->id);

        return parent::install();
    }

    public function uninstall()
    {
        $adminTabId = Configuration::get('MYMODULE_ADMIN_TAB');

        if (Tab::existsInDatabase($adminTabId, Tab::$definition['table'])) {
            $adminTab = new Tab($adminTabId);
            if (!$adminTab->delete()) {
                return false;
            }
        }

        return Configuration::deleteByName('MYMODULE_ADMIN_TAB') && parent::uninstall();
    }
}
