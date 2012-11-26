<?php

class Sp15__iplb3 extends Doctrine_Record {

    public function setTableDefinition() {
        $this->hasColumn("nama", "string", 32, array('default' => '0'));
        $this->hasColumn("jenis_kegiatan", "string", 32, array('default' => '0'));
        $this->hasColumn("jenis_limbah", "string", 32, array('default' => '0'));
        $this->hasColumn("volume", "string", 32, array('default' => '0'));
               $this->hasColumn("kota_id", "int", 10);
        $this->hasColumn("data_tahun", "int", 10);
            
	}

    public function setUp() {
        $this->setTableName("sp15__iplb3");
		
        // $this->hasOne("User", array(
            // "local" => "user_id",
            // "foreign" => "id"
        // ));
    }
}

?>