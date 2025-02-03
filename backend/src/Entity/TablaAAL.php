<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosAAL")]
class TablaAAL
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $fraseAAL;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFraseAAL(): string
    {
        return $this->fraseAAL;
    }

    public function setFraseAAL(string $fraseAAL): self
    {
        $this->fraseAAL = $fraseAAL;
        return $this;
    }
} 