<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AproposController implements IAction
{
    public function execute()
    {
        return new Page('apropos', "À propos", null, null);
    }
}
