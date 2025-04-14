<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dikkebananen</title>
</head>
<body>
@foreach ($bananas as $banana)
    <div class="col-sm">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $banana->name }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $banana->order_number }}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ route('banana.edit', $banana->id) }}"
                           class="btn btn-primary btn-sm">Edit</a>
                    </div>
                    <div class="col-sm">
                        <form action="{{ route('banana.destroy', $banana->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</body>
</html>
