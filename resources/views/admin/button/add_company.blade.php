@extends('admin.index')

  @section('contents')


    <div class="myform">
      <div class="container">
        <div class="container-form">
          <div class="form-item log-in">
              <h1>Company ID</h1>
              <input name="company_id" placeholder="Company ID" type="text" />
              <h1>Company Name</h1>
              <input name="company_name" placeholder="Company Name" type="text" />
              <h1>Company Type</h1>
              <input name="company_type" placeholder="Company Type" type="text" />
              <h1>Email</h1>
              <input name="email" placeholder="Email" type="text" />
              <h1>Password</h1>
              <input name="password" placeholder="Password" type="text" />
              <button class="btn btn-primary">submit</button>
          </div>

        </div>
      </div>
    </div>


@endsection