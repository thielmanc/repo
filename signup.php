<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/signup.css">
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">

                    <form action="includes/signup-helper.php" method="post">

                        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
                        <p class="hint-text">Create your account!</p>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="uname" id="floatingInput" placeholder="username">

                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">

                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" name="pwd" id="floatingPassword" placeholder="Password">

                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" name="con-pwd" id="floatingPassword" placeholder="Confirm Password">

                        </div>

                      
                        <button class="w-100 btn btn-lg btn-primary" name="signup-submit" type="submit">Sign up</button>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>


</main