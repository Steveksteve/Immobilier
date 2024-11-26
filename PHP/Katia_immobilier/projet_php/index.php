<?php

include 'include/header.php';


function executeSqlFile($filename) {
    $queries = file_get_contents($filename);
    $queriesArray = explode(';', $queries);
    $results = [];

    foreach ($queriesArray as $query) {
        $query = trim($query);
        if (!empty($query)) {
            $results[] = $query;
        }
    }
    return $results;
}

$sqlFile = 'Sql/requete_immobilier.sql';


$queries = executeSqlFile($sqlFile);

echo "<table><tr><th>Requêtes SQL</th></tr>";
foreach ($queries as $query) {
    echo "<tr><td>" . htmlspecialchars($query) . "</td></tr>";
}
echo "</table>";

include 'include/footer.php';
?>
