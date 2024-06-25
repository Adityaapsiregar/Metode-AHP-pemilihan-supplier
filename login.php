

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>PEMILIHAN SUPPLIER D'BESTO</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        .pp {
            font-family: 'Poppins', sans-serif;
        }

        .pf-font {
            font-family: 'Playfair Display', serif;
        }

        .mst-font {
            font-family: 'Montserrat', sans-serif;
        }

        body{
            background-color: #F5F5F5;
        }

        .cek{
            border-style: solid;
            border-width: 1px;
        }
    </style>
</head>

<body>
    <section class="pp ">
    <form action="proses_login.php" method="POST" class="">
        <div class="container mt-5 " style="height: 500px">

            <center><img class="" src="screenshot/logo.png" alt="test" style="width: 300px;"></center>
            <div class="row h-100">
                <div class="col-sm-12  ">
                    <div class="card w-50 mx-auto">
                        <div class="card-header" style="background-color:#e30613">
                            <h4 class="text-white text-center"> Halaman Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-md-4">Username </div>
                                    <input type="text" name="username" class="form-control col-md-6" autofocus >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col-md-4 ">Password </div>
                                    <input type="password" name="password" class="form-control col-md-6 ">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group ">
                               <button type="submit" style="background-color:#e30613" class="text-white btn form-control">Login</button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>