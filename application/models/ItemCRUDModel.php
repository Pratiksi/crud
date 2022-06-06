<?php
class ItemCRUDModel extends CI_Model{
    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("items");
        return $query->result();
        $query1 = $this->db->get("register");
      return $query1->result();
    }
    public function insert_register_user()
    {   
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact'=> $this->input->post('contact'),
            'password' => $this->input->post('password'),
            'cpassword' => $this->input->post('cpassword')
        );
        return $this->db->insert('register', $data);
    }
    public function insert_item()
    {   
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('items', $data);
    }
    public function update_item($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('items',$data);
        }        
    }
    public function find_item($id)
    {
        return $this->db->get_where('items', array('id' => $id))->row();
    }
    public function find_user($email)
    {
       $aa= $this->db->get_where('register', array('$email'=> $email))->roww();
      // echo"$row";
        //die;
    }
    public function delete_item($id)
    {
        return $this->db->delete('items', array('id' => $id));
    }

    public function login_registered($email, $password){
        
        $query = $this->db->get_where('register', array('email'=>$email, 'password'=>$password));
        return $query->row_array();
       // Print_r($q);
        //die;
    }
    public function user_registered($data)
    {
        $query2 = $this->db->get_where('register', array('email'=>$data));
         $qq= $query2->row_array();
         Print_r($qq);
        die;
    }
    public function login_eregistered($email, $password){
        
        $query = $this->db->get_where('register', array('email'=>$email, 'password'=>$password));
        return $query->row_array();
       // Print_r($q);
        //die;
    }
    public function user_eregistered($data)
    {
        $query2 = $this->db->get_where('register', array('email'=>$data));
         $qq= $query2->row_array();
         Print_r($qq);
        die;
    }
}



?>