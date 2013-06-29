<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class MY_Email extends CI_Email
{
	private $CI;
	public $support_email;
	public $contact_email;

	protected $email_config = array(
		'protocol'	=> 'smtp',
		'charset'	=> 'iso-8859-1',
		'wordwrap'	=> TRUE,
		'mailtype'	=> 'html',
		'smtp_host'	=> 'mail.cdnsol.com',
		'smtp_user'	=> 'admin@cdnsol.com',
		'smtp_pass'	=> 'oNqN=vG0gTWt',
	);

	public function __construct()
	{
		$this->CI = & get_instance();
		$this->apply_email_settings();
	}

	public function apply_email_settings()
	{
		$this->CI->load->model('email/email_settings_model', 'email_setting');
		$setting = $this->CI->email_setting->get();
		
		$this->email_config['protocol'] = $setting->protocol;
		$this->email_config['smtp_host'] = $setting->host;
		$this->email_config['smtp_user'] = $setting->username;
		$this->email_config['smtp_pass'] = $setting->password;
		$this->support_email = $setting->support_email;
		$this->contact_email = $setting->contact_email;
	}

	public function initialize()
	{
		parent::initialize($this->email_config);
		$this->from($this->support_email, 'GMA');
		$this->reply_to($this->support_email, 'GMA');
	}

}