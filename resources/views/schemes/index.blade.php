<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link type="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    
<h1>Schemes of Work</h1>
<a href="{{route('schemes.create')}}">Create New Scheme </a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Start Date </th>
            <th>End Date </th>
            <th> Subject </th>
            <th> Actions </th>
</tr>
</thead>
<tbody>
    @foreach ($schemes as $scheme)
    <tr>
        <td>{{$scheme->title}}</td>
        <td>{{$scheme->description}}</td>
        <td>{{$scheme->start_date}}</td>
        <td>{{$scheme->end_date}}</td>
        <td>{{$scheme->subject}}</td>
        <td>
            <a href="{{route('schemes.edit',$scheme)}}">Edit </a>
            <form action="{{route('schemes.destroy',$scheme)}}" method="DELETE" style="display:inline;">
                @csrf 
                @method('DELETE')
                <button
                type="submit">Delete</button>
</form>
@endforeach
</td>
</tr>
</tbody>
</table>
</body>
</html>