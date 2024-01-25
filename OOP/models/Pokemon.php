<?php

class Pokemon {
  public $name;
  public $level;
  public $pokedex_num;
  public $evolution_stage;
  public $region;
  public $type;

  public function __construct($name, $level, $region, PokemonType $type){
    $this->name = $name;
    $this->level = $level;
    $this->region = $region;
    $this->type = $type;
  }

  public function attackDmg() {
    return $this->level * 1.2;
  }

  public function lifePoints() {
    return $this->level * 20.86;
  }

  public function expToLevel() {
    return $this->level * 40;
  }
}

class PokemonType {
  public $type_1;
  public $type_2;
  public $type_3;

  public function __construct($type_1, $type_2 = null, $type_3 = null){
    $this->type_1 = $type_1;
    $this->type_2 = $type_2;
    $this->type_3 = $type_3;
  }
}

$firstPokemon = new Pokemon('bulbasaur', 5, 'kanto', new PokemonType('leaf'));

var_dump($firstPokemon);