<?php
 
ini_set('max_execution_time', 300);

require 'php/scripts.php';


abertura();

echo '<div id="formulario">
		<form action="php/corpo.php" method="get" style="font-size: 20px; margin-left: 2%; color: yellow;" >
			<label style="margin-right: 2%;">Qual é o seu nome? </label> <input style="font-size: 15px;" type="text" name="nome"><br><br>

			<p>✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠ Raças ✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠</p>
			<p>Qual é a sua Raça?</p>
			<input style="margin-left: 2%;" type="radio" id="draconiano" name="raca" value="Draconiano">
		    <label style="margin-right: 2%;" for="draconiano">Draconiano</label><br><br>

		    <input style="margin-left: 2%;" type="radio" id="elfo" name="raca" value="Elfo">
		    <label style="margin-right: 2%;" for="elfo">Elfo</label><br><br>

		    <input style="margin-left: 2%;" type="radio" id="espectro" name="raca" value="Espectro">
		    <label style="margin-right: 2%;" for="espectro">Espectro</label><br><br> 

		    <input style="margin-left: 2%;" type="radio" id="humano" name="raca" value="Humano">
		    <label style="margin-right: 2%;" for="humano">Humano</label><br><br>

		    <input style="margin-left: 2%;" type="radio" id="orc" name="raca" value="Orc">
		    <label style="margin-right: 2%;" for="orc">Orc</label><br><br>

		    <p>✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠ Classes ✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠</p>
		    <p>Qual é sua classe?</p>
		    <input style="margin-left: 2%;" type="radio" id="arqueiro" name="classe" value="Arqueiro">
		    <label style="margin-right: 2%;" for="arqueiro">Arqueiro</label><br><br>

		    <input style="margin-left: 2%;" type="radio" id="assassino" name="classe" value="Assassino">
		    <label style="margin-right: 2%;" for="assassino">Assassino</label><br><br>

		    <input style="margin-left: 2%;" type="radio" id="guerreiro" name="classe" value="Guerreiro">
		    <label style="margin-right: 2%;" for="guerreiro">Guerreiro</label><br><br>  

		    <input style="margin-left: 2%;" type="radio" id="mago" name="classe" value="Mago">
		    <label style="margin-right: 2%;" for="mago">Mago</label><br><br>

		    <p>✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠ Atributos ✠✠✠✠✠✠✠✠✠✠✠✠✠✠✠</p>
		    <p>São <b style="color: blue;">100 pontos</b> para dividir entre os atributos:</p>
		    <label style="margin-right: 2%;">Audacia:</label><input type="number" name="audacia"><br><br>
		    <label style="margin-right: 2%;">Força:</label><input type="number" name="forca"><br><br>
		    <label style="margin-right: 2%;">Inteligência:</label><input type="number" name="inteligencia"><br><br>
		    <label style="margin-right: 2%;">Magia:</label><input type="number" name="magia"><br><br>

		    <input type="submit" name="Salvar">
		</form>
	</div>';

?>