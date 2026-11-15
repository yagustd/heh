<?php
class Livraison
{
    public string $reference;
    public string $titre;
    public DateTimeImmutable $dateCommande;
    public DateTimeImmutable $dateLivraisonEstimee;
    public ?DateTimeImmutable $dateLivraison = null;

	// méthode constructeur
    public function __construct(
        string $reference,
        string $titre,
        DateTimeImmutable $dateCommande,
        DateTimeImmutable $dateLivraisonEstimee,
        ?DateTimeImmutable $dateLivraison = null
    ) {
        $this->reference = $reference;
        $this->titre = $titre;
        $this->dateCommande = $dateCommande->setTime(0, 0);
        $this->dateLivraisonEstimee = $dateLivraisonEstimee->setTime(0, 0);
        if (!empty($dateLivraison)) $this->dateLivraison = $dateLivraison->setTime(0, 0);
		else $this->dateLivraison = null;
    }
	
	public function retard() {
		if ($this->dateLivraisonEstimee < $this->dateLivraison) {
			return true;
		}
		else {
			return false;
		}
	}
}

// données
$livraisons = [
    new Livraison(
        "CMD001",
        "Poster Céline Dion",
        new DateTimeImmutable("-12 days"),
        new DateTimeImmutable("-8 days"),
        new DateTimeImmutable("-9 days")
    ),

    new Livraison(
        "CMD002",
        "Bandes dessinées",
        new DateTimeImmutable("-9 days"),
        new DateTimeImmutable("-6 days"),
        new DateTimeImmutable("-3 days")
    ),

    new Livraison(
        "CMD003",
        "Fleurs",
        new DateTimeImmutable("-7 days"),
        new DateTimeImmutable("+2 days"),
		null
    ),

    new Livraison(
        "CMD004",
        "Chaussettes",
        new DateTimeImmutable("-6 days"),
        new DateTimeImmutable("-4 days"),
        new DateTimeImmutable("-4 days")
    ),

    new Livraison(
        "CMD005",
        "Coffret Blu-Ray",
        new DateTimeImmutable("-5 days"),
        new DateTimeImmutable("+5 days"),
		null
    ),

    new Livraison(
        "CMD005",
        "Clavier AZERTY",
        new DateTimeImmutable("-3 days"),
        new DateTimeImmutable("-1 days")
    )
];