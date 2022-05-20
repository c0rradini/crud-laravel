<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Produto</title>
</head>
<body>
    <form action="{{route('delete_product', ['id' => $product->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <label for="">Deseja realmente excluir </label>
        <br>
        <input type="text" name="name" value="{{$product->name}}">
        <button>Excluir</button>
    </form>
</body>
</html>
