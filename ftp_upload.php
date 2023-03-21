<?php
    $statusMsg = '';

    //Check if form is submitted and file was uploaded without errors
    if (isset($_POST['submit']) && $_FILES["srcfile"]["error"] == 0) {

        // Check if the file was uploaded successfully
        if (is_uploaded_file($_FILES['srcfile']['tmp_name'])) {

            // Name of file to upload
            $fileName = $_FILES['srcfile']['name'];

            // FTP settings
            $ftp_server = 'ftp.example.com'; // change this
            $ftp_username = 'ftpusername'; // change this
            $ftp_password = 'ftppassword'; // change this

            // Define some variables
            $server_dir = 'demo.pagos.cafisa.org/php_upload_and_download_files_via_ftp_server/uploads/'; // change this

            // Specify the path of the file to upload
            $local_file = $_FILES['srcfile']['tmp_name'];

            // Specify the path and file name where will be uploaded
            $server_file = $server_dir . $fileName;
            
            // Set up basic connection FTP server
            $ftpcon = ftp_connect($ftp_server) or die('Could not connect to $ftp_server');
            
            // FTP login
            // $ftplogin = ftp_login($ftpcon, $ftp_username, $ftp_password);
            if (@ftp_login($ftpcon, $ftp_username, $ftp_password)){
                // Successfully connected
                // FTP upload | Two modes: FTP_ASCII or FTP_BINARY
                if (ftp_put($ftpcon, $server_file, $local_file, FTP_BINARY)) {
                    $statusMsg = 'The file ' .$fileName. ' uploaded successfully to FTP server!';
                    $statusMsg = $statusMsg . '<a href="ftp_download.php?fileName=' .$fileName.' " title="download">Click to download</a>';
                } else {
                    $statusMsg = 'Error uploading ' .$fileName. ' file! Please try again later...';
                    // header('Location: index.php');
                }
                // Close FTP connection 
                ftp_close($ftpcon);
            } else {
                $statusMsg = 'Error login to FTP server! Please try again later...';
            }
        } else {
            $statusMsg = 'Sorry, there was an error uploading your file...';
        }
    } else {
        $statusMsg = 'File not selected or with errors...';
    }

    // Display status message
    echo $statusMsg;

    // Show a link to view the uploaded images
    echo '<div style="text-align: center; padding: 10px; font-size: 20px;">
            <a href="./index.php" title="return">Return to main page</a>
        </div>';
?>