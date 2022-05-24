<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produto</title>
</head>
<body>
@csrf
<h1>Lista de Produtos</h1>
<ul>
    @foreach($products as $product)
        <li>
            {{$product->name}} -
            {{$product->price_cost}} -
            {{$product->price_sale}} -
            {{$product->qtde}}
        </li>
    @endforeach
</ul>
</form>
</body>
</html>
