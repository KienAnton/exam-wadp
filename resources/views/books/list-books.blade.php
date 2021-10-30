<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

<h1>Books table</h1>

<table id="customers">
    <tr>
        <th>Bookid</th>
        <th>Authorid</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Public year</th>
        <th>available</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->bookid}}</td>
        <td>{{$book->authorid}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->ISBN}}</td>
        <td>{{$book->pub_year}}</td>
        <td>{{$book->available}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>


