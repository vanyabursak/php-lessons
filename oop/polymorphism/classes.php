<?php
class Publication {
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct()
    {

    }
}

class NewsPublication extends Publication {

    public function printItem() {
        echo "<br/> Это новость";
    }
}

class ArticlePublication extends Publication {

    public function printItem() {
        echo "<br/> Это статья";
    }
}

class PhotoReportPublication extends Publication {

    public function printItem() {
        echo "<br/> Это фотоотчет";
    }
}
