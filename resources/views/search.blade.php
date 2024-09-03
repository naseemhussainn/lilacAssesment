<!DOCTYPE html>
<html>
<head>
    <title>Search Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Search Users</h1>
        <input type="text" id="search" class="form-control" placeholder="Search by name, designation, or department">

        <div id="result" class="row mt-4">
            @foreach($users as $user)
            <div class="col-sm-6 card mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->designation->name }} - {{ $user->department->name }}</p>
                    <p class="card-text"><small class="text-muted">{{ $user->phone_number }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#result .card').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
</body>
</html>
