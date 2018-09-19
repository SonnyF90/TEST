<?php 

class Personnage{
    
    private $_force = 50;
    private $_localisation = 50;
    private $_experience = 50;
    private $_degats = 50;
    private $_nom;
    
    public function __construct($nom){
        
        $this->_nom = $nom;
        
        echo "Bonjour " . $this->_nom . '<br />';
        
    }
    
    public function gagnerExperience(){
        
        $this->_experience = $this->_experience + 1;
        
        echo $this->_nom . ' à maintenant une éxperience de ' . $this->_experience  . '<br />';
        
    }
    
    public function frapper($x){
        
        $x->_degats = $x->_degats + 2;
        
        echo $this->_nom . ' à frapper ' . $x->_nom . ' qui a maintenant des dégats de ' . $x->_degats . '<br />';
        
        
    }

}

?>
