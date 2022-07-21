<?php

function connexionBDD()
{
	try
	{		
	$bdd = new PDO('mysql:host=localhost;port=3306;dbname=entreprise2;', 'root', '');
	}
	
	catch(Exception $e)
	{
		echo 'Erreur:'.$e->getMessage();
    }
	return $bdd;
}

function getAll(){

    $bdd = connexionBDD();
    $sql='SELECT * from employes';

    $reponse = $bdd->query($sql);

    $result= $reponse->fetchAll();
    
    return $result;
}

/* var_dump(getAll()); */

$nosEmployes = getAll();

foreach ($nosEmployes as $key => $value) {
    
    echo "je suis ".$value['nom']." ".$value['prenom']." je travaille dans le service ".$value["service"]." j'ai un saliare de ".$value['salaire']."<br>";

}

    

?>