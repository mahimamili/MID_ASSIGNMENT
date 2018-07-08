<!DOCTYPE html>
<html>
<form name="stage3" method="post" action="review.php">
		<div class="Top">
			<h3> PASSPORT APPLICATION - STAGE 2</h3>
<?php
	$oaid=rand(10, 100000000);
	echo "<b>Online Application ID: &nbsp&nbsp&nbsp ".$oaid."</b><br>";
?>
			<p id="Normal"> Fields marked with <i><b><font color="red">(*)</font></b></i> are mandatory.</p>
		</div>
		<br>
		<hr class="x">
		<fieldset>
			<div class="Main">
				<div class="Split Left">
					<table class="LeftTable" align="center">
						<tr class="SubDiv">
							<td colspan="2">Payment Information</td>
						</tr>
						<tr>
							<td> </td>
						</tr>
						<tr>
							<td>Payment Type:</td>
							<td>
								<input type="radio" name="Payment" value="Regular" required>Online<br>
								<input type="radio" name="Payment" value="Express">Non-Online
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="SkipPayment" value="SkipPayment"><i><b> Skip Payment</b></i></td>
						</tr>
						<tr>
							<td>Amount:<font color="red">*</font></td>
							<td>
								<select disabled="true" name="Amount"
  									<option value="bdt" selected>BDT</option>
  								</select>

  								 <input type="text"
  								<input type="hidden" name="Amount" value="bdt">
							</td>
						</tr>
						<tr>
							<td>Date of Payment:<font color="red">*</font></td>
							<td><input type = "date" class="Date" name = "paydate" min="1918-12-31" required>
						</tr>
						<tr>
							<td>Receipt No:<font color="red">*</font></td>
							<td><input type = "text" class="Date" name = "Rno" </td>
						<tr>
							<td>Name of Bank:<font color="red">*</font></td>
							<td>
								<select name="Bank" required>
									<option value="">-SELECT-</option>
  									<option value="BANKONE">DHAKA BANK</option>
  									<option value="BANKTWO">ONE BANK</option>
  									<option value="BANKTHREE">SONALI BANk</option>
  								</select>
							</td>
						</tr>
						<tr>
							<td>Name of Branch:<font color="red">*</font></td>
							<td>
								<select name="Branch" required>
									<option value="">-SELECT-</option>
  									<option value="DHANMONDI">DHANMONDI</option>
  									<option value="WARI">WARI</option>
  								</select>
							</td>
						</tr>
					</table>
				</div>

				<div class="Split Right">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<button class="Save">SAVE & NEXT</button>
				</div>
			</div>
		</fieldset>
	</form>


</body>
</html>
