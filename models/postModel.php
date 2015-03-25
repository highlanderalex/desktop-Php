<?php

	require_once ($_SERVER['DOCUMENT_ROOT'].'/desktop.com/config/db.php');
    
    class postModel extends db {
        
        public function returnLast()
        {
			//$num = 1;
            $sql = 'SELECT * FROM p_post ORDER by date DESC LIMIT 10';
            $res = $this->sql($sql);
            return $res;
        }
    }