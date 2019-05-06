@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <br>
   
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Action</th>
                <th scope="col">#</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Tel#</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Post Code</th>
                <th scope="col">Product Name</th>
                <th scope="col">Cost</th>
                <th scope="col">Currency</th>
                <th scope="col">Transaction Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $key=>$transaction)
            <tr>
                <th scope="row">
                    <a href="{{route('transactions.edit',$transaction->id)}}" class="btn btn-primary">Edit</a> 
                    <form method="post" action="{{route('transactions.destroy',$transaction->id)}}">
                    
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form> 
                </th>
                <th scope="row">{{$key+1}}</th>
                <td>{{$transaction->start_date}}</td>
                <td>{{$transaction->end_date}}</td>
                <td>{{$transaction->first_name}}</td>
                <td>{{$transaction->last_name}}</td>
                <td>{{$transaction->email}}</td>
                <td>{{$transaction->telnumber}}</td>
                <td>{{$transaction->address1}} {{$transaction->address2}}</td>
                <td>{{$transaction->city}}</td>
                <td>{{$transaction->country}}</td>
                <td>{{$transaction->postcode}}</td>
                <td>{{$transaction->product_name}}</td>
                <td>{{$transaction->cost}}</td>
                <td>{{$transaction->currency}}</td>
                <td>{{$transaction->transaction_date}}</td>
                
            </tr>  
            @endforeach
            
            
        </tbody>
    </table>

</div>
@endsection
