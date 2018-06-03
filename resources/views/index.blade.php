<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Coalitiontechnologies laravel test</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h2>Coalitiontechnologies laravel test</h2>
        <br>

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Value</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->getAttributeValue('id') }}</td>
                    <td>{{ $product->getAttributeValue('name') }}</td>
                    <td>{{ $product->getAttributeValue('price') }}</td>
                    <td>{{ $product->getAttributeValue('qty') }}</td>
                    <td>{{ $product->getAttributeValue('total_price') }}</td>
                    <td>
                        <a href="{{action('ProductController@edit', $product['id'])}}" class="btn">Edit</a>
                    </td>
                    <td>
                        <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="delete">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="3">{{ $products->sum('total_price') }}</td>
                </tr>
            </tfoot>
        </table>
        <div class="row">
            <div class="col-md-2">
                <a href="{{action('ProductController@create')}}" class="">Create a new product</a>
            </div>
        </div>
    </div>
</body>
</html>
