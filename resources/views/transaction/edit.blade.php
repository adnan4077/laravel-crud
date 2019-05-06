@extends('layouts.app')

@section('css')

    <style>
        .col-sm-4{
            float: left;
        }
        .col-sm-6{
            float: left;
        }
      
    </style>

@endsection

@section('content')
<div class="container-fluid">
    <br>
    <h2><center>Transaction Form</center></h2>
    <form method="POST" action="{{route('transactions.update',$transaction->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group col-sm-4">

            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{$transaction->start_date}}" >
            @if ($errors->has('start_date'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('start_date') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">

            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{$transaction->end_date}}" >
            @if ($errors->has('end_date'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('end_date') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">

            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$transaction->first_name}}" >
            @if ($errors->has('first_name'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('first_name') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">

            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$transaction->last_name}}" >
            @if ($errors->has('last_name'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('last_name') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$transaction->email}}" >
            @if ($errors->has('email'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('email') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">

            <label for="tel">Tell#</label>
            <input type="text" class="form-control" id="tel" name="telnumber" value="{{$transaction->telnumber}}">
            @if ($errors->has('telnumber'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('telnumber') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-6">

            <label for="address1">Address 1</label>
            <input type="text" class="form-control" id="address1"  name="address1" value="{{$transaction->address1}}">
            @if ($errors->has('address1'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('address1') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-6">

            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2"  name="address2" value="{{$transaction->address2}}" >
            @if ($errors->has('address2'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('address2') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="city">City</label>
            <input type="text" class="form-control" id="city"  name="city" value="{{$transaction->city}}" >
            @if ($errors->has('city'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('city') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="country">Country</label>
            <input type="text" class="form-control" id="country"  name="country" value="{{$transaction->country}}" >
            @if ($errors->has('country'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('country') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="code">Post Code</label>
            <input type="text" class="form-control" id="code"  name="postcode" value="{{$transaction->postcode}}" >
            @if ($errors->has('postcode'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('postcode') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$transaction->product_name}}">
            @if ($errors->has('product_name'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('product_name') }}
            </span>
            @endif
           
        </div>
        <div class="form-group col-sm-4">
            
            <label for="cost">Cost</label>
            <input type="text" class="form-control" id="cost" name="cost" value="{{$transaction->cost}}">
            @if ($errors->has('cost'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('cost') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="currency">Currency</label>
            <input type="text" class="form-control" id="currency" name="currency" value="{{$transaction->currency}}">
            @if ($errors->has('currency'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('currency') }}
            </span>
            @endif

        </div>
        <div class="form-group col-sm-4">

            <label for="transaction_date">Transaction Date</label>
            <input type="date" class="form-control" id="transaction_date" name="transaction_date" value="{{$transaction->transaction_date}}">
            @if ($errors->has('transaction_date'))
            <span class="help-block" style="color: red; font-size: 12px;">
                * {{ $errors->first('transaction_date') }}
            </span>
            @endif
        </div>
        <div class="form-group col-sm-4">
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@endsection
