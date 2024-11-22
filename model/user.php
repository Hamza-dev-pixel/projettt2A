<?php

class user {
    private ?int $id;
    private ?string $nom_utilisateur;
    private ?DateTime $date_naissance;
    private ?string $email;
    private ?string $mdp;
    private ?string $role;
    // Constructor
    public function __construct(?int $id, ?string $nom_utilisateur, ?DateTime $date_naissance, ?string $email, ?string $mdp, ?string $role) {
        $this->id = $id;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->date_naissance = $date_naissance;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->role = $role;
    }

    // Getters and Setters

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getNom(): ?string {
        return $this->nom_utilisateur;
    }

    public function setNom(?string $nom_utilisateur): void {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }


    public function getDate(): ?DateTime {
        return $this->date_naissance;
    }

    public function setDate(?DateTime $date_naissance): void {
        $this->date_naissance = $date_naissance;
    }


    public function getMDP(): string {
        return $this->mdp;
    }

    public function setMDP(string $mdp): void {
        $this->mdp = $mdp;
    }
    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }
}

?>
