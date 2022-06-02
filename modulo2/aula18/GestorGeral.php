<?php

declare(strict_types=1);

 final class GestorGeral extends Gestor{
    
    private float $BonusAnual;

    public function __construct(float $salario, float $BonusAnual){
        
        parent::setSalario($salario);
        $this->BonusAnual = $BonusAnual;
    }

    public function getBonus():float
    {
      return $this->BonusAnual;
    }

    public function setBonus($BonusAnual):void 
    {
        $this->BonusAnual = $BonusAnual;
    }
}