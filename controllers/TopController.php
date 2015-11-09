<?php
include_once ROOT.'/models/Top.php';
include_once ROOT.'/components/ViewItemById.php';

class TopController {
    public function actionIndex()
    {
        $topList = array();
        $topList = Top::getTopList();

        require_once(ROOT . '/views/top/index.php');


        return true;
    }
    public function actionView($id)
    {
        if($id) {
            #$topItem = Top::getTopItemById($id);
            $topItem = View::ViewItemById($id);

            require_once(ROOT . '/views/news/view.php');


        }

        return true;

    }

}