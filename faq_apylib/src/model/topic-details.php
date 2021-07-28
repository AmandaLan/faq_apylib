<?php 
    class TopicDetailsModel{
        public function __construct($db)
        {
            $this->db = $db;

            if(!empty($_GET['id'])) {
                $this->id = trim(strip_tags($_GET['id']));
            }
            if (!empty($_POST)) {
                $this->message = trim(strip_tags($_POST['tmessage']));
                $this->topic_id = trim(strip_tags($_POST['message_id']));
            }
            if (!empty($_DELETE)) {
                $this->message = trim(strip_tags($_DELETE['tcomment']));
                $this->topic_id = trim(strip_tags($_DELETE['message_id']));
            }
        }
    }
