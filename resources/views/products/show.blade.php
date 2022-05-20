<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de Produto</title>
</head>
<body>
        <label for="">Nome</label>
        <br>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        <label for="">Preço de custo</label>
        <br>
        <input type="text" name="price_cost"  value="{{$product->price_cost}}">
        <br>
        <label for="">Preço de Venda</label>
        <br>
        <input type="text" name="price_sale"  value="{{$product->price_sale}}">
        <br><label for="">Quantidade</label>
        <br>
        <input type="text" name="qtde"  value="{{$product->qtde}}">
        <br>
</body>
</html>
