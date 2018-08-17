<?php

namespace App\Repositories;
use App\Models\Contact;

class ContactsRepository implements ContactsRepositoryInterface
{

	/**
	* @var $model
	*/
	private $model;	

	/**
	 * EloquentTask constructor.
	 *
	 * @param App\Contacts $model
	 */
	public function __construct(Contact $model)
	{
		$this->model = $model;
	}


		/**
	 * Get all tasks.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	public function getById($id) {
		return $this->model->find($id);
	}

	public function create(array $attributes) {
		return $this->model->create($attributes);
	}

	public function update($id, array $attributes) {
		return $this->model->find($id)->update($attributes);
	}

	public function delete($id) {
		return $this->model->find($id)->delete();
	}

}