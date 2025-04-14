<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menuitems</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('menuitems.index') }}>CRUDPosts</a>
        <div class="justify-end ">
            <div class="col ">
                <a class="btn btn-sm btn-success" href={{ route('menuitems.create') }}>Add Post</a>
            </div>
        </div>
    </div>
</nav>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Post</h3>
            <form action="{{ route('menuitems.update', $menuitem->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{ $menuitem->name }}">
                </div>
                <div class="form-group">
                    <label for="ingredients">ingredients</label>
                    <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required>{{ $menuitem->ingredients }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $menuitem->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="order_number">Order Number</label>
                    <input type="number" class="form-control" id="order_number" name="order_number"
                           value="{{ $menuitem->order_number }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price"
                           value="{{ $menuitem->price }}">
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
