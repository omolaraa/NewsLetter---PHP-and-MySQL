<?php

class SubscribersContr extends Subscribers{

    public function createSubscribers($subscribers_name, $subscribers_email){

    $this->setSubscribers($subscribers_name, $subscribers_email);
    }

    public function createNewsLetter($NL_bannerImg, $NL_introTitle, $NL_introDescription, $NL_endTitle, $NL_endDescription, $NL_subject){
       $this->setNewsLetterInfo( $NL_bannerImg, $NL_introTitle, $NL_introDescription, $NL_endTitle, $NL_endDescription, $NL_subject );
    }

}