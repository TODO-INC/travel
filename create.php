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
    <link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/create.css">
</head>

<body data-bs-scheme="auto">
    <?php load_temp("header.php"); ?>
    <div class="container mt-5">
        <h1>Welcome to TravelMate</h1>
        <p>Plan your dream vacation with ease. Create a customized tour plan tailored to your
            preferences and let us assist you throughout your journey.</p>
    </div>

    <div class="container test mt-5">
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter your destination">
                </div>
                <div class="form-group">
                    <label for="persons">Number of Persons</label>
                    <input type="number" class="form-control" id="persons" min="1">
                </div>
                <div class="form-group">
                    <label for="start-date">Start Date</label>
                    <input type="date" class="form-control" id="start-date">
                </div>
                <div class="form-group">
                    <label for="start-time">Start Time</label>
                    <input type="time" class="form-control" id="start-time">
                </div>
                <a type="submit" class="btn btn-primary mt-2 " href="curate.php"> Create Plan</a>
            </form>
        </div>
    </div>
    <?php load_temp("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>