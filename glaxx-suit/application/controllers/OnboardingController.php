<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OnboardingController extends CI_Controller
{

	/**
	 * APIs
	 */
	public function authenticate()
	{
		$portal['name'] = $this->input->post('portal_name');
		$this->session->set_userdata(['portal' => $portal['name']]);
		redirect("/" . $portal['name'] . "/getting-started/choose-a-solution");
	}

	public function solutionChoice()
	{
		$portal = $this->session->portal;
		// redirect("/" . $portal . '/getting-started/choose-a-solution');
		redirect("http://localhost:8000/glaxx-software-suit/glaxx-one/" . $portal . "/app/people/1231232132/dashboard");
	}

	/**
	 * Views
	 */
	public function sign_up()
	{
		$this->load->view('pages/onboarding/signup');
	}
	public function choose_solution($portal)
	{
		$data['portal']['name'] = $portal;
		$this->load->view('pages/onboarding/choose_solution', $data);
	}
}
