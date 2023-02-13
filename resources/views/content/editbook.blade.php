@extends('layout/dashboard')

@section('content')
<div class="text-center">
<div class="col-lg-6 col-md-10 mx-auto" >
    <div class="card mt-4">
       <div class="card-header pb-0 p-3">
          <div class="row">
             <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Update Contact</h6>
             </div>
            
          </div>
       </div>
       <div class="card-body p-3">
        <form action="{{ route('update.contact') }}" method="post">
            @csrf
       
          <div class="row ">
            <div class="mb-3 input-group input-group-outline">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="name" value="{{ $data->name }}">
              </div>
              <div class="mb-3 input-group input-group-outline">
              
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="address" value="{{ $data->address }}">
              </div>
              <div class="mb-3 input-group input-group-outline">
             
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{ $data->email }}">
              </div>
              <div class="mb-3 input-group input-group-outline">
              
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="contact" value="{{ $data->contact }}">
              </div>
              
          </div>
          
            <button class="btn bg-gradient-dark mb-0" type="submit" ><i class="material-icons text-sm"></i>&nbsp;&nbsp;Update</button>
           
       </div>
    </form>
    </div>
 </div>
</div>
@endsection