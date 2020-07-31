<?php

$zip = new ZipArchive();

if ($zip->open('./ftp-lolipop-jp-34-66885.zip') === true) {
	if ($zip->extractTo('./') === true) {
		$zip->close();
	} else {
		exit('Extract Error');
	}
} else {
	exit('Open Error');
}

echo 'Unzip Complete';

?>
