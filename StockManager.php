<?php
require_once 'lib/validation/Validateur.php';

class StockManager {
    private $validateur;
    
    public function __construct() {
        $this->validateur = new Validateur();
    }
    
    public function ajouterLot($codeBarre, $dateExpiration, $quantite) {
        if (!$this->validateur->estCodeBarreValide($codeBarre)) {
            return "Erreur: Code barre invalide. Il doit contenir 13 chiffres.";
        }
        if (!$this->validateur->estDateExpirationValide($dateExpiration)) {
            return "Erreur: Date d'expiration invalide. Le produit est déjà expiré.";
        }
        
        return "Lot ajouté avec succès !";
    }
}
?> 
