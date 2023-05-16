<?php 

class Info {
    public $director;
    public $cast;
    public $language;

    public function __construct(string $director, string $cast, string $language = 'english') {
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
    public $vote;
    
    public function __construct(string $title, string $overview, string $kind, Info $info, int $vote) {
        $this->title = $title;
        $this->overview = $overview;    
        $this->kind = $kind;
        $this->info = $info;
        $this->vote = $vote;
    }

    public function changeVote($newVote) {
        $this->vote = $newVote;
    }
}

$avatar = new Movie('Avatar', 'lorem' , 'fantasy', new Info('lorem', 'lorem', 'Italian'), 6);

$avatar->changeVote(10);

var_dump($avatar)
?>