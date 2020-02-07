<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model{

	public function driver_info(){
		$query = $this->db->get('driver_info');
		return $query->result();
	}

	 function add_driver($driver_fname,$driver_mname,$driver_lname,$driver_address,$driver_licenseNo,$driver_username,$driver_password,$driver_bdate)
     {  
        $date = date('Y-m-d', strtotime($driver_bdate));

         $data = array(
        'driver_fname' => $driver_fname,
        'driver_mname' => $driver_mname,
        'driver_lname' => $driver_lname,
        'driver_address' => $driver_address,
        'driver_licenseNo' => $driver_licenseNo,
        'driver_username' => $driver_username,
        'driver_password' => $driver_password,
        'driver_bdate' => $driver_bdate,
        
                        );

        $this->db->insert('mytable', $data);
     }


}
 ?>