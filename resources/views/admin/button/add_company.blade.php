@extends('admin.index')

  @section('contents')


    <div class="myform">
      <div class="container">
        <div class="container-form">
          <div class="form-item">
          <form action="{{route('store')}}"method="post"enctype="multipart/form-data">
         @csrf
              <h1>company_id</h1>
              <input name="company_id" placeholder="company_id" type="text" />
              <h1>company_name</h1>
              <input name="company_name" placeholder="company_name" type="text" />
              <h1>company_type</h1>
              <input name="company_type" placeholder="company_type" type="text" />
              <h1>email</h1>
              <input name="email" placeholder="email" type="text" />
              <h1>password</h1>
              <input name="password" placeholder="password" type="text" />
              <button class="btn btn-primary">submit</button>
          </form>
          </div>

        </div>
      </div>
    </div>


@endsection