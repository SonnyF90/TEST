<?php


class Personnage{
    
    private $_force;
    private $_nom;
    
    
    private static $_count = 0;
    
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;
    
    
    
    
    public function __construct($force){
        
        self::$_count++;
        
        
        $this->addCount();
        $this->setForce($force);
        
        
    }
    
    
    public function setForce($force){
        
        if(in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])){
            
            $this->_force = $force;
            
        }
        
    }
    
    
    public function getForce(){

        echo 'La force est de: ' . $this->_force . ' points de puissance' . '<br />';

    }
    
    
    public static function addCount(){
        
        echo self::$_count;
        
    }
    
}


$perso1 = new Personnage(Personnage::FORCE_MOYENNE);
$perso1->getForce();

$perso2 = new Personnage(Personnage::FORCE_MOYENNE);
$perso3 = new Personnage(Personnage::FORCE_MOYENNE);

/*Ceci est un test*/

?>