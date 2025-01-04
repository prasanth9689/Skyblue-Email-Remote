<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Path to your shell script
    $script_path = '/var/www/mail.skyblue.co.in/cp/bc.sh';

    // Execute the shell script
    $output = shell_exec($script_path);

    // Display the output
 //   echo "Script output: <pre>$output</pre>";
    
    
    $today = date("d-m-Y");

// Path to the file you want to download
$file = 'backup_file_'.$today.'.tar.gz';

// Check if the file exists
if (file_exists($file)) {
    /*
    
    // Set headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Read the file and output its contents
    readfile($file);

    // Exit to prevent further script execution
    exit;
    
    */
} else {
    // File not found
    die('File not found.'.$file);
}


}
?>
