<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding: 20px;

        }

        h2 {
            margin: auto;
            width: 50%;
            margin-bottom: 20px;

        }

        .whole {
            margin: auto;
            width: 50%;
            border: 1px solid rgb(216, 209, 209);
            border-radius: 5px;
            padding: 20px;


        }
    </style>
</head>

<body>
    <h2>Edit User</h2>
    <div class="whole">

        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input type="text" class="form-control" value="{{ $user->name }}" name="username">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email Address</label>
                <input type="text" class="form-control" value="{{ $user->email }}" name="email">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    </form>
    </div>

</body>

</html>
