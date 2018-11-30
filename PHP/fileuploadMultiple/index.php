<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rohini Kumar</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">


    </head>
    <body>
        <?php

        function clean($string) {
            $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
            $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

            return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
        }

        $response = "";
        if (isset($_POST['submit_upload'])) {
            $base_url = "http://www.keystroke99.com";
            $to_mail = "keystroke99@gmail.com";


            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $new_name = clean($name);
            $new_phone = clean($phone);
            if (!is_dir('upload')) {
                mkdir("upload", 0777);
            }
            $path = "upload/" . $new_name . "-" . $new_phone;
            if (!is_dir($path)) {
                mkdir($path, 0777);
            }

            $count = 0;
            $file_upload = array();
            foreach ($_FILES['attachment']['name'] as $filename) {
                if (is_uploaded_file($_FILES['attachment']['tmp_name'][$count])) {
                    $temp = $path . "/";
                    $tmp = $_FILES['attachment']['tmp_name'][$count];

                    $temp = $temp . basename($filename);
                    if (move_uploaded_file($tmp, $temp)) {
                        $file_upload[$count] = array("name" => basename($filename), "path" => $base_url . "/" . $temp);
                    }
                    $count = $count + 1;
                    $temp = '';
                    $tmp = '';
                }
            }

            // mail function
            $attach_content = "";
            foreach ($file_upload as $key => $val) {
                $attach_content .= '<p><a href="' . $val['path'] . '">' . $val['name'] . '</a></p>';
            }


            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <' . $email . '>' . "\r\n";
            //$headers .= 'Cc: myboss@example.com' . "\r\n";

            $subject = $name . " from Rohini Kumar";

            $message = "
<html>
<head>
<title>" . $subject . "</title>
</head>
<body>
<p></p>
<table width=80% border = 1>
<tr>
<th>Name</th>
<td>" . $name . "</td>
</tr>
<tr>
<th>Email</th>
<td>" . $email . "</td>
</tr>
<tr>
<th>Phone</th>
<td>" . $phone . "</td>
</tr>
<tr>
<th>Documents</th>
<td>" . $attach_content . "</td>    
</tr>
</table>
</body>
</html>
";

            mail($to_mail, $subject, $message, $headers);
            $response = "Our team contact you shortly";
        }
        ?>
        <!--Preloader-->
        <div class="se-pre-con"></div>
        <section id="home-section" class="main-banner">
            <div class="bg-gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="banner-text">
                                <h1 class="big-text">Rohini Kumar</h1>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <!--Login Div-->
                            <div class="loginDiv clearfix">
                                <h2 class="login-title">Upload </h2>
                                <?php if ($response != "") { ?>
                                    <h4 class="text-center text-success"><?php echo $response; ?></h4>
<?php } ?>
                                <form action="" class="clearfix" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input class="form-control myInput" type="text" placeholder="Enter Name" name="name" required>
                                        <span class="input-icon"><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control myInput" type="email" placeholder="Enter Your Email " name="email" required>
                                        <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control myInput" type="number" placeholder="Enter Your Number " name="phone" required>
                                        <span class="input-icon"><i class="fa fa-phone-square"></i></span>
                                    </div>
                                    <div class="form-group ">						 
                                        <input id="attachment_0" class="form-control myInput sai" name="attachment[0]" type="file" placeholder="upload Doc" value="" required />
                                        <span class="input-icon"><i class="fa fa-upload"></i></span>
                                    </div>
                                    <div class="form-group" id="addmore_btn">
                                        <input class="form-control myInput kri" type="button" value="Add More" id="addmore">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" name="submit_upload">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/anime.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>

        <script>
            $(document).ready(function () {
                var addmore = 1;
                $("#addmore").click(function () {
                    var content = '<div class="form-group "><input id="attachment_' + addmore + '" class="form-control myInput sai" name="attachment[' + addmore + ']" type="file" placeholder="upload Doc" value="" required /><span class="input-icon"><i class="fa fa-upload"></i></span></div>';
                    $("#addmore_btn").before(content);
                    addmore++;
                });
            });
        </script>
    </body>
</html>
