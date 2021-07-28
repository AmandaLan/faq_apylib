<?php 
    class TopicsModel{
        public function __construct($db)
        {
            $this->db = $db;

            if(!empty($_GET['id'])) {
                $this->id = trim(strip_tags($_GET['id']));
            }
        }
    }
?>