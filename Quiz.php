<?php
class Quiz {
    private $id;
    private $description;
    private  $auteur;
    private $nbr_question;

    function __construct($id,$description,$auteur,$nbr_question){
        $this->id=$id;
        $this->description=$description;
        $this->auteur=auteur;
        $this->nbr_question=$nbr_question;
}
function getId(){
    return $this->id;
}
function  quiz(){
    return Quizquiz_question::getQuizByquiz_question($this->id);

}
static class QuizDAO {
    function getByid($id) {
    return $Db::query("SELECT * FROM Quiz where id=:id", array('id'=>$id));

    }
}
static class Quizquiz_questionDAO{
function getQuizByquiz_question($id){
return $dB::query("Select * FROM Quiz_question where idquiz=:id",array('id'=>id));
}
}
}
?>