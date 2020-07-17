
@extends('master')
@section('title','create')
@section('content')
<h1 align="center">Create New Product</h1>
<div class="container">

    <form class="form-horizontal" action="{{ route('store') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleCategoryId">CategoryId</label>
          <input type="text" class="form-control" name="category_id" id="category_id">
        </div>

        <div class="form-group">
            <label for="exampleProductId">ProductId</label>
            <input type="text" class="form-control" name="product_id" id="product_id">
          </div>

          <div class="form-group">
            <label for="exampleAdminId">AdminId</label>
            <input type="text" class="form-control" name="admin_id" id="admin_id">
          </div>

          <div class="form-group">
            <label for="exampleTitle">Title</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>

          <div class="form-group">
            <label for="exampleSlug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
          </div>

          <div class="form-group">
            <label for="exampleDescription">Description</label>
            <input type="text" class="form-control" name="description" id="description">
          </div>

          <div class="form-group">
            <label for="exampleQuantity">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="quantity">
          </div>

           <div class="form-group">
          <label for="examplePrice">Price</label>
          <input type="text" class="form-control" name="price" id="price">
        </div>

        <div class="form-group">
            <label for="exampleOfferPrice">OfferPrice</label>
            <input type="text" class="form-control" name="offer_price" id="offer_price">
          </div>

          <div class="form-group">
            <label for="exampleStatus">Status</label>
            <input type="text" class="form-control" name="status" id="status">
          </div>

        <button type="submit" class="btn btn-primary">Register Product</button>
      </form>
</div>


@endsection
