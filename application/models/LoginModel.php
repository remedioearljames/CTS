
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

               //get the username & password from driver_info
    function driver_info($usr, $pwd)
     {
          $sql = "select * from driver_info where driver_username = '" . $usr . "' and driver_password = '" . $pwd . "'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }

     
}?>