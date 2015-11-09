<?php


class Top
{



    public static function getTopList()
    {

        $db = Db::getConnection();

        $topList = array();

        $result = $db->query('SELECT id, title, date, short_content, author_name '
            . 'FROM posts '
            . 'ORDER BY title DESC '
            . 'LIMIT 3');


        $i = 0;

        while($row = $result->fetch()) {
            $topList[$i]['id'] = $row['id'];
            $topList[$i]['title'] = $row['title'];
            $topList[$i]['data'] = $row['date'];
            $topList[$i]['short_content'] = $row['short_content'];
            $topList[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $topList;




    }



}