<?php
class AdminTestmoduleController extends ModuleAdminController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function initContent()
    {
      parent::initContent();
    }

    public function display()
    {
      parent::display();
      return "<hr>YEAH !<hr>";
    }
}
?>
