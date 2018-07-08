<!DOCTYPE html>
<html>
<body>
	<form name="stage1" method="post" action="stage2.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 1</h3>
			<p id="RedMark"> Before filling up the online application form read the <a href="#">guidelines</a> carefully.</p>
			<p id="Normal"> Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		</div>
		<br>
		<hr class="x">
		<fieldset>
		<div class="Main">
			<br><br>
			<div class="Split Left">
				<table class="LeftTable" align="center">
					<tr class="SubDiv">
						<td colspan="2">Passport Application Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Applying in:<font color="red">*</font></td>
						<td>
							<select name="Apply" required>
  								<option value="BANGLADESH">BANGLADESH</option>
 								<option value="INDIA">INDIA</option>
  								<option value="PAKISTAN">PAKISTAN</option>
  								</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">Application Type: <b>NEW APPLICATION</b></td>
					</tr>
					<tr>
						<td>Passport Type:<font color="red">*</font></td>
						<td>
							<select name="PassType" required>
  								<option value="">-SELECT-</option>
 								<option value="ORDINARY">ORDINARY</option>
  						<option value="OFFICIAL">OFFICIAL</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Delivery Type:</td>
						<td>
							<input type="radio" name="Delivery" value="Regular" required>Regular<br>
							<input type="radio" name="Delivery" value="Express">Express
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Personal Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Name of<br>Applicant:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="ApplicantName" value="" </td>
					</tr>
					<tr>
						<td>First Part<br>(Given Name):</td>
						<td><input type="text" class="TextArea" name="FirstName" value="" </td>
					</tr>
					<tr>
						<td>Second Part<br>(Surname)<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="LastName"</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Guardian <input type="checkbox" id="adapted" name="adapted" value="adapted"> <font color="red"><i>"Tick"</i></font> only if Applicant is legally adapted</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Father's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="FatherName"</td>
					</tr>
					<tr>
						<td>Father's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select name="FN" required>
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="INDIAN">INDIAN</option>
  								<option value="PAKISTANI">PAKISTANI</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Father's<br>Profession:<font color="red">*</font></td>
						<td>
							<select name="FPro" required>
  								<option value="">-SELECT-</option>
 								<option value="BUSINESSMAN">BUSINESSMAN</option>
  								<option value="JOB HOLDER">JOB HOLDE</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's Name:<font color="red">*</font></td>
						<td><input type="text" class="TextArea"</td>
					</tr>
					<tr>
						<td>Mother's<br>Nationality:<font color="red">*</font></td>
						<td>
							<select name="MN" required id="mothernationality">
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="INDIAN">INDIAN</option>
  								<option value="PAKISTANI">PAKISTANI</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Mother's<br>Profession:<font color="red">*</font></td>
						<td>
							<select name="MP" required id="motherprofession">
  								<option value="">-SELECT-</option>
 								<option value="HOUSEWIFE">HOUSEWIFE</option>
 								<option value="JOB HOLDER">JOB HOLDER</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's Name:</td>
						<td><input type="text" class="TextArea" name="SpouserName"</td>
					</tr>
					<tr>
						<td>Spouse's<br>Nationality:</td>
						<td>
							<select name="SN">
  								<option value="BANGLADESHI">BANGLADESHI</option>
 								<option value="INDIAN">INDIAN</option>
  								<option value="PAKISTANI">PAKISTANI</option>

							</select>
						</td>
					</tr>
					<tr>
						<td>Spouse's<br>Profession:</td>
						<td>
							<select name="SP">
  								<option value="">-SELECT-</option>
 								<option value="STUDENT">STUDENT</option>
  								<option value="JOB HOLDER">JOB HOLDER</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Marital Status:<font color="red">*</font></td>
						<td>
							<select name="MS" required>
  								<option value="">-SELECT-</option>
  								<option value="single">SINGLE</option>
  								<option value="married">MARRIED</option>
  								</select>
						</td>
					</tr>
					<tr>
						<td>Applicant's<br>Profession:<font color="red">*</font></td>
						<td>
							<select name="AP" required>
  								<option value="">-SELECT-</option>
  								<option value="STUDENT">STUDENT</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Country of<br>Birth:<font color="red">*</font></td>
						<td>
							<select name="Country" required>
  								<option value="BANGLADESH">BANGLADESH</option>
 								<option value="INDIA">INDIA</option>
  								</select>
						</td>
					</tr>
					<tr>
						<td>Birth District:<font color="red">*</font></td>
						<td>
							<select name="BD" required>
  								<option value="">-SELECT-</option>
  								<option value="DHAKA">DHAKA</option>
  								<option value="CHANDPUR">CHANDPUR</option>
  								</select>
						</td>
					</tr>
					<tr>
						<td>Date of Birth:<font color="red">*</font></td>
						<td><input type = "date" class="Date" name = "dateofbirth" min="1918-12-31"  id = "dateofbirthid" required>
					</tr>
				</table>
			</div>


			<div class="Split Right">
				<table class="RightTable" align="center">
					<tr>
						<td>Gender:<font color="red">*</font></td>
						<td>
							<input type="radio" name="Gender" value="Male"  required>Male<br>
							<input type="radio" name="Gender" value="Female">Female<br>
							<input type="radio" name="Gender" value="Others">Others
						</td>
					</tr>
					<tr>
						<td>Birth ID No:<font color="red">*</font></td>
						<td><input type="text" class="TextArea" name="BID" value=""</td>
					</tr>
					<tr>
						<td>National ID No:</td>
						<td><input type="text" class="TextArea" name="NID" value=""</td>
					</tr>
					<tr>
						<td>Tax ID No:</td>
						<td><input type="text" class="TextArea" name="TID" value=""</td>
					</tr>
					<tr>
						<td>Height:<font color="red">*</font></td>
						<td><input type="number"</td>
					</tr>
					<tr>
						<td>Religion:<font color="red" required>*</font></td>
						<td>
							<select name="rreligion">
  								<option value="">-SELECT-</option>
  								<option value="ISLAM">ISLAM</option>
  								<option value="HINDUISM">HINDUISM</option>

							</select>
						</td>
					</tr>
					<tr>
						<td>Email:<font color="red">*</font></td>
						<td><input type="email" class="TextArea" name="Email" value=""</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Citizenship Information</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Nationality:<font color="red">*</font></td>
						<td>
							<select disabled="true" name="AN" required>
  								<option value="abd" selected>BANGLADESHI</option>
  							</select>
  						<input type="hidden" name="AN" value="abd">
						</td>
					</tr>
					<tr>
						<td>Citizenship Status:<font color="red">*</font></td>
						<td>
							<select name="Ctzn status" required>
  								<option value="BIRTH">BIRTH</option>
  						<option value="OTHERS">OTHERS</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Dual Citizenship:<font color="red">*</font></td>
						<td>
							<input type="radio" name="dc" value="yes"  required>Yes<br>
							<input type="radio" name="dc" value="no">No
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Present Address</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td>Village/House:</td>
						<td><input type="text" class="TextArea" name="PreHouse" id="prehouse" value=""></td>
					</tr>
					<tr>
						<td>Road/Block/Sector:</td>
						<td><input type="text" class="TextArea" name="PreRoad" id="preroad" value=""></td>
					</tr>
					<tr>
						<td>District:<font color="red">*</font></td>
						<td>
							<select name="PreDis" id="predis" required>
								<option value="">-SELECT-</option>
  								<option value="DHAKA">DHAKA</option>
  								<option value="CHITTAGONG">CHITTAGONG</option>
  								</select>
						</td>
					</tr>
					<tr>
						<td>Police Station:<font color="red">*</font></td>
						<td>
							<select name="PPS" id="prepolice" required>
								<option value="">-SELECT-</option>
  								<option value="DHANMONDI">DHANMONDI</option>
  								<option value="BANANI">BANANI</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Post Office:<font color="red">*</font></td>
						<td>
							<select name="PrePO" id="prepost" required>
								<option value="">-SELECT-</option>
								<option value="DHANMONDI">DHANMONDI</option>
								<option value="BANANI">BANANI</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr class="SubDiv">
						<td colspan="2">Permanent Address</td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" name="Per" id="pre" value="SameAsPresent"> Same as above</td>
					</tr>
					<tr>
						<td>Village/House:</td>
						<td><input type="text" class="TextArea" name="PHouse" id="phouse" value=""></td>
					</tr>
					<tr>
						<td>Road/Block/Sector:</td>
						<td><input type="text" class="TextArea" name="PRoad" id="proad" value=""></td>
					</tr>
					<tr>
						<td>District:<font color="red">*</font></td>
						<td>
							<select name="PDis" id="pdis" required>
								<option value="">-SELECT-</option>
  								<option value="DHAKA">DHAKA</option>
  								<option value="CHITTAGONG">CHITTAGONG</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Police Station:<font color="red">*</font></td>
						<td>
							<select name="PerPS" id="perpolice" required>
								<option value="">-SELECT-</option>
								<option value="DHANMONDI">DHANMONDI</option>
								<option value="BANANI">BANANI</option>
  							</select>
						</td>
					</tr>
					<tr>
						<td>Post Office:<font color="red">*</font></td>
						<td>
							<select name="PerPO" id="perpost" required>
								<option value="">-SELECT-</option>
								<option value="DHANMONDI">DHANMONDI</option>
								<option value="BANANI">BANANI</option>
  							</select>
						</td>
					</tr>
				</table>
				<br><br>
				<button class="Save">SAVE & NEXT</button>
			</div>
		</div>
		</fieldset>
	</form>




</body>
</html>
