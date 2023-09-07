<?php
include "libs/load.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/curate.css">
</head>

<body data-bs-scheme="auto">
    <?php load_temp("header.php"); ?>

    <div class="container" style="margin-top:3%;">
        <!-- Horizontal scale with pointer -->
        <div class=" scale-container">
            <div class="hour-scale">

                <p class="hour0">DAY 1</p>
                <!-- Create the hour scale labels -->
                <!-- You can customize this loop to display specific hours -->
                <?php for ($i = 0; $i < 24; $i+=2) { ?>
                <div class="hour"><?php echo $i; ?></div>
                <?php } ?>
            </div>
        </div>

        <!-- Cards under the scale -->
        <div class="card-container">
            <!-- Add four cards here -->
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card11">
                <img src="asset/1.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>

            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card12">
                <img src="asset/2.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card13">
                <img src="asset/3.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card14">
                <img src="asset/4.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasLabel" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <div class="container" style="margin-top:3%;">
        <!-- Horizontal scale with pointer -->
        <div class=" scale-container">
            <div class="hour-scale">

                <p class="hour0">DAY 2</p>
                <!-- Create the hour scale labels -->
                <!-- You can customize this loop to display specific hours -->
                <?php for ($i = 0; $i < 24; $i+=2) { ?>
                <div class="hour"><?php echo $i; ?></div>
                <?php } ?>
            </div>
        </div>

        <!-- Cards under the scale -->
        <div class="card-container">
            <!-- Add four cards here -->
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card21">
                <img src="asset/1.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>

            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card22">
                <img src="asset/2.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="container" style="margin-top:3%;">
        <!-- Horizontal scale with pointer -->
        <div class=" scale-container">
            <div class="hour-scale">

                <p class="hour0">DAY 3</p>
                <!-- Create the hour scale labels -->
                <!-- You can customize this loop to display specific hours -->
                <?php for ($i = 0; $i < 24; $i+=2) { ?>
                <div class="hour"><?php echo $i; ?></div>
                <?php } ?>
            </div>
        </div>

        <!-- Cards under the scale -->
        <div class="card-container">
            <!-- Add four cards here -->
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card31">
                <img src="asset/1.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>

            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card32">
                <img src="asset/2.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
            <div class="card" style="width: 18rem;" id="card33">
                <img src="asset/2.jpeg" class="card-img-top" alt="..." style="height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">Mountain</h5>
                    <p class="card-text">Best hill you in that place</p>
                    <a href="#" class="btn btn-danger remove-card">Remove</a>
                    <a href="detail.php" target="_blank" class="btn btn-primary">More</a>
                </div>
            </div>
            <button class="btn btn-primary plus" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <a class="btn btn-primary fixed-bottom-center" type="button" href="plan.php">Create Plan</a>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Book a Hotel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card" style="width: 18rem;">
                <img src="asset/h1.jpeg" class="card-img-top" alt="Hotel Image">
                <div class="card-body">
                    <h5 class="card-title">Hotel Sunshine</h5>
                    <p class="card-text">Rating: <span class="badge bg-primary">4.5</span></p>
                    <p class="card-text">Number of Rooms: 100</p>
                    <div class="container mt-2">
                        <div class="mb-3">
                            <label for="num" class="form-label">Number of Rooms</label>
                            <input type="number" min="1" class="form-control" id="num">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info mb-3">Book</button>
            </div>
            <div class="card mt-3" style="width: 18rem;">
                <img src="asset/h2.jpeg" class="card-img-top" alt="Hotel Moon">
                <div class="card-body">
                    <h5 class="card-title">Hotel Moon</h5>
                    <p class="card-text">Rating: <span class="badge bg-primary">4.3</span></p>
                    <p class="card-text">Number of Rooms: 150</p>
                    <div class="container mt-2">
                        <div class="mb-3">
                            <label for="num" class="form-label">Number of Rooms</label>
                            <input type="number" min="1" class="form-control" id="num">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info mb-3">Book</button>
            </div>
        </div>
    </div>


    <?php load_temp("footer.php"); ?>
    <script src=" https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.querySelector(".plus").addEventListener("click", function() {
        this.classList.add("clicked");
    });
    document.addEventListener("DOMContentLoaded", function() {
        const removeButtons = document.querySelectorAll(".remove-card");

        removeButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const card = this.closest(".card");
                if (card) {
                    card.style.display = "none"; // Hide the card
                }
            });
        });
    });
    </script>