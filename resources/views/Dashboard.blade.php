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
                </div>
                <ul class="sidebar-nav list-unstyled">
                    <li class="sidebar-item">
                        <a href="dashboard" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-list me-2"></i>
                            <span class="icon-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="stock" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-box-seam"></i>
                            <span class="icon-text">Stock</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="history" class="sidebar-link d-flex align-items-center text-light py-2">
                            <i class="bi bi-clock-history me-2"></i>
                            <span class="icon-text">History Pembelian</span>
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
                    <div class="row justify-content-center mb-5">
                        <div class="col-xl-6 col-md-12">
                            <div class="card mt-4 mb-0">
                                <div class="card-body">
                                    <h4 class="card-title">Revenue</h4>
                                    <div>
                                        <canvas id="revenueChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="card mt-4 mb-0">
                                <div class="card-body">
                                    <h4 class="card-title">Best Seller Product</h4>
                                    <div>
                                        <canvas id="bestSellerChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pembelian</h4>
                                    <div class="table-responsive-xl">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Transaction_id</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Supplier</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>TR000001</th>
                                                    <td>2023-12-24</td>
                                                    <td>Supplier A</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>TR000002</th>
                                                    <td>2023-12-25</td>
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
                                                    <td>TR000003</th>
                                                    <td>2023-12-26</td>
                                                    <td>Supplier C</td>
                                                    <td>
                                                        <button class="button-action m-1 "><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>TR000004</th>
                                                    <td>2023-12-27</td>
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
                                                    <td>TR000005</th>
                                                    <td>2023-12-28</td>
                                                    <td>Supplier E</td>
                                                    <td>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-pencil"></i></button>
                                                        <button class="button-action m-1"><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
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
        document.getElementById("sidebar").classList.toggle("collapsed");
        document.querySelector(".main").classList.toggle("expanded");
      });
    </script>
</body>

</html>