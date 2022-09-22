<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>

    <link href="{{asset('assets/user')}}/css/userStyle.css" rel="stylesheet" />


</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">Fruit Fantasy</a>
            <form class="d-flex">
                <a type="button" class="btn btn-outline-light me-3"><i class="fa-solid fa-right-to-bracket"></i></a>
                <a type="button" class="btn btn-outline-light "><i class="fa-solid fa-cart-shopping"></i></a>
            </form>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light sticky-top searchbar">
        <form class="container-fluid">
            <div class="input-group">
                <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                <input type="text" class="form-control" placeholder="Search for fruits" aria-label="fruit name" aria-describedby="basic-addon1">
                <a type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </form>
    </nav>

    <div class="card">
        <div class="card-body">
            @yield('content')
        </div>
    </div>

    <div class="container-fluid p-0 m-0">
        <div class="footer">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Address</h5>
                    <p>
                        House- <br />Road- <br />
                        Dhaka - 1212
                    </p>
                </div>
                <div class="col-sm-4">
                    <h5>Contact No</h5>
                    <p>
                        +8801000000000 <br />8801000000000<br />8801000000000 <br />
                        abcr@abc.com
                    </p>
                </div>
                <div class="col-sm-4 ">
                    <a href="#" class="btn btn-light mt-3 ">Contact Us</a><br>
                    <a href="#" class="btn btn-light">About Us Us</a>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>