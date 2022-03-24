<?php
class Lapicera
{
   private $color;
   private $marca;
   private $trazo;
   private $precio;

   public function __construct(string $color, string $marca, string $trazo, float $precio ) {
        $this->color = $color;
        $this->marca = $marca;
        $this->trazo = $trazo;
        $this->precio = $precio;
    }
}

$lapicera1 = new Lapicera("Roja","Bic","Grueso",50);
$lapicera2 = new Lapicera("Verde","Bic","Grueso",50);
$lapicera3 = new Lapicera("Azul","Bic","Fino",50);
$lapiceras = array();
array_push($lapiceras,$lapicera1,$lapicera2,$lapicera3);
print_r(array_values($lapiceras));
?>