@extends('products.layout')

@section('content')
<br>
<div class="row">
    <div class="col align-self-start">
        <a name="" id="" class="btn btn-primary" href="{{route('products.index')}}">All products</a>
    </div>
</div>
<br>



<div class="mb-3">
            <h3>Name : "{{$product->name}}"</h3>
        </div>

        <div class="mb-3">
        <p>"{{$product->details}}"</p> 
            </textarea>
        </div>

        <div class="mb-3">
        <td><img src="/images/{{$product->image}}" width="300px"></td>
        </div>


</div>

@endsection