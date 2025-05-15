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
<div class="container mt-5">
    <div class="row">
        @foreach ($menuitems as $menuitem)
            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">{{ $menuitem->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Beschrijving:</strong> {{ $menuitem->description }}</p>
                        <p><strong>Ingrediënten:</strong> {{ $menuitem->ingredients }}</p>
                        @if($menuitem->order_number)
                            <p><strong>Volgnummer:</strong> {{ $menuitem->order_number }}</p>
                        @endif
                        @if($menuitem->price)
                            <p><strong>Prijs:</strong> €{{ number_format($menuitem->price, 2, ',', '.') }}</p>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('menuitems.edit', $menuitem->id) }}"
                                   class="btn btn-primary btn-sm">Bewerk</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('menuitems.destroy', $menuitem->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Verwijder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

