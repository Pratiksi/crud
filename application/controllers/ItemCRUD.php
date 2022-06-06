<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemCRUD extends CI_Controller {
   public $itemCRUD;
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('ItemCRUDModel');
      $this->itemCRUD = new ItemCRUDModel;
	  $this->load->helper('form');
   }
   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->itemCRUD->get_itemCRUD();
       $this->load->view('theme/header');       
       $this->load->view('itemCRUD/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Register Using this method
 * @return Response
   */
  public function register()
  {
    
      $this->load->view('theme/header');       
      $this->load->view('itemCRUD/register');
      $this->load->view('theme/footer');

	}
    /**
    * Register Using this method
 * @return Response
   */
  public function registerstore()
  {
      //echo"Hellooo";
      $this->form_validation->set_rules('name', 'Name', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('contact', 'Contact', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      $this->form_validation->set_rules('confirm_password', 'Confirm Password]');
      
      if ($this->form_validation->run() == FALSE)
      {
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('itemCRUD/register'));
      }
      else
      {
          if($this->input->post('submit'))
		    {
		   $name=$this->input->post('name');
           //echo"$name";
           $this->itemCRUD->insert_register_user();
         redirect(base_url('itemCRUD/login'));
            }
   
      }
  }
  


  /**
  * Register Using this method
 * @return Response
   */
   public function Login()
   {
      // echo"Hello";
      $this->load->view('theme/header');
      $this->load->view('ItemCrud/login');
      $this->load->view('theme/footer');
   }

   public function loginstore()
   
   {
    if($this->input->post('login'))
    {
   $email=$this->input->post('email');
   $password=$this->input->post('password');
   //echo"$email";
  //echo"$password";
    $data =$this->itemCRUD->login_registered($email, $password);
    if($data){
        $this->session->set_userdata('register', $data);
        redirect('ItemCrud/dashboard');
    }
    else{
        redirect('ItemCrud/login');
        $this->session->set_flashdata('error','Invalid login. User not found');
    } 
   }
   }
    /**
     * DAshboard Here
     * @return respomse
     */
    public function dashboard()
    {
        $this->load->view('theme/header.php');
        $this->load->view('itemCRUD/dashboard');
        $this->load->view('theme/footer.php');
        echo"Hlloooooo";
        //die;
       
    }















  
   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('theme/header');
      $this->load->view('itemCRUD/create');
      $this->load->view('theme/footer');   
   }

   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/create'));
        }else{
           $this->itemCRUD->insert_item();
           redirect(base_url('itemCRUD'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->itemCRUD->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('itemCRUD/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('itemCRUD/edit/'.$id));
        }else{ 
          $this->itemCRUD->update_item($id);
          redirect(base_url('itemCRUD'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->itemCRUD->delete_item($id);
       redirect(base_url('itemCRUD'));
   }


    /**
    * Show Details this method.
    * @return Response
   */
  public function show($id)
  {
     $item = $this->itemCRUD->find_item($id);
     $this->load->view('theme/header');
     $this->load->view('itemCRUD/show',array('item'=>$item));
     $this->load->view('theme/footer');
  }

}