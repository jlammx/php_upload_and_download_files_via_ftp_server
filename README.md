# PHP | Upload and download files via FTP server

This repository is an example of upload and download files via FTP server using PHP.

The primary purpose of an FTP server is to allow users to upload files.  
Uploading and downloading files using PHP FTP functions is almost similar to doing it with an FTP client.

- FTP Upload - [ftp_put()](https://www.php.net/manual/en/function.ftp-put.php)
- FTP Download - [ftp_get()](https://www.php.net/manual/en/function.ftp-get.php)

### Functions

The **ftp_connect**(ftp_server) and **ftp_login**(ftp_connection, ftp_username, ftp_password) functions are used to establish the connection to the provided ftp host and log in with the ftp credentials.
```php
$ftp_conn = ftp_connect($ftp_server);
$login = ftp_login($ftp_conn, $ftp_username, $ftp_password);
```

After successful logon, can use the **ftp_put()** or **ftp_get()** functions.  

The **ftp_put()** fuction transfers the local file to the remote directory on FTP server. The function returns true or false based on the upload process and the success or error message will be displayed accordingly.

The **ftp_get()** fuction transfers the remote file on FTP server to the local directory. The function returns true or false based on the download process and the success or error message will be displayed accordingly.

```php
ftp_put(ftp_conn, remote_file, local_file, mode, startpos);
// OR
ftp_get(ftp_conn, local_file, remote_file, mode, startpos);
```

Once the file transfer is completed, the ftp stream will be closed using the **ftp_close()** function.
```php
ftp_close($ftp_conn);
```

### Parameters
- **ftp_conn:** ftp_conn is a required parameter and it is used to specify the FTP connection.
- **remote_file:** remote_file is a required parameter and it is used to specify the file path to the upload path.
- **local_file:** local_file is a required parameter and it is used to specify the path of the file to upload.
- **mode:** mode is an optional parameter and it is used to specify the transfer mode. It has 2 possible values: 1) FTP_ASCII 2) FTP_BINARY.
- **startpos:** startpos is an optional parameter and it is used to specify the position in the remote file to start uploading to.

### Steps
1. [Create HTML form to upload file](/index.php)
2. [Define FTP settings](/ftp_upload.php)
3. [Connect the FTP server](/ftp_upload.php)
4. [Login the FTP server](/ftp_upload.php)
5. [Upload or download file of FTP server](/ftp_download.php)
6. [Close the FTP server connection](/ftp_download.php)


### Screenshots

> 🔴 Live 
<p align="left">
	<a href=https://youtu.be/oGymjgUaMbA target="_blank"><img src="https://markdown-videos.deta.dev/youtube/oGymjgUaMbA" height="250"></a></img>
</p>


### Skills
<p align="left">
	<a href="https://dart.dev" target="_blank">
		<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="40" height="40"/>
	</a> 
    <a href="https://www.mysql.com" target="_blank">
        <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="40" height="40"/>
    </a>
</p>

<br>


<p align="center">
	<div align="center" inline>
		<span> <a href="https://www.linkedin.com/in/jlammx/" target="_blank">
			<img src="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Logo.svg.original.svg" alt="Jorge Aguirre" height="25"/></a>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
</p>

<p align="center"> Last updated at 20 Mar 2023</p>
