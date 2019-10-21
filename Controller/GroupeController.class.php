<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class GroupeController implements IAction
{
    public function execute()
    {
		$data = GroupeDAO::find($_SESSION['connected']);
        return new Page('profilprof', "Accueil", $data, null);
    }
}
