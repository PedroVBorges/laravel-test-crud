<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create a product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">

        <h2>Create a product</h2>
        <br/>

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        <br/>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br/>
        @endif

        <form method="post" action="{{action('ProductController@update', $id)}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Product name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price per item:</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Quantity in stock:</label>
                    <input type="number" class="form-control number" name="qty" value="{{ $product->qty }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
                <div class="form-group col-md-2">
                    <a href="{{action('ProductController@index')}}" class="btn">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
