
<?php
include "./server.php";
include_once("./process.php")


?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add From Form</title>
        <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lineawesome/lineawesome/css/line-awesome.css">
    </head>
    <body style="background-color: #f1f1f1;">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <a href="./upload.php" class="btn btn-success">Back</a>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-2 text-success">Add Student Score</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" required name="name"  placeholder="Enter Student Name" />
                                                        <label for="inputFirstName">Enter Student Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" required name="reg_number" placeholder="Enter Registration Number" />
                                                        <label for="inputLastName">Enter Registration Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row mb-3">
                                             <div class="col-md-6">
                                               <div class="form-floating">
                                                 <input class="form-control" id="inputEmail" type="text" name="english" required placeholder="English Score" />
                                                <label for="inputEmail">English Score</label>
                                               </div>
                                            </div>
                                             <div class="col-md-6">
                                               <div class="form-floating">
                                                 <input class="form-control" id="inputEmail" type="text" name="math" required placeholder="Mathematics Score" />
                                                <label for="inputEmail">Mathematics Score</label>
                                               </div>
                                            </div>
                                           </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="bio" required placeholder="Biology Score" />
                                                        <label for="inputPassword">Biology Score</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="chem" required placeholder="Chemistry Score" />
                                                        <label for="inputPasswordConfirm">Chemistry Score</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="basic_sci" required placeholder="Basic Science Score" />
                                                        <label for="inputPassword">Basic Science Score</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="civic" required placeholder="Civic Education Score" />
                                                        <label for="inputPasswordConfirm">Civic Education Score</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="basic_tech" required placeholder="Basic Technologu Score" />
                                                        <label for="inputPassword">Basic Technologu Score</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="phy" required placeholder="Physics Score" />
                                                        <label for="inputPasswordConfirm">Physics Score</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn btn-success form-control" name="btn">Add</button>
                                            </div>
                                           
                                </div>
                            </div>
                        
                    
                </main>
            </div>
           
    </body>
</html>
