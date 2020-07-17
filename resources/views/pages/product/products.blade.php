@extends('master')
@section('title','products management')
@section('content')

<div align="center"><a class="btn btn-info" href="{{ route('create') }}" align="center">Create new Products</a></div>


<table border="0"class="table table-responsive table-hover">
    <tr>
        <th>Sl.</th>
        <th>CategoryId</th>

        <th>ProductId</th>

        <th>AdminId</th>

        <th>Title</th>

        <th>Slug</th>

        <th>Description</th>

        <th>Quantity</th>

        <th>Price</th>

        <th>Offer_price</th>

        <th>Status</th>
        <th>Action</th>
    </tr>

    @php $i=0; @endphp

    @foreach($products as $product)

    @php $i++; @endphp


    <tr>
        <td>{{ $i }}</td>
        <td>{{ $product->category_id }}</td>

        <td>{{ $product->product_id }}</td>

        <td>{{ $product->admin_id }}</td>

        <td>{{ $product->title }}</td>

        <td>{{ $product->slug }}</td>

        <td>{{ $product->description }}</td>

        <td>{{ $product->quantity }}</td>

        <td>{{ $product->price }}</td>

        <td>{{ $product->offer_price }}</td>

        <td>{{ $product->status }}</td>
        <td>
            <a class="btn btn-success btn-sm" href="{{route('edit', $product->id)}}">Edit</a><br />
            <form class="form-inline" action="{{route('delete',$product->id)}}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-danger btn-sm" value="Delete"/></form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
