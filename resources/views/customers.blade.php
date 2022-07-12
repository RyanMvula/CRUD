@extends("layouts.app")
@section("content")

<div class="card mt-4">
    <div class="card-body ">
        @if (Session::get("msg"))
        <div class="alert alert-success">
            <b>{{Session::get("msg")}}</b>
        </div>
        @endif
      <table class="table table-resposive table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Mobile number</th>
                <th>Created At</th>
                <th>Modified At</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $cus)  
            <tr>
                <td>{{$cus->id}}</td>
                <td>{{$cus->firstname}}</td>
                <td>{{$cus->lastname}}</td>
                <td>{{$cus->emailaddress}}</td>
                <th>{{$cus->mobilenumber}}</td>
                <td>{{$cus->created_at->diffforHumans()}}</td>
                <td>{{$cus->updated_at->diffforHumans()}}</td>
                <td><a href="/customer/{{$cus->id}}/edit" class="btn btn-primary">Edit</a> | <a href="/customer/{{$cus->id}}/Delete" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
</div>

@endsection