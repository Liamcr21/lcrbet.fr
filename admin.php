
<?php ob_start(); ?>


<div class="container">
  <form action="action_page.php">

    <label for="fname">Nombre de but</label>
    <input type="text" id="nbbut" name="nbbut" placeholder="Nb but">


    <label for="team">Equipes</label>
    <select id="team" name="team">
      <option value="Vegas Golden Knights">Vegas Golden Knights</option>
      <option value="Dallas Stars">Dallas Stars</option>
      <option value="Calgary Flames">Calgary Flames</option>
      <option value="Nashville Predators">Nashville Predators</option>
      <option value="Seattle Kraken">Seattle Kraken</option>
      <option value="St. Louis Blues">St. Louis Blues</option>
      <option value="Winnipeg Jets">Winnipeg Jets</option>
      <option value="Colorado Avalanche">Colorado Avalanche</option>
      <option value="Edmonton Oilers">Edmonton Oilers</option>
      <option value="Anaheim Ducks">Anaheim Ducks</option>
      <option value="Chicago Blackhawks">Chicago Blackhawks</option>
      <option value="Los Angeles Kings">Los Angeles Kings</option>
      <option value="Vancouver Canucks">Vancouver Canucks</option>
      <option value="Minnesota Wild">Minnesota Wild</option>
      <option value="Arizona Coyotes">Arizona Coyotes</option>
      <option value="San Jose Sharks">San Jose Sharks</option>
      <option value="Pittsburgh Penguins">Pittsburgh Penguins</option>
      <option value="Boston Bruins">Boston Bruins</option>
      <option value="Detroit Red Wings">Detroit Red Wings</option>
      <option value="Philadelphia Flyers">Philadelphia Flyers</option>
      <option value="Carolina Hurricanes">Carolina Hurricanes</option>
      <option value="Florida Panthers">Florida Panthers</option>
      <option value="New York Rangers">New York Rangers</option>
      <option value="Toronto Maple Leafs">Toronto Maple Leafs</option>
      <option value="New York Islanders">New York Islanders</option>
      <option value="Buffalo Sabres">Buffalo Sabres</option>
      <option value="Washington Capitals">Washington Capitals</option>
      <option value="Tampa Bay Lightning">Tampa Bay Lightning</option>
      <option value="Montreal Canadiens">Montreal Canadiens</option>
      <option value="Ottawa Senators">Ottawa Senators</option>
      <option value="New Jersey Devils">New Jersey Devils</option>
      <option value="Columbus Blue Jackets">Columbus Blue Jackets</option>
    </select>

    <label for="player">Joueurs</label>
    <select id="player" name="player">
    <option value="Kreider">Kreider</option>
      <option value="Gaudreau">Gaudreau</option>
    </select>

    <input type="submit" value="Envoyer">

  </form>
</div>


<?php $content = ob_get_clean(); require_once("./template/template.php");
