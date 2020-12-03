<?php 
/**
 * Otentikasi
 */
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_expo');
	}

	public function index()
	{
		//**
	    // Login with Google
	    //**
	    //include the google OAuth configuration
	    require("assets/google_api/vendor/autoload.php");
	    //Step 1: Enter you google account credentials
		$jwt = new \Firebase\JWT\JWT;
		$jwt::$leeway = 60; // adjust this value
		// we explicitly pass jwt object whose leeway is set to 60
		$g_client = new \Google_Client(['jwt' => $jwt]);
		$g_client->setClientId("91581392252-74f54bcmp6jfaj5vs5u3tt4knnuo0err.apps.googleusercontent.com");
			$g_client->setClientSecret("5HRKlfbfMmYVu1Fv3204jNyh");
			$g_client->setRedirectUri( base_url('auth') );
			$g_client->addScope("email");
			$g_client->addScope("profile");
	    //Step 2 : Create the url
	    $auth_url = $g_client->createAuthUrl();
	    $data['auth_url'] = $auth_url;
	    //Step 3 : Get the authorization  code
	    $code = isset($_GET['code']) ? $_GET['code'] : NULL;
	    //Step 4: Get access token
	    if (isset($code)) {
	      try {
	        $token = $g_client->fetchAccessTokenWithAuthCode($code);
	        $g_client->setAccessToken($token);
	      } catch (Exception $e) {
	        $e->getMessage();
	      }
	      try {
	        $pay_load = $g_client->verifyIdToken(); // ini kalo berhasil


	        $email = $pay_load['email'];
	        $username = $pay_load['name'];

	        // check apakah user dengan email ini ada?
	        if ( $this->Model_expo->check_if_account_exist( $email ) == false ) {
	        	$this->session->set_flashdata('first_login', $username);
	        	$this->Model_expo->daftarkan_user( $email );
	        }
	        $this->session->set_userdata('email', $email);
	        $this->session->set_userdata('username', $username);

	        redirect(base_url()); // redirect ke home page

	      } catch (Exception $e) {
	        $e->getMessage();
	        $this->Model_expo->set_alert('error', 'Silakan coba lagi. (' . $e->getMessage() . ')'); // <-- untuk testing
	        $this->Model_expo->refresh();
	      }
	    } else {
	      $pay_load = null;
	    }
	    //**
	    // /.Login with Google
	    //**
	    $this->load->view('layer2/login', $data);
  	}

  	public function logout()
  	{	
  	    $this->session->sess_destroy();
  	    redirect( base_url() . 'auth');
  	}
}