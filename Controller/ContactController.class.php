<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class ContactController implements IAction
{
    public function execute()
    {
        return new Page('contact', "À propos", null, null);
    }
}
