<?php
/**
* testModule
*
* Juste un test sur les contrôleurs
*
* @author Besens
**/

if (!defined('_PS_VERSION_'))
	exit;

class testModule extends Module
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

			$idParent = (int)Tab::getIdFromClassName('AdminParentCustomer');
			$tab->id_parent = $idParent;
			$tab->position = Tab::getNbTabs($idParent);

			if(!$tab->save())
			    return false;

			Configuration::updateValue('MYMODULE_ADMIN_TAB', $tab->id);

			return parent::install();
 	  }

    public function uninstall()
    {
			$adminTabId = Configuration::get('MYMODULE_ADMIN_TAB');

			if(Tab::existsInDatabase($adminTabId, Tab::$definition['table'])) {
				$adminTab = new Tab($adminTabId);
				if(!$adminTab->delete())
						return false;
			}
        return Configuration::deleteByName('MYMODULE_ADMIN_TAB') && parent::uninstall();
    }

}
