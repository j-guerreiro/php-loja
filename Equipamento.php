<?php 

class Equipamento 
{ 
  public string $tipo;
  public float $preco;
  public int $quantidade;
  public string $marca;
  public string $caracteristicas;

  public function __construct(int $tipo, float $preco, int $quantidade, string $marca, string $caracteristicas)
  {
    $this->$tipo = $tipo;
    $this->$preco = $preco;
    $this->$quantidade = $quantidade;
    $this->$marca = $marca;
    $this->$caracteristicas = $caracteristicas;
  }

};

?>