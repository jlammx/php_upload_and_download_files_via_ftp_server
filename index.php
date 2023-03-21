<!DOCTYPE html>
<html> 
    <head>
        <title>Upload and download files via FTP server</title>
        <meta charset="UTF-8">
        <meta name="description" content="Upload and download files via FTP server using PHP">
        <meta name="keywords" content="PHP, FTP, Files, Upload, Download">
        <meta name="author" content="JORGE LUIS AGUIRRE MARTINEZ">
        <meta name="publish_date" property="og:publish_date" content="2023-03-20T17:00:00-0600">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <br/>
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2 well" style="background:none;">
                <form action="ftp_upload.php" method="post" enctype="multipart/form-data">
                    <legend>Please Choose File to Upload</legend>
                    <div class="form-group">
                        <input type="file" name="srcfile" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Upload File to FTP Server" class="btn btn-warning"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>