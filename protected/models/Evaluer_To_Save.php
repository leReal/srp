<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluer_To_Save
 * @property array $TO_SAVE2
 * @author gtalom
 */
class Evaluer_To_Save extends CFormModel
{
    public $TO_SAVE;
    public $TO_SAVE2;

    public function ajouterEvaluer($evaluer){
        $nb = count($this->TO_SAVE2);
        $this->TO_SAVE2[$nb] = $evaluer;
    }
}
?>
