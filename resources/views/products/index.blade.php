@extends('products.layout')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col align-self-start">
            <a name="" id="" class="btn btn-primary" href="{{ route('products.create') }}">Create</a>
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($products as $item)
                <tr class="table-primary">
                    <td>{{$item->id}}</td>
                    <td><img src="/images/{{$item->image}}" width="300px"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->details}}</td>
                    <td>
                        <form action="{{route('products.destroy',$item->id)}}" method="post">
                            @csrf
                            @method( 'DELETE' )
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a class="btn btn-primary" href="{{route('products.edit', $item->id)}}">Edit</a>
                        <a class="btn btn-info" href="{{route('products.show', $item->id)}}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!!  $products->links()  !!}
</div>
@endsection
