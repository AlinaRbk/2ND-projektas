
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show school</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2> {{$school->name}}  </h2>
            <p>Id : {{$school->id}}</p>
        <p>Name : {{$school->name}}</p>
        <p>Description : {{$company->description}}</p>
        <p>Place : {{$company->place}}</p>
        <p>Phone : {{$company->phone}}</p>


        <form method="post" action='{{route('school.destroy', [$school])}}''>
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <a class="btn btn-secondary" href="{{route('school.index')}}">Back</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>