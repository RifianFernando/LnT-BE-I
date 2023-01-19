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
    <form action="/create-book" method="post">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Title</label>
            <input name="title" class="form-control" type="text" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Stock</label>
            <input name="stock" class="form-control" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Writer</label>
            <input name="writer" class="form-control" type="text" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Category Book</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @forelse ($categories as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->categoryName }}</option>
                @empty
                    <option>No category found</option>
                @endforelse
            </select>
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
