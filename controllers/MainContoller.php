<?php
include "models/Comment.php";
// define(ROOT, $_SERVER[''])
class MainController
{
    private $db;

    public function actionIndex()
    {
        $model = new Comment();
        $comments = $model->getComments();
        include "view/main_page.php";
    }
    public function actionCreate()
    {
        $model = new Comment();
        $model->createComment($_POST);
        $comments = $model->getComments();
        include "view/cards.php";
    }
}
