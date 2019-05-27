<?php
/**----------------------------------------------------------------------------------
 * Microsoft Developer & Platform Evangelism
 *
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *
 * THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, 
 * EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND/OR FITNESS FOR A PARTICULAR PURPOSE.
 *----------------------------------------------------------------------------------
 * The example companies, organizations, products, domain names,
 * e-mail addresses, logos, people, places, and events depicted
 * herein are fictitious.  No association with any real company,
 * organization, product, domain name, email address, logo, person,
 * places, or events is intended or should be inferred.
 *----------------------------------------------------------------------------------
 **/
/** -------------------------------------------------------------
# Azure Storage Blob Sample - Demonstrate how to use the Blob Storage service. 
# Blob storage stores unstructured data such as text, binary data, documents or media files. 
# Blobs can be accessed from anywhere in the world via HTTP or HTTPS. 
#
# Documentation References: 
#  - Associated Article - https://docs.microsoft.com/en-us/azure/storage/blobs/storage-quickstart-blobs-php 
#  - What is a Storage Account - http://azure.microsoft.com/en-us/documentation/articles/storage-whatis-account/ 
#  - Getting Started with Blobs - https://azure.microsoft.com/en-us/documentation/articles/storage-php-how-to-use-blobs/
#  - Blob Service Concepts - http://msdn.microsoft.com/en-us/library/dd179376.aspx 
#  - Blob Service REST API - http://msdn.microsoft.com/en-us/library/dd135733.aspx 
#  - Blob Service PHP API - https://github.com/Azure/azure-storage-php
#  - Storage Emulator - http://azure.microsoft.com/en-us/documentation/articles/storage-use-emulator/ 
#
 **/

require_once 'vendor/autoload.php';
require_once "./random_string.php";
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=submission2joko;AccountKey=XVvvcI0On9aVnlcsElQa+d0yJ1QBanCJX69sVfJ1wK+Rqbe2H7pz+d+A7C3q2TYHRZq3wDmGVjIdq0/mb5G9lQ==;EndpointSuffix=core.windows.net";
$blobClient = BlobRestProxy::createBlobService($connectionString);
$containerName = "submission2joko";

if (isset($_POST['submit'])) {
	$fileToUpload = $_FILES["fileToUpload"]["name"];
	$content = fopen($_FILES["fileToUpload"]["tmp_name"], "r");
	echo fread($content, filesize($fileToUpload));

	$blobClient->createBlockBlob($containerName, $fileToUpload, $content);
	header("Location: index.php");
}

$listBlobsOptions = new ListBlobsOptions();
$listBlobsOptions->setPrefix("");
$result = $blobClient->listBlobs($containerName, $listBlobsOptions);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Azure Vision Test</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		input {
			background-color: #4CAF50;
			/* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		#blob {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#blob td,
		#blob th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#blob tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#blob tr:hover {
			background-color: #ddd;
		}

		#blob th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>

<body>

	<h1>Upload Image to Analyze:</h1>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" accept=".jpeg,.jpg,.png" required="">
		<input type="submit" name="submit" value="Upload">
	</form>

	<br>
	<table id="blob">
		<tr>
			<th>File Name</th>
			<th>URL</th>
			<th>Action</th>
		</tr>

		<tbody>
			<?php
			do {
				foreach ($result->getBlobs() as $blob) {
					?>
					<tr>
						<td><?php echo $blob->getName() ?></td>
						<td><?php echo $blob->getUrl() ?></td>
						<td>
							<form action="analyze.php" method="post">
								<input type="hidden" name="url" value="<?php echo $blob->getUrl() ?>">
								<input type="submit" name="submit" value="Analyze">
							</form>
						</td>
					</tr>
				<?php
			}
			$listBlobsOptions->setContinuationToken($result->getContinuationToken());
		} while ($result->getContinuationToken());
		?>
		</tbody>
	</table>
	</div>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

</body>

</html>