<?php

class StrUtils{

    private $str;

    public function __construct($str){
        $this->str = $str;
    }
    
    public function bold(){
        
        return '<strong>' . $this->str . '</strong><br>';
    }
    public function italic(){
        return '<i>' . $this->str . '</i><br>';
    }
    public function underline(){
        return '<u>' . $this->str . '</u><br>';
    }
    public function capitalize(){
        return '<span style="text-transform:uppercase">' . $this->str . '</span><br>'; 
    }
    public function uglify(){
        $this-> bold();
        $this-> italic(); 
        $this-> underline();
        return ($this->bold() && $this->italic() && $this->underline()) . $this->str;
    }

 
}; 

$papa = new StrUtils('php is awesome !');
echo $papa->bold();
echo $papa->italic();
echo $papa->underline();
echo $papa->capitalize();
echo $papa->uglify();
?>