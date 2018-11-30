<?php
function clean($string)
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
$response = "";

    $base_url = "http://www.averosoft.com/";
    $to_mail = "hr@averosoft.com";

    $jobtitle = isset($_POST['jobtitle']) ? $_POST['jobtitle'] : 'Direct Form';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $new_name = clean($name);
    $new_phone = clean($phone);

    if (!is_dir('upload')) {
        mkdir("upload", 0777);
    }
    $path = "upload/" . $new_name . "-" . $new_phone;
    if (!is_dir($path)) {
        mkdir($path, 0777);
    }
    $file_upload = array();
    $fileName = time().'_'.$_FILES['file']['name'];
            $temp = $path . "/";
            $tmp = $_FILES['file']['tmp_name'];
            $temp = $temp . basename(preg_replace('/\s+/', '_', $fileName));
            if (move_uploaded_file($tmp, $temp)) {

            }
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From: <' . $email . '>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    $subject = $name . " from Careers Page  -- " . $jobtitle;
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
        <th>City</th>
        <td>" . $city . "</td>
        </tr>
        <tr>
        <th>message</th>
        <td>" . $message . "</td>
        </tr>
        <tr>
        <th>Documents</th>
        <td><a href=" . $base_url . $temp . ">Download File</a></td>
        </tr>
        </table>
        </body>
        </html>
        ";
    if(mail($to_mail, $subject, $message, $headers)) {
        $response = "ok";
    } else {
        $response = "err";
    }
    echo $response;

