<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bootstrap - projeto 02</title>
    <!-- Local instance -->
    <link rel="stylesheet" href="../bootstrap-5.2.0/dist/css/bootstrap.min.css">
    <!-- External instance -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End External instance -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top"> -->
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-lg">
            <a class="navbar-brand" href="./">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
            <div class="me-auto"></div>
            <a href="./?logout" class="nav-link"><i class="bi bi-power"></i>Logout</a>
        </div>
    </nav>

    <header class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>
                        <i class="bi bi-gear"></i>
                        Painel de controle
                    </h2>

                </div>
                <!-- <div class="col me-auto"></div> -->
                <div class="col">
                    Seu ultimo login foi em: <br>
                    12/12/2012
                </div>
            </div>
        </div>

    </header>
    <div class="row mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>
    <div id="main" class="container">

        <div class="row">
            <div class="col-3">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Editar Sobre</li>
                        <li class="list-group-item active">Cadastrar Membro da equipe</li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Membros da equipe
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Sobre</li>
                        <li class="list-group-item">
                            <form action="" method="post">
                                <label for="sobre">Codigo html:</label>
                                <textarea name="sobre" id="" cols="" rows="5"></textarea>
                                <input type="submit" value="submit">
                            </form>
                            <pre>
single table row, delete all from table, and insert new.
Use bootstrap alert to display the result of the operation.
                            </pre>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Cadastrar Equipe</li>
                        <li class="list-group-item">
                            <form action="" method="post">
                                <label for="name">Nome do membro:</label>
                                <input type="tel" name="name" id="">
                                <label for="description">Descrição do membro:</label>
                                <textarea name="description" id="" cols="" rows="5"></textarea>
                                <input type="submit" value="submit">
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Membros da Equipe -> table</li>
                        <li class="list-group-item">
                            <table>
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Nome do membro</td>
                                        <td>#</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Each member goes here -->
                                    <tr>
                                        <td>1</td>
                                        <td>MemberName</td>
                                        <td><button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Membros da Equipe -> table</li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">ID</div>
                                <div class="col-md-6">Nome do Membro</div>
                                <div class="col-md-4">#</div>
                            </div>
                            <!-- Template for fetching and pushing data to -->
                            <div class="row">
                                <div class="col-md-2">1</div>
                                <div class="col-md-6">Nome do membro</div>
                                <div class="col-md-4"><button type="button" class="btn btn-danger">Delete</button></div>
                            </div>


                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <script>
        $(function() {
            // alert('working');

            function cliqueMenu() {
                $('menu-principal a, .list-group a').click(function() {
                    $('.list-group a').removeClass('active').removeClass('cor-padrao');
                    $('#menu-principal a').parent().removeClass('active');
                    // console.log('#menu-principal a[red_sys=' + $(this).attr('red_sys') + ']');
                    $('#menu-principal a[ref_sys=' + $(this).attr('ref_sys') + ']').parent().addClass('active');
                    $('.list-group a[ref_sys' + $(this).attr('ref_sys') + ']').addClass('active').addClass('cor-padrao');
                    return false;
                })
            }

            function scrollItem() {
                $('menu-principal a, .list-group a').click(function() {
                    var ref = '#' + $(this).attr('ref_sys') + '_section';
                    var offset = $(ref).offset().top;
                    $('html,body').animate({
                        'scrollTop': offset
                    });
                })
            }

            $('button.delete-member').click(function() {
                var id_member = $(this).attr('id_member');
                var el = $(this).parent().parent();
                $.ajax({
                    method: 'post',
                    data: {
                        'id-member': id_member
                    },
                    url: 'deletemember.php'
                }).done(function() {
                    el.fadeOut(function() {
                        el.remove();
                    })
                })
            })
        });
    </script>
</body>

</html>