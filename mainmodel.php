<?php
class mainmodel extends CI_model
{
	

public function rgstr($reg,$log)
	{

		$this->db->insert("login",$log);
		$loginid=$this->db->insert_id();
		$reg['loginid']=$loginid;
		$this->db->insert("register",$reg);
	}
public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}

	
	public function selepass($email,$pass)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function getuser($id)
 	{
 		$this->db->select('*');
 		$this->db->from("login");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 	}
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function regis($reg)
	{

		$this->db->insert("flightdetails",$reg);
		
	}

		public function flightview()
	{
		$this->db->select('*');
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
	public function deletedate($d)
		{
		$this->db->where('dep_date<',$d);
		$this->db->delete("flightdetails");
		}


		public function viewflight($dep,$dest,$depdate)
		{
		$this->db->select('*');
		$this->db->where("departure",$dep);
		$this->db->where("destination",$dest);
		$this->db->where("dep_date",$depdate);
		$qry=$this->db->get("flightdetails");
		return $qry;
		}

		public function air($reg)
			{

				$this->db->insert("airport",$reg);
				
			}
	public function aview()
	{
		$this->db->select('*');
		$qry=$this->db->get("airport");
		return $qry;
	}


	public function viewprofile($id)
	{
		$this->db->select('*');
		$qry=$this->db->join('login','register.loginid=login.id','inner');
		$qry=$this->db->where("register.loginid",$id);
		$qry=$this->db->get("register");
		return $qry;

	}
	public function update($reg,$b,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$id);
		$this->db->join('login','login.id=register.loginid','inner');
		$qry=$this->db->update("register",$reg);
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login",$b);
		return $qry;
	}
	public function singleselect()
		{
		$qry=$this->db->get("register");
		return $qry;
		}
public function singledata($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("register");
		return $qry;
	}

		public function view($id)
		{
		$this->db->select('*');
		$qry=$this->db->get("flightdetails");
		return $qry;
		}

		public function singleselectf()
		{
		$qry=$this->db->get("flightdetails");
		return $qry;
		}
public function singledataf($id)
	{
		$this->db->select('*');
		$this->db->where("flid ",$id);
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
public function updatedetails($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("flid ",$id);
$qry=$this->db->update("flightdetails",$a);
return $qry;
}
	public function viewa($id)
		{
		$this->db->select('*');
		$qry=$this->db->get("airport");
		return $qry;
		}
		public function singleselecta()
		{
		$qry=$this->db->get("airport");
		return $qry;
		}
public function singledataa($id)
	{
		$this->db->select('*');
		$this->db->where("airportid ",$id);
		$qry=$this->db->get("airport");
		return $qry;
	}
public function updatea($reg,$id)
{
$this->db->select('*');
$qry=$this->db->where("airportid",$id);
$qry=$this->db->update("airport",$reg);
return $qry;
}
public function fdelete($id)
		{
		$this->db->where("flid",$id);
		$this->db->delete("flightdetails");
		
		}
	
	public function adelete($id)
		{
		$this->db->where("airportid",$id);
		$this->db->delete("airport");
		
		}
	}

?>



