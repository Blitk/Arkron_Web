<?php

class Hero{
	public $Nome;
    public $Raça;
    public $Classe;
    public $magia;
    public $força;
    public $inteligência;
    public $audacia;
    public $bravura;
    public $Arkron;
    public $Arma;
    public $Dano;
    public $Criado;
    public $Vida;
	public $Mana;
	public $Stamina;
    
    public function __construct(){
        $this->bravura = 5;
        $this->Arkron = False;
        $this->Arma = "";
        $this->Dano = 0;
        $this->Criado = False;
        $this->Vida = 100;
    	$this->Mana= 100;
    	$this->Stamina = 100;

		if (isset($_GET["nome"])) {
			$this->Nome = $_GET["nome"];
			$this->Raça =  $_GET["raca"];
			$this->Classe =  $_GET["classe"];
			$this->magia =  $_GET["magia"];
			$this->força =  $_GET["forca"];
			$this->inteligência =  $_GET["inteligencia"];
			$this->audacia =  $_GET["audacia"];

			$this->atualizar_atributos();
			$this->atualizar_armamento();
		}
    }
        #Armamentos
    public function atualizar_armamento(){

        if( $this->Classe == "Arqueiro"){
            $this->Arma = "Arco Leve";
            $this->Dano = 10;
        }

        elseif( $this->Classe == "Guerreiro"){
            $this->Arma = "Machado Leve";
            $this->Dano = 10;
        }

        elseif($this->Classe == "Mago"){
            $this->Arma = "Cajado de Chamas";
            $this->Dano = 10;
        }

        elseif($this->Classe == "Assassino"){
            $this->Arma = "Punhal Serrado";
            $this->Dano = 10;
        }
    }

    public function atualizar_atributos(){

        if($this->Classe == "Arqueiro"){
            $this->inteligência += 20;
        }
        elseif( $this->Classe == "Guerreiro"){
            $this->força += 20;
        }
        elseif( $this->Classe == "Mago"){
            $this->magia += 20;
        }
        elseif( $this->Classe == "Assassino"){
            $this->audacia += 20;
        }
        if($this->Raça == "Elfo"){
            $this->inteligência += 20;
        }
        elseif( $this->Raça == "Orc"){
            $this->força += 20;
        }
        elseif( $this->Raça == "Humano"){
            $this->audacia += 20;
        }
        elseif( $this->Raça == "Draconiano"){
            $this->magia += 20;
        }
        elseif( $this->Raça == "Espectro"){
            $this->magia += 10;
            $this->inteligência += 10;
        }
    }

}

function abertura(){

	echo "<style> body{background: #101010;  </style>";

	$logo = "<div id='cyberblue' style='margin-left: 10%; margin-top: 15%; font-size: 24px;'>
	<pre style='color: red; margin: 0px; display: inline;'>
    ██████
  ██       █    █  █████   █████  ██████       █████   ██     ██  ██  █████
  ██       ██  ██  █    █  ██     ██   █       █    █  ██     ██  ██  ██
</pre><pre style='color: blue;margin: 0px; display: inline;'>  ██         ██    █████   █████  █████   ███  █████   ██     ██  ██  █████
  ██         ██    █    █  ██     ██  ██       █    █  ██     ██  ██  ██
   ██████    ██    █████   █████  ██   ██      █████   █████  ██████  █████
</pre>
</div>
";


	$logo2 = "<div id='arkron' style='margin-left: 10%; margin-top: 15%; font-size: 24px;'>
	<pre style='color: green; margin: 0px; display: inline;'>
           ██
         ██  ███    ██████     █     ██   ██████      █████     █       █
       ██      ██   ██    ██   ██   ██    ██    ██   ██    ██   ██     ██
      ██    █████   ██   ██    ██  ██     ██   ██    ██   ███   ████   ██
      ██  ██   ██   █████      ████       █████      ██  █ ██   ██ ██  ██
      ████     ██   ██  ██     ██  ██     ██  ██     ██ █  ██   ██  ██ ██
      ██       ██   ██   ██    ██   ██    ██   ██    ███   ██   ██    ██
      ██       ██   █     ██   █     ██   █     ██    █████     █
                █  
             </pre>
        </div>";


	$textoum = str_split($logo);
	foreach ($textoum as $key => $value) {
		echo $value;
		ob_flush();
	    flush();
		usleep(7000);
	}

	sleep(2);

	echo "<script type='text/javascript'> document.getElementById('cyberblue').style.display = 'none';</script>";

	$textodois = str_split($logo2);
	foreach ($textodois as $key => $value) {
		echo $value;
		ob_flush();
	    flush();
		usleep(7000);
	}

	sleep(7);
	echo "<script type='text/javascript'>document.getElementById('arkron').style.display = 'none';</script>";
}

function historia($heroi){
	$texto = "A Terra sempre foi um lugar de poucas guerras, mas desde a descoberta das fissuras entre os mundos, tudo se resume em caos. Criaturas, Deuses e Demônios, todos contra os humanos, mas em meio a essa guerra de mundos, houve a união de diferentes, os elfos, orcs, draconianos e os espectros, que lutam por um bem maior, a paz entre as diferentes realidades, mas claro que existem os que preferem o caos e a guerra.

	Para entermos cada uma dessas realidades, precisamos ir para o ínicio de tudo, e tudo começa com as divindades: Waq o deus da sabedoria, Jit o deus da força, Kay o deus da magia, Dax o deus das sombras, Pak o deus da bravura, Arkron o deus dos mortos.
	Ambos os deuses viviam juntos em harmonia, até que Arkron começou a causar discórdia entre seus irmãos para causar um desequilibrio dos poderes, o que culminou em uma briga, e a separação de ambos, e cada um criou sua dimensão, sendo: 
		- Waquios a dimensão dos Elfos, seres extremamente inteligentes, pacificos e desenvolvidos.
		- Jitkos a dimensão dos Orcs, seres com muita força e que vivem em constante luta entre si.
		- Kayros a dimensão dos Draconianos, seres com grande poder mágico.
		- Daxy a dimensão dos Espectros, são seres fantasmagoricos, inteligentes e com habilidades mágicas.
		- Paksu a dimensão dos Humanos, seres com muita bravura e inteligência.
		- Arkronos a dimensão dos Demônios, seres com poderes sombrios e muita força. 
	Arkron conseguiu com essa fragmentação elevar seus poderes, e com isso acabou abrindo fissuras em Paksu, o mundo dos humanos, fazendo que todos os seres ficassem juntos em um único mundo, o que culminou em diversos conflitos.


										Atualmente

	Eu me chamo $heroi->Nome e sou um $heroi->Raça, e luto pelo lado da paz entre os povos liderado pela princesa Marjorie. Do nosso lado em Heaven Hill, lutam os Elfos, uma parcela dos Orcs, Espectros e Draconianos, e nós lutamos contra os aliados de Arkron, que é composto por Orcs, Espectros e Draconianos que não concordam com a união dos povos, e demônios que são fiéis ao Deus dos Mortos, que esperam o caos e nada mais.
	Por mais que Heaven Hill tenha um menor número de aliados, contamos com a inteligência dos Elfos para elaborar estratégias imbativeis.

	Princesa Marjorie estava explicando a estrátegia para seus aliados:

		- 'Os focos da luta estão no Sul de Paksu, e para chegar lá teremos que passar por grandes batalhas, sendo a primeira delas contra os Orcs tomados pela aura de Arkron, que são bem mais fortes que os Orcs comuns, e vocês conseguem diferenciá-los por uma sombra azulada que envolve o corpo deles.'
		- 'Fiquem juntos sempre, pois a tática dos Orcs como o General Graves disse, é sempre separar os inimigos para conquistar.'
		- 'E que Pak, Jit, Dax, Waq e Kay abençoe vocês!.'

	Depois disso fomos nos encontrar com nossos superiores, que são:  General Graves o orc comandante das linhas de frente, Luda a Elfo que coordena as estratégias, Rako o Draconiano que comanda ataques mágicos, Elos o Espectro comandante de ataques sorrateiros.

		Graves: 'Olá rapazes, prontos para ingressar no inferno? Hahaha'

		Luda: 'Lá é diferente de tudo que vocês já viram, as vezes até a melhor das estratégias se tornam inúteis, e é por isso que como a Princesa disse, nunca se separem!'

		Luda: 'Rako... Diga um pouco sobre como lidar com a magia dos aliados de Arkron'

		Rako: 'Primeiramente quero que vocês nunca subestimem esse tipo de magia, ela é basicamente a magia de um deus, a única forma de se proteger dela é evitando os ataques e usando um amuleto de Kay, que torna os ataques mágicos mais fracos.'

	Elos se materializa entre os superiores";

	$textodois = str_split($texto);
	foreach ($textodois as $key => $value) {
		echo $value;
		ob_flush();
	    flush();
		usleep(70000);
	}
}




?>