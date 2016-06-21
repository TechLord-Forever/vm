<!DNCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>Nextloud VM</title>
<style>
body {
	background-color: #0082c9;
	font-weight: 300;
	font-size: 1em;
	line-height: 1.6em;
	font-family: 'Open Sans', Frutiger, Calibri, 'Myriad Pro', Myriad, sans-serif;
	color: white;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	align: center;
	text-align: center;
	background: #0082c9; /* Old browsers */
	background: -moz-linear-gradient(top, #0082c9 0%, #35537a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0082c9), color-stop(100%,#35537a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #0082c9 0%,#35537a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #0082c9 0%,#35537a 100%); /* Opera11.10+ */
	background: -ms-linear-gradient(top, #0082c9 0%,#35537a 100%); /* IE10+ */
	background: linear-gradient(top, #0082c9 0%,#35537a 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0082c9', endColorstr='#35537a',GradientType=0 ); /* IE6-9 */
}
div.logotext   {
	width: 50%;
    	margin: 0 auto;
}
div.logo   {
        background-image: url('/nextcloud/core/img/logo-icon.svg');
        background-repeat: no-repeat; top center;
        width: 50%;
	height: 25%;
        margin: 0 auto;
	background-size: 40%;
	margin-left: 40%;
        margin-right: 20%;
}
pre  {
	padding:10pt;
	width: 50%
        text-align: center;
        margin-left: 20%;
	margin-right: 20%;
}
div.information {
        align: center;
	width: 50%;
        margin: 10px auto;
	display: block;
        padding: 10px;
        background-color: rgba(0,0,0,.3);
        color: #fff;
        text-align: left;
        border-radius: 3px;
        cursor: default;
}
/* unvisited link */
a:link {
    color: #FFFFFF;
}
/* visited link */
a:visited {
    color: #FFFFFF;
}
/* mouse over link */
a:hover {
    color: #E0E0E0;
}
/* selected link */
a:active {
    color: #E0E0E0;
}
</style>

<br>
<div class="logo">
</div>
<div class="logotext">
<h2>Nextcloud VM - <a href="https://www.techandme.se/pre-configured-nextcloud-installaton/" target="_blank">Tech and Me</a></h2>
</div>
<br>
<div class="information">
<p>Thank you for downloading the pre-configured Nextcloud VM! If you see this page, you have successfully mounted the Nextcloud VM on the computer that will act as host for Nextcloud.</p>
<p>To complete the installation, please run the setup script. You can find login details in the middle of this page.
<p>Don't hesitate to ask if you have any questions. My email is: <a href="mailto:daniel@techandme.se?Subject=Before%20login%20-%20Nextcloud%20VM" target="_top">daniel@techandme.se</a> You can also check the <a href="https://www.techandme.se/complete-install-instructions-nextcloud/" target="_blank">complete install instructions</a>.</p>
<p>Please <a href="https://www.techandme.se/thank_you">donate</a> if you like it. All the donations will go to server costs and developing, making this VM even better.</p>

</div>

<h2><a href="https://www.techandme.se/user-and-password/" target="_blank">Login</a> to Nextcloud</h2>

<div class="information">
<p>Default User:</p>
<h3>ncadmin</h3>
<p>Default Password:</p>
<h3>nextcloud</h3>
<p>Note: The setup script will ask you to change the default password to your own. It's also recommended to change the default user. Do this by adding another admin user, log out from ncadmin, and login with your new user, then delete ncadmin.</p>
<br>
<center>
<h3> How to mount the VM and and login:</h3>
</center>
<p>Before you can use Nextcloud you have to run the setup script to complete the installation. This is easily done by just typing 'nextcloud' when you log in to the terminal for the first time.</p>
<p>The full path to the setup script is: /var/scripts/nextcloud-startup-script.sh. When the script is finnished it will be deleted, as it's only used the first time you boot the machine.</p>
<center>
<iframe width="560" height="315" src="https://www.youtube.com/embed/jhbkTQ9yA-4" frameborder="0" allowfullscreen></iframe>
</center>
</div>

<h2>Access Nextcloud</h2>

<div class="information">
<p>Use one of the following addresses, HTTPS is preffered:
<h3>
<ul>
 <li><a href="http://<?=$_SERVER['SERVER_NAME'];?>/nextcloud"        >http://<?=$_SERVER['SERVER_NAME'];?></a> (HTTP)
 <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>/nextcloud"             >https://<?=$_SERVER['SERVER_NAME'];?></a> (HTTPS)
 <p>
 </ul>
</h3>
<p>Note: Please accept the warning in the browser if you connect via HTTPS. It is recommended
<br> to <a href="https://www.techandme.se/publish-your-server-online" target="_blank">buy your own certificate and replace the self-signed certificate to your own.</a>
<br>
<p>Note: Before you can login you have to run the setup script, as descirbed in the video above.
</div>

<h2>Access Webmin</h2>

<div class="information">
<p>Use one of the following addresses, HTTPS is preffered:
<h3>
<ul>
 <li><a href="http://<?=$_SERVER['SERVER_NAME'];?>:10000"        >http://<?=$_SERVER['SERVER_NAME'];?></a> (HTTP)
 <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>:10000"             >https://<?=$_SERVER['SERVER_NAME'];?></a> (HTTPS)
 <p>
 </ul>
</h3>
<p>Note: Please accept the warning in the browser if you connect via HTTPS.</p>
<h3>
<a href="https://www.techandme.se/user-and-password/" target="_blank">Login details</a>
</h3>
<p> Note: Webmin is installed when you run the setup script. To access Webmin externally you have to open port 10000 in your router.</p>
</div>

<h2>Access phpMyadmin</h2>

<div class="information">
<p>Use one of the following addresses, HTTPS is preffered:
<h3>
<ul>
 <li><a href="http://<?=$_SERVER['SERVER_NAME'];?>/phpmyadmin"        >http://<?=$_SERVER['SERVER_NAME'];?></a> (HTTP)
 <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>/phpmyadmin"             >https://<?=$_SERVER['SERVER_NAME'];?></a> (HTTPS)
 <p>
 </ul>
</h3>
<p>Note: Please accept the warning in the browser if you connect via HTTPS.</p>
<h3>
<a href="https://www.techandme.se/user-and-password/" target="_blank">Login details</a>
</h3>
<p>Note: Your external IP is set as approved in /etc/apache2/conf-available/phpmyadmin.conf, all other access is forbidden.<p/>
</div>