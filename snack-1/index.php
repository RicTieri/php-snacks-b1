<?php
  $matches = [
    [
      'squadra_casa' => 'Hornetts',
      'squadra_ospite' => 'Chicago bulls',
      'punteggio_casa' => '55',
      'punteggio_ospite' => '60',
    ],
    [
      'squadra_casa' => 'Hornetts',
      'squadra_ospite' => 'Chicago bulls',
      'punteggio_casa' => '55',
      'punteggio_ospite' => '60',
    ],
    [
      'squadra_casa' => 'Hornetts',
      'squadra_ospite' => 'Chicago bulls',
      'punteggio_casa' => '55',
      'punteggio_ospite' => '60',
    ],
    [
      'squadra_casa' => 'Hornetts',
      'squadra_ospite' => 'Chicago bulls',
      'punteggio_casa' => '55',
      'punteggio_ospite' => '60',
    ],
  ];

  foreach($matches as $match){
?>
<ul>
  <li>
    <?php
      echo $match['squadra_casa'] . '-' . $match['squadra_ospite'] . '|' . $match['punteggio_casa'] . '-' . $match['punteggio_ospite'] ;
    ?>
  </li>
</ul>
<?php
  }
?>