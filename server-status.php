<!DOCTYPE html>
<html>
<head>
    <title>Server Status</title>
    <!-- Add your CSS styles here -->
    <style>
        /* Your custom CSS styles go here */
    </style>
</head>
<body>
    
    <?php
    // Function to fetch the server-status page and display it
    function fetchServerStatus() {
        // Change this URL to match the location of your server-status page
        $serverStatusUrl = "http://localhost/server-status";

        // Fetch the content of the server-status page
        $serverStatusContent = file_get_contents($serverStatusUrl);

        // Output the content on the custom page
        echo $serverStatusContent;
    }

    // Call the function to fetch and display the server-status
    fetchServerStatus();
    ?>
</body>
</html>
