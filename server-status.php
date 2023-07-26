<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        dl,
        pre,
        p,
        table {
            max-width: 800px;
            margin: 20px auto;
            border: 1px solid #1abc9c;
            background-color: #222;
            color: #f1f1f1;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(26, 188, 156, 0.1);
        }

        dt {
            margin-bottom: 10px;
            font-weight: bold;
        }

        pre {
            white-space: pre-wrap;
            font-size: 12px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #1abc9c;
        }

        th {
            background-color: #1abc9c;
        }

        th,
        td {
            font-weight: normal;
        }
    </style>
</head>

<body>

    <?php
    // Function to fetch the server-status page and display it
    function fetchServerStatus()
    {
        // Change this URL to match the location of your server-status page
        $serverStatusUrl = "http://localhost/server-status";

        // Fetch the content of the server-status page
        $serverStatusContent = file_get_contents($serverStatusUrl);

        // Remove the <hr> and <hr /> elements from the fetched content
        $serverStatusContent = str_replace(['<hr>', '<hr />'], '', $serverStatusContent);

        // Remove inline styles from the table
        $serverStatusContent = str_replace([' cellspacing=0 cellpadding=0', ' bgcolor="#000000"', ' bgcolor="#ffffff"', '<font color="#ffffff" face="Arial,Helvetica">', '</font>'], '', $serverStatusContent);

        // Output the content on the custom page
        echo $serverStatusContent;
    }

    // Call the function to fetch and display the server-status
    fetchServerStatus();
    ?>

    <div class="footer">
        Powered by <a href="https://www.apachefriends.org/" target="_blank" style="margin-top: 10px;">XAMPP</a>
    </div>
</body>

</html>