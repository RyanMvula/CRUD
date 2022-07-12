@extends('layouts.app')

@section('content')

<div class="card mt-4">
    <div class="card-body ">
        @if (Session::get("msg"))
            <div class="alert alert-success">
                <b>{{Session::get("msg")}}</b>
            </div>
        @endif
       
        @if (isset($customer))
        <form action="/customer/{{$customer[0]->id}}/edit" method="POST">
            @csrf
            <div class="row ">
                <div class="col-md-5">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{$customer[0]->firstname}}">
                </div>
                <div class="col-md-5">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{$customer[0]->lastname}}">
                </div>
         </div>   

         <div class="row ">
            <div class="col-md-5">
                <label for="emailaddress">Email Address</label>
                <input type="text" class="form-control" id="emailaddress" name="emailaddress" value="{{$customer[0]->emailaddress}}">
            </div>
            <div class="col-md-5">
                <label for="mobilenumber">Mobile Number</label>
                <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="{{$customer[0]->mobilenumber}}">
            </div>
     </div>   

     <div class="row ">
        <div class="col-md-5">
            <input type="submit" class="btn btn-long btn-warning mt-3" name="submit" value="Update">
        </div>   
    </div>  
        </form>
        @else

        <form action="/contactUs" method="POST">
            @csrf
            <div class="row ">
                <div class="col-md-5">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="col-md-5">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
         </div>   

         <div class="row ">
            <div class="col-md-5">
                <label for="emailaddress">Email Address</label>
                <input type="text" class="form-control" id="emailaddress" name="emailaddress">
            </div>
            <div class="col-md-5">
                <label for="mobilenumber">Mobile Number</label>
                <input type="text" class="form-control" id="mobilenumber" name="mobilenumber">
            </div>
     </div>   

     <div class="row ">
        <div class="col-md-5">
            <input type="submit" class="btn btn-long btn-primary mt-3" name="submit" value="Send">
        </div>   
    </div>  
        </form>



        @endif
    </div>
</div>

@endsection
 

   
