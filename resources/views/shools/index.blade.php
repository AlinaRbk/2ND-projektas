<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Shool</title>
</head>
<body>
    <div class="container">
    <h1>Shools Index</h1>


@if (count($shools) == 0)
    <p>There is no shools</p>
@endif

<a class="btn btn-primary" href="{{route('shool.create')}}">Create new shool</a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Place</th>
    <th>Phone</th>
</tr>


@foreach ($shools as $shool)
    <tr>
        <td>{{$shool->id}}</td>
        <td>{{$shool->name}}</td>
        <td>{{$shoool->description}}</td>
        <td>{{$shool->place}}</td>
        <td>{{$shool->phone}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('shool.edit', [$shool])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('shool.show', [$shool])}}">Show</a>

            <form method="post" action='{{route('shool.destroy', [$shool])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>