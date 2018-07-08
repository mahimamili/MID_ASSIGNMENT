<!DOCTYPE html>
<html>

<body>
	<form name="stage2" method="post" action="stage3.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 2</h3>

			<p id="Normal"> Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		</div>
		<br>
		<hr class="x">
		<fieldset>
			<div class="Main">
				<div class="Split Left">
					<table class="LeftTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Applicant Contact Information</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Office No:</td>
							<td><input type="text" class="TextArea" name="ono" value=""</td>
						</tr>
						<tr>
							<td>Residence No:</td>
							<td><input type="text" class="TextArea" name="rno" value=""</td>
						</tr>
						<tr>
							<td>Mobile No:</td>
							<td><input type="text" class="TextArea" name="mno" value=""</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr class="SubDiv">
							<td colspan="2">Emergency Contact Person's Details</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Name:<font color="red">*</font></td>
							<td><input type="text" class="TextArea" name="EmerName"</td>
						</tr>
						<tr>
							<td>Country:<font color="red">*</font></td>
							<td>
								<select disabled="true" name="EmerCountry" required>
  									<option value="ebd" selected>BANGLADESH</option>
  								</select>
  								<input type="hidden" name="EmerCountry" value="ebd">
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="EmerPer" value="SameAsPre"><i><b> Same as Permanent Address</b></i></td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="EmerPre" value="SameAsPre"><i><b> Same as Present Address</b></i></td>
						</tr>
						<tr>
							<td>Village/House:</td>
							<td><input type="text" class="TextArea" name="PHouse" value=""></td>
						</tr>
						<tr>
							<td>Road/Block/Sector:</td>
							<td><input type="text" class="TextArea" name="PRoad" value=""></td>
						</tr>
						<tr>
							<td>District:<font color="red">*</font></td>
							<td>
								<select name="EmerDis" required>
									<option value="">-SELECT-</option>
  									<option value="DHAKA">DHAKA</option>
  									<option value="CHITTAGONG">CHITTAGONG</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Police Station:<font color="red">*</font></td>
							<td>
								<select name="EmerPS" required>
									<option value="">-SELECT-</option>
									<option value="DHANMONDI">DHANMONDI</option>
									<option value="BANANI">BANANI</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Post Office:<font color="red">*</font></td>
							<td>
								<select name="EmerPO" required>
									<option value="">-SELECT-</option>
									<option value="DHANMONDI">DHANMONDI</option>
									<option value="BANANI">BANANI</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Contact No:<font color="red">*</font></td>
							<td><input type="Con No" class="TextArea" name="contano" value=""</td>
						</tr>
						<tr>
							<td>Email:<font color="red">*</font></td>
							<td><input type="email" class="TextArea" name="EmerEmail" value=""</td>
						</tr>
						<tr>
							<td>Relationship:<font color="red">*</font></td>
							<td>
								<select name="EmerRelation" required>
									<option value="">-SELECT-</option>
  									<option value="FAMILY">FAMILY</option>
  									<option value="RELATIVE">RELATIVE</option>
  									</select>
							</td>
						</tr>
					</table>
				</div>

				<div class="Split Right">
					<table class="RightTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Old Passport Information (If Applicable)</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Passport No:</td>
							<td><input type="text" class="TextArea" name="oldp"</td>
						</tr>
						<tr>
							<td>Place of Issue:</td>
							<td><input type="text" class="TextArea" name="oldplace"</td>
						</tr>
						<tr>
							<td>Date of Issue:</td>
							<td><input type = "date" class="Date" name = "olddate" min="1918-12-31">
						</tr>
						<tr>
							<td>Re-issue Reason:</td>
							<td>
								<select name="Old">
									<option value="">-SELECT-</option>
  									<option value="LOST">LOST</option>
  									<option value="NAME CHANGE">CHANGE OF NAME</option>

  								</select>
							</td>
						</tr>
					</table>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<button class="Save">SAVE & NEXT</button>
				</div>
			</div>
		</fieldset>
	</form>


</body>
</html>
