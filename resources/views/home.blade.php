<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome World!</h1>

    <h3>Ingredients for chocolate and pear cake:</h3>
    <ul> 
        @foreach ($shoppingList as $ingredient)
            <li>
                {{$ingredient}}
            </li>
        @endforeach
    </ul>

    
</body>
</html>