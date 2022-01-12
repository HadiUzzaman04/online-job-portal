@extends('admin.index')
@section('contents')

<div class="page-content--bge5">
  <div class="container">
    <div class="login-wrap">
      <div class="login-content">
        <div class="login-form">
          <h2 class="text-center">Add Job</h2>

          <form action="{{ route('admin.update.job',$jobs->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Job_Title</label>
              <input class="au-input au-input--full" type="text" name="job_title" value="{{ $jobs-> job_title}}" placeholder="Enter Job Title">
            </div>
            <br>
            <div class="form-group">
              <label>Vacancy</label>
              <input class="au-input au-input--full" type="text" name="vacancy" value="{{ $jobs-> vacancy}}" placeholder="Vacancy">
            </div>
            <br>
            <div class="form-group">
              <strong>Category</strong>
              <select name="category" id="">
                
                <option value="{{ $jobs->category }}">{{ $jobs->category }}</option>
                
              </select>

              <!-- <input class="au-input au-input--full" type="text" name="Category" placeholder="Category"> -->
            </div>
            <br>
            <div class="form-group">
              <label>Years Of Experience</label>
              <input class="au-input au-input--full" type="tejobsxt" name="years_of_experience" value="{{ $jobs-> years_of_experience}}" placeholder="Years Of Experience">
            </div>
            <br>
            <div class="form-group">
              <label>Type</label>
              <select name="type" id="">
                <option value="full-time" >Full Time</option>
                <option value="part-time">Part Time</option>
                <option value="internship">Internship</option>

              </select>
              <!-- <input class="au-input au-input--full" type="text" name="Type" placeholder="Type"> -->
            </div>
            <br>
            <div class="form-group">
              <label>Description</label>
              <textarea class="au-input au-input--full" type="text" name="description"  placeholder="Description">{{ $jobs-> description}}</textarea>
            </div>
            <br>
            <div class="form-group">
              <label>Deadline</label>
              <input class="au-input au-input--full" type="date" name="deadline" value="{{ $jobs-> deadline}}" placeholder="Deadline">
            </div>
            <br>
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



endsection