<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo p-3">
                    <a href="#" class="text-light">Brand</a>
                    <button id="sidebar-close-btn" class="btn text-light "><i class="bi bi-x"></i></button>
                </div>
                <ul class="sidebar-nav list-unstyled">
                    <li class="sidebar-item">
                        <a href="dashboard" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-list me-2"></i>
                            <span class="icon-text">Dashboard</span>
                            <i class="bi bi-chevron-right ms-auto"></i>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="stock" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-box-seam"></i>
                            <span class="icon-text">Stock</span>
                            <i class="bi bi-chevron-right ms-auto"></i>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="history" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-clock-history me-2"></i>
                            <span class="icon-text">History Pembelian</span>
                            <i class="bi bi-chevron-right ms-auto"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <h4 class="card-title">Stock</h4>
                                    <div class="table-responsive-xl">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Barang</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Supplier</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PR000001</td>
                                                    <td>Product A</td>
                                                    <td>50</td>
                                                    <td>Deskripsi A</td>
                                                    <td>Supplier A</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000002</td>
                                                    <td>Product B</td>
                                                    <td>30</td>
                                                    <td>Deskripsi B </td>
                                                    <td>Supplier B</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>PR000003</td>
                                                    <td>Product C</td>
                                                    <td>20</td>
                                                    <td>Deskripsi C</td>
                                                    <td>Supplier C </td>
                                                    <td>
                                                        <button class="button-action m-1 "><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>PR000004</td>
                                                    <td>Product D</td>
                                                    <td>40</td>
                                                    <td>Deskripsi D</td>
                                                    <td>Supplier D</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>PR000005</td>
                                                    <td>Product E</td>
                                                    <td>60</td>
                                                    <td>Deskripsi E</td>
                                                    <td>Supplier E</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>PR000006</td>
                                                    <td>Product F</td>
                                                    <td>45</td>
                                                    <td>Deskripsi F</td>
                                                    <td>Supplier F</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000007</td>
                                                    <td>Product G</td>
                                                    <td>15</td>
                                                    <td>Deskripsi G</td>
                                                    <td>Supplier G</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000008</td>
                                                    <td>Product H</td>
                                                    <td>70</td>
                                                    <td>Deskripsi H</td>
                                                    <td>Supplier H</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000009</td>
                                                    <td>Product I</td>
                                                    <td>30</td>
                                                    <td>Deskripsi I</td>
                                                    <td>Supplier I</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000010</td>
                                                    <td>Product J</th>
                                                    <td>45</td>
                                                    <td>Deskripsi J</td>
                                                    <td>Supplier J</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000011</td>
                                                    <td>Product K</td>
                                                    <td>50</td>
                                                    <td>Deskripsi K</td>
                                                    <td>Supplier K</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PR000012</td>
                                                    <td>Product L</td>
                                                    <td>30</td>
                                                    <td>Deskripsi L</td>
                                                    <td>Supplier L</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end m-0">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="Js/revenueChart.js"></script>
    <script src="Js/bestSellerChart.js"></script>
    <script>
        document.getElementById("sidebar-toggle").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main");
        const closeButton = document.getElementById("sidebar-close-btn");

        sidebar.classList.toggle("collapsed");
        mainContent.classList.toggle("expanded");
    });
    document.getElementById("sidebar-close-btn").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main");

        sidebar.classList.remove("collapsed");
        mainContent.classList.remove("expanded");   
    });
    </script>
</body>

</html>