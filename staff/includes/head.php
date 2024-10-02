<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='staff')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../login.php';</script>";
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
                        
                        
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Schemes</a>
                            <div class="dropdown-menu m-0">
                                <a href="scheme.php" class="dropdown-item">Add New Schemes</a>
                                <a href="update_scheme.php" class="dropdown-item">Update Schemes</a>
								<a href="info.php" class="dropdown-item">Upload Other Informations</a>
								<a href="update_info.php" class="dropdown-item">Update Information</a>
								<a href="upload_img.php" class="dropdown-item">Upload Images</a>
								<a href="update_img.php" class="dropdown-item">Update Gallery</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Applications</a>
                            <div class="dropdown-menu m-0">
                                
                                <a href="applications.php" class="dropdown-item">New Applications</a>
                                <a href="papplications.php" class="dropdown-item">Previous Applications</a>
                            </div>
                        </div>


						<a href="user.php" class="nav-item nav-link">Users</a>
						<a href="feedback.php" class="nav-item nav-link">Feedbacks</a>
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