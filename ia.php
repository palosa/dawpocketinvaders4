<?php
class ia
{

// Declaración de propiedades

  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

//array de las naves Humanas
public $navesHumano=[];

//array de las naves  IA
 public $navesIA=[];


// declaracion de metodos getters

  public function getMapaCol(){
    return $this->mapaCol;
  }
  public function getMapaFil(){
    return $this->mapaFil;
  }

  public function getNave(){
    return  $this->numNaves;
  }
  public function getNaveHumano(){
    return $this->navesHumano;
  }
  public function getNavesIA(){
    $this->navesIA[1]["fil"]=1;
    return $this->navesIA;
  }

//declaracion de metodos setters
  public function setFila($fil){
    $this->fila=$fil;
  }

  public function setMapaCol($mapaCol){
    $this->mapaCol=$mapaCol;
  }
  public function setMapaFil($mapaFil){
    $this->mapaFil=$mapaFil;
  }


// array asociativo
 public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col
  ];

}

  public function setNaveIA($id,$tipo,$col,$fil){

    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col

  ];

  }

}

?>
