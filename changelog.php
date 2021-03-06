<?php header('Location: index.php'); ?>
<hr>
<h4>Changelog</h4>
[18.09.28] - 28.Sept.2018
*Fixed bug on Host page that shows incorrect CPU and Memory stats
*Added new option for SSL Key file in settings. Allowing uses to set key different than cert.


[18.09.24] - 24.SEPT.2018
*Added settings page. Users can now change location of the SSL certificate for noVNC connection
*Added user preferences to change theme. Added a dark theme
*The default theme now has a black navigation menu. The entire site theme is now based on the MIT Licensed Material Dark theme from creative-tim.com
*Modified user sidebar navigation to include just Host, Virtual Machines, Storage, and Networking, simplifying the menu
*Creating a new vm, storage pool, storage volume, and network fall on their respective pages
*Improved layout of the noVNC connection on domain-single.php
*Hid the XML on the domain-single.php page until user wants to edit it. Preventing accidental changes to guest
*Improved layout of the Host page Information
*Increased the number of error notifications that exist
*Changed the wallpapers on configuration pages


[18.08.11] - 11.AUG.2018
*Changes to the HTML/CSS theme have improved scrollbar apperance and better use of web page realestate
*The noVNC connection is loaded from an authenticated web page.
*The tokens for the noVNC connection are now 100 character random strings, which change everytime a VM page is loaded (domain-single.php)
*The console preview on the domain-single.php is now a live noVNC connection to the machine rather than a static image

[18.07.24] - 24.JUL.2018
*removed unnessary code from pages/footer.php Started adding support for mulitple languages.

[18.07.13] - 13.JUL.2018
*Changed the location of the noVNC default certificate to /etc/ssl/self.pem

[18.07.011] - 11.JUL.2018
* Official Stable release of the OpenVM dashboard
