<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * LigneFraisForfait
 *
 * @ORM\Table(name="LigneFraisForfait")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\LignefraisforfaitRepository")
 */
class LigneFraisForfait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Visiteur", inversedBy="ligneFraisForfaits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idVisiteur;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $mois;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FraisForfait", inversedBy="ligneFraisForfaits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idFraisForfait;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVisiteur(): ?Visiteur
    {
        return $this->idVisiteur;
    }

    public function setIdVisiteur(?Visiteur $idVisiteur): self
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(string $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getIdFraisForfait(): ?FraisForfait
    {
        return $this->idFraisForfait;
    }

    public function setIdFraisForfait(?FraisForfait $idFraisForfait): self
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}