<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />
    <body>
        <header class="main-header sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand logo" href="index.php"><span>Inn</span>obeus</a>
                    <div class="notification nav-item ml-auto show-mob">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="fas fa-envelope"><span>20</span></i>
                        </a>
                        <ul>
                            <li class="close"><i class="far fa-times-circle"></i></li>
                            <li>
                                <a href="">you have a message</a>
                            </li>
                            <li>
                                <a href="">you have a message</a>
                            </li>
                        </ul>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                    <div class="mr-auto navtopmenu collapse navbar-collapse" >
                        <ul class="mr-auto navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="listing.php">menu 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listing.php">menu 2</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    menu 3
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="drop-wrap">
                                        <a class="dropdown-item" href="listing.php">sub 1</a>
                                        <a class="dropdown-item" href="listing.php">sub 2</a>
                                    </div>
                                    <hr/>
                                    <div class="drop-wrap">
                                        <a class="dropdown-item" href="listing.php">sub 3</a>
                                        <a class="dropdown-item" href="listing.php">sub 4</a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="ml-auto collapse navbar-collapse navtopmenu" id="navbarNavDropdown">
                        <ul class="ml-auto navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="profile.php"><i class="fas fa-user"></i> Sunil Kumar</a>
                            </li>
                            <li class="notification nav-item hide-mob">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="fas fa-envelope"><span>20</span></i>
                                </a>
                                <ul>
                                    <li class="close"><i class="far fa-times-circle"></i></li>
                                    <li>
                                        <a href="">you have a message</a>
                                    </li>
                                    <li>
                                        <a href="">you have a message</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i> Log out </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>