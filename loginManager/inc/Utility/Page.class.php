<?php

class Page  {

    public static $title = "Lab 09 - GFR - 91";

    static function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/lab09-gfr-91.css">

            <title><?php echo self::$title; ?></title>
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    public static function showUserDetails(User $u) { ?>
        <div class="loggedUser">
            <table class="table">
            <tbody>
                <tr class="row">
                    <th scope="row">First Name: </th>
                    <td class="col"><?php echo $u->getFirstName();?></td>   
                </tr>
                <tr class="row">
                <th scope="row">Last Name: </th>
                    <td class="col"><?php echo $u->getLastName();?></td>
                </tr>
                <tr class="row">
                    <th scope="row">Email: </th>
                    <td class="col"><?php echo $u->getEmail();?></td>
                </tr>
                <tr class="row">
                    <th scope="row">Phone Number: </th>
                    <td class="col"><?php echo $u->getPhone();?></td>
                </tr>
                <tr class="row">
                    <th scope="row">Gender: </th>
                    <td class="col"><?php echo $u->getGender();?></td>
                </tr>
                <tr class="row">
                    <th scope="row">Age: </th>
                    <td class="col"><?php echo $u->getAge();?></td>
                </tr>
                <tr>
                    <td><a href="Lab09-gfr-91-logout.php"><button class="btn btn-primary">Logout</button></a></td>
                </tr>
            </table>
        </div>
   
<?php }

    public static function showLogin() { ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <table>
            <tbody>
                <tr>
                    <td><label for="exampleInputEmail1">Username: </label></td>
                    <td><input type="text" placeholder="Enter Username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="exampleInputPassword1">Password:</label></td>
                    <td><input type="password" name="password" id="exampleInputPassword1" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-primary"></td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php }
    public static function thankYou(){
        echo '
        <div>
            <h1 class="display-3">Thank You!</h1>
            <hr>
            <p class="lead">
            <a class="btn btn-primary btn-sm" href="Lab09-gfr-91-login.php" role="button">Go back to Login</a>
            </p>
        </div>
        ';
    }

}