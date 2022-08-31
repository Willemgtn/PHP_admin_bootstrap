<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap - projeto 02</title>
    <!-- Local instance -->
    <link rel="stylesheet" href="./bootstrap-5.2.0/dist/css/bootstrap.min.css">
    <!-- External instance -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End External instance -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-lg">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="me-auto"></div>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./bootstrap_admin/">Admin</a>
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
        </div>
    </nav>
    <section class="banner">
        <div class="container text-center align-items-center">

            <div class="row align-items-center">
                <h1>Boostrap project</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quam excepturi molestias nesciunt, debitis ipsam distinctio quia maiores omnis, in saepe consequuntur, dolore cum obcaecati fuga doloremque quasi accusantium! Officiis.</p>
                <!-- <button type="button" class="btn btn-light">Light</button> -->
            </div>
            <button type="button" class="btn btn-light">Saiba mais</button>

        </div>
    </section>
    <section class="mailer">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-6">
                    <i class="bi bi-star-fill"></i>
                    Entre na nossa lista
                </div>
                <div class="col-md-6">
                    <form action="">
                        <input type="email" name="email" id="" placeholder="Yourbestemail@domain.com">
                        <input type="submit" class="btn btn-light" name="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container align-items-center justify-content-center text-center">
            <h3>Depoimentos</h3>
            <div class="row">
                <blockquote>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, mollitia repudiandae? Odit, fuga deserunt obcaecati porro ea dolorem placeat error saepe asperiores officiis perspiciatis architecto aut incidunt cupiditate sed delectus!
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem aspernatur inventore nam, reprehenderit minima cum dolorum alias iure suscipit sunt vero eveniet consectetur labore nulla sed illo blanditiis consequuntur sit.</p>
                </blockquote>
            </div>
        </div>

    </section>

    <section class="diferenciais">
        <h3>Conheça nossa empresa</h3>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3><i class="bi bi-star"></i></h3>
                    <h3>Diferencial # 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aperiam quia quo veniam ipsum fugit id voluptates quaerat unde quos at, explicabo perspiciatis quasi vero dolorum esse eveniet non suscipit.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="bi bi-ubuntu"></i></h3>
                    <h3>Diferencial # 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aperiam quia quo veniam ipsum fugit id voluptates quaerat unde quos at, explicabo perspiciatis quasi vero dolorum esse eveniet non suscipit.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="bi bi-award"></i></h3>
                    <h3>Diferencial # 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aperiam quia quo veniam ipsum fugit id voluptates quaerat unde quos at, explicabo perspiciatis quasi vero dolorum esse eveniet non suscipit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe">
        <h3>Equipe</h3>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row align-items-center">
                        <div class="col-sm-3">
                            <img src="../img/default_profile.webp" alt="pic">
                        </div>
                        <div class="col-9 justify-content-center">
                            <h4>Admin</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam soluta doloribus atque nihil voluptate blanditiis placeat, itaque hic ab voluptates maiores reprehenderit in. Autem aperiam ipsum deleniti temporibus, modi praesentium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row align-items-center">
                        <div class="col-sm-3">
                            <img src="./default_profile.webp" alt="pic">
                        </div>
                        <div class="col-9 justify-content-center">
                            <h4>Admin</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam soluta doloribus atque nihil voluptate blanditiis placeat, itaque hic ab voluptates maiores reprehenderit in. Autem aperiam ipsum deleniti temporibus, modi praesentium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5"></div>
                <div class="col-5"></div>
                <div class="col-5"></div>
                <div class="col-5"></div>
                <div class="col-5"></div>
            </div>
        </div>
    </section>

    <section class="form">
        <h3>Fale Conosco</h3>
        <div class="container">
            <form class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-light" name="submit" value="Send">
                </div>
            </form>
        </div>
    </section>

    <div class="table-responsive container">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Extra small<div class="fw-normal">&lt;576px</div>
                    </th>
                    <th>Small<div class="fw-normal">≥576px</div>
                    </th>
                    <th>Medium<div class="fw-normal">≥768px</div>
                    </th>
                    <th>Large<div class="fw-normal">≥992px</div>
                    </th>
                    <th>X-Large<div class="fw-normal">≥1200px</div>
                    </th>
                    <th>XX-Large<div class="fw-normal">≥1400px</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>.container</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>540px</td>
                    <td>720px</td>
                    <td>960px</td>
                    <td>1140px</td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-sm</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>540px</td>
                    <td>720px</td>
                    <td>960px</td>
                    <td>1140px</td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-md</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>720px</td>
                    <td>960px</td>
                    <td>1140px</td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-lg</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>960px</td>
                    <td>1140px</td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-xl</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>1140px</td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-xxl</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td>1320px</td>
                </tr>
                <tr>
                    <td><code>.container-fluid</code></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                    <td><span class="text-muted">100%</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <p class="text-center">
            Todos os direitos reservados
        </p>
    </footer>




    <!-- <script src="./bootstrap-5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="./bootstrap-5.2.0/dist/js/bootstrap.min.js"></script> -->
    <!-- <script src="./bootstrap-5.2.0/d"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->

</body>

</html>