<!DOCTYPE html>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add</h3></div>
                                    <div class="card-body">
                                        <form action="./form/index.php" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" required name="fullname"  placeholder="Enter your first name" />
                                                        <label for="inputFirstName">NAME</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" required name="username" placeholder="Enter your last name" />
                                                        <label for="inputLastName">REG NUMBER</label>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="row mb-3">
                                             <div class="col-md-6">
                                               <div class="form-floating">
                                                 <input class="form-control" id="inputEmail" type="text" name="phone" required placeholder="name@example.com" />
                                                <label for="inputEmail">ENGLISH</label>
                                               </div>
                                            </div>
                                             <div class="col-md-6">
                                               <div class="form-floating">
                                                 <input class="form-control" id="inputEmail" type="text" name="email" required placeholder="name@example.com" />
                                                <label for="inputEmail">MATHEMATICS</label>
                                               </div>
                                            </div>
                                           </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="password" required placeholder="Create a password" />
                                                        <label for="inputPassword">BIOLOGY</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="cpassword" required placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">CHEMISTRY</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="password" required placeholder="Create a password" />
                                                        <label for="inputPassword">BASIC SCIENCE</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="cpassword" required placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">CIVIC EDUCATION</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="password" required placeholder="Create a password" />
                                                        <label for="inputPassword">BASIC TECHNOLOGY</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" name="cpassword" required placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">PHYSICS</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn btn-success form-control">Add</button>
                                            </div>
                                           
                                </div>
                            </div>
                        
                    
                </main>
            </div>
           
    </body>
</html>
