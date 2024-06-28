<?php

function nav_item(string $lien, string $titre, string $linkClasse = ''): string
{
    $classe = 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active'; // .= est comme +=
    }
    /*SYNTAX HEREDOC*/ return <<<HTML
        <li class="$classe">
            <a class="$linkClasse" href="$lien">$titre</a>
        </li>
HTML;
}

function nav_menu(string $linkClasse = ''): string
{
    return nav_item('/index.php', 'Home', $linkClasse) . nav_item('/contact.php', 'Contact', $linkClasse);
}

function creneaux_html(array $creneaux)
{
    $phrases = [];
    foreach($creneaux as $creneau) {
        $phrases = "de {$creneau[0]} a {$creneau[1]}";
    }
    return implode(' et ', $phrases);
}
