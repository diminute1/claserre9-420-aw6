<?php

declare(strict_types=1);

require_once(__DIR__ . '/../Model/Class/Groupe.php');

use PHPUnit\Framework\TestCase;

final class GroupeTest extends TestCase
{
    protected $grp;
    protected $record;

    protected function setUp(): void
    {
        $this->grp = new Groupe();
        $this->record["id_groupe"] = "1";
        $this->record["id_prof"] = "claserre9@gmail.com";
        $this->record["session"] = "Hiver";
        $this->record["nom_groupe"] = "Mardi";
        $this->record["annee"] = "2019";
    }

    public function testloadFromArray(): void
    {
        $this->grp->loadFromArray($this->record);
        $this->assertEquals($this->record["id_groupe"], $this->grp->get_id_groupe());
        $this->assertEquals($this->record["id_prof"], $this->grp->get_id_prof());
        $this->assertEquals($this->record["session"], $this->grp->get_session());
        $this->assertEquals($this->record["nom_groupe"], $this->grp->get_nom_groupe());
        $this->assertEquals($this->record["annee"], $this->grp->get_annee());
    }

    public function test_set_id_groupe(): void
    {
        $this->grp->set_id_groupe($this->record["id_groupe"]);
        $this->assertEquals($this->record["id_groupe"], $this->grp->get_id_groupe());
    }

    public function test_set_id_prof(): void
    {
        $this->grp->set_id_prof($this->record["id_prof"]);
        $this->assertEquals($this->record["id_prof"], $this->grp->get_id_prof());
    }

    public function test_set_session(): void
    {
        $this->grp->set_session($this->record["session"]);
        $this->assertEquals($this->record["session"], $this->grp->get_session());
    }

    public function test_set_nom_groupe(): void
    {
        $this->grp->set_nom_groupe($this->record["nom_groupe"]);
        $this->assertEquals($this->record["nom_groupe"], $this->grp->get_nom_groupe());
    }

    public function test_set_annee(): void
    {
        $this->grp->set_annee($this->record["annee"]);
        $this->assertEquals($this->record["annee"], $this->grp->get_annee());
    }

    public function testIDProfInvalide()
    {

        $this->expectException(IllegalArgumentException::class);
        $this->record["id_prof"] = "abcd";
        $this->grp->VerifierIDProfPattern($this->record["id_prof"]);
    }
}
