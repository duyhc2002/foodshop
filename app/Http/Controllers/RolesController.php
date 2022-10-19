<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use Auth;
use Hash;
use Artisan;
class RolesController extends Controller
{
     public function __construct(){
       
       $this->middleware('permission:list user',['only'=> ['index']]);
    }
    
    public function logout(){
             Session::flush();
          return redirect()->to('admin');
    }
    
    public function AuthLogin(){
        
        if(Session::get('login_normal')){

            $admin_id = Session::get('admin_id');
        }else{
            $admin_id = Auth::id();
        }
            if($admin_id){
                return Redirect::to('xinchao');
            }else{
                return Redirect::to('admin')->send();
            } 
        
       
    }
    
    //dang ky tai khoan nhanvien(them nhan vien)
    public function post_user(Request $request){
       
        
        $data = $request->validate(
            [
                'name' => 'required|unique:users|max:255',
                'email' => 'required|unique:users|max:255',
                'password' => 'required',
              
            
               

               
            ],
            [
                'name.required' => 'Yêu cầu nhập tên admin',
                'name.unique' => 'Tên admin này đã có,vui lòng nhập tên khác',
                'email.required' => 'Yêu cầu nhập tên admin email',
                'email.unique' => 'Yêu cầu nhập email admin khác',
                'password.required' => 'Yêu cầu nhập mật khẩu admin',
               
              

            ]
        );
       
       
        $admin = new User();
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        
       
        $admin->password = Hash::make($data['password']);
        $admin->save();
        $admin->assignRole('publisher');
        return redirect('/users')->with('message','Đăng ký thành công');

    }

    public function add_user(){
        return view('admin.roles.add_user');
    }
    
    //tao/cap vai tro cho users
    public function create_role($admin_id){
    	$this->AuthLogin();
        Artisan::call('cache:clear');
    	$roles = Role::all();
    	
    	$user = User::find($admin_id);
    	$user_roles = $user->roles->first();
    	return view('admin.roles.create_role',compact('user','roles','user_roles'));
    }
    public function assign_role($admin_id,Request $request){
    	$this->AuthLogin();
    	$data = request()->all();
        Artisan::call('cache:clear');
    	$role = Role::find($data['role']);
    	
    	$user = User::find($admin_id);
    	$user->syncRoles($role);
    	return redirect()->to('users');
    }
    //  public function create_permission($admin_id){
    //  	$this->AuthLogin();
    //     Artisan::call('cache:clear');
    //     $permission = Permission::all();
    // 	$user = User::find($admin_id);
    // 	$name_roles = $user->roles->first()->name;
    // 	$pers_role = $user->getPermissionsViaRoles();
    // 	return view('admin.roles.create_permission',compact('user','name_roles','permission','pers_role'));
    // }
    
   

    public function delete_user($id){
        $user = User::find($id)->delete();
        
        return redirect()->back()->with('message','Delete user successfully');
    }

    public function edit_users($id){
      
        $user = User::find($id);
        
        $user_roles = $user->roles->first();
        $edit_users = DB::table('users')->where('id',$id)->get();

        return view('admin.roles.edit_users')->with('edit_users',$edit_users);

         
    }

    public function update_users(Request $request,$id){
         $data = $request->validate(
            [
                'name' => 'required|unique:users|max:255',
                'email' => 'required|unique:users|max:255',
              
               

               
            ],
            [
                'name.required' => 'Yêu cầu nhập tên admin',
                'name.unique' => 'Tên admin này đã có,vui lòng nhập tên khác',
                'email.required' => 'Yêu cầu nhập tên admin email',
                'email.unique' => 'Yêu cầu nhập email admin khác',
              
                

            ]
        );
       
        $user = User::find($id);
        
       
        $data['name'] = $request->name;
        $data['email'] = $request->email;
       
        DB::table('users')->where('id',$id)->update($data);
        Session::put('message','Update users successfully');
        return Redirect::to('users');
    }

  

    public function index(){
    	$this->AuthLogin();
        Artisan::call('cache:clear');
    	$admin = User::with('roles')->orderby('id','desc')->paginate(5);
    	// dd($user);
    	return view('admin.users.all_users',compact('admin'));
    }

    // public function assign_role($admin_id, Request $request){
    // 	$this->AuthLogin();
    // 	$data =  $request->all();
    // 	$admin = User::find($admin_id);
    // 	$admin->syncRoles($data['role']);
    // 	return redirect()->back()->with('message','Thêm vai trò user thành công');
    // }
}
