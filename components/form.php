	<div id="form_container">

		<form id="form_1058035" class="appnitro" enctype="multipart/form-data" method="post" enctype="multipart/formdata" action="components/success.php">
			<div class="form_description">
				<h2>Craig David</h2>
				<p>Can you fill me in</p>
			</div>

			<ul>
				<li id="li_1" >
					<label class="description" for="name">Name </label>
					<div>
						<input id="name" name="name" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_2" >
					<label class="description" for="email">Email </label>
					<div>
						<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_6" >
					<label class="description" for="role">Job role</label>
					<div>
						<select class="element select medium" id="role" name="role"> 
							<option value="" selected="selected"></option>
							<option value="1" >Front-end dev</option>
							<option value="2" >Full stack dev</option>
							<option value="3" >UX designer</option>
							<option value="4" >Visual designer</option>
							<option value="5" >Tester</option>
						</select>
					</div> 
				</li>		
				<li id="li_5" >
					<label class="description" for="level">Experience level</label>
					<span>

						<input id="level_1" name="level" class="element radio" type="radio" value="jnr" />
						<label class="choice" for="level_1">Junior</label>

						<input id="level_2" name="level" class="element radio" type="radio" value="mid" />
						<label class="choice" for="level_2">Mid-level</label>

						<input id="level_3" name="level" class="element radio" type="radio" value="snr" />
						<label class="choice" for="level_3">Senior</label>

					</span> 
				</li>		
				<li id="li_3" >
					<label class="description" for="url">URL </label>
					<div>
						<input id="url" name="url" class="element text medium" type="text" maxlength="255" value=""/> 
					</div> 
				</li>		
				<li id="li_4" >
					<label class="description" for="selfie">Selfie </label>
					<div>
						<!-- <input id="selfie" name="selfie" class="element file" type="file"/> -->

						 <input id="selfie" type="file" name="selfie" accept="image/*" capture="camera"> 
					</div>  
				</li>		
				<li id="li_7" >
					<label class="description" for="dd">DD dude </label>
					<div>
						<select class="element select medium" id="dd" name="dd"> 
							<option value="" selected="selected"></option>
							<option value="1" >Charlotte</option>
							<option value="2" >Laura</option>
							<option value="3" >Sam</option>
							<option value="4" >Donovan</option>
							<option value="5" >Dominic</option>
						</select>
					</div> 
				</li>

				<li class="buttons">
					<input type="hidden" name="form_id" value="1058035" />
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>

			</ul>
		</form>	
	</div>
</body>