@extends ('admin_layout')
@section ('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Thêm người dùng </h2>
                    @error('msg')
	                <div class="text-danger" >{{ $message }}</div>
                    @enderror
                </header>
                <div class="panel-body">
                    <form role="form" action = "{{URL::to('/save-users')}}" method="post">
                        {{csrf_field()}}
                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">    
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" name ="users_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            @error('users_name')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" name ="users_gmail" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            @error('users_gmail')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu:</label>
                            <input type="password" name ="users_password" class="form-control" id="exampleInputEmail1"  placeholder="Nhập mật khẩu">
                            @error('users_password')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Xác nhận:</label>
                            <input type="password" name ="users_repassword" class="form-control" id="exampleInputEmail1" placeholder="Xác nhận mật khẩu">
                            @error('users_repassword')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhóm:</label>   
                            <select name ="users_group" class="form-control input-sm m-bot15">
                                <option>Editor</option>
                                <option>Admin</option>
                                <option>Reviewer</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>   
                            <select name ="users_desc" class="form-control input-sm m-bot15">
                                <option >Trạng thái??</option>
                                <option value="Đang hoạt động">Đang hoạt động</option>
                                <option value= "Tạm khóa">Tạm khóa</option>
                            </select>
                            <br>
                        </div>
                        <button type="reset"  class="btn btn-info">Hủy</button>
                        <button type="submit"  class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                </div>  
            </section>
    </div>
    <style>
        .panel{
            background-color: white !important
    
        }
    </style>
      <style>
        body {
            background: white
        }
    </style>
    @endsection