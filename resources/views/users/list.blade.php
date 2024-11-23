<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <style>
        body {
            padding: 20px;

        }

        .whole {
            display: grid;
            grid-template-columns: auto auto auto auto;
            margin-top: 20px
        }

        .card-style {
            border: none;
            background-color: rgb(255, 255, 255);
            /* width: 400px; */
            height: 320px;
            padding: 14px;
            border-radius: 5px;
            border: none;
            box-shadow: rgb(197, 196, 196) 1px 1px 10px 1px;
            border-radius: 10px;
        }

        .pic {
            margin-left: 30px;
            /* width: 150px; */
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;

        }

        .create-btn {
            color: white;
            background-color: rgb(57, 57, 243);

            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        p {
            /* margin-bottom: 10px; */
            font-size: 18px;
        }

        h3 {
            margin-bottom: 10px;
        }

        .edit-btn {
            color: white;
            background-color: rgb(57, 57, 243);
            border: none;
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 5px;
            /* margin-left: 10px; */
            font-size: 16px;
        }

        .delete-btn {
            background-color: red;
            text-decoration: none;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            margin-left: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>User List</h1>

    {{-- @php

        for ($i = 0; $i < 10; $i++);

    @endphp


    @for ($i = 0; $i < 10; $i++)
        {{ $i }}
    @endfor



    @forelse($users as  $user)
    <p>{{ $user->name }}</p>
    @empty
    <p>No Record</p>
    @endforelse --}}
    <a href="{{ url('create') }}" class="create-btn">New User</a>
    <div class="whole">
        @foreach ($users as $pf => $user)
            <div class="card-style" style="width: 12rem; margin: 10px;">
                <div class="card-body">
                    {{-- if want to delete as db then insert image into database (book chapter: p 136 file upload) --}}
                    <img src="{{ 'images/pic' . $pf . '.jpg' }}" class="card-img-top pic">
                    <h3>{{ $user->name }}</h3>
                    <p>{{ $user->email }}</p>
                    <div  style="display: flex;">
                        <a href="{{ url('edit/' . $user->id) }}" class="edit-btn">Edit</a>
                        <form action="{{ url('delete/' . $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn"
                                onclick="return comfirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
