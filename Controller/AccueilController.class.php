<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AccueilController implements IAction
{
    public function execute()
    {
        return new Page('accueil', "Accueil", null, null);
    }
}
