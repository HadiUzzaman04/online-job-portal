@extends('admin.index')

@section('contents')


  <div class="page-content--bge5">
    <div class="container">
      <div class="login-wrap">
        <div class="login-content">
          <div class="login-form">
          <h2 class="text-center">Add Company</h2>
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>company_name</label>
                <input class="au-input au-input--full" type="company_name" name="company_name" placeholder="company_name">
              </div>
              <div class="form-group">
                <label>company_type</label>
                <input class="au-input au-input--full" type="company_type" name="company_type" placeholder="company_type">
              </div>
              <div class="form-group">
                <label>email</label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="email">
              </div>
              <div class="form-group">
                <label>password</label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="password">
              </div>
              <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>




@endsection