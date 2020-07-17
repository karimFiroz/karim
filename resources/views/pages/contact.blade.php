@extends('master')
@section('title','contact')
@section('content')

<div class="container">
<div class="col-md-12">
    <div class="row">




        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img  src="{{ asset('public/images/'.'firoz.jpg')  }}" alt="logo"height='225px'width='200px'>
                <div class="card-body">
                  <h5 class="card-title">Assistant Teacher</h5>
                  <p class="card-text">Firozshah City Corporation Girls' High School</p>
                </div>
                <div class="card-body">
                  Name: Md.Abdul Karim<br />
                  Father's Name:Md Abul Qasem<br />
                  Village: Rohanpur<br />
                  Thana: Gomastapur<br />
                  Dist: Chapai Nawabgong<br />
                  Phone: 01818-830761<br />

                </div>
                <div class="card-body">
                  <a href="https://karimfiroz.github.io/firoz/"target=" __blank" class="card-link">Web site</a>
                  <a href="http://firozlearninghome.blogspot.com/"target=" __blank" class="card-link">Blog site</a>
                </div>
              </div>
    </div>




    <div class="col-md-6">
        <h1>Contact Us</h1>
        <div class="row">

            <form>
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
    </div>








</div>




</div>
</div>
@endsection
