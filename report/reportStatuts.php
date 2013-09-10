<?php
/* @var $this FormInscriptionController */
/* @var $dataProvider CActiveDataProvider */
/*
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: public");*/

/*header('Content-type: text/csv;');
header('Content-disposition: attachment; filename="Fiche d\'inscription.csv"'); */


/*header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Fiche d\'inscription.xlsx"');
header('Cache-Control: max-age=0');*/
/*header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=Fiche d\'inscription.xls"); */

//header("Content-type: application/vnd.ms-excel"); 

header('Content-Type: application/octet-stream; charset=iso-8859-1');
header("Content-disposition: filename=report_Statuts.csv"); 

?>
<?php // Définition des variables de connexion
	$user = 'root';
	$pass = '';
	$dsn = 'mysql:host=localhost;dbname=gestionscolaire2';
	// Connexion à la base de données
	try {
		$dbh = new PDO($dsn, $user, $pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	} catch (PDOException $e) {
		print "Erreur ! : " . $e->getMessage() . "<br/>";
		die();
	}
?>
<?php 
	$sql = "SELECT * FROM statuts";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	$datas=array();
	$year=date('Y');

		foreach ($data as $d)
			{ 
	 	$sql1 = 'SELECT (SELECT a.NOM FROM etablissements a WHERE a.etablissement_id = '.$d->etablissement_id.') AS LibelleETABLISSEMENT FROM statuts c';
	 	$stmt = $dbh->query($sql1);
		$stmt->execute();
		$result1=$stmt->fetch();
		
				$datas[] = array(
				'ID STATUT' => $d->STATUT_ID,
                'Etablissement'=> $result1->LibelleETABLISSEMENT,
				'Nom' => $d->NOM,
				'Description' => $d->DESCRIPTION,
				'Type'=> $d->TYPE,
			  );
			}
			$i=0;
			foreach($datas as $v){
				if($i == 0){
					echo '"'.implode('","',array_keys($v)).'"'."\n";
				}
				$i++;
				echo '"'.implode('","',$v).'"'."\n";
			}
			 
			if ($dbh) {
				$dbh = NULL ; // Fermeture de la connexion
			}
			?>	

