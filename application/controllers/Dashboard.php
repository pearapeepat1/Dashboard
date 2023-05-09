<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	private $another_css;
    private $another_js;
    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');

        $this->data["base_url"] = base_url();
  
        $result['base_url'] = base_url();
        $result['site_url'] = site_url();


        $this->data = $result;
        $this->header = $result;
        $this->slide_bar = $result;
        $this->footer = $result;


        $this->load->model('dashboard_model','dashboard');
    }

	protected function render_view($path)
    {
        $this->data['header'] = $this->parser->parse('pages/navbar', $this->header, TRUE);
        $this->data['slide_bar'] = $this->parser->parse('pages/slidebar', $this->slide_bar, TRUE);
        $this->data['footer'] = $this->parser->parse('pages/footer', $this->footer, TRUE);
        $this->data['page_content'] = $this->parser->parse($path, $this->data, TRUE);
        $this->data['another_css'] = $this->another_css;
        $this->data['another_js'] = $this->another_js;
        $this->parser->parse('pages/homepage', $this->data);
    }
	public function dashboard()
	{
        $this->another_js = "<script src='" . base_url() . "/assets/js/js/table.js'></script>";
        // $this->data['tblProjectList'] = $this->Show_model->ProjectList();
        //$this->ShowProjectList();
        
		$this->render_view('home');
	}
    public function callApi(){
        $url=$_GET["url"];
 
        $ch =curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if(empty($data)){
            echo "NO DATA";
        }
        echo $data;
    }


    public function manage()
	{
        //$this->another_js = "<script src='" . base_url() . "/assets/js/js/table.js'></script>";
        //$this->data['tblProjectList'] = $this->Show_model->ProjectList();
        //$this->ShowProjectList();
		$this->render_view('manage');
	}
    



    ##count project
    public function showProjectcount()
    {
        $result = $this->dashboard->get_Projectcount();
        echo json_encode($result);
    }

    ##count person
    public function showPersoncount()
    {
        $result = $this->dashboard->get_Personcount();
        echo json_encode($result);

    }

    ##count time hour
    public function showTimecount_hour()
    {
        $result = $this->dashboard->get_Timecount_hour();
        echo json_encode($result);

    }

    ##count time day
    public function showtimecount_day()
    {
        $result = $this->dashboard->get_Timecount_hour();
        echo json_encode($result);

    }


    ## query person
    public function show_Prosition()
    {
        $result = $this->dashboard->get_position();
        echo json_encode($result);
    }






    public function showProjectList()
    {
        $result = $this->dashboard->ProjectList();
        echo json_encode($result);
    }

    public function checkLoginDb()
	{
		$data = $this->input->get(NULL);
		$this->load->model('Login_model','Login');
		$result = $this->Login->checkLoginDb($data);
		echo json_encode($result);
	}




    public function index(){
        // $this->load
        $this->load->database();
        echo "erwerwerw";
    }

   


}