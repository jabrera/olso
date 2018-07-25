<?php 
header("Content-type: text/css");
require_once("../../../../Library/Loader.php");
$load = new Loader();
$load->__set("dir", "../../../../Library/Helpers/");
$load->start();

$color = array("red_lighten-5" => "#ffebee", "red_lighten-4" => "#ffcdd2", "red_lighten-3" => "#ef9a9a", "red_lighten-2" => "#e57373", "red_lighten-1" => "#ef5350", "red" => "#f44336", "red_darken-1" => "#e53935", "red_darken-2" => "#d32f2f", "red_darken-3" => "#c62828", "red_darken-4" => "#b71c1c", "red_accent-1" => "#ff8a80", "red_accent-2" => "#ff5252", "red_accent-3" => "#ff1744", "red_accent-4" => "#d50000", "pink_lighten-5" => "#fce4ec", "pink_lighten-4" => "#f8bbd0", "pink_lighten-3" => "#f48fb1", "pink_lighten-2" => "#f06292", "pink_lighten-1" => "#ec407a", "pink" => "#e91e63", "pink_darken-1" => "#d81b60", "pink_darken-2" => "#c2185b", "pink_darken-3" => "#ad1457", "pink_darken-4" => "#880e4f", "pink_accent-1" => "#ff80ab", "pink_accent-2" => "#ff4081", "pink_accent-3" => "#f50057", "pink_accent-4" => "#c51162", "purple_lighten-5" => "#f3e5f5", "purple_lighten-4" => "#e1bee7", "purple_lighten-3" => "#ce93d8", "purple_lighten-2" => "#ba68c8", "purple_lighten-1" => "#ab47bc", "purple" => "#9c27b0", "purple_darken-1" => "#8e24aa", "purple_darken-2" => "#7b1fa2", "purple_darken-3" => "#6a1b9a", "purple_darken-4" => "#4a148c", "purple_accent-1" => "#ea80fc", "purple_accent-2" => "#e040fb", "purple_accent-3" => "#d500f9", "purple_accent-4" => "#aa00ff", "deep-purple_lighten-5" => "#ede7f6", "deep-purple_lighten-4" => "#d1c4e9", "deep-purple_lighten-3" => "#b39ddb", "deep-purple_lighten-2" => "#9575cd", "deep-purple_lighten-1" => "#7e57c2", "deep-purple" => "#673ab7", "deep-purple_darken-1" => "#5e35b1", "deep-purple_darken-2" => "#512da8", "deep-purple_darken-3" => "#4527a0", "deep-purple_darken-4" => "#311b92", "deep-purple_accent-1" => "#b388ff", "deep-purple_accent-2" => "#7c4dff", "deep-purple_accent-3" => "#651fff", "deep-purple_accent-4" => "#6200ea", "indigo_lighten-5" => "#e8eaf6", "indigo_lighten-4" => "#c5cae9", "indigo_lighten-3" => "#9fa8da", "indigo_lighten-2" => "#7986cb", "indigo_lighten-1" => "#5c6bc0", "indigo" => "#3f51b5", "indigo_darken-1" => "#3949ab", "indigo_darken-2" => "#303f9f", "indigo_darken-3" => "#283593", "indigo_darken-4" => "#1a237e", "indigo_accent-1" => "#8c9eff", "indigo_accent-2" => "#536dfe", "indigo_accent-3" => "#3d5afe", "indigo_accent-4" => "#304ffe", "blue_lighten-5" => "#e3f2fd", "blue_lighten-4" => "#bbdefb", "blue_lighten-3" => "#90caf9", "blue_lighten-2" => "#64b5f6", "blue_lighten-1" => "#42a5f5", "blue" => "#2196f3", "blue_darken-1" => "#1e88e5", "blue_darken-2" => "#1976d2", "blue_darken-3" => "#1565c0", "blue_darken-4" => "#0d47a1", "blue_accent-1" => "#82b1ff", "blue_accent-2" => "#448aff", "blue_accent-3" => "#2979ff", "blue_accent-4" => "#2962ff", "light-blue_lighten-5" => "#e1f5fe", "light-blue_lighten-4" => "#b3e5fc", "light-blue_lighten-3" => "#81d4fa", "light-blue_lighten-2" => "#4fc3f7", "light-blue_lighten-1" => "#29b6f6", "light-blue" => "#03a9f4", "light-blue_darken-1" => "#039be5", "light-blue_darken-2" => "#0288d1", "light-blue_darken-3" => "#0277bd", "light-blue_darken-4" => "#01579b", "light-blue_accent-1" => "#80d8ff", "light-blue_accent-2" => "#40c4ff", "light-blue_accent-3" => "#00b0ff", "light-blue_accent-4" => "#0091ea", "cyan_lighten-5" => "#e0f7fa", "cyan_lighten-4" => "#b2ebf2", "cyan_lighten-3" => "#80deea", "cyan_lighten-2" => "#4dd0e1", "cyan_lighten-1" => "#26c6da", "cyan" => "#00bcd4", "cyan_darken-1" => "#00acc1", "cyan_darken-2" => "#0097a7", "cyan_darken-3" => "#00838f", "cyan_darken-4" => "#006064", "cyan_accent-1" => "#84ffff", "cyan_accent-2" => "#18ffff", "cyan_accent-3" => "#00e5ff", "cyan_accent-4" => "#00b8d4", "teal_lighten-5" => "#e0f2f1", "teal_lighten-4" => "#b2dfdb", "teal_lighten-3" => "#80cbc4", "teal_lighten-2" => "#4db6ac", "teal_lighten-1" => "#26a69a", "teal" => "#009688", "teal_darken-1" => "#00897b", "teal_darken-2" => "#00796b", "teal_darken-3" => "#00695c", "teal_darken-4" => "#004d40", "teal_accent-1" => "#a7ffeb", "teal_accent-2" => "#64ffda", "teal_accent-3" => "#1de9b6", "teal_accent-4" => "#00bfa5", "green_lighten-5" => "#e8f5e9", "green_lighten-4" => "#c8e6c9", "green_lighten-3" => "#a5d6a7", "green_lighten-2" => "#81c784", "green_lighten-1" => "#66bb6a", "green" => "#4caf50", "green_darken-1" => "#43a047", "green_darken-2" => "#388e3c", "green_darken-3" => "#2e7d32", "green_darken-4" => "#1b5e20", "green_accent-1" => "#b9f6ca", "green_accent-2" => "#69f0ae", "green_accent-3" => "#00e676", "green_accent-4" => "#00c853", "light-green_lighten-5" => "#f1f8e9", "light-green_lighten-4" => "#dcedc8", "light-green_lighten-3" => "#c5e1a5", "light-green_lighten-2" => "#aed581", "light-green_lighten-1" => "#9ccc65", "light-green" => "#8bc34a", "light-green_darken-1" => "#7cb342", "light-green_darken-2" => "#689f38", "light-green_darken-3" => "#558b2f", "light-green_darken-4" => "#33691e", "light-green_accent-1" => "#ccff90", "light-green_accent-2" => "#b2ff59", "light-green_accent-3" => "#76ff03", "light-green_accent-4" => "#64dd17", "lime_lighten-5" => "#f9fbe7", "lime_lighten-4" => "#f0f4c3", "lime_lighten-3" => "#e6ee9c", "lime_lighten-2" => "#dce775", "lime_lighten-1" => "#d4e157", "lime" => "#cddc39", "lime_darken-1" => "#c0ca33", "lime_darken-2" => "#afb42b", "lime_darken-3" => "#9e9d24", "lime_darken-4" => "#827717", "lime_accent-1" => "#f4ff81", "lime_accent-2" => "#eeff41", "lime_accent-3" => "#c6ff00", "lime_accent-4" => "#aeea00", "yellow_lighten-5" => "#fffde7", "yellow_lighten-4" => "#fff9c4", "yellow_lighten-3" => "#fff59d", "yellow_lighten-2" => "#fff176", "yellow_lighten-1" => "#ffee58", "yellow" => "#ffeb3b", "yellow_darken-1" => "#fdd835", "yellow_darken-2" => "#fbc02d", "yellow_darken-3" => "#f9a825", "yellow_darken-4" => "#f57f17", "yellow_accent-1" => "#ffff8d", "yellow_accent-2" => "#ffff00", "yellow_accent-3" => "#ffea00", "yellow_accent-4" => "#ffd600", "amber_lighten-5" => "#fff8e1", "amber_lighten-4" => "#ffecb3", "amber_lighten-3" => "#ffe082", "amber_lighten-2" => "#ffd54f", "amber_lighten-1" => "#ffca28", "amber" => "#ffc107", "amber_darken-1" => "#ffb300", "amber_darken-2" => "#ffa000", "amber_darken-3" => "#ff8f00", "amber_darken-4" => "#ff6f00", "amber_accent-1" => "#ffe57f", "amber_accent-2" => "#ffd740", "amber_accent-3" => "#ffc400", "amber_accent-4" => "#ffab00", "orange_lighten-5" => "#fff3e0", "orange_lighten-4" => "#ffe0b2", "orange_lighten-3" => "#ffcc80", "orange_lighten-2" => "#ffb74d", "orange_lighten-1" => "#ffa726", "orange" => "#ff9800", "orange_darken-1" => "#fb8c00", "orange_darken-2" => "#f57c00", "orange_darken-3" => "#ef6c00", "orange_darken-4" => "#e65100", "orange_accent-1" => "#ffd180", "orange_accent-2" => "#ffab40", "orange_accent-3" => "#ff9100", "orange_accent-4" => "#ff6d00", "deep-orange_lighten-5" => "#fbe9e7", "deep-orange_lighten-4" => "#ffccbc", "deep-orange_lighten-3" => "#ffab91", "deep-orange_lighten-2" => "#ff8a65", "deep-orange_lighten-1" => "#ff7043", "deep-orange" => "#ff5722", "deep-orange_darken-1" => "#f4511e", "deep-orange_darken-2" => "#e64a19", "deep-orange_darken-3" => "#d84315", "deep-orange_darken-4" => "#bf360c", "deep-orange_accent-1" => "#ff9e80", "deep-orange_accent-2" => "#ff6e40", "deep-orange_accent-3" => "#ff3d00", "deep-orange_accent-4" => "#dd2c00", "brown_lighten-5" => "#efebe9", "brown_lighten-4" => "#d7ccc8", "brown_lighten-3" => "#bcaaa4", "brown_lighten-2" => "#a1887f", "brown_lighten-1" => "#8d6e63", "brown" => "#795548", "brown_darken-1" => "#6d4c41", "brown_darken-2" => "#5d4037", "brown_darken-3" => "#4e342e", "brown_darken-4" => "#3e2723", "gray_lighten-5" => "#fafafa", "gray_lighten-4" => "#f5f5f5", "gray_lighten-3" => "#eeeeee", "gray_lighten-2" => "#e0e0e0", "gray_lighten-1" => "#bdbdbd", "gray" => "#9e9e9e", "gray_darken-1" => "#757575", "gray_darken-2" => "#616161", "gray_darken-3" => "#424242", "gray_darken-4" => "#212121", "blue-gray_lighten-5" => "#eceff1", "blue-gray_lighten-4" => "#cfd8dc", "blue-gray_lighten-3" => "#b0bec5", "blue-gray_lighten-2" => "#90a4ae", "blue-gray_lighten-1" => "#78909c", "blue-gray" => "#607d8b", "blue-gray_darken-1" => "#546e7a", "blue-gray_darken-2" => "#455a64", "blue-gray_darken-3" => "#37474f", "blue-gray_darken-4" => "#263238", "black" => "#000000", "white" => "#ffffff", "transparent" => "transparent");

if(isset($_GET['primary']))
	$__PRIMARY_COLOR = "#".$_GET['primary'];
else
	$__PRIMARY_COLOR = PRIMARY_COLOR; 

if(isset($_GET['secondary']))
	$__SECONDARY_COLOR = "#".$_GET['secondary'];
else
	$__SECONDARY_COLOR = SECONDARY_COLOR; 
$__MIN_WEBSITE_WIDTH = "360px"; 
$__MAX_WEBSITE_WIDTH = "1024px"; 
function getTransition($attr, $time, $speed) {
	$x = "-webkit-transition: all time speed; 
	-moz-transition: all time speed; 
	-ms-transition: all time speed; 
	-o-transition: all time speed; 
	transition: all time speed;
"; 
	$x = str_replace("time", $time, $x); 
	$x = str_replace("speed", $speed, $x); 
	$x = str_replace("all", $attr, $x); 
	echo $x; 
} 
function getRotation($deg) {
	$x = "-webkit-transform: rotate(360deg); 
	-moz-: rotate(360deg); 
	-ms-transform: rotate(360deg);
	-o-transform: rotate(360deg); 
	transform: rotate(360deg);
"; 
	$x = str_replace("360", $deg, $x); 
	echo $x;
} 
function getBackgroundIcon($icon, $color) {
	echo 'background-image: url(../../../images/skin/oslo/icons/ic_'.$icon.'_'.$color.'.png);';
} 
?> 
a.brand-logo {
	background-repeat: no-repeat;
	background-position: center center;
	background-size: contain;
}
.notransition {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  -ms-transition: none !important;
  transition: none !important;
}
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box; 
	box-sizing: border-box;
} 
html::-webkit-scrollbar {
	width: 0px;
} 
body {
	background: #f0f0f0;
	margin: 0px; 
	padding: 0px; 
	font-family: Roboto; 
	font-size: 15px; 
} 
h1,h2,h3,h4,h5,h6 {
	padding: 0px; 
	margin: 0px; 
	margin-top: 10px; 
	margin-bottom: 15px; 
	padding-left: 20px; 
} 
.filter {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,.5);
}
<?php 
$directory = "../../../images/skin/oslo/icons/"; 
if(file_exists($directory)) {
	foreach (glob($directory."*.png") as $filename) {
		$icon = str_replace($directory, "", str_replace(".png", "", $filename));
?> 
.<?php echo $icon; ?> {
	background-image: url(<?php echo $filename; ?>); 
}
<?php 
} 
	foreach (glob($directory."*_color.png") as $filename) {
	$icon = str_replace($directory, "", str_replace("_color.png", "", $filename));
?> 
.<?php echo $icon; ?> {
	background-image: url(<?php echo $filename; ?>); 
} 
<?php 
	} 
} 
for($i = 10; $i <= 48; $i++) {
?> .icon_<?php echo $i; ?> {
	background-size: <?php echo $i; ?>px <?php echo $i; ?>px;
} 
<?php 
} 
?> 
.icon_small {
	background-size: auto 40%;
} 
.icon_medium {
	background-size: auto 50%;
} 
.icon_large {
	background-size: auto 60%;
}
hr {
	margin: 0px;
	padding: 0px;
	border: 0px;
	border-top: 1px solid rgba(0,0,0,.1);
}
a {
	cursor: pointer; 
	text-decoration: none; 
	color: #333; 
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}
.icons {
	position: relative; 
	display: inline-block; 
	vertical-align: middle; 
	background-position: center center; 
	background-repeat: no-repeat; 
} 
.icon_button {
	background-color: #bbb;
	background-size: contain; 
	background-repeat: no-repeat; 
	width: 36px; 
	height: 36px; 
	display: inline-block; 
	position: relative; 
	padding: 0px !important; 
	border-radius: 0px !important; 
} 
.icon_button.trans {
	background-color: transparent;
}
.icon_button[href]:not(.trans), .icon_button[onclick]:not(.trans), .icon_button[id]:not(.trans) {
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
} 
.icons span {
	position: relative; font-weight: 500;
} 
.float_button {
	position: relative; 
	display: inline-block; 
	vertical-align: middle; 
	background-position: center center; 
	background-repeat: no-repeat; 
	box-shadow: 0px 3px 5px rgba(0,0,0,.2); 
	z-index: 80; 
	width: 60px; 
	height: 60px; 
	display: block; 
	background-color: #999 !important; 
	border-radius: 100px; 
	box-shadow: inset 0px 2px 1px rgba(255,255,255,.4); 
} 
.float_button span {
	color: #bbb;
} 
.float_button[href], .float_button[onclick], .float_button[id] {
	background-color: #F44336 !important; 
} 
[class^="flat_icon"] {
	width: 24px; 
	height: 24px; 
	background-size: cover; 
	background-position: center center;
	background-repeat: no-repeat; 
	display: inline-block; 
	vertical-align: middle; 
	margin-right: 7px; 
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
	position: relative;
}
[class^="flat_icon"].compact {
	margin-right: 0px;
}
<?php 
for($i = 16; $i <= 48; $i++) {
?> 
.flat_icon_<?php echo $i; ?> {
	width: <?php echo $i; ?>px; 
	height: <?php echo $i; ?>px;
	background-size: cover; 
} 
<?php 
} 
?> 
.gray_icon {
	background-color: #000; 
	opacity: .5; 
} 
.circle_icon {
	border-radius: 50%; 
} 
.trans_icon {
	background-color: transparent; 
} 
.pos_top_left, .pos_top_right, .pos_bottom_left, .pos_bottom_right, .pos_left_top, .pos_left_bottom, .pos_right_top, .pos_right_bottom, .pos_top_center, .pos_bottom_center, .pos_left_center, .pos_right_center, .pos_top_left_corner, .pos_left_top_corner, .pos_top_right_corner, .pos_right_top_corner, .pos_bottom_left_corner, .pos_left_bottom_corner, .pos_bottom_right_corner, .pos_right_bottom_corner {
	position: absolute;
} 
.pos_top_left {
	top: -30px; 
	left: 30px; 
} 
.pos_top_right {
	top: -30px;
	right: 30px;
} 
.pos_bottom_left {
	bottom: -30px; 
	left: 30px;
} 
.pos_bottom_right {
	bottom: -30px;
	right: 30px;
} 
.pos_left_top {
	left: -30px;
	top: 30px;
} 
.pos_left_bottom {
	left: -30px;
	bottom: 30px;
} 
.pos_right_top {
	right: -30px;
	top: 30px;
} 
.pos_right_bottom {
	right: -30px;
	bottom: 30px;
} 
.pos_top_center {
	top: -30px;
	left: 50%; 
	margin-left: -30px; 
} 
.pos_bottom_center { 
	bottom: -30px; 
	left: 50%; 
	margin-left: -30px; 
} 
.pos_left_center { 
	left: -30px; 
	top: 50%; 
	margin-top: -30px; 
} 
.pos_right_center { 
	right: -30px; 
	top: 50%; 
	margin-top: -30px; 
} 
.pos_top_left_corner, .pos_left_top_corner { 
	left: -30px; 
	top: -30px; 
} 
.pos_top_right_corner, .pos_right_top_corner {
	right: -30px;
	top: -30px; 
} 
.pos_bottom_left_corner, .pos_left_bottom_corner {
	left: -30px; 
	bottom: -30px;
} 
.pos_bottom_right_corner, .pos_right_bottom_corner {
	right: -30px; 
	bottom: -30px; 
}
.raised_button, input[type="submit"] {
	color: rgba(0,0,0,.26); 
	background-color: rgba(0,0,0,.12);
}
.raised_button {
	font-weight: 700; 
	padding: 4px 13px; 
	display: inline-block;
	text-transform: uppercase; 
	border-radius: 3px;
	font-size: 14px;
	position: relative;
	top: 0px;
	box-shadow: 0px 3px 10px rgba(0,0,0,.2);
	<?php getTransition('all', '.3s', 'ease-in-out'); ?> 
}
.raised_button.block {
	display: block;
	width: 100%;
	text-align: center;
}
[href].raised_button, input[type="submit"], [onclick].raised_button, input[type="submit"], [id].raised_button {
	color: white; 
	top: 0px !important; 
	background-color: <?php echo $__PRIMARY_COLOR; ?>;
}
input[type="submit"][disabled] {
	background-color: <?=$color["gray"]?>;
}
.raised_button:hover, .raised_button:hover {
	box-shadow: 0px 3px 15px rgba(0,0,0,.4); 
}
.flat_button {
	font-weight: 700; 
	padding: 8px 8px; 
	text-transform: uppercase; 
	border-radius: 3px;
	font-size: 14px; 
	color: rgba(0,0,0,.26); 
	<?php getTransition('all', '.3s', 'ease-in-out'); ?> 
}
[href].flat_button, [onclick].flat_button, [id].flat_button {
	color: <?php echo $__PRIMARY_COLOR; ?>; 
}
.flat_button>.flat_icon {
	background-color: #aaa;
}
[href].flat_button>.flat_icon, [onclick].flat_button>.flat_icon, [id].flat_button>.flat_icon {
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
} 
input[type="submit"] {
	font-weight: 700; 
	padding: 10px 13px; 
	text-transform: uppercase; 
	border-radius: 3px;
	font-size: 14px; 
	border: 0px; 
	cursor: pointer; 
	<?php getTransition('all', '.3s', 'ease-in-out'); ?> 
}
input[type="submit"].block {
	width: 100%;
	display: block;
}
.ink {
	display: block; position: absolute;
	border-radius: 100%;
	transform: scale(0);
	z-index: 97;
}
.ink.ink-white {
	background: rgba(255,255,255,.4);
}
.ink.ink-black {
	background: rgba(0,0,0,.2);
}
.ink.animate {
	animation: ripple 0.65s linear;
}
@keyframes ripple {
	100% {
		opacity: 0;
		transform: scale(2.5);
	}
}
.raised_button.small_button {
	font-size: 12px;
	padding: 6px 11px; 
}
.raised_button.large_button {
	font-size: 16px;
	padding: 15px 17px; 
}
.raised_button.xlarge_button {
	font-size: 20px;
	padding: 17px 19px; 
}
.raised_button.xxlarge_button {
	font-size: 25px;
	padding: 19px 21px; 
}
.loading {
	display: inline-block;
	width: 32px; 
	height: 32px; 
	background: url(../../../images/skin/oslo/bg/loading.gif); 
} 



input[type="range"] {
	width: 100%; 
	-webkit-appearance: none; 
} 
input[type=range]::-webkit-slider-runnable-track {
	width: 300px; 
	height: 3px; 
	background: rgba(0,0,0,.2); 
	margin: 20px 0px; 
} 
input[type=range]::-webkit-slider-thumb {
	-webkit-appearance: none; 
	height: 16px; 
	width: 16px; 
	border-radius: 50%; 
	margin-top: -6px; 
	background: white; 
	border: 3px solid <?php echo $__PRIMARY_COLOR; ?>;
} 
input[type=range]:focus {
	outline: none; 
} 
input[type=range]:active::-webkit-slider-thumb {
	background: <?php echo $__PRIMARY_COLOR; ?>; 
} 
input:not[type="checkbox"], select {
	width: 100%;
	display: block; 
	font-family: 'Roboto'; 
	font-weight: 500; 
	position: relative; 
}
textarea {
	resize: none;
	width: 100%;
	height: 100px;
	background: none;
	border: 0px;
	display: block;
	margin-top: 10px;
	border-bottom: 1px solid #ccc; 
	font-family: 'Roboto';
}
input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="time"], input[type="number"] {
	width: 100%;
	border: 0px; 
	padding: 5px 0px 10px 0px; 
	border-bottom: 1px solid #ccc; 
	font-family: 'Roboto';
} 
select {
	width: 100% !important;
	border: 0px; 
	border-bottom: 1px solid #ccc; 
	padding: 5px 0px 10px 0px;
	color: #444; 
} 
textarea:focus, textarea:active, input[type="text"]:focus, input[type="text"]:active, select:focus, select:active, input[type="password"]:focus, input[type="password"]:active, input[type="date"]:focus, input[type="date"]:active, input[type="time"]:focus, input[type="time"]:active, input[type="number"]:focus, input[type="number"]:active, input[type="email"]:focus, input[type="email"]:active {
	outline: 0px !important; 
	border-bottom: 1px solid <?php echo $__PRIMARY_COLOR; ?>; 
} 
ul.form-container {
	margin: 0px !important; 
	padding: 0px !important; 
	width: 100%; 
	display: table; 
	list-style-type: none; 
}
ul.form-container li {
	display: table-row; 
} 
ul.form-container li > div {
	display: table-cell; 
	vertical-align: middle; 
} 
ul.form-container li .icon-container {
	min-width: 0px; 
	max-width: 26px; 
} 
ul.form-container li .input-container {
	padding: 6px 0px; 
} 
ul.form-container li:first-child .input-container {
	padding-top: 0px; 
} 
ul.form-container li:last-child .input-container {
	padding-bottom: 0px; 
} 
ul.form-container li .input-container>label {
	display: block; 
	width: 100%; 
	float: left; 
	font-size: 12px; 
	padding: 0px 7px; 
	color: #888; 
	font-weight: 700; 
	text-transform: uppercase; 
	margin: 0px !important; 
	position: relative; 
	top: 3px; 
}
ul.form-container li .input-container div > label {
	cursor: pointer; 
	display: block; 
	width: 100%; 
	padding: 5px 0px; 
} 
table.form-container {
	width: 100%;
	border-collapse: collapse;
}
table.form-container td {
	padding: 6px 0px;
}
table.form-container label {
	font-size: 12px; 
	text-transform: uppercase; 
	color: #888; 
	font-weight: 700; 
}
label input[type="checkbox"] {
	display: none; 
} 
label:not(.switch) input[type="checkbox"] + span {
	display: inline-block; 
	width: 18px; 
	height: 18px; 
	margin: 0px; 
	margin-right: 10px; 
	margin-top: 5px; 
	vertical-align: middle; 
	cursor: pointer; 
	float: left; 
	border-radius: 3px; 
	background-color: transparent; 
	border: 2px solid rgba(0,0,0,.54); 
} 
label:not(.switch) input[type="checkbox"]:checked + span {
	border: 2px solid <?php echo $__PRIMARY_COLOR; ?>;
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
	background-image: url(../../../images/skin/oslo/icons/ic_done_white.png); 
	background-size: contain; 
	background-repeat: no-repeat;
	background-position: center center; 
}
label.switch {
	margin: 5px;
	display: inline-block;
}
label.switch input[type="checkbox"] + span {
	display: inline-block; 
	width: 38px; 
	height: 16px; 
	margin: 0px; 
	margin-right: 10px; 
	margin-top: 8px; 
	vertical-align: middle; 
	cursor: pointer; 
	float: left; 
	border-radius: 9px; 
	background-color: rgba(0,0,0,.2);
	box-shadow: 0px 0px 5px rgba(0,0,0,.2);
	position: relative;
}
label.switch input[type="checkbox"] + span div {
	background: rgba(255,255,255,.9);
	box-shadow: 0px 0px 5px rgba(0,0,0,.4);
	border-radius: 100%;
	position: absolute;
	left: -5px;
	top: -2px;
	width: 21px;
	height: 21px;
	<?php getTransition("all", ".2s", "ease-in-out"); ?>
}
label.switch input[type="checkbox"]:checked + span {
	background-color: <?php echo $__SECONDARY_COLOR; ?>; 
}
label.switch input[type="checkbox"]:checked + span div {
	background-color: <?php echo $__PRIMARY_COLOR; ?>;
	left: 20px;
}
label input[type="radio"] {
	display: none;
} 
label input[type="radio"] + span {
	display: inline-block; 
	width: 14px; 
	height: 14px;
	margin: 0px; 
	margin-right: 10px; 
	margin-top: 5px; 
	float: left; 
	vertical-align: middle; 
	cursor: pointer; 
	border-radius: 50%; 
	background-color: transparent; 
	border: 2px solid rgba(0,0,0,.54); 
} 
label input[type="radio"]:checked + span {
	border: 2px solid <?php echo $__PRIMARY_COLOR; ?>; 
	background-image: url(../../../images/skin/oslo/icons/ic_radio.png); 
	background-size: contain; 
	background-repeat: no-repeat; 
	background-position: center center; 
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
} 
label input[type="checkbox"][disabled] + span, label input[type="radio"][disabled] + span {
	border: 2px solid rgba(0,0,0,.26); 
} 
ul.form-container li .input-container div {
	float: left; 
} 







#app-container {
	width: 100%; 
	height: 100%; 
	position: relative; 
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
} 
#action-bar {
	position: fixed; 
	top: 0px; 
	left: 0px; 
	z-index: 98; 
	width: 100%; 
	height: auto;
	background-color: <?php echo $__PRIMARY_COLOR; ?>; 
	color: white; 
	box-shadow: 0px 0px 15px rgba(0,0,0,.5); 
	<?php getTransition('top', '.6s', 'ease'); ?> 
} 
#action-bar .row {
	display: table;
	position: relative;
	width: 100%;
}
#action-bar .menu-title {
	display: table-cell;
	height: 60px;
	position: relative; 
} 
#action-bar .menu-title .icons {
	height: 100%; 
} 
#action-bar .menu-title .title {
	font-size: 18px; 
	height: 100%;
	display: inline-block;
	vertical-align: middle;
	padding-top: 17px;
	padding-left: 17px;
	white-space: nowrap; 
	overflow: hidden;
    text-overflow: ellipsis;
}
#action-bar .actions {
	height: 40px;
	position: relative; 
	display: table-cell;
}
#action-bar ul {
	list-style-type: none !important;
	padding: 0px; 
	margin: 0px; 
	height: 100%; 
	display: block; 
	position: relative; 
}
#action-bar .actions ul {
	float: right;
}
#action-bar .menu-title ul {
	float: left;
}
#action-bar .row:first-child ul>li {
	height: 100%; 
	float: left; 
	display: inline-block;
	overflow: visible;
	position: relative; 
	padding: 0px; 
	margin: 0px; 
}
#action-bar .row:first-child ul>li>a {
	position: relative;
	display: block;
	float: left;
}
#action-bar ul>li>ul {
	list-style-type: none;
	background: #fefefe; 
	min-width: 150px; 
	max-width: 500px; 
	height: auto;
	z-index: 90;
	box-shadow: 0px 0px 15px #888; 
	border-radius: 2px; 
	position: absolute;
	top: 50%; 
	right: 50%; 
	margin: 0px; 
	padding: 0px;  
	display: none;
	overflow: hidden;
}
#action-bar ul>li>ul>li {
	display: block;
	overflow: visible;
	position: relative; 
	margin: 0px;
	float: left;
	width: 100%;
}
#action-bar ul>li>ul>li>a {
	position: relative;
	display: block;
	float: left;
	width: 100%;
	display: block; 
	padding: 12px; 
	color: #222 !important;
	padding-right: 30px;
	white-space: nowrap; 
	<?php getTransition('all', '.2s', 'ease-in-out'); ?> 
}
#action-bar ul>li>ul>li>a .img {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	margin-right: 10px;
	vertical-align: middle;
	width: 24px;
	height: 24px;
	position: relative;
	display: inline-block;
}
#action-bar ul>li>ul>li:hover>a {
	background: rgba(0,0,0,.1); 
}
#action-bar .icons {
	height: 100%; 
	color: white; 
}
#action-bar .icons:hover {
	background-color: rgba(0,0,0,.3); 
} 
#action-bar .navigation {
	height: 60px;
	width: auto;
	display: table-cell;
	position: relative;
}
#action-bar .navigation::-webkit-scrollbar {
	height: 0px;
}
#action-bar .second .next {
	transform: rotate(180deg);
}
#action-bar .navigation>ul {
	position: relative;
	float: left;
	display: block;
}
#action-bar .navigation>ul>li {
	float: left;
	position: relative;
}
#action-bar .navigation>ul>li>a {
	padding: 19px;
	color: white;
	display: block;
	border-bottom: 5px solid transparent;
	<?php getTransition('all', '.3s', 'ease-in-out'); ?>
}
#action-bar .navigation>ul>li>a:hover, #action-bar .navigation>ul>li>a.selected {
	border-bottom: 5px solid white;
}
#data-action-bar {
	position: fixed; 
	top: -100px; 
	left: 0px; 
	z-index: 99; 
	width: 100%; 
	height: auto;
	background-color: white; 
	color: #888; 
	<?php getTransition('top', '.6s', 'ease'); ?> 
} 
#data-action-bar .row {
	display: table;
	position: relative;
	width: 100%;
}
#data-action-bar .menu-title {
	display: table-cell;
	height: 10px;
	position: relative; 
	vertical-align: top;
	padding-top: 17px;
} 
#data-action-bar .menu-title .icons {
	height: 100%; 
} 
#data-action-bar .menu-title .title {
	font-size: 18px; 
	float: left;
}
#data-action-bar .actions {
	height: 60px;
	position: relative; 
	display: table-cell;
}
#data-action-bar ul {
	list-style-type: none;
	padding: 0px; 
	margin: 0px; 
	height: 100%; 
	display: block; 
	position: relative; 
}
#data-action-bar .actions ul {
	float: right;
}
#data-action-bar .menu-title ul {
	float: left;
}
#data-action-bar .row:first-child ul>li {
	height: 100%; 
	float: left; 
	display: inline-block;
	overflow: visible;
	position: relative; 
	padding: 0px; 
	margin: 0px; 
}
#data-action-bar .row:first-child ul>li>a {
	position: relative;
	display: block;
	float: left;
}
#data-action-bar ul>li>ul {
	list-style-type: none;
	background: #fefefe; 
	min-width: 150px; 
	max-width: 500px; 
	height: auto;
	z-index: 90;
	box-shadow: 0px 0px 15px #888; 
	border-radius: 2px; 
	position: absolute;
	top: 50%; 
	right: 50%; 
	margin: 0px; 
	padding: 0px;  
	display: none;
	overflow: hidden;
}
#data-action-bar ul>li>ul>li {
	display: block;
	overflow: visible;
	position: relative; 
	margin: 0px;
	float: left;
	width: 100%;
}
#data-action-bar ul>li>ul>li>a {
	position: relative;
	display: block;
	float: left;
	width: 100%;
	display: block; 
	padding: 12px; 
	color: #222 !important;
	padding-right: 30px;
	white-space: nowrap; 
	<?php getTransition('all', '.2s', 'ease-in-out'); ?> 
}
#data-action-bar ul>li>ul>li>a .img {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	margin-right: 10px;
	vertical-align: middle;
	width: 24px;
	height: 24px;
	position: relative;
	display: inline-block;
}
#data-action-bar ul>li>ul>li:hover>a {
	background: rgba(0,0,0,.1); 
}
#data-action-bar .icons {
	height: 100%; 
	color: white; 
} 
#data-action-bar .icons.gray_icon {
	opacity: .5;
	background-color: transparent !important;
}
#data-action-bar .icons:hover {
	background-color: rgba(0,0,0,.3); 
} 
#data-action-bar .icons.gray_icon:hover {
	background-color: rgba(0,0,0,.3) !important; 
} 
#data-action-bar .navigation {
	height: 60px;
	width: auto;
	display: table-cell;
	position: relative;
}
#data-action-bar .navigation::-webkit-scrollbar {
	height: 0px;
}
#data-action-bar .second .next {
	transform: rotate(180deg);
}
#data-action-bar .navigation>ul {
	position: relative;
	float: left;
	display: block;
}
#data-action-bar .navigation>ul>li {
	float: left;
	position: relative;
}
#data-action-bar .navigation>ul>li>a {
	padding: 19px;
	color: white;
	display: block;
	border-bottom: 5px solid transparent;
	<?php getTransition('all', '.3s', 'ease-in-out'); ?>
}
#data-action-bar .navigation>ul>li>a:hover, #data-action-bar .navigation>ul>li>a.selected {
	border-bottom: 5px solid white;
}


#float-left-menu {
	width: 300px; 
	height: 100%; 
	position: fixed; 
	z-index: 105; 
	top: 0px;
	left: -350px;
	background: #233444;
	color: #fff;
	overflow: hidden;
	box-shadow: 0px 0px 15px rgba(0,0,0,.5); 
	<?php getTransition('all', '.5s','ease'); ?>
} 
#float-left-menu .wrapper {
	position: absolute;
	top: 0px;
	left: 0px;
	right: -17px;
	height: 100%;
	overflow-y: scroll;
} 
#float-left-menu .wrapper::-webkit-scrollbar {
	width: 0px; 
} 
#float-left-menu .copyright {
	font-size: 11px;
	margin-bottom: 20px;
	line-height: 200%;
	width: 100%;
	padding: 20px;
	color: rgba(255,255,255,.5);
}
#float-left-menu .copyright a {
	color: inherit;
	font-weight: bold;
}
#float-left-menu .copyright a:hover {
	text-decoration: underline;
}
#float-left-menu .title {
	font-weight: 700; 
	width: 100%; 
	margin-bottom: 10px; 
	padding: 5px 0px; 
	display: block; 
	position: relative;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
#float-left-menu .title.cover {
	height: 150px;
}
#float-left-menu .title .name {
	position: absolute;
	bottom: 20px;
	left: 20px;
	right: 35px;
	white-space: nowrap; 
	font-size: 20px;
	overflow: hidden;
	text-overflow: ellipsis;
}
#float-left-menu .brand-logo {
	width: 220px;
	height: 30px;
	background-position: center left;
	display: inline-block;
	vertical-align: middle;
}
#float-left-menu .title .icons {
	margin-bottom: 3px; 
} 
#float-left-menu .title .icons {
	width: 48px;
	height: 48px; 
	<?php getBackgroundIcon('menu', 'white'); ?>
	<?php getTransition('all', '.4s', 'ease'); ?>
	<?php getRotation('180'); ?>
}
#float-left-menu .title .icons.hover:hover {
	<?php getRotation('0'); ?>
	<?php getBackgroundIcon('arrow-left', 'white'); ?>
}
#float-left-menu ul {
	list-style-type: none; 
	padding: 0px; 
	margin: 0px; 
	display: block; 
} 
#float-left-menu ul li {
	padding: 0px; 
	margin: 0px;
	position: relative;
	overflow: hidden;
} 
#float-left-menu ul li a {
	display: block; 
	font-size: 13px; 
	padding: 17px; 
	font-weight: 700; 
	color: inherit;
	opacity: .8;
	position: relative;
	<?php getTransition('all', '.2s', 'ease-in-out'); ?>
}
#float-left-menu ul li a:hover {
	background: rgba(0,0,0,.2);
	opacity: 1;
}
#float-left-menu ul a .img {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	margin-right: 10px;
	vertical-align: middle;
	width: 24px;
	height: 24px;
	position: relative;
	display: inline-block;
}
#float-left-menu ul ul {
	max-height: 0px; 
	overflow: hidden;
}
#float-left-menu ul ul a {
	padding-left: 40px; 
	font-weight: 500;
} 
#float-left-menu ul ul a:hover {
	background: rgba(0,0,0,.15) !important;
} 










#body-container {
	width: 100%; 
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	position: relative;  
	overflow: hidden;
} 
#body-container .spacer {
	width: 100%; 
	height: 60px; 
	display: block;
} 
#body-container .cover {
	width: 100%; 
	position: relative;
	background-size: cover; 
	background-repeat: no-repeat;
	background-position: center center; 
	background-color: #222;
	box-shadow: 0px 0px 15px rgba(0,0,0,.4); 
}
#body-container .wide {
	height: 400px;
} 
#body-container .cover .wrapper {
	max-width: <?php echo $__MAX_WEBSITE_WIDTH; ?>; 
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	height: 100%; 
	position: relative; 
	margin: 0px auto; 
} 
#body-container .cover .logo {
	background-image: url(../../../images/resources/logo.png); 
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	max-width: <?php echo $__MAX_WEBSITE_WIDTH; ?>; 
	height: 40%; 
	display: block; 
	margin: 0px auto; 
	background-size: auto 50%;
	background-position: center bottom; 
	background-repeat: no-repeat;
}
#body-container .cover .wrapper .text {
	color: white;
	font-weight: 300;
	font-size: 2em;
	padding: 0px 30px;
	text-align: center;
}
#body-container .cover .icons {
	background-color: #F44336; 
	width: 60px; 
	height: 60px;
} 
#body-container .content {
	max-width: 100%; 
	background: #f0f0f0;
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	margin: 0px auto; 
	position: relative; 
	overflow: hidden; 
	padding-bottom: 30px;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-position: center center;
}
#body-container .content>.title {
	max-width: <?php echo $__MAX_WEBSITE_WIDTH; ?>; 
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	display: block; 
	position: relative; 
	margin: 0px auto; 
	color: <?php echo $__PRIMARY_COLOR; ?>;
	padding-top: 50px; 
	text-shadow: 0px 2px 2px rgba(0,0,0,.3); 
	opacity: 0;
	<?php getTransition("all", ".2s", "ease-in-out"); ?>
} 
#body-container .content .wrapper {
	max-width: <?php echo $__MAX_WEBSITE_WIDTH; ?>; 
	min-width: <?php echo $__MIN_WEBSITE_WIDTH; ?>; 
	margin: 0px auto; 
	padding: 0px;
	line-height: 150%;
	overflow: visible; 
	position: relative; 
} 
#body-container .content .bg-cover {
	background-color: <?php echo $__SECONDARY_COLOR; ?>;
	width: 100%;
	min-height: 200px; 
	position: absolute; 
	background-size: cover; 
	background-repeat: no-repeat; 
	background-position: center center;
} 
#body-container .content .wrapper>div {
	float: left; 
	line-height: 200%;
} 
[class^="col-"] {
	padding: 15px;
}
<?php 
$column_sizes = array(1,2,3,3.33,4,5,6,7,8,9,10);
for($i = 1; $i <= 12; $i++) {
?> 
.col-<?=$i?> {
	width: <?php echo $i*8.3333; ?>%;
} 
<?php 
} 
?>
<?php 
for($i = 1; $i <= 12; $i++) {
?> 
.offset-<?=$i?> {
	margin-left: <?php echo $i*8.3333; ?>%;
}
<?php 
} 
?>
#body-container .content [class^="col-"] h1 {
	color: white !important; 
	margin-bottom: 30px;
	text-shadow: 0px 2px 5px rgba(0,0,0,.6); 
}
#body-container .content .card {
	background: white; 
	box-shadow: 0px 0px 15px rgba(153,153,153,.30);
	padding: 25px;
	border-radius: 5px; 
	margin-bottom: 30px; 
	position: relative; 
	word-wrap: break-word;
	<?=getTransition("all", ".2s", "ease-in-out");?>
}
#body-container .content .card.hover:hover {
	box-shadow: 0px 0px 25px rgba(153,153,153,50);
}
#body-container .content .card.compact {
	padding: 15px;
}
#body-container .content .card.button-container {
	padding: 0px;
	margin-bottom: 40px;
	overflow: hidden;
}
#body-container .content .card.button-container .table .row .cell.compact {
	padding: 0px;
}
#body-container .content .card.button-container .table .row .cell:not(.compact) {
	padding-left: 15px;
	vertical-align: middle;
}
#body-container .content .card.button-container ul.button-container li {
	margin: 0px;
	border-radius: 0px;
}
#body-container .content .card.button-container ul.button-container.divider li {
	border-top: 0px;
	border-left: 0px;
	border-right: 1px solid rgba(0,0,0,.15);
	border-bottom: 0px;
}
#body-container .content .card.button-container ul.button-container.right.divider li {
	border-top: 0px;
	border-left: 1px solid rgba(0,0,0,.15);
	border-right: 0px;
	border-bottom: 0px;
	border-radius: 0px;
}
#body-container .content .card.button-container ul.button-container li a {
	padding: 10px 15px;
}
#body-container .content .card.hide {
	max-height: 0;
	padding: 0px;
	margin: 0px;
}
<?php 
$column_sizes = array(2,3,4,5);
foreach($column_sizes as $column_size) {
?> 
#body-container .content .column-count-<?php echo str_replace(".", "-", $column_size) ?> {
	-webkit-column-count: <?php echo $column_size; ?>;
	-moz-column-count: <?php echo $column_size; ?>;
	-ms-column-count: <?php echo $column_size; ?>;
	-o-column-count: <?php echo $column_size; ?>;
	column-count: <?php echo $column_size; ?>;
	-webkit-column-gap: 20px;
	-moz-column-gap: 20px;
	-ms-column-gap: 20px;
	-o-column-gap: 20px;
	column-gap: 20px;
} 
<?php 
} 
?>
#body-container .content .card .icons {
	width: 60px; 
	height: 60px; 
	background-color: #F44336;
} 
#body-container .content .wrapper>div h1, 
#body-container .content .wrapper>div h2, 
#body-container .content .wrapper>div h3, 
#body-container .content .wrapper>div h4, 
#body-container .content .wrapper>div h5, 
#body-container .content .wrapper>div h6 {
	padding: 0px;
	color: <?php echo $__PRIMARY_COLOR; ?>;
}
ul.button-container {
	list-style-type: none; 
	width: 100%; 
	margin: 0px; 
	padding: 0px; 
	display: block; 
	font-size: 0px;
}
ul.button-container.top {
	margin-bottom: 15px;
}
ul.button-container.bottom {
	margin-top: 15px;
}
ul.button-container.vertical>li {
	width: 100%;
	display: block;
}
ul.button-container.vertical>li>a {
	width: 100%;
	text-align: center;
	display: block;
}
ul.right {
	text-align: right;
} 
ul.button-container>li {
	display: inline-flex; 
	margin: 0px; 
	padding: 0px; 
	margin-top: 10px;
	margin-right: 12px; 
	border-radius: 3px;
	position: relative;
	overflow: hidden;
} 
ul.right>li {
	margin-left: 12px; 
	margin-right: 0px; 
} 
ul.button-container>li>a {
	position: relative;
	display: block;
	float: left;
} 
ul.button-container.block>li {
	width: 100% !important;
}
ul.button-container.block>li>a {
	width: 100% !important;
	text-align: center;
}
ul.button-container.block.left>li>a {
	text-align: left;
}
#footer-container {
	background: #232323; 
	width: 100%; 
	color: #bbb; 
} 
#footer-container .wrapper {
	width: 100%; 
	overflow: hidden; 
} 
#footer-container .wrapper .col {
	width: 50%; 
	float: left; 
	padding: 20px; 
	font-weight: 500; 
	font-size: 13px; 
} 
#footer-container .wrapper .col:last-child {
	text-align: right; 
}
#footer-container a {
	color: <?php echo $__PRIMARY_COLOR; ?>;
}
#goTop {
	width: 60px; 
	height: 60px;
	background-color: #F44336; 
	background-repeat: no-repeat; 
	background-position: center center; 
	position: fixed; 
	z-index: 80; 
	bottom: -100px; 
	right: 30px; 
	<?php getTransition('all', '.5s', 'ease'); ?>
} 
ul.list {
	list-style-type: none; 
	padding: 0px; 
	overflow: hidden; 
	width: 100%; 
	display: table;
} 
ul.list li {
	display: table-row;
} 
ul.list li div {
	padding: 18px 0px; 
	display: table-cell; 
	vertical-align: middle; 
}
ul.list li:not(:last-child) .primary, ul.list li:not(:last-child) .secondary {
	border-bottom: 1px solid rgba(0,0,0,.12);
}
ul.list li.title div {
	padding: 0px; 
	font-size: 13px; 
	font-weight: 600; 
	text-transform: uppercase; 
	color: rgba(0,0,0,.6); 
	padding: 0px 10px; 
}
ul.list li.title div:not(:first-child) {
	border-bottom: 1px solid rgba(0,0,0,.12);
}
ul.list li .icon {
	width: 1%; 
}
ul.list li .secondary {
	width: auto;
	text-align: right;
}
ul.list li .secondary .showhover {
	opacity: 0;
	<?php getTransition("all", ".2s", "ease-in-out"); ?>
}
ul.list li:hover .secondary .showhover {
	opacity: .8;
}
ul.list li .primary {
	padding: 5px 10px; 
	line-height: 130%; 
} 
ul.list li .primary span {
	display: inline-block; 
	width: 100%; 
	font-size: 12px; 
} 
ul.list li .primary span:first-child {
	font-size: 14px; 
	font-weight: 700; 
} 
ul.list-option {
	width: 100%;
	list-style-type: none;
	padding: 0px;
	margin: 0px;
	overflow: hidden;
}
ul.list-option li {
	width: 100%;
	float: left;
	border-bottom: 1px solid rgba(0,0,0,.15);
}
ul.list-option li a {
	padding: 10px;
	width: 100%;
	display: block;
}
table.list {
	width: 100%;
	border-collapse: collapse;
}
table.list.small tr:not(.title) td {
	font-size: 12px;
}
table.list td {
	padding: 8px;
}
table.list tr.title td:not(:first-child) {
	font-weight: bold;
	font-size: 13px;
	text-transform: uppercase;
	color: rgba(0,0,0,.6); 
}
table.list td.primary span {
	display: block;
	width: 100%;
}
table.list td.primary span:first-child {
	font-weight: bold;
}
table.list td.primary span:not(:first-child) {
	font-size: 12px;
}
table.list tr:not(last-child) td:not(:first-child) {
	border-bottom: 1px solid #e0e0e0;
}
table.list .showhover {
	opacity: 0;
	<?php getTransition("all", ".2s", "ease-in-out"); ?>
}
table.list tr:hover .showhover {
	opacity: 1;
}
#blackTrans {
	position: fixed; 
	z-index: 100; 
	width: 100%; 
	height: 100%; 
	top: 0px; 
	left: 0px; 
	display: none; 
	background: rgba(0,0,0,.5); 
	cursor: pointer; 
}
#loading {
	display: none;
	z-index: 101;
	position: fixed;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
	width: 60px;
	height: 60px;
	right: 30px;
	bottom: 30px;
	background-color: white;
	background-image: url(../../../images/skin/oslo/bg/loading.gif);
	background-repeat: no-repeat;
	background-position: center center;
	border-radius: 100%;
}
#bottom-sheet {
	position: fixed; 
	width: <?php echo $__MIN_WEBSITE_WIDTH; ?>;
	min-height: 300px; 
	max-height: 80%; 
	overflow-y: scroll; 
	background: white;
	border-radius: 4px 4px 0px 0px; 
	box-shadow: 0px 0px 20px rgba(0,0,0,.5); 
	left: 50%;
	bottom: -100%;
	z-index: 101;
	margin-left: -<?php echo $__MIN_WEBSITE_WIDTH/2; ?>px; 
	<?php getTransition('bottom', '.7s', 'ease'); ?> 
} 
#bottom-sheet::-webkit-scrollbar {
	width: 0px;
} 
#bottom-sheet::-webkit-scrollbar-track {
	background: rgba(0,0,0,.1);
} 
#bottom-sheet::-webkit-scrollbar-thumb {
	border-radius: 10px; 
	background: rgba(0,0,0,.1); 
} 
#bottom-sheet .cover {
	background-color: <?php echo $__SECONDARY_COLOR; ?>; 
	background-repeat: no-repeat; 
	background-size: cover; 
	background-position: center center; 
	width: 100%; 
	height: 200px; 
	position: relative;
} 
#bottom-sheet .cover .title {
	position: absolute; 
	left: 30px; 
	right: 30px;
	bottom: 30px; 
	color: white; 
	font-weight: 500; 
	font-size: 28px; 
	text-shadow: 0px 2px 2px rgba(0,0,0,.5); 
} 
#bottom-sheet .cover .shadow {
	width: 100%; 
	height: 100px;
	position: absolute; 
	left: 0px; 
	bottom: 0px; 
	background-image: url(../../../images/skin/oslo/bg/shadow-bottom.png); 
	opacity: .5; 
} 
#bottom-sheet a.icons {
	width: 48px; 
	height: 48px; 
	display: block; 
	position: absolute; 
	top: 0px; 
	right: 0px;
} 
#bottom-sheet .content {
	padding: 25px; 
	line-height: 200%; 
	font-size: 14px; 
} 
#bottom-sheet .content h3 {
	padding: 0px;
	color: <?php echo $__PRIMARY_COLOR; ?>;
} 
#bottom-sheet .loading {
	position: absolute; 
	top: 50%; 
	left: 50%; 
	margin-top: -16px; 
	margin-left: -16px; 
} 
#dialog-box {
	width: 300px;
	height: auto;
	position: fixed; 
	top: 50%; 
	left: 50%; 
	display: none; 
	margin-left: -150px; 
	margin-top: -50px; 
	background: white; 
	border-radius: 4px; 
	box-shadow: 0px 0px 20px rgba(0,0,0,.5); 
	z-index: 101; 
	overflow: hidden; 
	<?php getTransition('all', '.5s', 'ease-in-out'); ?> 
} 
#dialog-box .wrapper {
	padding: 20px; 
} 
#dialog-box .wrapper .title {
	font-size: 18px; 
	padding-top: 10px; 
	display: block; 
	font-weight: 700; 
	color: <?php echo $__PRIMARY_COLOR; ?>; 
} 
#dialog-box .wrapper p {
	line-height: 150%;
} 
#dialog-box .loading {
	margin: 50px;
}
#snackbar {
	background-color: #323232;
	min-width: 288px;
	max-width: 568px;
	position: fixed;
	bottom: -100px;
	left: 50%;
	border-radius: 2px 2px 0px 0px;
	color: white;
	font-size: 14px;
	display: table;
	z-index: 102;
	<?php getTransition('bottom', '.5s', 'ease-in-out'); ?>
}
#snackbar .wrapper {
	display: table-row;
}
#snackbar .primary {
	display: table-cell;
	padding: 16px;
	vertical-align: middle;
}
#snackbar .secondary {
	display: table-cell;
	padding-right: 16px;
	vertical-align: middle;
}
#snackbar .secondary ul {
	margin-top: 0px;
}
#snackbar .secondary ul li {
	margin-top: 0px;
}
table.info {
	width: 100%;
	border-collapse: collapse;
	font-size: 14px;
}
table.info td {
	padding: 8px;
}
table.info tr {
	border-bottom: 1px solid rgba(0,0,0,.1);
}
table.info th {
	text-align: left;
	padding: 8px;
	color: <?php echo $__PRIMARY_COLOR; ?>;
}
#numDataSelected {
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	color: gray;
}
.hide {
	display: none;
}
<?php
foreach($color as $class => $value) {
	$class = ".".str_replace("_", ".", $class);
	echo $class." {
	background-color: ".$value." !important;
}
";
}
foreach($color as $class => $value) {
	$temp = explode("_", $class);
	$class = ".".$temp[0]."-text";
	if(isset($temp[1]))
		$class .= ".".$temp[1];
	echo $class." {
	color: ".$value." !important;
}
";
}
foreach($color as $class => $value) {
	$temp = explode("_", $class);
	$class = ".".$temp[0]."-border";
	if(isset($temp[1]))
		$class .= ".".$temp[1];
	echo $class." {
	border-color: ".$value." !important;
}
";
}
?>
span.validate {
	position: relative;
	display: block;
}
span.validate span.validate-message {
	position: absolute;
	right: 0px;
	line-height: 100% !important;
	background: #cd2727;
	color: white;
	font-size: 11px;
	padding: 5px;
	border-radius: 5px 5px 0px 0px;
}
code {
	background: <?=$color["gray_lighten-4"]?>;
	padding: 5px 7px;
	border: 1px solid rgba(0,0,0,.1);
	border-radius: 2px;
}
@media screen and (max-width: 800px) {
	#body-container .content>.wrapper>div {
		width: 100% !important;
		margin-left: 0%; 
		padding: 8px;
	}
	#body-container .content .wrapper>div:first-child>div:last-child {
		margin-bottom: 15px !important;
	} 
	#body-container .content .wrapper>div:not(:first-child) {
		padding-top: 0px !important; 
	} 
	<?php 
	$column_sizes = array(2,3,4,5);
	foreach($column_sizes as $column_size) {
	?> 
	#body-container .content .column-count-<?php echo str_replace(".", "-", $column_size) ?> {
		-webkit-column-count: 1;
		-moz-column-count: 1;
		-ms-column-count: 1;
		-o-column-count: 1;
		column-count: 1;
		-webkit-column-gap: 0px;
		-moz-column-gap: 0px;
		-ms-column-gap: 0px;
		-o-column-gap: 0px;
		column-gap: 0px;
	} 
<?php 
	} 
?>} 
<?php $useragent=$_SERVER['HTTP_USER_AGENT']; if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
?> 
#body-container .content .wrapper>div:first-child>div:last-child {
	margin-bottom: 15px !important;
} 
#body-container .content .wrapper>div:not(:first-child) {
	padding-top: 0px !important; 
} 
#body-container .cover .logo {
	height: 35%;
}
<?php 
$column_sizes = array(2,3,4,5);
foreach($column_sizes as $column_size) {
?> 
#body-container .content .column-count-<?php echo str_replace(".", "-", $column_size) ?> {
	-webkit-column-count: 1;
	-moz-column-count: 1;
	-ms-column-count: 1;
	-o-column-count: 1;
	column-count: 1;
	-webkit-column-gap: 0px;
	-moz-column-gap: 0px;
	-ms-column-gap: 0px;
	-o-column-gap: 0px;
	column-gap: 0px;
} 
<?php 
} 
?>
#snackbar {
	min-width: 360px;
	max-width: 360px;
	border-radius: 0px;
}
#float-left-menu .title .icons {
	<?php getRotation('0'); ?>
	<?php getBackgroundIcon('arrow-left', 'white'); ?>
}
table.info {
	font-size: 12px;
}
.showhover {
	opacity: 1 !important
}
#data-action-bar .menu-title {
	padding-top: 20px !important;
}
.hideinmobile {
	display: none;
}
<?php 
} 
?>