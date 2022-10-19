@extends('layouts.app')

@section('content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê customer
    </div>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
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
                     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
             
            </th>
          
            <th>Tên user</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Address</th>
            
            
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($register as $key => $reg)
          
              @csrf
              <tr>
               
                <td>{{$key}}</td>
                <td>{{ $reg->username }}</td>
                <td>
                  {{ $reg->email }} 
                  
                </td>
                 <td>
                  {{ $reg->password_not }} 
                  
                </td>
                <td>
                  {{ $reg->phone }} 
                  
                </td>
                <td>
                  {{ $reg->address }} 
                  
                </td>
               

                <td><a href="{{('delete-customer'.$reg->id)}}" onclick="return confirm('Are u sure?')" class="btn btn-danger">Delete</a></td>
               
               
              
             

              </tr>
        
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
           
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection