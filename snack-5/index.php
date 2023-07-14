<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze. -->

<?php
    class Indumento {
        public $materiale;

        function __construct(String $materiale) {
            $this->materiale = $materiale;
        }
    }

    class Scarpa extends Indumento {
        public $taglia;

        function __construct(String $materiale, Int $taglia) {
            parent::__construct($materiale);
            $this->taglia = $taglia;
        }
    }

    class Cappello extends Indumento {
        public $circonferenza;

        function __construct(String $materiale, Int $circonferenza) {
            parent::__construct($materiale);
            $this->circonferenza = $circonferenza;
        }
    }

    $indumento = new Indumento("Cotone");
    $scarpa = new Scarpa("Pelle", 43);
    $cappello = new Cappello("Tela", 58);
    var_dump($indumento, $scarpa, $cappello);
?>