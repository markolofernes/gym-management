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
    <a class="btn btn-primary btn-sm shadow" href="/">🏠</a>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-5 p-4 shadow-lg">
                    <h1>Edit Members</h1><hr>
                    
                  {{-- <a href=" {{ route('member/{id}/trainer', $member->trainer_id) }}">Trainer</a> --}}
                   
                <center>
                 <form action="{{ route('updatemember', $member->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <input type="hidden" value="{{ $member->id }}">
                            <div class="col-sm-6">
                                <label for="Name">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ $member->name }}" required><br>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ $member->email }}" required><br>
                            </div>
                            <div class="col-sm-4">
                                <label for="membership_type"><a href="{{ route('membership', $member->membership_id) }}">Membership</a></label>
                                <input class="form-control" type="number" name="membership_id" value="{{ $member->membership_id }}" required><br>
                            </div>
                            <div class="col-sm-4">
                                <label for="membership_expiration">Membership Validity</label>
                                <input class="form-control" type="text" name="membership_expiration" value="{{ $member->membership_expiration }}" required><br>
                            </div>

                            <div class="col-sm-4">
                                <label for="trainer_id"><a href="{{ route('trainer', $member->trainer_id) }}">Trainer</a></label>
                                <input class="form-control" type="text" name="trainer_id" value="{{ $member->trainer_id }}" required><br>
                            </div>

                        <button class="btn btn-primary" type="submit">Update member</button>
                    </div>
                </form>
                </center>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>