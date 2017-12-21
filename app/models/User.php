<?php
class User extends DB\SQL\Mapper {
	   private //tous tes champs ici;
         	//getter et setter ici
 	       //constructeur 
      public function __construct(DB\SQL $db) {
   	      parent::__construct($db,'users');
	    }

	    public function all() {
	        $this->load();
	        return $this->query;
	    }
	    public function add() {
	        $this->copyFrom('POST');
	        $this->save();
	    }

	    public function edit($id) {
	        $this->load(array('id=?',$id));
	        $this->copyFrom('POST');
	        $this->update();
	    }
 
	    public function delete($id) {
	        $this->load(array('id=?',$id));
	        $this->erase();
	    }

	    public function getById($id) {
	        $this->load(array('id=?',$id));
	        $this->copyTo('POST');
	    }

	}