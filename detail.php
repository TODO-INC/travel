<?php
include "libs/load.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
    <!-- BaguetteBox CSS (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <!-- Your Custom CSS Files -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/detail.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- BaguetteBox JS (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
</head>


<body data-bs-scheme="light">
    <?php load_temp("header.php"); ?>
    <div class="container mt-3">
        <div class="mb-4 rounded-3 jumbo-tron-container">
            <div class="container-fluid jumbo-tron">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <h1 class="fw-bold">Boat House - Ooty</h1>
                        <div class="rating-info d-flex align-items-center">
                            <div id="rating-container" class="align-items-center">
                                <span id="star-container"></span>
                                <span id="rating-count">(1307)</span>
                            </div>
                            <h6 class="mb-0 ms-2">Ooty - North Lake Road, Ooty, Tamil Nadu 643001</h6>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <i id="bookmark-icon" class="bi bi-bookmark"></i>
                    </div>
                </div>
                <div class="container gallery-container mt-3 light">
                    <div class="row gallery">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a1.jpeg">
                                <img class="img-fluid" src="asset/a1.jpeg">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a2.jpeg">
                                <img class="img-fluid" src="asset/a2.jpeg">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a3.jpeg">
                                <img class="img-fluid" src="asset/a3.jpeg">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a4.jpeg">
                                <img class="img-fluid" src="asset/a4.jpeg">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a5.jpeg">
                                <img class="img-fluid" src="asset/a5.jpeg">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="asset/a6.jpeg">
                                <img class="img-fluid" src="asset/a6.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <hr>
        <p class="lead">Boating on this man-made lake is an elegant way to enjoy the serene view and rich biodiversity;
            taking a slow pedal boat ride or a rowboat will make the aesthetic experience extra addictive. The
            restaurants will give an opportunity to relish the delicacies of Nilgiris.</p>
        <hr>


        <!-- Display text in a card with a border and shadow -->

        <div class="card mb-4 custom-card">
            <div class="card-header">
                Amenities
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="bi bi-droplet-half"></i> &nbsp;Drinking Water</li>
                <li class="list-group-item"><i class="bi bi-phone-fill"></i> &nbsp;Selfie Point </li>
                <li class="list-group-item"><i class="bi bi-camera-fill"></i>&nbsp;Camera allowed</li>
                <li class="list-group-item"><i class="bi bi-p-circle-fill"></i>&nbsp;Parking Area</li>
            </ul>
        </div>
        <div class="container">
            <div class="card cost">
                <div class="card-header">
                    <h5 class="card-title">Timing & Ticket Price</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Boat Name</th>
                                <th>Types of Boats</th>
                                <th>Tariff (Per Boat)</th>
                                <th>Tariff (Per Ticket)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pedal Boat - 2 Seater</td>
                                <td>30 minutes</td>
                                <td>Rs.300</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Pedal Boat - 4 Seater</td>
                                <td>30 minutes</td>
                                <td>Rs.400</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Row Boat - 4 Seater</td>
                                <td>30 minutes</td>
                                <td>Rs.450</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Row Boat - 6 Seater</td>
                                <td>30 minutes</td>
                                <td>Rs.500</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Motor Boat - 8 Seater</td>
                                <td>20 minutes</td>
                                <td>Rs.900</td>
                                <td>Rs.100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 style="text-align:center;" class="mt-3 mb-3">Reviews</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2 comment-container light">
                        <div class="card-body">
                            <div class="container">
                                <h4 class="bg-1 mt-1">Ram</h4>
                                <p class="bg-2">Best Place to enjoy with your family</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-2 comment-container light">
                        <div class="card-body">
                            <div class="container">
                                <h4 class="bg-1 mt-1">Saran</h4>
                                <p class="bg-2">Clean pond and pollution free area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2 comment-container light">
                        <div class="card-body">
                            <div class="container">
                                <h4 class="bg-1 mt-1">Ananth</h4>
                                <p class="bg-2">Must visit place in ooty</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-2 comment-container light">
                        <div class="card-body">
                            <div class="container">
                                <h4 class="bg-1 mt-1">Narayanan</h4>
                                <p class="bg-2">Safe place to enjoy your boat ride</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php load_temp("footer.php"); ?>
    <script src="js/detail.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    const darkModeSwitch = document.getElementById('dark-mode-switch');
    const body = document.body;
    const moonIcon = document.getElementById('moon-icon');
    const sunIcon = document.getElementById('sun-icon');

    // Function to toggle dark mode styles
    function toggleDarkMode() {
        if (darkModeSwitch.checked) {
            body.setAttribute('data-bs-scheme', 'dark');
            toggleElementsLightToDark();
            moonIcon.style.display = 'none';
            sunIcon.style.display = 'inline-block';
        } else {
            body.setAttribute('data-bs-scheme', 'light');
            // Function to toggle elements from light to dark
            toggleElementsDarkToLight();
            moonIcon.style.display = 'inline-block';
            sunIcon.style.display = 'none';
        }
    }

    // Toggle elements from dark to light
    function toggleElementsDarkToLight() {
        const elements = document.querySelectorAll('.dark');
        elements.forEach(element => {
            element.classList.remove('dark');
            element.classList.add('light');
        });
    }

    // Toggle elements from light to dark
    function toggleElementsLightToDark() {
        const elements = document.querySelectorAll('.light');
        elements.forEach(element => {
            element.classList.remove('light');
            element.classList.add('dark');
        });
    }

    // Call the function on page load
    toggleDarkMode();

    // Listen for dark mode switch changes
    darkModeSwitch.addEventListener('change', toggleDarkMode);
    </script>
</body>