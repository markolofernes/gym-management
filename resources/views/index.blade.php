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
                            <th>Validity</th>
                            <th>Email</th>
                            <th>Trainer</th>
                            <th>Membership ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
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
                </table>
                <br><hr><h3 class="text-center">Add a member</h3><hr><br>
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
                            <label for="membership_expiration">Membership Validity</label>
                            <input class="form-control" type="date" name="membership_expiration" required><br>
                        </div>

                        <div class="col-sm-6">
                            <label for="trainer_id">Trainor</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="trainer_id">
                            <option selected></option>
                                <option selected value="1">Son Goku</option>
                                <option value="2">Saitama</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="membership_id">Membership ID</label>
                            <input class="form-control" type="number" value="1" name="membership_id" required><br>
                        </div>
                        <button class="btn btn-primary mt-5" type="submit">Add member</button>
                    </div>
                    {{-- @foreach ($membership as $membership)
                    <td>{{$membership->membership_type}}</td>
                    @endforeach --}}
                </form>
                </center>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
