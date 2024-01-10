<?php

  if (!isset($_SESSION['admin_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_name']);
    header("location: .././login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Shop Vista|Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="index.php" class="simple-text logo-normal">
                    <img src="data:image/png;base64,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" style="width: 150px;">
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="addsuppliers.php">
                            <i class="material-icons">person</i>
                            <p>Add users</p>
                        </a>
                        
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="add_products.php">
                        <i class="material-icons">add</i>
                        <p>Add Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products_list.php">
                        <i class="material-icons">list</i>
                        <p>Product List</p>
                        </a>
                        
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="manageuser.php">
                            <i class="material-icons">person</i>
                            <p>Manage users</p>
                        </a>
                    </li>
                    <li class="nav-item ">
            <a class="nav-link" href="activity.php">
              <i class="material-icons">timeline</i>
              <p>Activities</p>
            </a>
          </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="profile.php">
                            <icons-image _ngcontent-aye-c22="" _nghost-aye-c19=""><i _ngcontent-aye-c19="" class="material-icons icon-image-preview">settings</i></icons-image>
                            <p>setting</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="salesofday.php">
                            <i class="material-icons">library_books</i>
                            <p>sales</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="../../chat/login.php">
                            <i class="material-icons">notifications</i>
                            <p>Discussion</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
                </ul>
            </div>
        </div>