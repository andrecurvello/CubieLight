<?php
if(isset($_GET['light'])){
echo "Light";
if($_GET['light'] == 1){
echo "1";
`echo 1 > /sys/class/leds/green:ph20:led1/brightness`;
}else if($_GET['light'] == 2){
echo "2";
`echo 1 > /sys/class/leds/blue:ph21:led2/brightness`;
}else if($_GET['light'] == 3){
echo "1 Off";
`echo 0 > /sys/class/leds/green:ph20:led1/brightness`;
}else if($_GET['light'] == 4){
echo "2 Off";
`echo 0 > /sys/class/leds/blue:ph21:led2/brightness`;
}else if($_GET['light'] == 5){
echo "1 Timer";
`echo timer > /sys/class/leds/green:ph20:led1/trigger`;
}else if($_GET['light'] == 6){
echo "2 Timer";
`echo timer > /sys/class/leds/blue:ph21:led2/trigger`;
}else if($_GET['light'] == 7){
echo "1 No-timer";
`echo none > /sys/class/leds/green:ph20:led1/trigger`;
}else if($_GET['light'] == 8){
echo "2 No-timer";
`echo none > /sys/class/leds/blue:ph21:led2/trigger`;
}else{
echo "Off";
`echo 0 > /sys/class/leds/blue:ph21:led2/brightness`;
`echo 0 > /sys/class/leds/green:ph20:led1/brightness`;
}
}
?>
<br />
<a href="?light=0">Turn Off All Lights</a>
<br />
<a href="?light=1">Turn On the Green Light</a>
<br />
<a href="?light=3">Turn Off the Green Light</a>
<br />
<a href="?light=2">Turn On the Blue Light</a>
<br />
<a href="?light=4">Turn Off the Blue Light</a>
<br />
<a href="?light=5">Turn On the Green Light's timer</a>
<br />
<a href="?light=7">Turn Off the Green Light's timer</a>
<br />
<a href="?light=6">Turn On the Blue Light's timer</a>
<br />
<a href="?light=8">Turn Off the Blue Light's timer</a>
<br />
By TLL
<br />
Please Use Cubie Board
