<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}" />
    <title>Admin Dashboard</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>  @if (Session::get('failLog'))
                    <div class="alert alert-danger">
                      {{Session::get('failLog')}}
                    </div>
                    @endif
                </h4><hr>
               
            </div>
        </div>
    </div>
</body>
</html>