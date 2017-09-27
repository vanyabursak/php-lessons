<?php
// GET ALL DATA -> array ($publications)

require_once 'classes.php';

$publications =[];

$news1 = new NewsPublication;
$news2 = new NewsPublication;
$news3 = new NewsPublication;
$article1 = new ArticlePublication;
$article2 = new ArticlePublication;
$photo1 = new PhotoReportPublication;
$photo2 = new PhotoReportPublication;
$photo3 = new PhotoReportPublication;

$publications = [$news1, $news2, $article1, $photo1];
