<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>

    <style>
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Create Product</h1>
    
    <form action="/products" method="post">
        @csrf

        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="description">Description:</label></td>
                <td><input type="text" name="description" id="description"></td>
            </tr>
            <tr>
                <td><label for="price">Price:</label></td>
                <td><input type="number" name="price" id="price"></td>
            </tr>            
            <tr>
                <td><label for="image_url">Image Url:</label></td>
                <td><input type="text" name="image_url" id="image_url"></td>
            </tr>           
        </table>

        <br>
        <input type="submit" value="Save">
        <br><br>
        <a href="/products"><< back to List Products</a>
        
    </form>
</body>
</html>