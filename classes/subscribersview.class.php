<?php

class SubscribersView extends Subscribers{
    public $NL_bannerImg;
    public $NL_introTitle;
    public $NL_introDescription;
    public $NL_endTitle;
    public $NL_endDescription;
    public $NL_subject;
    
    public function showNLInfo($NL_subject){
       
        $this->getNewsLetterInfo($NL_subject);

    }

    public function showNLSubjects(){
        $this->listNL_subject(); 
    }

    public function showAllNewsLetters(){
        $newsLetterInfo = $this->getAllNewsLetters();

        foreach($newsLetterInfo as $information){
            $this->NL_bannerImg = $information["NL_bannerImg"];
            $this->NL_introTitle = $information[ "NL_introTitle" ];
            $this->NL_subject = $information['NL_subject'];

            echo "<tr>";
      echo "<td> $this->NL_introTitle </td>";
      echo "<td> $this->NL_subject </td>";
      echo "<td> <img class='img-responsive' width='60' 9height='50' src='../images/$this->NL_bannerImg' alt='image'> </td>";
      echo "<td> <a href = '../components/editNL_content.comp.php'> Edit </a> </td>";
      echo "<td> <a href = ''> Delete </a> </td>";
      echo "</tr>";
        }
    }
}