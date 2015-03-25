<?php
    
    require_once ($_SERVER['DOCUMENT_ROOT'].'/desktop.com/models/postModel.php');
    
    class postController extends postModel {
        
        public function getLast()
        {
            $res = $this->returnLast();
            return $res;
        }
		
    }

