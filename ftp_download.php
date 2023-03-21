<?php
    $statusMsg = '';

    if (isset($_GET['fileName'])) {

        // Name of file to download
        $fileName = $_GET['fileName'];

        // FTP settings
        $ftp_server = 'ftp.example.com'; // change this
        $ftp_username = 'ftpusername'; // change this
        $ftp_password = 'ftppassword'; // change this

        // Define some variables
        $server_dir = 'demo.pagos.cafisa.org/php_upload_and_download_files_via_ftp_server/uploads/'; // change this

        // Retrieve the path to the Downloads folder on Windows.
        // $local_dir = getenv('HOMEDRIVE').getenv('HOMEPATH').'\Downloads\\';
        $local_dir = 'downloads/';

        // Specify the path and file name from will be downloaded
        $server_file = $server_dir . $fileName;

        // Specify the path and file name to download
        $local_file = $local_dir . $fileName;

        // Set up basic connection FTP server
        $ftpcon = ftp_connect($ftp_server) or die('Could not connect to $ftp_server');

        // FTP login
        // $ftplogin = ftp_login($ftpcon, $ftp_username, $ftp_password);
        if (@ftp_login($ftpcon, $ftp_username, $ftp_password)){
            // Successfully connected
            // Try to download $server_file and save to $local_file
            // FTP download | Two modes: FTP_ASCII or FTP_BINARY
            if (ftp_get($ftpcon, $local_file, $server_file, FTP_BINARY)) {
                $statusMsg = "The file $fileName downloaded successfully to $local_file\n";
            } else {
                $statusMsg = 'Error downloading $server_file file! Please try again later...';
            }
            // Close FTP connection 
            ftp_close($ftpcon);
        } else {
            $statusMsg = 'Error login to FTP server! Please try again later...';
        }

    } else {
        $statusMsg = 'Parameter not received from last page...';
    }
    
    // Display status message
    echo $statusMsg;

    // Show a link to view the uploaded images
    echo '<div style="text-align: center; padding: 10px; font-size: 20px;">
        <a href="./index.php" title="return">Return to main page</a>
    </div>';
?>