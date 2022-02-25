<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentsDetail extends Model
{
	protected $table = 'studentdetails';
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name','date_of_birth', 'class','parent_name','home_address'
	];
}