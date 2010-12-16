<?php

class Users extends AppModel{
    public function beforeSave($data) {
        $data["password"] = Security::hash($data["password"], "sha1", true);
	return $data;
     }
}

?>
