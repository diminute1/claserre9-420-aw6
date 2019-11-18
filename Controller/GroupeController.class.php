<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class GroupeController implements IAction
{
    public function execute()
    {
        $data = GroupeService::trouverParProf($_SESSION['connected']);
        return new Page('profilprof', "Profil", $data, null);
    }
}
