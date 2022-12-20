<?php
$game_title = get_field('game_title');
//echo $game_title;
if($game_title == 'Tic-tac-tow') {
    get_template_part('template-parts/games/tictactoe');
}elseif($game_title == 'DuckHunt') {
    get_template_part('template-parts/games/duckhunt');
}
else{
    echo 'not the right game';
}