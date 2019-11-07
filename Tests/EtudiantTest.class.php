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
        $this->etu = new Professeur();
        $this->record["id_etu"] = "abc@xyz.com";
        $this->record["nom"] = "Jean";
        $this->record["prenom"] = "Petit";
        $this->record["mdp"] = "1234";
        $this->record["mdp"] = "1";
    }

    public function testloadFromArray(): void
    {
        $this->etu->loadFromArray($this->record);
        $this->assertEquals($this->record["id_etu"], $this->etu->getCourriel());
        $this->assertEquals($this->record["nom"], $this->etu->getNom());
        $this->assertEquals($this->record["prenom"], $this->etu->getPrenom());
        $this->assertEquals($this->record["mdp"], $this->etu->getMotDePasse());
    }

    public function testSetCourriel(): void
    {
        $this->etu->setCourriel($this->record["id_etu"]);
        $this->assertEquals($this->record["id_etu"], $this->etu->getCourriel());
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

    public function testCourrielInvalide()
    {

        $this->expectException(IllegalArgumentException::class);
        $this->record["id_etu"] = "abcd";
        $this->etu->VerifierEmailPattern($this->record["id_etu"]);
    }
}
