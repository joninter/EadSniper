<?php

class Alunos extends model{
    public function isLogged()
    {
        if(isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])){
            return true;
        }
        else{
            return false;
        }
    }
}