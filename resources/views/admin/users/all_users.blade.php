@extends('layouts.app')

@section('content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê users
    </div>
    <div class="row w3-res-tb">
     {{--  <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div> --}}
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
             
            </th>
          
            <th>Tên user</th>
            <th>Email</th>
           
            <th>Publisher</th>
            <th>Admin</th>
            
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($admin as $key => $user)
            <form action="{{url('/assign-roles')}}" method="POST">
              @csrf
              <tr>
               
                <td>{{$key}}</td>
                <td>{{ $user->name }}</td>
                <td>
                  {{ $user->email }} 
                  <input type="hidden" name="admin_email" value="{{ $user->email }}">
                  <input type="hidden" name="admin_id" value="{{ $user->id }}">
                </td>
               

                <td><input type="checkbox" name="nhanvien_role" {{$user->hasRole('publisher') ? 'checked' : ''}}></td>
                <td><input type="checkbox" name="admin_role"  {{$user->hasRole('admin') ? 'checked' : ''}}></td>
               
              
              <td>
                  
                    
                 <p><a href="{{url('/create-role/'.$user->id)}}" class="btn btn-primary">Phân quyền</a></p>
                 <a href="{{URL::to('/edit-users/'.$user->id)}}" class="active styling-edit btn btn-warning" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>Edit</a>

             	 <a onclick="return confirm('Bạn có chắc là muốn xóa này ko?')" href="{{URL::to('/delete-user/'.$user->id)}}" class="active styling-edit btn btn-danger" ui-toggle-class="">Delete
                <i class="fa fa-times text-danger text"></i>
                
              </td> 

              </tr>
            </form>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"><i>hiển thị tất các users</i></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {!!$admin->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection