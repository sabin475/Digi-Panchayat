<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='public')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>
<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fas fa-dungeon"></i> Digi Panchayat<span class="fs-5"></span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        
                        
						<a href="scheme.php" class="nav-item nav-link">New Schemes</a>
						<a href="applications.php" class="nav-item nav-link">Applications</a>
						<a href="gallery1.php" class="nav-item nav-link">Gallery</a>
						<a href="public.php" class="nav-item nav-link">Add Feedbacks</a>
                        <a href="profile.php" class="nav-item nav-link">My Profile</a>
                    </div>
					  <a href="logout.php" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Logout</a>
               
                    
                </div>
            </nav>

<div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
						<form>
						
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="name" placeholder="User Name" name="username" required>
                                            <label for="name">User Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="email" name="password" placeholder="Your Password" required>
                                            <label for="email">Password</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>