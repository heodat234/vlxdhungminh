<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function addNew($input)
    {
    $check = static::where('facebook_id',$input['facebook_id'])->first();

    if(is_null($check)){
        return static::create($input);
    }

    return $check;
    
    }
    public static function User_All(){
            $user=DB::table('users')->select();
            return $user;
    }
    public static function Edit_User($id, $group){
            $user=DB::table('users')->where('id','=',$id)->update(['group'=>$group]);
            return $user;
    }
    public static function Insert_User($name,$email, $group){
            $id=DB::table('users')->insertGetId(['full_name'=>$name,'email'=>$email,'group'=>$group]);
            return $id;
    }
    public static function Delete_User($id){
        $user=DB::table('users')->where('id','=',$id)->delete();
        return $user;
    }
}