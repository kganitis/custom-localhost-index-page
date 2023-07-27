# Customized XAMPP Localhost Page

A customized index.html page for XAMPP's localhost on macOS, offering a comprehensive overview of XAMPP Server Status and essential links. This user-friendly interface provides access to XAMPP Dashboard, phpMyAdmin, phpinfo(), Bitnami applications, FAQs, How-To-Guides, and personal web projects. The page is mobile-friendly, making it easy to view your projects from another smart device in your local network.

## Features

- Server Status: Get real-time information on server accesses, traffic, and uptime.
- Quick Links: Direct access to XAMPP Dashboard, phpMyAdmin, and more for efficient server management.
- Essential links to Bitnami applications, FAQs, and How-To-Guides.
- User Projects: Showcase your web projects by listing them with brief descriptions.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- Font Awesome

## Setup and Usage

1. Clone this repository to your local machine.
2. Copy the `index.html`, `get_server_status.php`, and `server_status.php` files to your XAMPP server's root directory.
3. Place the `connectwork.png` in the `/img` directory of XAMPP server's root directory.
4. Open your web browser and navigate to the XAMPP server's URL to view the customized page.

## Accessing Customized Localhost Page from Other Devices on your Local Network

1. Find your IP Address:

   First, you need to find the IP address of the computer where XAMPP is running. To do this, open the Terminal application and type the following command:
   
   ```
   ifconfig | grep "inet "
   ```
   
   Look for the IP address associated with your network interface (e.g., en0 or en1). The IP address will typically look like 192.168.x.x or 10.x.x.x.
   
2. Configure XAMPP to allow remote access:
    
   By default, XAMPP only listens to the localhost (127.0.0.1), so you need to configure it to accept connections from other devices on your local network. Follow these steps:
    
   a. Open the XAMPP control panel.
        
   b. Click on the "Config" button for the Apache server and select "httpd.conf" to open the Apache configuration file in a text editor.    
        
   c. Look for the line that starts with "Listen" and change it to: `Listen 0.0.0.0:80`. This tells Apache to listen on all available network interfaces.

   d. In the `<Directory>` block of the configuration file, look for a line that contains `Require all granted`. If you find this line already present, you don't need to make any changes, as it allows access to all clients. If you don't find it, add it yourself. Place it within the         `<Directory>` block, typically right after the `AllowOverride All line` (if it exists), like this (there will probably exist many comment lines, starting with '#'):
   
   ```
   <Directory "/Applications/XAMPP/xamppfiles/htdocs">
       AllowOverride All
       Require all granted
   </Directory>
   ```
   
   Make sure to add it exactly as shown above, with the appropriate indentation. Save and close the httpd.conf file.
   
3. Allow Apache through the macOS Firewall (if applicable):

   If you have the macOS Firewall enabled, it might block incoming connections to Apache. To allow Apache through the firewall, go to System Preferences > Security & Privacy > Firewall > Firewall Options. Ensure that "httpd" or "XAMPP" is allowed incoming connections.

4. Test your connection:

   Restart the Apache server from the XAMPP control panel. Ensure your macOS computer and the device you want to access localhost from are on the same local network. On the remote device (e.g., another computer, smartphone, or tablet), open a web browser, and enter the IP address of your macOS computer. If everything is set up correctly, you should now be able to access your XAMPP's customized index.html page.

## Compatibility

- Works with XAMPP on macOS.
- Mobile-friendly design ensures a seamless experience on smartphones and tablets.

## License

This project is licensed under the [MIT License](LICENSE).

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please open an issue or submit a pull request.
