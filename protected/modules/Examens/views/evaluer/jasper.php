<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');

if(isset($_POST['Evaluer']))
{
    $model = new Evaluer();
    $model->attributes=$_POST['Evaluer'];
    $exam = Examens::model()->find('EXAMEN_ID=:examenID', array(':examenID'=>$model->getAttribute('EXAMEN_ID')));
    $classe = Classes::model()->find('CLASSE_ID=:classeID', array(':classeID'=>$model->getAttribute('CLASSE_ID')));
    $etablissement = Etablissements::model()->find('ETABLISSEMENT_ID=:etID', array(':etID'=>$model->getAttribute('ETABLISSEMENT_ID')));

       $xml =  simplexml_load_file(dirname(__FILE__).'/bulletin.jrxml');

       //echo 'Params : Nom exam = '.$exam->getAttribute('NOM').' EleveID = '.$model->getAttribute('NOM').' ExamID = '.$model->getAttribute('NOM');
        $PHPJasperXML = new PHPJasperXML();
        //$PHPJasperXML->debugsql=true;
        $PHPJasperXML->arrayParameter=array('nom_examen' =>$exam->getAttribute('NOM'),
            'id_eleve' =>$model->getAttribute('ELEVE_ID'),
            'id_exam' =>$model->getAttribute('EXAMEN_ID'),
            'nom_classe' =>$classe->getAttribute('NOM'),
            'nom_etablissement' =>'Etablissement NOUMSI');
        $PHPJasperXML->xml_dismantle($xml);

        $PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
        $PHPJasperXML->outpage("I");   //page output method I:standard output  D:Download file
}

        

?>
