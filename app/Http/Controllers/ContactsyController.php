<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Repositories\ContactsRepository;
use App\Http\Controllers\Controller;


class ContactsyController extends Controller {

	private $contact;
	protected $redirectTo = '/home';


	public function __construct(ContactsRepository $contact) 
	{
		$this->contact = $contact;
	}

	public function getAllContacts()
	{
		$contacts = $this->contact->getAll();
		return $this->sendResponse($contacts, 'success', $headers = []);
	}	


	public function create(Request $request)
	{

		$contacts = $this->contact->create($request->all());
		return $this->sendResponse($contacts, 'success', $headers = []);
	}	

	public function update(Request $request, $id)
	{

		$contacts = $this->contact->update($id, $request->all());
		return $this->sendResponse($contacts, 'success', $headers = []);
	}

	public function delete($id)
	{
		$contacts = $this->contact->delete($id);
		return $this->sendResponse($contacts, 'success', $headers = []);
	}

	/**
	Lets put it here since we only have one model.
	*/
	private function sendResponse($result, $message, $headers = [])
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message
        ];

        return response()->json($response, 200, $headers);
    }

}