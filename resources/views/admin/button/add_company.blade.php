@extends('admin.index')

@section('contents')


<div class="myform">
<div class="container">
    <div class="container-forms">
      <div class="container-info">
        <div class="info-item">
          <div class="tablef">
            <div class="tablef-cell">
              
              <button class="info-btn">
                Log in
              </button>
            </div>
          </div>
        </div>
        <div class="info-item">
          <div class="tablef">
            <div class="tablef-cell">
              <p>
                Don't have an account?
              </p>
              <button class="info-btn">
                Sign up
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-form">
        <div class="form-item log-in">
          <div class="tablef">
            <div class="tablef-cell">
              <input name="Username" placeholder="Username" type="text" />

              <button class="btn">
                Log in
              </button>
            </div>
          </div>
        </div>
        <div class="form-item sign-up">
          <div class="tablef">
            <div class="tablef-cell">

              <button class="btn">
                Sign up
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection