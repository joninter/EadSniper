<?php
class homeController extends controller{

    public function index() {
        $dados = array(
            'quantidade'=>5,
            'nome'=> 'Jonatan',
            'idade'=>'27'
        );

        
        $this->loadTemplate('home',$dados);
    }
    
}