<div class="content-wrapper">
	<div class="topbar">
		<button>Print Documents</button>
		<button>Membership</button>
	</div>

	<div class="main">
		<h1>Mass Intention</h1>
		<p>Enter your name and intentions below. Remember to select "open thanksgiving" to book thanksgiving intentions.</p>
		<form method="POST" action="index.php">
			<P>
				<label for="initials"></label>
				<datalist id="initials">
					<select name="initials">
						<option>The family of</option>
						<option>Bro</option>
						<option>Sis</option>
						<option>Pa</option>
						<option>The society of</option>
						<option>The organisation of</option>
					</select>
				</datalist>
				<input type="text" name="initials" list="initials" required>
			</P>
			<p> 
				<label for="fname">Full Name:</label>
				<input type="text" name="fname" required>
			</p>
			
			<input type="checkbox" name="open" value="0" hidden="true" checked="true">
			<p><input type="checkbox" name="open" value="1">Open thanksgiving?</p>

				<label for="intention">Select Intention</label>
				<datalist id=intention>	
					<select name="intention">
						<option>Praying for God's protection upon our lives</option>
						<option>Praying for exam success</option>
						<option>Praying for deliverance from sin and satanic captivity</option>
						<option>Praying for favour upon business endeavour</option>
						<option>Thanking God for a new baby!</option>
						<option>Thanking God for our new school</option>
						<option>Thanking God for exam success</option>
					</select>
				</datalist>
				<input type="text" name="intention" list="intention" required>
			<p id="dateerror"></p>
			<p>
				<label for="startdate">Start Date:</label>
				
				<input id="startdate" type="Date" name="startdate" required>

				<label for="enddate">End Date:</label>
				<input id="enddate" type="Date" name="enddate" required>
			</p>
			<div class="masses">
				<p>Masses:</p><hr><br>

				<div class="massdays">
					<br>
					<input id="checkall" type="checkbox">Select All<br>
					
				</div>

				<div class="massdays">
					<label for="monday">Monday</label><br>
					<input class="md" type="checkbox" name="monday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="monday[]" value="12:00:00">12:00pm<br>
					<input class="md" type="checkbox" name="monday[]" value="6:00:00">6:00pm<br>
				</div>

				<div class="massdays">
					<label for="tuesday">Tuesday</label><br>
					<input class="md" type="checkbox" name="tuesday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="tuesday[]" value="12:00:00">12:00pm<br>
				</div>

				<div class="massdays">
					<label for="wednesday">Wednesday</label><br>
					<input class="md" type="checkbox" name="wednesday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="wednesday[]" value="12:00:00">12:00pm<br>
					<input class="md" type="checkbox" name="wednesday[]" value="6:00:00">6:00pm<br>
				</div>

				<div class="massdays">
					<label for="thursday">Thursday</label><br>
					<input class="md" type="checkbox" name="thursday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="thursday[]" value="12:00:00">12:00pm<br>
				</div>

				<div class="massdays">
					<label for="friday">Friday</label><br>
					<input class="md" type="checkbox" name="friday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="friday[]" value="12:00:00">12:00pm<br>
					<input class="md" type="checkbox" name="friday[]" value="6:00:00">6:00pm<br>
				</div>

				<div class="massdays">
					<label for="saturday">Saturday</label><br>
					<input class="md" type="checkbox" name="saturday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="saturday[]" value="12:00:00">12:00pm<br>
				</div>

				<div class="massdays">
					<label for="sunday">Sunday</label><br>
					<input class="md" type="checkbox" name="sunday[]" value="6:30:00">6:30am<br>
					<input class="md" type="checkbox" name="sunday[]" value="12:00:00">12:00pm<br>
					<input class="md" type="checkbox" name="sunday[]" value="6:00:00">6:30pm<br>
				</div>
			
			</div>
	
			<input class="massdays clearfloat" id="submit" type="submit" name="submit" value="submit">

		</form>

	</div>

</div>

