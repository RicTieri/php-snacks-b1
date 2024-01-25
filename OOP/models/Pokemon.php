Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)

<?php

class Pokemon {
  public $name;
  public $level;
  public $pokedex_num;
  public $evolution_stage;
  public $region;
  public $type;

  public function __construct($_name, $_level, $_region, PokemonType $_type){
    $_name->name;
    $_level->level;
    $_region->region;
    $_type->type;
  }

  public function attackDmg(){
    return $this->level *1.2;
  }
  public function lifePoints(){
    return $this->level *20.86;
  }
  public function expToLevel(){
    return $this->level * 40;

  }
}

class PokemonType {
  public $type_1;
  public $type_2;
  public $type_3;

  public function __construct($_type_1, $_type_2 = null, $_type_3 = null){
    $_type_1->type_1;
    $_type_2->type_2;
    $_type_3->type_3;
  }
};

$firstPokemon = new Pokemon('bulbasaur',5,'kanto',new PokemonType('leaf'))