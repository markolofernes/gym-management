<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-5 p-4 shadow-lg">
                    <h1>Gym's Members</h1><hr>
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Membership</th>
                            <th>Validity</th>
                            <th>Email</th>
                            <th>Trainer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->membership_type }}</td>
                            <td>{{ $member->membership_expiration }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->trainer_id }}</td>
                            <td>{{ $member->membership_id }}</td>
                            <td><a href="{{ route('deletemember', $member->id) }}">❌</a></td>
                            <td><a href="{{ route('editform', $member->id) }}">📝</a></td>
                        </tr>
                        @endforeach
                    </tr>
                    </tbody>
                    <tr>
                </table><hr>
                <center>
                <form action="{{ route('addmember') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="Name">Name</label>
                            <input class="form-control" type="text" name="name" required><br>
                        </div>

                        <div class="col-sm-6">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" required><br>
                        </div>

                        <div class="col-sm-6">
                            <label for="membership_type">Membership</label>
                            <input class="form-control" type="text" name="membership_type" required><br>
                        </div>

                        <div class="col-sm-6">
                            <label for="membership_expiration">Membership Validity</label>
                            <input class="form-control" type="date" name="membership_expiration" required><br>
                        </div>

                        <button class="btn btn-primary" type="submit">Add member</button>
                    </div>
                </form>
                </center>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
