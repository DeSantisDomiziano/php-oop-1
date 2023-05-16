<?php 

class Movie {
    public $title;
    public $overview;
    public $kind;

    public function __construct(string $title, string $overview, string $kind) {
        $this->title = $title;
        $this->overview = $overview;    
        $this->kind = $kind;
    }
}

$avatar = new Movie('Avatar', 'lorem' , 'fantasi');

var_dump($avatar)
?>