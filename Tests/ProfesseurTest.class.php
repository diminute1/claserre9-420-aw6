<?php

declare(strict_types=1);

require_once(__DIR__ . '/../Model/Class/Professeur.php');

use PHPUnit\Framework\TestCase;

final class ProfesseurTest extends TestCase
{

    protected $prof;
    protected $record;

    protected function setUp(): void
    {
        $this->prof = new Professeur();
        $this->record["courriel"] = "abc@xyz.com";
        $this->record["nom"] = "Jean";
        $this->record["prenom"] = "Petit";
        $this->record["motdepasse"] = "1234";
    }

    public function testloadFromArray(): void
    {
        $this->prof->loadFromArray($this->record);
        $this->assertEquals($this->record["courriel"], $this->prof->getCourriel());
        $this->assertEquals($this->record["nom"], $this->prof->getNom());
        $this->assertEquals($this->record["prenom"], $this->prof->getPrenom());
        $this->assertEquals($this->record["motdepasse"], $this->prof->getMotDePasse());
    }

    public function testSetCourriel(): void
    {
        $this->prof->setCourriel($this->record["courriel"]);
        $this->assertEquals($this->record["courriel"], $this->prof->getCourriel());
    }


    public function testSetNom(): void
    {
        $this->prof->setNom($this->record["nom"]);
        $this->assertEquals($this->record["nom"], $this->prof->getNom());
    }

    public function testSetPrenom(): void
    {
        $this->prof->setPrenom($this->record["prenom"]);
        $this->assertEquals($this->record["prenom"], $this->prof->getPrenom());
    }

    public function setMotDePasse(): void
    {
        $this->prof->setPrenom($this->record["motdepasse"]);
        $this->assertEquals($this->record["motdepasse"], $this->prof->getMotDePasse());
    }

    public function testCourrielInvalide()
    {

        $this->expectException(IllegalArgumentException::class);
        $this->record["courriel"] = "abcd";
        $this->prof->VerifierEmailPattern($this->record["courriel"]);
    }
}
