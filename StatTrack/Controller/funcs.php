<?php

class funcs {
    
    function RndPlyr() //Randomly generates a number for random player on index page.
    {
        $rand = rand(1,245);
        return $rand;
    }
    
    function RndTeam() //Randomly generates a number for random team on index page.
    {
        $rand = rand(1,4);
        return $rand;
    }
    
}
