<?php

namespace Initial\S01E01;

class Initial
{
    function capitalLetter($arg)
    {
        echo strtoupper($arg);
    }
    
    function escapeHTML($arg){
        echo htmlspecialchars($arg, ENT_QUOTES, 'UTF-8');
    }

    function convert($tab){
        echo implode($tab);
    }

    function verifyEmail($arg)
    {
        echo "L'email est valide : ".filter_var($arg, FILTER_VALIDATE_EMAIL);
    }
}