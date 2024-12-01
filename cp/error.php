<?php
// Path to the Apache error log file
$log_file = '/var/log/apache2/error.log';


// Check if the log file exists
if (file_exists($log_file)) {
    // Read the log file contents
    $log_content = file_get_contents($log_file);
} else {
    $log_content = "Log file not found.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apache Error Logs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .log-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="log-container">
        <h1>Apache Error Logs</h1>

        
        
        <pre><?php echo htmlspecialchars($log_content); ?></pre>
    </div>
</body>
</html>
