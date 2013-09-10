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
header("Content-disposition: filename=report_Enseignements.csv"); 

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
	$sql = "SELECT * FROM enseigner";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	$datas=array();
	$year=date('Y');

		foreach ($data as $d)
			{ 
	 	$sql1 = 'SELECT (SELECT a.DATEDEB FROM anneeacademiques a WHERE a.ANNEEACADEMIQUE_ID = '.$d->ANNEEACADEMIQUE_ID.') AS libDEBANNEEACADEMIQUE FROM enseigner c';
	 	$stmt = $dbh->query($sql1);
		$stmt->execute();
		$result1=$stmt->fetch();
		
		$sql2 = 'SELECT (SELECT a.DATEFIN FROM anneeacademiques a WHERE a.ANNEEACADEMIQUE_ID = '.$d->ANNEEACADEMIQUE_ID.') AS libFINANNEEACADEMIQUE FROM enseigner c';
	 	$stmt = $dbh->query($sql2);
		$stmt->execute();
		$result2=$stmt->fetch();
		
		$sql3 = 'SELECT (SELECT b.NOM FROM classes b WHERE b.CLASSE_ID = '.$d->CLASSE_ID.') AS libCLASSE FROM enseigner c';
	 	$stmt = $dbh->query($sql3);
		$stmt->execute();
		$result3=$stmt->fetch();
		
		$sql4 = 'SELECT (SELECT g.NOM FROM cours g WHERE g.COURS_ID = '.$d->COURS_ID.') AS libCOURS FROM enseigner c';
	 	$stmt = $dbh->query($sql4);
		$stmt->execute();
		$result4=$stmt->fetch();
		
		$sql5 = 'SELECT (SELECT d.NOM FROM enseignants d WHERE d.ESEIGNANT_ID = '.$d->ESEIGNANT_ID.') AS libNOMENSEIGNANT FROM enseigner c';
	 	$stmt = $dbh->query($sql5);
		$stmt->execute();
		$result5=$stmt->fetch();
		
		$sql6 = 'SELECT (SELECT d.PRENOM FROM enseignants d WHERE d.ESEIGNANT_ID = '.$d->ESEIGNANT_ID.') AS libPRENOMENSEIGNANT FROM enseigner c';
	 	$stmt = $dbh->query($sql6);
		$stmt->execute();
		$result6=$stmt->fetch();
		
		$sql7 = 'SELECT (SELECT e.NOM FROM etablissements e WHERE e.ETABLISSEMENT_ID = '.$d->ETABLISSEMENT_ID.') AS libETABLISSEMENT FROM enseigner c';
	 	$stmt = $dbh->query($sql7);
		$stmt->execute();
		$result7=$stmt->fetch();
		
				$datas[] = array(
				'ID Enseignement' => $d->enseigner_id,
                'Debut annee academique'=> $result1->libDEBANNEEACADEMIQUE,
                'Fin annee academique'=> $result2->libFINANNEEACADEMIQUE,
				'Etablissement'=> $result7->libETABLISSEMENT,
				'Classe'=> $result3->libCLASSE,
				'Cours'=> $result4->libCOURS,
				'Nom Enseignant'=> $result5->libNOMENSEIGNANT,
				'Prenom Enseignant'=> $result6->libPRENOMENSEIGNANT,
				'Role'=> $d->ROLE,
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

