<?php

class Subscribers extends Database{

    protected $NL_bannerImg;
    protected $NL_introTitle;
    protected $NL_introDescription;
    protected $NL_endTitle;
    protected $NL_endDescription;
    protected $NL_subject;

     protected function setSubscribers( $subscribers_name, $subscribers_email ){
        $query = "INSERT INTO subscribers (subscribers_name, subscribers_email) VALUES ( '$subscribers_name', '$subscribers_email')";
        $this->connect()->query($query);
       
    }

 

    protected function getNewsLetterInfo( $NL_subject ){
        $sql = "SELECT * FROM newsletter WHERE NL_subject = '$NL_subject' ";
        $result = $this->connect()->query($sql);
        $newsLetterInfo = $result->fetch_all(MYSQLI_ASSOC);
        
        foreach($newsLetterInfo as $information){
            $this->NL_bannerImg = $information["NL_bannerImg"];
            $this->NL_introTitle = $information[ "NL_introTitle" ];
            $this->NL_introDescription = $information['NL_introDescription'];
            $this->NL_endTitle = $information['NL_endTitle'];
            $this->NL_endDescription = $information['NL_endDescription'];
            // $this->NL_subject = $information['NL_subject'];
        }

        return $newsLetterInfo;

    }

    protected function setNewsLetterInfo($NL_bannerImg, $NL_introTitle, $NL_introDescription, $NL_endTitle, $NL_endDescription, $NL_subject){
        $query = "INSERT INTO newsletter (NL_bannerImg, NL_introTitle, NL_introDescription, NL_endTitle, NL_endDescription, NL_subject) VALUES ( '$NL_bannerImg', '$NL_introTitle', '$NL_introDescription', '$NL_endTitle', '$NL_endDescription', '$NL_subject ')";
        $this->connect()->query($query);
    }

    protected function listNL_subject(){
        $sql = "SELECT * FROM newsletter";
        $result = $this->connect()->query($sql);
        $newsLetterSubjects = $result->fetch_all(MYSQLI_ASSOC);

        foreach($newsLetterSubjects as $newsLetterSubject){
            $NL_subject = $newsLetterSubject["NL_subject"];
            echo "<option value='$NL_subject'>$NL_subject </option>";
        }
    }

    // protected function getNL_subject($NL_subject){
    //     $this-> NL_subject = $NL_subject;
    // }

}