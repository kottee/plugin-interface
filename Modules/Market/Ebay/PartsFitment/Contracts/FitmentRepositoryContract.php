<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\Fitment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the fitment repository.
 */
interface FitmentRepositoryContract 
{

	/**
	 * Returns a fitment by an ID.
	 */
	public function find(
		int $id, 
		array $with = []
	):Fitment;

	/**
	 * Creates a new fitment.
	 */
	public function create(
		array $data
	):Fitment;

	/**
	 * Updates an existing fitment.
	 */
	public function update(
		array $data, 
		int $id
	):Fitment;

	/**
	 * Deletes a fitment. Returns `true` if the deletion was successful, otherwise `false`.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Search fitments
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):array;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}