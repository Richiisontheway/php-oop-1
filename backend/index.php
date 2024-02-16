<?php
    class Movie {
        public $name;
        public $genre;
        public $date_of_release;
        public $profit;
        
        function __construct($nome,$genere, $data_di_rilascio, $incassi)
        {
            $this->name = $nome;
            $this->genre = $genere;
            $this->date_of_release = $data_di_rilascio;
            $this->profit = $incassi;
        }
        public function get_info(){
            return  'Titolo'.$this->name.' '. 'Generi'.$this->genre.
            '<br>'
            . 'Data di uscita'. $this->date_of_release.' '. 'Profitto'. $this->profit;
        }
    }
    $movie1 = new Movie('Gran Turismo - la storia di un sogno impossibile','Sportivo/Avventura', '2023','$100 milioni');
    $movie2 = new Movie('Baywatch','Commedia/Azione', '2017','$ 177 milioni');
    //print_r($it);
    echo $movie1 ->get_info();
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $movie2 ->get_info();
