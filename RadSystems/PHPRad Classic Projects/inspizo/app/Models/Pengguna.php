<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class Pengguna extends Authenticatable 
{
	use Notifiable;
	use HasRoles;
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'pengguna';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_pengguna';
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ['username','password','email','tanggal','photo'];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return accountedit page fields of the model.
     * 
     * @return array
     */
	public static function accounteditFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"photo" 
		];
	}
	

	/**
     * return accountview page fields of the model.
     * 
     * @return array
     */
	public static function accountviewFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return exportAccountview page fields of the model.
     * 
     * @return array
     */
	public static function exportAccountviewFields(){
		return [ 
			"id_pengguna",
			"username",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_pengguna",
			"username",
			"password",
			"email",
			"tanggal",
			"photo" 
		];
	}
	

	/**
     * Get current user name
     * @return string
     */
	public function UserName(){
		return $this->username;
	}
	

	/**
     * Get current user id
     * @return string
     */
	public function UserId(){
		return $this->id_pengguna;
	}
	public function UserEmail(){
		return $this->tanggal;
	}
	public function UserRole(){
		return $this->user_role;
	}
	

	/**
     * Send Password reset link to user email 
	 * @param string $token
     * @return string
     */
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new \App\Notifications\ResetPassword($token));
	}
	public function canView($path)
	{
		$arrPaths = explode("/", strtolower($path));
		$page = $arrPaths[0] ?? "home";
		$action = $arrPaths[1] ?? "list";
		if($action == "index"){
			$action = "list";
		}
		return $this->can("$page/$action");
	}
}
