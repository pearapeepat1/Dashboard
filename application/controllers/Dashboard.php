<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
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


        // $this->load->model('dashboard_model', 'dashboard');
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
    public function index()
    {
        $this->another_js = "<script src='" . base_url() . "/assets/js/js/table.js'></script>";
        $this->another_js .= "<script src='" . base_url() . "/assets/js/js/pieChart.js'></script>";
        // $this->another_js .= "<script src='" . base_url() . "/assets/js/js/getData.js'></script>";
        // $this->data['tblProjectList'] = $this->Show_model->ProjectList();
        //$this->ShowProjectList();

        $this->render_view('home');
    }
    public function dashboard()
    {
        $this->another_js = "<script src='" . base_url() . "/assets/js/js/table.js'></script>";
        $this->another_js .= "<script src='" . base_url() . "/assets/js/js/pieChart.js'></script>";
        // $this->another_js .= "<script src='" . base_url() . "/assets/js/js/getData.js'></script>";
        // $this->data['tblProjectList'] = $this->Show_model->ProjectList();
        //$this->ShowProjectList();

        $this->render_view('home');
    }
    public function manage()
    {
        $this->another_js = "<script src='" . base_url() . "/assets/js/js/manage.js'></script>"; 
        $this->another_js .= "<script src='" . base_url() . "/assets/js/js/Edits.js'></script>"; 
        $this->render_view('manage');
    }
 
    public function detail()
    {
        $this->render_view('detail');
    }


    public function callApi()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }

    public function callApiShowPersonEdit2()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }
    public function callApiStepEdit()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }
    public function callApiShowAdmin()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }
    public function callApiDel()
    {
        $result = $this->curPostRequest('Editproject/del_person', ['data' => serialize($_POST)]);
        print_r($result);

    }
    public function callApiCreateEmp()
    {
        $result = $this->curPostRequest('Manage/add_resources', ['data' => serialize($_POST)]);
        print_r($result);

    }
    public function callApiFillter()
    {
        $url = $_POST["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }
    public function callApiShowPersonEdit()
    {
        $url = $_POST["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $data = json_decode($output, true);
        // $data = $output;
        // print_r($output);
        if (empty($data)) {
            echo "NO DATA";
        }
        echo json_encode($data);
    }
    public function callApiDetail()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        echo  $output;
    }   
    // public function callApiInsert()
    // {
    //     $url=$_GET["url"];
    //     // $a = $this->callApiWithPost("http://172.21.64.115/APIDashboardProject/Dashboard/callApiTest", ["k" => "123"]);

    //     // echo $a;
    //     // exit;
    //     // $ch =curl_init($url."projectame=".$projectname."&assignee=".$assignee."&position=".str_replace(" ","_",$position));

    //     // $ch =curl_init($url);
    //     // $ch =curl_init("http://127.0.0.1/DashboardProject/Dashboard/callApiInsert?array");
    //     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     // $output = curl_exec($ch);
    //     // echo  $output;

    //     // if(empty($data)){
    //     //     echo "NO DATA";
    //     // }
    //     // echo json_encode($data);
    // }

    public function callApiInsert()
    {
        // $url = $_POST["url"];
        // // print_r($_POST);
        // // exit;
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $output = curl_exec($ch);
        // echo  $output;
        $result = $this->curPostRequest('Addproject/add_project', ['data' => serialize($_POST)]);
        // $arrayStep = array($result);

        // foreach ($result as $key => $value) {
        //     if (is_array($value)) {
        //         // สำหรับสมาชิกที่เป็นอาร์เรย์
        
        //         $tempArray = array(); // สร้างอาร์เรย์เปล่าเพื่อเก็บสมาชิกในรูปแบบ JSON
        
        //         foreach ($value as $item) {
        //             // ลูปเพื่อถอดออกและแปลงแต่ละสมาชิกในอาร์เรย์
        
        //             $tempObject = new stdClass(); // สร้างออบเจกต์ใหม่เพื่อเก็บสมาชิกในรูปแบบ JSON
        
        //             foreach ($item as $subKey => $subValue) {
        //                 // สร้างสมาชิกของออบเจกต์ในรูปแบบ JSON
        //                 $tempObject->$subKey = $subValue;
        //             }
        
        //             $tempArray[] = $tempObject; // เพิ่มออบเจกต์ในอาร์เรย์
        //         }
        
        //         $jsonArray[$key] = $tempArray; // เพิ่มอาร์เรย์ในอาร์เรย์ JSON
        //     } else {
        //         // สำหรับสมาชิกที่ไม่ใช่อาร์เรย์
        //         $jsonArray[$key] = $value;
        //     }
        // }
        // $json =  json_encode($jsonArray) ;
        print_r($result);
        // if(empty($data)){
        //     echo "NO DATA";
        // }
        // echo json_encode($data);
        //  foreach ($result as $value) {
        //     $data[] = $value;
        //    }
        // echo json_encode($data);
    }
    public function callApiInsertPersonAdd()
    {
        $result = $this->curPostRequest('Editproject/add_person', ['data' => serialize($_POST)]);
        print_r($result);
    }
    public function callApiEditPosition()
    {
        $result = $this->curPostRequest('Editproject/edit_position', ['data' => serialize($_POST)]);
        print_r($result);
    }
    public function callApiUpdateProject()
    {
        $result = $this->curPostRequest('Editproject/update_project', ['data' => serialize($_POST)]);
        print_r($result);
    }
    function curPostRequest($enpoint, $param_data, $is_array = true, $associative = false){
        /* Endpoint */
        $url = 'http://172.21.64.177/APIDashboardProject/' . $enpoint;
    
        /* eCurl */
        $curl = curl_init($url);
    
        /* Data */
        $data = (array) $param_data;
    
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    
        /* Set JSON data to POST */
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    
        /* Define content type */
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
        /* Return json */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        /* make request */
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'cURL error: ' . curl_error($curl);
            exit;
        }
    
        /* close curl */
        curl_close($curl);
    
        return $is_array ? json_decode($result, $associative) : $result;
    }
    public function callApiInsertStap()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        echo  $output;
        // if(empty($data)){
        //     echo "NO DATA";
        // }
        // echo json_encode($data);
    }
    public function callApiUpdateStatus()
    {
        $url = $_GET["url"];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        echo  $output;
        // if(empty($data)){
        //     echo "NO DATA";
        // }
        // echo json_encode($data);
    }
    function callApiWithPost($url, $data)
    {
        // Initialize curl
        $ch = curl_init($url);

        // Set the request method to POST
        curl_setopt($ch, CURLOPT_POST, 1);

        // Set the request data
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        // Set other options as needed, such as headers

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new Exception("API request failed: " . $error);
        }

        // Close curl
        curl_close($ch);

        // Return the API response
        return $response;
    }

    public function callApiAddTask()
    {
        $url = $_GET["url"];
        $selProject2 = $_GET["selProject2"];
        $addTask = $_GET["addTask"];
        $strDateAdd = $_GET["strDateAdd"];
        $dueDateAdd = $_GET["dueDateAdd"];
        $selPerson3 = $_GET["selPerson3"];
        $selPosition3 = $_GET["selPosition3"];
        $ch = curl_init($url . "selProject2=" . $selProject2 . "&addTask=" . $addTask . "&strDateAdd=" . $strDateAdd . "&dueDateAdd=" . $dueDateAdd . "&selPerson3=" . $selPerson3 . "&selPosition3=" . $selPosition3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        echo  $output;
        // if(empty($data)){
        //     echo "NO DATA";
        // }
        // echo json_encode($data);
    }
    public function callApiLogin()
    {
        $url = $_GET["url"];
        $username = $_GET["username"];
        $password = $_GET["password"];
        $ch = curl_init($url . "username=" . $username . "&password=" . $password);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        echo  $output;
        // if(empty($data)){
        //     echo "NO DATA";
        // }
        // echo json_encode($data);
    }
    // function send_api_request()
    // {
    //     // กำหนด URL ของ API
    //     $url = 'http://172.21.64.115/APIDashboardProject/';

    //     // กำหนดข้อมูลที่จะส่ง
    //     $data = array(
    //         'param1' => 'value1',
    //         'param2' => 'value2'
    //     );

    //     // ส่งคำขอ POST ผ่าน curl
    //     $response = curl_post($url, $data);

    //     // ตรวจสอบสถานะการตอบกลับ
    //     if ($response !== false) {
    //         // ดึงข้อมูลผลลัพธ์ในรูปแบบ JSON
    //         $result = json_decode($response, true);
    //         // ประมวลผลผลลัพธ์ต่อไป
    //         print_r($result);
    //     } else {
    //         echo 'เกิดข้อผิดพลาดในการส่งคำขอ API';
    //     }
    // }
 

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
        $result = $this->dashboard->get_Timecount_day();
        echo json_encode($result);
    }

    ## query person
    public function show_Person()
    {
        $result = $this->dashboard->get_Person();
        echo json_encode($result);
    }

    ## query position
    public function show_Prosition()
    {
        $result = $this->dashboard->get_Position();
        echo json_encode($result);
    }

    ## query status project
    public function show_Projectsta()
    {
        $result = $this->dashboard->get_Projectsta();
        echo json_encode($result);
    }





    // public function showProjectList()
    // {
    //     $result = $this->dashboard->ProjectList();
    //     echo json_encode($result);
    // }

    public function checkLoginDb()
    {
        $this->another_js .= "<script src='" . base_url() . "/assets/js/js/getData.js'></script>";
        $data = $this->input->get(NULL);
        $this->load->model('Login_model', 'Login');
        $result = $this->Login->checkLoginDb($data);
        echo json_encode($result);
    }
}
