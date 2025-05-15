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
        <a class="navbar-brand h1" href={{ route('menuitems.index') }}>CRUD Menuitem</a>
        <div class="justify-end ">
            <div class="col ">
                <a class="btn btn-sm btn-success" href={{ route('menuitems.create') }}>Add Menu Item</a>
            </div>
        </div>
    </div>
</nav>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a Menu Item</h3>
            <form action="{{ route('menuitems.store') }}" method="POST">
                @csrf

                <div>
                    <label for="name">Item Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div>
                    <label for="ingredients">Ingredients</label>
                    <textarea id="ingredients" name="ingredients" required></textarea>
                </div>

                <div>
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <div>
                    <label for="order_number">Order Number</label>
                    <input type="number" id="order_number" name="order_number" required>
                </div>

                <div>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" required>
                </div>

                <button type="submit">Add Item</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
