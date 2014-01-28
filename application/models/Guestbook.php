<?php

class Application_Model_Guestbook {

    public function getItemBook() {
        $statDBraw = Zend_Db_Table::getDefaultAdapter()->fetchAll("SELECT * FROM guestbook ORDER BY created DESC");
        $statDB = array();

        foreach ($statDBraw as $row) {
            $event = array(
                'name' => $row['name'],
                'comment' => $row['komment'],
                'created' => $row['created']
            );
            array_push($statDB, $event);
        }
        return $statDB;
    }

    public function addComment($name, $komment, $created) {
        $table = new Application_Model_Guestbookmapper();

        $data = array(
            'name' => $name,
            'komment' => $komment,
            'created' => $created
        );

        $table->insert($data);
    }

}

?>