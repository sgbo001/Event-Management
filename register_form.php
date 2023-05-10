<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="register.php" class ="form-group" method="POST">
                    <div class="form-group">
                            <label for="fname">First Name: </label>
                            <input type="text"
                                   id="fname"
                                   name="fname"
                                   class="form-control"
                                   value="<?php if (isset($fname)) echo $fname; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['fname'])) echo $errors['fname']; ?>
                            </span>
                        </div>
                       
                        <div class="form-group">
                            <label for="lname">Last Name: </label>
                            <input type="text"
                                   id="lname"
                                   name="lname"
                                   class="form-control"
                                   value="<?php if (isset($lname)) echo $lname; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['lname'])) echo $errors['lname']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   value="<?php if (isset($email)) echo $email; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['email'])) echo $errors['email']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="phoneNo">Phone Number: </label>
                            <input type="text"
                                   id="phoneNo"
                                   name="phoneNo"
                                   class="form-control"
                                   value="<?php if (isset($phoneNo)) echo $phoneNo; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['phoneNo'])) echo $errors['phoneNo']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($username)) echo $username; ?>"
                                   >
                            <span class="error">
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control"
                                   value=""
                                   >
                            <span class="error">
                                <?php if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                            </span>
                        </div>
                        <button type="submit" class = "btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
