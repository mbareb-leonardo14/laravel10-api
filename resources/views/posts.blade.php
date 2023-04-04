<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent Relationship : Relasi One to Many</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a
                        href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwi28sS0y5D-AhWA9zgGHahiCbYQFnoECB0QAQ&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWu-Tang_Clan&usg=AOvVaw1-t_dllJTTJUId6WL99DIz">Wu
                        Tang Clan</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One to One</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Post Title</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->title }}</td>
                            <td>
                                @foreach($post->comments()->get() as $comment)
                                <div class="card shadow-sm mb-2">
                                    <div class="card-body">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>
