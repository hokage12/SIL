<?php

class Se5_ptpmjt extends Doctrine_Record {

    public function setTableDefinition() {
        $this->hasColumn("padi", "string", 32, array('default' => '0'));
        $this->hasColumn("jagung", "string", 32, array('default' => '0'));
        $this->hasColumn("kedelai", "string", 32, array('default' => '0'));
        $this->hasColumn("ubi_kayu", "string", 32, array('default' => '0'));
        $this->hasColumn("ubi_jalar", "string", 32, array('default' => '0'));
        $this->hasColumn("kacang_tanah", "string", 32, array('default' => '0'));
        $this->hasColumn("kota_id", "int", 10);
        $this->hasColumn("data_tahun", "int", 10);
	}

    public function setUp() {
        $this->setTableName("se5_ptpmjt");
		
        // $this->hasOne("User", array(
            // "local" => "user_id",
            // "foreign" => "id"
        // ));
    }
}

?>