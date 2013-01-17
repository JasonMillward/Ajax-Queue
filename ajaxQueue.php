<?php $userArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>jCode Lab</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Jason Millward">

        <!-- Load all of the CSS -->
        <link href="http://lab.jcode.me/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://lab.jcode.me/assets/css/common.css" rel="stylesheet" type="text/css">


        <!-- "IE plays nice with html5" said no one, ever -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fancy icon, for fancy browsers. -->
        <link rel="shortcut icon" href="http://lab.jcode.me//assets/ico/favicon.png">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="140px">Customer ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th width="140px">Eligible</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($userArray as $userID) { ?>
                        <tr>
                            <td><?php print $userID ?></td>
                            <td>John</td>
                            <td>Smith</td>
                            <td><span id="<?php print $userID ?>" class="label">Waiting...</span></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- jCode footer -->
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner navbar-jcode">
                <div class="footerLeft">
                    &copy; jCode 2012
                    <br/>
                    [LEGAL STUFF HERE I GUESS]
                </div>
                <div class="footerRight">
                    Built using <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>
                <br/>
                    Designed by <a href="http://jcode.me/">Jason Millward</a>
                </div>
            </div>
        </div>


        <!-- Load jquery and bootstrap.js -->
        <script src="http://lab.jcode.me/assets/js/jquery.js"></script>
        <script src="http://lab.jcode.me/assets/js/bootstrap.min.js"></script>

        <script src="./ajaxQueue.js"></script>

    </body>
</html>