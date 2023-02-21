<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>L&C Book Store</title>
</head>

<body>
    @include('navbar.navigation')
    <form action="{{ route('author.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Author Name</label>
            <input name="AuthorName" class="form-control" type="text" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Author Name</label>
            <input name="birth_of_date" class="form-control" type="date" id="formFile">
        </div>
        <input type="submit" value="submit">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
