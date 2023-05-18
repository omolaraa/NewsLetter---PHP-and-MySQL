<?php

class SubscribersView extends Subscribers{
    public $NL_bannerImg;
    public $NL_introTitle;
    public $NL_introDescription;
    public $NL_endTitle;
    public $NL_endDescription;
    // public $NL_subject;
    
    public function showNLInfo($NL_subject){
       
        $this->getNewsLetterInfo($NL_subject);

    }

    public function showNLSubjects(){
        $this->listNL_subject();
    }

    // public function getNLSubject($NL_subject){
    //     $this->getNL_subject( $NL_subject );
    // }
}