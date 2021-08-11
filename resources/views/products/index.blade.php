<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table,th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
        }

        table {
            /* width: 100%; */
            background-color: #f1f1c1;
        }

        img {
            width:35px;
            height:35px; 
        }
    </style>
</head>
<body>
    <h1>List Products</h1>  

    <a href="/products/create">Create</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image Url</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $products as $product )                
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{$product->image_url}}"></td>
                    <td><a href="/products/{{$product->id}}/edit">Edit</a></td>
                    <td>
                        <form action="/products/{{$product->id}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Delete">                        
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>   
</body>
</html>