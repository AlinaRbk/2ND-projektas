<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit school</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Edit school</h1>

        <form method='POST' action='{{route('school.update', [$school])}}' >

        <input class="form-control" type='text' name="school_name" value="" placeholder="school Name"/>
            <input  class="form-control" type='text' name="school_description" value="{{$school->description}}"  placeholder="school Description"/>
            <input  class="form-control" type='text' name="school_place"  value="" placeholder="school place"/>
            <input  class="form-control" type='number' name="phone"  value="" placeholder="Phone Number"/>
            @csrf

            <button class="btn btn-primary" type='submit'>Edit</button>
            <a class="btn btn-secondary" href="{{route('school.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>