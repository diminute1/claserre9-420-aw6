<?php

declare(strict_types=1);

require_once(__DIR__ . '/../Model/Class/Formulaire.php');

use PHPUnit\Framework\TestCase;

final class FormulaireTest extends TestCase
{
    protected $formulaire;
    protected $record;

    protected function setUp(): void
    {
        $this->formulaire = new Formulaire();
        $this->record["id_form"] = "1";
        $this->record["id_etu"] = "1702089";
        $this->record["sport"] = "Soccer";
        $this->record["bpm"] = 50;
        $this->record["note"] = "75";
        $this->record["type"] = "Intense";
        $this->record["frequence"] = "3";
        $this->record["comment"] = "Passable";
    }

    public function testloadFromArray(): void
    {
        $this->formulaire->loadFromArray($this->record);
        $this->assertEquals($this->record["id_form"], $this->formulaire->getId());
        $this->assertEquals($this->record["id_etu"], $this->formulaire->getIdEtu());
        $this->assertEquals($this->record["sport"], $this->formulaire->getSport());
        $this->assertEquals($this->record["bpm"], $this->formulaire->getBpm());
        $this->assertEquals($this->record["note"], $this->formulaire->getNote());
        $this->assertEquals($this->record["type"], $this->formulaire->getType());
        $this->assertEquals($this->record["frequence"], $this->formulaire->getFrequence());
        $this->assertEquals($this->record["comment"], $this->formulaire->getCom());
    }

    public function test_setid(): void
    {
        $this->formulaire->setId($this->record["id_form"]);
        $this->assertEquals($this->record["id_form"], $this->formulaire->getId());
    }

    public function test_setIdEtu(): void
    {
        $this->formulaire->setIdEtu($this->record["id_etu"]);
        $this->assertEquals($this->record["id_etu"], $this->formulaire->getIdEtu());
    }

    public function test_setSport(): void
    {
        $this->formulaire->setSport($this->record["sport"]);
        $this->assertEquals($this->record["sport"], $this->formulaire->getSport());
    }

    public function test_setBpm(): void
    {
        $this->formulaire->setBpm($this->record["bpm"]);
        $this->assertEquals($this->record["bpm"], $this->formulaire->getBpm());
    }

    public function test_setNote(): void
    {
        $this->formulaire->setNote($this->record["note"]);
        $this->assertEquals($this->record["note"], $this->formulaire->getNote());
    }

    public function test_setType(): void
    {
        $this->formulaire->setType($this->record["type"]);
        $this->assertEquals($this->record["type"], $this->formulaire->getType());
    }

    public function test_setFrequence(): void
    {
        $this->formulaire->setFrequence($this->record["frequence"]);
        $this->assertEquals($this->record["frequence"], $this->formulaire->getFrequence());
    }

    public function test_setCom(): void
    {
        $this->formulaire->setCom($this->record["comment"]);
        $this->assertEquals($this->record["comment"], $this->formulaire->getCom());
    }
}
