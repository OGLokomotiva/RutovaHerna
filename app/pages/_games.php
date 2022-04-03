<?php
 class Main {
        const BR = '<br />';
     
        public $price;
        public $name;
        public $photo;
        private $dir = 'app/games/';

        public function printGame() {
            echo "<div style='float: left; padding: 2em;'>";
            echo    "<img style='width: 10em; height: auto;' src='{$this->dir}{$this->photo}'>".self::BR;
            echo    "<font size='5px'>{$this->name}</font>".self::BR;
            echo    "<font size='4px'>{$this->price} Kč</font>";
            echo "</div>";
        }
    }

    class Game extends Main {}

    // obj
    $game = new Game;
    $game->name = '7 Days to Die';
    $game->price = 600;
    $game->photo = '7dtd.jpg';

    $game1 = new Game;
    $game1->name = 'Counter Strike: Global Offensive';
    $game1->price = 120;
    $game1->photo = 'csgo.jpg';

    $game2 = new Game;
    $game2->name = 'Days Gone';
    $game2->price = 1200;
    $game2->photo = 'daysgone.jpg';

    $game3 = new Game;
    $game3->name = 'Mad Max';
    $game3->price = 500;
    $game3->photo = 'madmax.jpg';

    $game4 = new Game;
    $game4->name = 'Metro Exodus';
    $game4->price = 300;
    $game4->photo = 'metroexodus.jpg';
        
    // print game - + printGames
    $game->printGame();
    $game1->printGame();
    $game2->printGame();
    $game3->printGame();
    $game4->printGame();
?>