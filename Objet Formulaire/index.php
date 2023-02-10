<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objet Form</title>
</head>
<body>
    
<?php


include_once 'Form.php';



$form = new Form("reponseForm.php", "post");
$form->setText("nom");
$form->setText("prenom");
$form->setSubmit("Envoyer");

echo $form->getForm();

var_dump($form);


?>


    
</form>
</body>
</html>