
//<?php
// Tämä skripti ohjaa käyttäjän indeksinumeroa vastaavan pokemonin pokedex-sivulle. 
// Muuta alla olevan muuttujan arvoksi 1-7.
//$no = 3;  // edelleenohjataan venusaurin pokedex-sivulle
// Luodaan taulukko, jossa on pokemonin indeksi ja sen nimi.
//$pokedex = array(
//  1 => "bulbasaur", 
//  2 => "ivysaur",
//  3 => "venusaur", 
//  4 => "charmander",
//  5 => "charmeleon",
//  6 => "charizard",
//  7 => "squirtle"
//);
// Muodostetaan url-osoite pokemonin pokedex-sivulle
//$url = "https://www.pokemon.com/us/pokedex/" . $pokedex[$no];
// Edelleenohjataan käyttäjä url-osoitteeseen.
//header("Location: $url");
//exit;
//?> 

<?php
// Tämä skripti ohjaa käyttäjän indeksinumeroa vastaavan pokemonin pokedex-sivulle. 
// Haetaan urlissa määritetty pokemonin numero.
$no = $_GET["no"];  
// Luodaan taulukko, jossa on pokemonin indeksi ja sen nimi.
$pokedex = array(
  1 => "bulbasaur", 
  2 => "ivysaur",
  3 => "venusaur", 
  4 => "charmander",
  5 => "charmeleon",
  6 => "charizard",
  7 => "squirtle"
);
// Muodostetaan url-osoite pokemonin pokedex-sivulle
$url = "https://www.pokemon.com/us/pokedex/" . $pokedex[$no];
// Edelleenohjataan käyttäjä url-osoitteeseen.
header("Location: $url");
exit;
?>