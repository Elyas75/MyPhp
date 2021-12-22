<?php
if (!function_exists('nav_item')){

    function nav_item (string $lien, string $titre): string 
    {
    $classe = 'nav_item';
    if ($_SERVER['SCRIPT_NAME'] === $lien){
        $classe .= 'active';
    }

    return <<<HTML
    <li class="classe">
        <a class="nav-link" aria-current="page" href="$lien">$titre</a>
    </li>
HTML;
    }
}
?>

<?= nav_item('/index.php', 'Accueil'); ?>
<?= nav_item('/contact.php', 'contact'); ?>