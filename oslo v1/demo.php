<div id="action-bar">
		<div class="row">
			<div class="menu-title">
				<ul>
					<li><a onclick="showElement('#float-left-menu', 1)" class="action_icon ic_menu_white icons icon_medium"></a></li>
					<li><span class="title">Dashboard</span></li>
				</ul>
			</div>
			<div class="actions">
				<ul>
					<li><a onclick="showDialogBox('version')" class="icons action_icon ic_info_white icon_medium"></a></li>
					<li><a class="icons action_icon ic_settings_white icon_medium"></a>
					<ul class="dropdownlist">
						<li><a onclick="showDialogBox('sample')"><span class="img ic_account_circle_black"></span>Edit Account</a></li>
						<li><a onclick="showBottomSheet('sample')"><span class="img ic_settings_black"></span>Settings</a></li>
						<li><a onclick="showSnackbar('sample')"><span class="img ic_power_settings_new_black"></span>Logout</a></li>
					</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="row second">
			<div class="navigation">
				<ul>
					<li><a href="">Component Tab 1</a></li>
					<li><a href="">Component Tab 2</a></li>
					<li><a href="">Component Tab 3</a></li>
					<li><a >More</a>
					<ul class="dropdownlist">
						<li><a onclick="showDialogBox('sample')">Show Dialog Box</a></li>
						<li><a onclick="showBottomSheet('sample')">Show Bottom Sheet</a></li>
						<li><a onclick="showSnackbar('sample')">Show Snackbar</a></li>
					</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="float-left-menu">
		<div class="wrapper">
			<div class="title cover" style="background-image: url(profile.jpg)">
				<div class="filter"></div>
				<div style="position: relative"><a class="icons icon_medium" onclick="showElement('none')"></a>Main Menu</div>
				<div class="name">Juvar Abrera</div>
			</div>
			<ul class="ripple">
				<li><a><span class="img ic_dashboard_white"></span>Menu 1</a></li>
				<li><a><span class="img ic_account_circle_white"></span>Menu 2</a></li>
				<li><a><span class="img ic_payment_white"></span>Menu 3</a></li>
				<li><a><span class="img ic_face_white"></span>Menu 4</a></li>
				<li><a><span class="img ic_schedule_white"></span>Menu 5</a></li>
				<li><a><span class="img ic_assessment_white"></span>Menu 6</a></li>
			</ul>
		</div>
	</div>
	<div id="body-container">
		<div class="full cover">
			<div class="wrapper">
				<a href="" class="logo"></a>
				<div class="text" style="text-align: center;"><br><br>
					A responsive web user interface framework based on Material Design<br><br>
					<ul class="button-container">
						<li><a onclick class="raised_button xlarge_button">Get Started</a></li>
					</ul>
				</div>
				<a onclick="showElement('#bottom-sheet')" class="float_button ic_plus_white icon_medium pos_bottom_right"></a>
			</div>
		</div>
		<div class="content">
			<div class="bg-cover"></div>
			<div class="title">
				<h1>Versions</h1>
			</div>
			<div class="wrapper">
				<div class="col-10">
					<div class="card column-count-2">
						<h4>v0.8.5 (July 21, 2015)</h4>
						<ul>
							<li><i>Fixed: </i>Responsive sidebar menu</li>
							<li><i>Added: </i>Icons beside menus and drop down menus</li>
							<li><i>Added: </i>Ripple effect on menus</li>
							<li><i>Added: </i>Background image in sidebar menu</li>
							<li><i>Added: </i>Columns with offset (Only works on desktops)</li>
						</ul>
						<h4>v0.7.1 (July 15, 2015)</h4>
						<ul>
							<li><i>Added: </i>Tabs component</li>
						</ul>
						<h4>v0.6.10 (June 27, 2015)</h4>
						<ul>
							<li><i>Fixed: </i>Column inside cards when zoomed-in</li>
							<li><i>Added: </i>Ripple effect when raised and flat buttons are clicked</li>
							<li><i>Added: </i>Different raised button sizes</li>
							<li><i>Fixed: </i>Button container margin</li>
							<li><i>Added: </i>Snackbars</li>
							<li><i>Fixed: </i>Transition of action bar and bottom sheet</li>
							<li><i>Added: </i>Dismiss cards with animation to swipe left or right, or shrink</li>
							<li><i>Added: </i>Undo cards</li>
							<li><i>Added: </i>Quick action button will not hide when snackbar is shown (for mobile devices)</li>
							<li><i>Fixed: </i>Consecutive snackbars</li>
						</ul>
						<h4>v0.5.6 (June 26, 2015)</h4>
						<ul>
							<li><i>Fixed: </i>Column inside cards on mobile</li>
							<li><i>Fixed: </i>Background-color of raised buttons</li>
						</ul>
						<h4>v0.5.4 (June 26, 2015)</h4>
						<ul>
							<li><i>Added: </i>Column inside cards</li>
						</ul>
						<h4>v0.5.3 (June 26, 2015)</h4>
						<ul>
							<li><i>Added: </i>Zoom responsiveness. Try zooming in and out (For desktop browsers). This can also be turned off.
							<ul>
								<li>If screen width size is more than 1260px, the floating side menu will be fixed at the left side of the screen.</li>
								<li>Else it will be hidden and needed to click the menu icon on the action bar for the menu to appear</li>
							</ul></li>
							<li><i>Added: </i>Full screen cover</li>
							<li><i>Added: </i>Loading icon in dialog box and bottom sheet components</li>
						</ul>
						<h4>v0.4.4 (June 25, 2015)</h4>
						<ul>
							<li><i>Fixed: </i>Action bar when scrolling
							<ul>
								<li>Hide when scroll down <i>(For desktop only)</i></li>
								<li>Show when scroll up <i>(For desktop only)</i></li>
							</ul>
							</li>
							<li><i>Fixed: </i>Mobile responsiveness</li>
							<li><i>Added: </i>Lists</li>
							<li><i>Added: </i>Sliders</li>
						</ul>
						<h4>v0.3.6 (June 23, 2015)</h4>
						<ul>
							<li><i>Added: </i>Textfields</li>
							<li><i>Added: </i>Dropdown list</li>
							<li><i>Added: </i>Radiobutton</li>
							<li><i>Added: </i>Checkbox</li>
							<li><i>Added: </i>Flat icons</li>
							<li><i>Added: </i>Colored icons</li>
						</ul>
						<h4>v0.2.6 (June 22, 2015)</h4>
						<ul>
							<li><i>Added: </i>Quick action to go to top of the web page</li>
							<li><i>Added: </i>Quick action icons that can be place at any side of a card</li>
							<li><i>Added: </i>Covers can now add pictures</li>
							<li><i>Added: </i>Card breaking an edge</li>
							<li><i>Added: </i>Dialog box</li>
							<li><i>Added: </i>Bottom sheet</li>
						</ul>
						<h4>v0.1.15 (June 21, 2015)</h4>
						<ul>
							<li><i>Added: </i>Action bar</li>
							<li><i>Added: </i>Action bar icons with drop-down menu</li>
							<li><i>Added: </i>Floating side menu</li>
							<li><i>Added: </i>Sub-menus</li>
							<li><i>Added: </i> Mobile responsiveness</li>
							<li><i>Added: </i>Floating action button</li>
							<li><i>Added: </i>Wide cover with logo</li>
							<li><i>Added: </i>Content with columns:
								<ul>
								<li>6-4 column</li>
								<li>4-6 column</li>
								<li>7-3 column</li>
								<li>3-7 column</li>
								<li>5-5 column</li>
								<li>1 column</li>
								<li>Or any as long column size is equal to 10</li>
								<li>3-3-3 column</li>
								</ul>
							</li>
							<li><i>Added: </i>Float-type button</li>
							<li><i>Added: </i>Flat-type button</li>
							<li><i>Added: </i>Card content</li>
							<li><i>Added: </i>On-screen responsiveness</li>
							<li><i>Added: </i>Click and move though page (Just like a touchscreen except you use your cursor)</li>
							<li><i>Added: </i>Primary and secondary color option</li>
							<li><i>Added: </i>Minimum and maximum width option</li>
							<li><i>Added: </i>Smooth transitions</li>
						</ul>
						<h4>v0.1.0 (June 21, 2015)</h4>
						<ul>
							<li><i>Added: </i>Basic layout and structure</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="bg-cover" style="height: 500px; background-image: url(images/skin/oslo/bg/cover.jpg);"></div>
			<div class="title">
				<h1>Components and functions</h1>
			</div>
			<div class="wrapper">
				<div class="col-6">
					<div class="card">
						This is column size 6 with no offset.
					</div>
				</div>
				<div class="col-6 offset-2">
					<div class="card">
						This is column size 6 with an offset of 2.
					</div>
				</div>
				<div class="col-6 offset-4">
					<div class="card">
						This is column size 6 with an offset of 4.
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<h4>Quick action on cards</h4>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, delectus cupiditate reiciendis ducimus eaque quae quisquam. Consequuntur dolorum expedita ratione, ad provident nam dolor explicabo asperiores sit quos rerum laborum, dicta in ullam, aspernatur possimus ipsam eligendi totam! Adipisci nihil rem amet incidunt itaque distinctio aliquid, obcaecati fugit molestiae dolorum.
						<a onclick="" class="float_button ic_settings_white icon_medium pos_bottom_right"></a>
					</div>
					<div class="card">
						<h4>Buttons</h4>
						Floating action button
						<ul class="button-container">
							<li><a class="float_button ic_settings_white icon_medium"></a></li>
							<li><a onclick="" class="float_button ic_settings_white icon_medium"></a></li>
						</ul><br>
						Raised button
						<ul class="button-container">
							<li><a class="raised_button">Disabled</a></li>
							<li><a onclick="" class="raised_button">Active</a></li>
						</ul><br>
						Flat button
						<ul class="button-container">
							<li><a class="flat_button">Disabled</a></li>
							<li><a onclick="" class="flat_button">Active</a></li>
						</ul>
					</div>
					<div class="card">
						<h4>Forms</h4>
						<table class="form-container">
							<tr>
								<td><label>First Name</label>
								<input type="text" placeholder="First Name"></td>
								<td><label>Last Name</label>
								<input type="text" placeholder="Last Name"></td>
							</tr>
							<tr>
								<td colspan="2">
									<label>Gender</label>
									<select>
										<option value="">Male</option>
										<option value="">Female</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2"><label>Switch</label><br>
								<table width="100%">
									<tr>
										<td>Wi-Fi</td>
										<td align="right"><label class="switch"><input type="checkbox" name="status"><span><div></div></span></label></td>
									</tr>
									<tr>
										<td>Bluetooth</td>
										<td align="right"><label class="switch"><input type="checkbox" name="status"><span><div></div></span></label></td>
									</tr>
									<tr>
										<td>Mobile Data</td>
										<td align="right"><label class="switch"><input type="checkbox" name="status"><span><div></div></span></label></td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="card">
						<h4>Dialog Box</h4>
						Dialogs inform users about critical information, require users to make decisions, or encapsulate multiple tasks within a discrete process. Use dialogs sparingly because they are interruptive in nature. Their sudden appearance forces users to stop their current task and refocus on the dialog content. Not every choice, setting, or detail warrants interruption and prominence.
						<ul class="button-container right">
							<li><a onclick="showDialogBox('sample');" class="raised_button">Show Demo</a></li>
						</ul>
					</div>
				</div>
				<div class="col-4">
					<div class="card" id="card-sample">
						<h4>Dismiss a card</h4>
						<p>You can dismiss a card with shrink effect, swipe left, or swipe right.</p>
						<ul class="button-container right">
							<li><a onclick="dismissCard('sample')" class="raised_button">Shrink</a></li>
							<li><a onclick="dismissCard('sample', 'swipe-left')" class="raised_button">Swipe left</a></li>
							<li><a onclick="dismissCard('sample', 'swipe-right')" class="raised_button">Swipe right</a></li>
						</ul>
					</div>
					<div class="card">
						<h4>Snackbars</h4>
						<p>Snackbars provide lightweight feedback about an operation by showing a brief message at the bottom of the screen. Snackbars can contain an action.</p>
						<ul class="button-container right">
							<li><a onclick="showSnackbar('sample');" class="raised_button">Show demo</a></li>
						</ul>
					</div>
					<div class="card">
						<h4>Sliders</h4>
						<input type="range" min="0" max="255" value="0">
						<input type="range" min="0" max="255" value="0">
						<input type="range" min="0" max="255" value="0">
					</div>
					<div class="card">
						<h4>Icon buttons</h4>
						Icon buttons can changed into any color in one icon. The default color of the icon is the primary color of the website.
						<ul class="button-container">
							<li><a class="icon-button ic_alarm_off_color"></a></li>
							<li><a href="" class="icon-button ic_alarm_off_color"></a></li>
							<li><a href="" class="icon-button ic_alarm_off_color" style="background-color: red;"></a></li>
							<li><a href="" class="icon-button ic_alarm_off_color" style="background-color: pink;"></a></li>
							<li><a href="" class="icon-button ic_alarm_off_color" style="background-color: aqua;"></a></li>
							<li><a href="" class="icon-button ic_alarm_off_color" style="background-color: brown;"></a></li>
						</ul>
					</div>
					<div class="card">
						<h4>Flat button with icons</h4>
						<ul class="button-container">
							<li><a class="flat_button"><span class="flat_icon ic_download_color"></span>Download</a></li>
							<li><a href="#icons" class="flat_button"><span class="flat_icon ic_settings_color"></span>See icons</a></li>
						</ul>
					</div>
					<div class="card">
						<h4>Bottom sheet</h4>
						A bottom sheet is a sheet of material that slides up from the bottom edge of the screen and presents a set of clear and simple actions.
						<ul class="button-container right">
							<li><a onclick="showBottomSheet('sample');" class="raised_button"><span></span>Show Demo</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content" name="icons">
			<div class="bg-cover"></div>
			<div class="title">
				<h1>Icons</h1>
			</div>
			<div class="wrapper">
				<div class="col-10">
					<div class="card">
						<ul class="button-container">
							<?php
							$directory = "images/skin/oslo/icons/";
							$end = "_color.png";
							if(file_exists($directory)) {
								foreach (glob($directory."*".$end) as $filename) {
									$icon = str_replace($directory, "", str_replace($end, "", $filename));
									$icon_name = str_replace("_", " ", str_replace("ic_", "", $icon));
									echo '<li><a onclick="" class="flat_button"><span class="flat_icon '.$icon.'_color"></span>'.$icon_name.'</a></li>';
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<a href="#tp" id="goTop" class="float_button ic_arrow-up_white icon_medium"></a>