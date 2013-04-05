CubieLight
==========

Light a LED for your CubieBoard
#How to use:
1.Boot your cubieboard<br />
2.make sure your cubieboard can connect to the internet<br />
3.use SSH,TLL Line,Terminal or VNC to enter these commands:<br />
sudo su<br />
apt-get install git -y<br />
apt-get install apache2 apache2-mpm-prefork apache2-utils apache2.2-common libapache2-mod-php5 libapr1 libaprutil1 libdbd-mysql-perl libdbi-perl libnet-daemon-perl libplrpc-perl libpq5 mysql-client-5.5 mysql-common mysql-server mysql-server-5.5 php5-common php5-mysql -y<br />
git clone https://github.com/TonyLianLong/CubieLight.git<br />
cd CubieLight<br />
rm /var/www/index.html<br />
cp index.php /var/www<br />
4.use your mobilephone or computer to visit http://ip (replace "ip" to your cubieboard's IP,you can use the "ifconfig" command)<br />
5.enjoy~<br />

You can change the PHP file to be useful.
