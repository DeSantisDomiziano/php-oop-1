<?php 

class Info {
    public $director;
    public $cast;
    public $language;

    public function __construct(string $director, string $cast, string $language) {
        $this->director = $director;
        $this->cast = $cast;
        $this->language = $language;
    }
}

class Movie {
    public $title;
    public $overview;
    public $kind;
    public $info;
    
    public function __construct(string $title, string $overview, string $kind, Info $info) {
        $this->title = $title;
        $this->overview = $overview;    
        $this->kind = $kind;
        $this->info = $info;
    }
}

$avatar = new Movie('Avatar', 'lorem' , 'fantasi', new Info('lorem', 'lorem', 'lorem'));

var_dump($avatar)
?>