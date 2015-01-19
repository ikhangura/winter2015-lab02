
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Contacts table.
 */
class Images extends MY_Model {

    // Constructor
    function __construct()
    {
	parent::__construct();
	
    }

}


        
       function all()
        {
            $this->db->order_by("id", "desc");
            $query = $this->db->get('my_model');
            return $query->result_array();
        }
      function newest()
        {
            $this->cidb->order_by("id", "desc");
            $query = $this->limit(3);
            return $query->result_array();
        }
    
        ?>
    

