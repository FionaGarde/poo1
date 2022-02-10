<?php 

class Impot{

	private $_name;
	private $_revenu;

    const TAUX1 = 0.15;
    const TAUX2 = 0.20;

    //permet d'afficher un message avec le montant de l'impôt à payer
    public function AfficheImpot(){
        $taux = $this->CalculImpot();
        echo $this->_name.' votre impôts est de '.$taux.'€.';
    }

    //permet de calculer le montant de l'impôt 
    private function CalculImpot(): int{
        if($this->_revenu<= 15000)
            return $this->_revenu * self::TAUX1;
        $b = $this->_revenu - 15000;
        return 15000 * self::TAUX1 + ($b* self::TAUX2);
    }

	/* CONSTRUCTEURS */	
	public function __construct($name, $revenu){
		if (empty($name)) 
			$name = 'nom';

        if (empty($revenu)) 
			$revenu = '0';

		$this->_name = $name;
        $this->_revenu = $revenu;

	}

}