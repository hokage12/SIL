<?php

class Sd23_srb extends Doctrine_Record {

    public function setTableDefinition() {
        $this->hasColumn("jan", "string", 32, array('default' => '0'));
        $this->hasColumn("feb", "string", 32, array('default' => '0'));
        $this->hasColumn("mar", "string", 32, array('default' => '0'));
        $this->hasColumn("apr", "string", 32, array('default' => '0'));
        $this->hasColumn("mei", "string", 32, array('default' => '0'));
        $this->hasColumn("jun", "string", 32, array('default' => '0'));
        $this->hasColumn("jul", "string", 32, array('default' => '0'));
        $this->hasColumn("agu", "string", 32, array('default' => '0'));
        $this->hasColumn("sep", "string", 32, array('default' => '0'));
        $this->hasColumn("okt", "string", 32, array('default' => '0'));
        $this->hasColumn("nov", "string", 32, array('default' => '0'));
        $this->hasColumn("des", "string", 32, array('default' => '0'));
        $this->hasColumn("kota_id", "int", 10);
        $this->hasColumn("data_tahun", "int", 10);
	}

    public function setUp() {
        $this->setTableName("sd23_srb");
		
        // $this->hasOne("User", array(
            // "local" => "user_id",
            // "foreign" => "id"
        // ));
    }
}

?>