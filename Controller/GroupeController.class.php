<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class GroupeController implements IAction
{
    public function execute()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $data = GroupeService::trouverParProf($_SESSION['connected']);
        return new Page('profilprof', "Profil", $data, null);
    }
}
