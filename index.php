 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 

 </body>
 </html>
 <?php
// Contenu à écrire dans le fichier
$content = "Contenu du fichier PHP.";

// Chemin vers le fichier à créer
$filePath = "mysql_verif.txt";

// Écriture du contenu dans le fichier
file_put_contents($filePath, $content);

echo "Le fichier a été créé avec succès.";
?>
