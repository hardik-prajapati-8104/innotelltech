<?php

require_once __DIR__ . '/../config/seo.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');

if ($currentPage === 'index') {
    $currentPage = 'home';
}

$pageSeo = $seo[$currentPage] ?? [
    'title' => 'INNOTELL TECH | Technology & IT Solutions',
    'description' => 'INNOTELL TECH provides innovative, reliable, and scalable technology and IT solutions for modern businesses.'
];

$pageTitle = htmlspecialchars($pageSeo['title'], ENT_QUOTES, 'UTF-8');
$pageDescription = htmlspecialchars($pageSeo['description'], ENT_QUOTES, 'UTF-8');
?>

<title><?= $pageTitle ?></title>

<meta name="description" content="<?= $pageDescription ?>">