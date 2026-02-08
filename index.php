<?php

require_once('class.php');

class Post{

    private $title;
    private $category;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag)
    {
        $this->title = $titolo;
        $this->category = $categoria;
        $this->tag = $tag;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTag(){
        return $this->tag;
    }
}

$post = new Post("Titolo", new News(), "Tag 1");
$post1 = new Post("Titolo 2", new Sport(), "Tag 2");

echo $post->getCategory();
echo $post1->getTitle();