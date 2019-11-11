<?php

declare(strict_types=1);

require_once(__DIR__ . '/../Model/Class/Etudiant.php');

use PHPUnit\Framework\TestCase;

final class EtudiantTest extends TestCase
{

    protected $etu;
    protected $record;

    protected function setUp(): void
    {
        $this->etu = new Etudiant();
        $this->record["id_etu"] = "1702088";
        $this->record["nom"] = "Jean";
        $this->record["prenom"] = "Petit";
        $this->record["mdp"] = "1234";
        $this->record["note"] = 0;
        $this->record["id_groupe"] = "1";
    }

    public function testloadFromArray(): void
    {
        $this->etu->loadFromArray($this->record);
        $this->assertEquals($this->record["id_etu"], $this->etu->getId());
        $this->assertEquals($this->record["nom"], $this->etu->getNom());
        $this->assertEquals($this->record["prenom"], $this->etu->getPrenom());
        $this->assertEquals($this->record["mdp"], $this->etu->getMdp());
        $this->assertEquals($this->record["note"], $this->etu->getNote());
        $this->assertEquals($this->record["id_groupe"], $this->etu->getIdGroupe());
    }

    public function testSetID(): void
    {
        $this->etu->setId($this->record["id_etu"]);
        $this->assertEquals($this->record["id_etu"], $this->etu->getId());
    }


    public function testSetNom(): void
    {
        $this->etu->setNom($this->record["nom"]);
        $this->assertEquals($this->record["nom"], $this->etu->getNom());
    }

    public function testSetPrenom(): void
    {
        $this->etu->setPrenom($this->record["prenom"]);
        $this->assertEquals($this->record["prenom"], $this->etu->getPrenom());
    }

    public function setMotDePasse(): void
    {
        $this->etu->setPrenom($this->record["mdp"]);
        $this->assertEquals($this->record["mdp"], $this->etu->getMotDePasse());
    }

    public function testIDInvalide()
    {
        $this->expectException(IllegalArgumentException::class);
        $this->record["id_etu"] = "1123";
        $this->etu->VerifierIDPattern($this->record["id_etu"]);
    }
}
