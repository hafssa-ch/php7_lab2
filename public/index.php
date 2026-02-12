<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

spl_autoload_register(function (string $class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../src/';

    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    $relativeClass = substr($class, strlen($prefix));
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});




use App\Entity\Filiere;
use App\Entity\Etudiant;
use App\Repository\FakeEtudiantRepository;

$repo = new FakeEtudiantRepository();

$f1 = new Filiere(1, "INFO");

$e1 = new Etudiant(null, "Salma", "saalma@gmail.com", $f1);
$e2 = new Etudiant(null, "Ali", "Ali@gmail.com", $f1);

$repo->save($e1);
$repo->save($e2);

echo "Insertionn:" . "<br>";
foreach ($repo->findAll() as $e) {
    echo $e->getId() . " - " . $e->getNom() . "<br>";
}

$e1->setNom("Salma Benali");
$repo->save($e1);

echo "Modificationn:" . "<br>";
echo $repo->findById($e1->getId())->getNom() . "<br>";

$repo->delete($e2->getId());

echo "Suppressionn:" . "<br>";
foreach ($repo->findAll() as $e) {
    echo $e->getNom() . "<br>";
}



        ?>
        
        
    </body>
</html>
