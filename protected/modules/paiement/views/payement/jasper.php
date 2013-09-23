<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');

$chemin=dirname(__FILE__).'/../payement/pension.jrxml';
$xml =  simplexml_load_file($chemin);

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array('numero'=>$model->payement_id, 'typePaiement'=>$model->tYPEPAIEMENT->NOM,
        'nom'=>$model->eLEVE->NOM, 'prenom'=>$model->eLEVE->PRENOM,
        'classe'=>$model->cLASSE->NOM,'etablissement'=>$model->eTABLISSEMENT->NOM,
        'debut'=>(String)$model->aNNEEACADEMIQUE->DATEDEB,'fin'=>(String)$model->aNNEEACADEMIQUE->DATEFIN,
        'montant'=>$model->MONTANT);

$PHPJasperXML->xml_dismantle($xml);

//$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file

?>
