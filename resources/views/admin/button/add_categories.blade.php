@extends('admin.index')
@section('contents')


<div class="page-content--bge5">
    <div class="container">
      <div class="login-wrap">
        <div class="login-content">
          <div class="login-form">
            <form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data">
              @csrf
              
              <div class="form-group">
                <label>category_name</label>
                <input class="au-input au-input--full" type="text" name="category_name" placeholder="category_name">
              </div>
              <div class="form-group">
                <label>category_type</label>
                <input class="au-input au-input--full" type="text" name="category_type" placeholder="category_type">
              </div>
              <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>




@endsection