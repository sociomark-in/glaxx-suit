<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OnboardingController extends BaseController
{
	public $session = [];
	public function __construct()
	{
		$this->session = \Config\Services::session();
	}

    public function index()
    {
        //
    }

    public function sign_up()
    {
        return view('pages/onboarding/signup');
    }


    /**
	 * APIs
	 */
	public function authenticate()
	{
		$request = \Config\Services::request();
		$portal['name'] = $request->getPost('portal_name');
		$this->session->set(['portal' => $portal['name']]);
		// redirect(base_url());
		return redirect()->to("/portal/" . $portal['name'] . "/getting-started/choose-a-solution");
		// return redirect()->route("portal.choose");
	}

	public function solutionChoice($portal)
	{
		$portal = $this->session->get('portal');
		// redirect("/" . $portal . '/getting-started/choose-a-solution');
		return redirect()->to("http://localhost:8000/glaxx-software-suit/one-app/" . $portal . "/app/people/1231232132/dashboard");
	}
}
