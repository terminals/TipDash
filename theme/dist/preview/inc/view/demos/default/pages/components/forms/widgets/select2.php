<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Select2 Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_1" name="param">
					    <option value="AK">Alaska</option>
					    <option value="HI">Hawaii</option>
					    <option value="CA">California</option>
					    <option value="NV">Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Nested Example</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_2" name="param">
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Multi Select</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_3" name="param" multiple="multiple">
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK" selected>Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  	<optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT" selected>Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Placeholder</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_4" name="param">
						<option></option>
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  	<optgroup label="Pacific Time Zone">
					    	<option value="CA">California</option>
					    	<option value="NV">Nevada</option>
					    	<option value="OR">Oregon</option>
					    	<option value="WA">Washington</option>
					  	</optgroup>
					  	<optgroup label="Mountain Time Zone">
					    	<option value="AZ">Arizona</option>
					    	<option value="CO">Colorado</option>
					    	<option value="ID">Idaho</option>
					    	<option value="MT">Montana</option>
					    	<option value="NE">Nebraska</option>
					    	<option value="NM">New Mexico</option>
					    	<option value="ND">North Dakota</option>
					    	<option value="UT">Utah</option>
					    	<option value="WY">Wyoming</option>
					  	</optgroup>
					  	<optgroup label="Central Time Zone">
					    	<option value="AL">Alabama</option>
					   	 	<option value="AR">Arkansas</option>
					    	<option value="IL">Illinois</option>
					   	 	<option value="IA">Iowa</option>
					    	<option value="KS">Kansas</option>
					    	<option value="KY">Kentucky</option>
					    	<option value="LA">Louisiana</option>
					    	<option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Array Data</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_5" name="param">
					  	<option value="2" selected="selected">Duplicate</option>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Remote Data</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_6" name="param">
					  	<option></option>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Disabled Mode</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_7" disabled name="param">
						<option></option>
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>	
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Disabled Results</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_8"  name="param">
						<option></option>
					  	<option value="one">First</option>
					  	<option value="two" disabled="disabled">Second (disabled)</option>
					  	<option value="three">Third</option>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Limiting Selections</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_9" name="param" multiple>
						<option></option>
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Hiding Search box</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_10" name="param">
						<option></option>
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" >Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Tagging Support</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_11" multiple name="param">
						<option></option>
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" >Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Custom Styles</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="m-select2 m-select2--pill">
						<select class="form-control m-select2" id="m_select2_12_1"  name="param" data-placeholder="Pill style">
							<option></option>
							<option value="AK">Option 1</option>
							<option value="AK">Option 2</option>
							<option value="AK">Option 3</option>
							<option value="AK">Option 4</option>
							<option value="AK">Option 5</option>
						</select>	
					</div>
					<div class="m--space-10"></div>
					<div class="m-select2 m-select2--air">
						<select class="form-control m-select2" id="m_select2_12_2"  name="param" data-placeholder="Air style">
							<option></option>
							<option value="AK">Option 1</option>
							<option value="AK">Option 2</option>
							<option value="AK">Option 3</option>
							<option value="AK">Option 4</option>
							<option value="AK">Option 5</option>
						</select>	
					</div>
					<div class="m--space-10"></div>
					<div class="m-select2 m-select2--air m-select2--pill">
						<select class="form-control m-select2" id="m_select2_12_3"  name="param" data-placeholder="Air & pill styles">
							<option></option>
							<option value="AK">Option 1</option>
							<option value="AK">Option 2</option>
							<option value="AK">Option 3</option>
							<option value="AK">Option 4</option>
							<option value="AK">Option 5</option>
						</select>	
					</div>
					<div class="m--space-10"></div>
					<div class="m-select2 m-select2--square">
						<select class="form-control m-select2" id="m_select2_12_4"  name="param" data-placeholder="Square style">
							<option></option>
							<option value="AK">Option 1</option>
							<option value="AK">Option 2</option>
							<option value="AK">Option 3</option>
							<option value="AK">Option 4</option>
							<option value="AK">Option 5</option>
						</select>
					</div>
					<div class="m--space-10"></div>
					<div class="m-select2 m-select2--solid">
						<select class="form-control m-select2" id="m_select2_12_4"  name="param" data-placeholder="Solid style">
							<option></option>
							<option value="AK">Option 1</option>
							<option value="AK">Option 2</option>
							<option value="AK">Option 3</option>
							<option value="AK">Option 4</option>
							<option value="AK">Option 5</option>
						</select>
					</div>
					<div class="m--space-10"></div>
				</div>
			</div>	

			<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>

			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<a href="" class="btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_select2_modal">Launch modal select2s</a>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-brand">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->

<!--begin::Modal-->
<div class="modal fade" id="m_select2_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Select2 Examples</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="la la-remove"></span>
				</button>
			</div>
			<form class="m-form m-form--fit m-form--label-align-right">
				<div class="modal-body">
					<div class="form-group m-form__group row m--margin-top-20">
						<label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-select2" id="m_select2_1_modal" name="param">
							    <option value="AK">Alaska</option>
							    <option value="HI">Hawaii</option>
							    <option value="CA">California</option>
							    <option value="NV">Nevada</option>
							    <option value="OR">Oregon</option>
							    <option value="WA">Washington</option>
							    <option value="AZ">Arizona</option>
							    <option value="CO">Colorado</option>
							    <option value="ID">Idaho</option>
							    <option value="MT">Montana</option>
							    <option value="NE">Nebraska</option>
							    <option value="NM">New Mexico</option>
							    <option value="ND">North Dakota</option>
							    <option value="UT">Utah</option>
							    <option value="WY">Wyoming</option>
							    <option value="AL">Alabama</option>
							    <option value="AR">Arkansas</option>
							    <option value="IL">Illinois</option>
							    <option value="IA">Iowa</option>
							    <option value="KS">Kansas</option>
							    <option value="KY">Kentucky</option>
							    <option value="LA">Louisiana</option>
							    <option value="MN">Minnesota</option>
							    <option value="MS">Mississippi</option>
							    <option value="MO">Missouri</option>
							    <option value="OK">Oklahoma</option>
							    <option value="SD">South Dakota</option>
							    <option value="TX">Texas</option>
							    <option value="TN">Tennessee</option>
							    <option value="WI">Wisconsin</option>
							    <option value="CT">Connecticut</option>
							    <option value="DE">Delaware</option>
							    <option value="FL">Florida</option>
							    <option value="GA">Georgia</option>
							    <option value="IN">Indiana</option>
							    <option value="ME">Maine</option>
							    <option value="MD">Maryland</option>
							    <option value="MA">Massachusetts</option>
							    <option value="MI">Michigan</option>
							    <option value="NH">New Hampshire</option>
							    <option value="NJ">New Jersey</option>
							    <option value="NY">New York</option>
							    <option value="NC">North Carolina</option>
							    <option value="OH">Ohio</option>
							    <option value="PA">Pennsylvania</option>
							    <option value="RI">Rhode Island</option>
							    <option value="SC">South Carolina</option>
							    <option value="VT">Vermont</option>
							    <option value="VA">Virginia</option>
							    <option value="WV">West Virginia</option>
							</select>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Nested Example</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-select2" id="m_select2_2_modal" name="param">
							  	<optgroup label="Alaskan/Hawaiian Time Zone">
							    	<option value="AK">Alaska</option>
							    	<option value="HI">Hawaii</option>
							  	</optgroup>
							  <optgroup label="Pacific Time Zone">
							    <option value="CA">California</option>
							    <option value="NV" selected>Nevada</option>
							    <option value="OR">Oregon</option>
							    <option value="WA">Washington</option>
							  </optgroup>
							  <optgroup label="Mountain Time Zone">
							    <option value="AZ">Arizona</option>
							    <option value="CO">Colorado</option>
							    <option value="ID">Idaho</option>
							    <option value="MT">Montana</option>
							    <option value="NE">Nebraska</option>
							    <option value="NM">New Mexico</option>
							    <option value="ND">North Dakota</option>
							    <option value="UT">Utah</option>
							    <option value="WY">Wyoming</option>
							  </optgroup>
							  <optgroup label="Central Time Zone">
							    <option value="AL">Alabama</option>
							    <option value="AR">Arkansas</option>
							    <option value="IL">Illinois</option>
							    <option value="IA">Iowa</option>
							    <option value="KS">Kansas</option>
							    <option value="KY">Kentucky</option>
							    <option value="LA">Louisiana</option>
							    <option value="MN">Minnesota</option>
							    <option value="MS">Mississippi</option>
							    <option value="MO">Missouri</option>
							    <option value="OK">Oklahoma</option>
							    <option value="SD">South Dakota</option>
							    <option value="TX">Texas</option>
							    <option value="TN">Tennessee</option>
							    <option value="WI">Wisconsin</option>
							  </optgroup>
							  <optgroup label="Eastern Time Zone">
							    <option value="CT">Connecticut</option>
							    <option value="DE">Delaware</option>
							    <option value="FL">Florida</option>
							    <option value="GA">Georgia</option>
							    <option value="IN">Indiana</option>
							    <option value="ME">Maine</option>
							    <option value="MD">Maryland</option>
							    <option value="MA">Massachusetts</option>
							    <option value="MI">Michigan</option>
							    <option value="NH">New Hampshire</option>
							    <option value="NJ">New Jersey</option>
							    <option value="NY">New York</option>
							    <option value="NC">North Carolina</option>
							    <option value="OH">Ohio</option>
							    <option value="PA">Pennsylvania</option>
							    <option value="RI">Rhode Island</option>
							    <option value="SC">South Carolina</option>
							    <option value="VT">Vermont</option>
							    <option value="VA">Virginia</option>
							    <option value="WV">West Virginia</option>
							  </optgroup>
							</select>	
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">Multi Select</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-select2" id="m_select2_3_modal" name="param" multiple="multiple">
							  	<optgroup label="Alaskan/Hawaiian Time Zone">
							    	<option value="AK" selected>Alaska</option>
							    	<option value="HI">Hawaii</option>
							  	</optgroup>
							  	<optgroup label="Pacific Time Zone">
							    <option value="CA">California</option>
							    <option value="NV" selected>Nevada</option>
							    <option value="OR">Oregon</option>
							    <option value="WA">Washington</option>
							  </optgroup>
							  <optgroup label="Mountain Time Zone">
							    <option value="AZ">Arizona</option>
							    <option value="CO">Colorado</option>
							    <option value="ID">Idaho</option>
							    <option value="MT" selected>Montana</option>
							    <option value="NE">Nebraska</option>
							    <option value="NM">New Mexico</option>
							    <option value="ND">North Dakota</option>
							    <option value="UT">Utah</option>
							    <option value="WY">Wyoming</option>
							  </optgroup>
							  <optgroup label="Central Time Zone">
							    <option value="AL">Alabama</option>
							    <option value="AR">Arkansas</option>
							    <option value="IL">Illinois</option>
							    <option value="IA">Iowa</option>
							    <option value="KS">Kansas</option>
							    <option value="KY">Kentucky</option>
							    <option value="LA">Louisiana</option>
							    <option value="MN">Minnesota</option>
							    <option value="MS">Mississippi</option>
							    <option value="MO">Missouri</option>
							    <option value="OK">Oklahoma</option>
							    <option value="SD">South Dakota</option>
							    <option value="TX">Texas</option>
							    <option value="TN">Tennessee</option>
							    <option value="WI">Wisconsin</option>
							  </optgroup>
							  <optgroup label="Eastern Time Zone">
							    <option value="CT">Connecticut</option>
							    <option value="DE">Delaware</option>
							    <option value="FL">Florida</option>
							    <option value="GA">Georgia</option>
							    <option value="IN">Indiana</option>
							    <option value="ME">Maine</option>
							    <option value="MD">Maryland</option>
							    <option value="MA">Massachusetts</option>
							    <option value="MI">Michigan</option>
							    <option value="NH">New Hampshire</option>
							    <option value="NJ">New Jersey</option>
							    <option value="NY">New York</option>
							    <option value="NC">North Carolina</option>
							    <option value="OH">Ohio</option>
							    <option value="PA">Pennsylvania</option>
							    <option value="RI">Rhode Island</option>
							    <option value="SC">South Carolina</option>
							    <option value="VT">Vermont</option>
							    <option value="VA">Virginia</option>
							    <option value="WV">West Virginia</option>
							  </optgroup>
							</select>	
						</div>
					</div>
					<div class="form-group m-form__group row m--margin-bottom-20">
						<label class="col-form-label col-lg-3 col-sm-12">Placeholder</label>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<select class="form-control m-select2" id="m_select2_4_modal" name="param">
								<option></option>
							  	<optgroup label="Alaskan/Hawaiian Time Zone">
							    	<option value="AK">Alaska</option>
							    	<option value="HI">Hawaii</option>
							  	</optgroup>
							  	<optgroup label="Pacific Time Zone">
							    	<option value="CA">California</option>
							    	<option value="NV">Nevada</option>
							    	<option value="OR">Oregon</option>
							    	<option value="WA">Washington</option>
							  	</optgroup>
							  	<optgroup label="Mountain Time Zone">
							    	<option value="AZ">Arizona</option>
							    	<option value="CO">Colorado</option>
							    	<option value="ID">Idaho</option>
							    	<option value="MT">Montana</option>
							    	<option value="NE">Nebraska</option>
							    	<option value="NM">New Mexico</option>
							    	<option value="ND">North Dakota</option>
							    	<option value="UT">Utah</option>
							    	<option value="WY">Wyoming</option>
							  	</optgroup>
							  	<optgroup label="Central Time Zone">
							    	<option value="AL">Alabama</option>
							   	 	<option value="AR">Arkansas</option>
							    	<option value="IL">Illinois</option>
							   	 	<option value="IA">Iowa</option>
							    	<option value="KS">Kansas</option>
							    	<option value="KY">Kentucky</option>
							    	<option value="LA">Louisiana</option>
							    	<option value="MN">Minnesota</option>
							    <option value="MS">Mississippi</option>
							    <option value="MO">Missouri</option>
							    <option value="OK">Oklahoma</option>
							    <option value="SD">South Dakota</option>
							    <option value="TX">Texas</option>
							    <option value="TN">Tennessee</option>
							    <option value="WI">Wisconsin</option>
							  </optgroup>
							  <optgroup label="Eastern Time Zone">
							    <option value="CT">Connecticut</option>
							    <option value="DE">Delaware</option>
							    <option value="FL">Florida</option>
							    <option value="GA">Georgia</option>
							    <option value="IN">Indiana</option>
							    <option value="ME">Maine</option>
							    <option value="MD">Maryland</option>
							    <option value="MA">Massachusetts</option>
							    <option value="MI">Michigan</option>
							    <option value="NH">New Hampshire</option>
							    <option value="NJ">New Jersey</option>
							    <option value="NY">New York</option>
							    <option value="NC">North Carolina</option>
							    <option value="OH">Ohio</option>
							    <option value="PA">Pennsylvania</option>
							    <option value="RI">Rhode Island</option>
							    <option value="SC">South Carolina</option>
							    <option value="VT">Vermont</option>
							    <option value="VA">Virginia</option>
							    <option value="WV">West Virginia</option>
							  </optgroup>
							</select>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-brand m-btn" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-secondary m-btn">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Modal-->

<!--begin::Portlet-->
<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Validation State Examples
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row has-success">
				<label class="col-form-label col-lg-3 col-sm-12">Success State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_1_validate" name="param">
					    <option value="AK">Alaska</option>
					    <option value="HI">Hawaii</option>
					    <option value="CA">California</option>
					    <option value="NV">Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					</select>
					<div class="form-control-feedback">Success! You've done it.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-warning">
				<label class="col-form-label col-lg-3 col-sm-12">Warning State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2 has-error" id="m_select2_2_validate" name="param">
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK">Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  <optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT">Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
			<div class="form-group m-form__group row has-danger">
				<label class="col-form-label col-lg-3 col-sm-12">Danger State</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<select class="form-control m-select2" id="m_select2_3_validate" name="param" multiple="multiple">
					  	<optgroup label="Alaskan/Hawaiian Time Zone">
					    	<option value="AK" selected>Alaska</option>
					    	<option value="HI">Hawaii</option>
					  	</optgroup>
					  	<optgroup label="Pacific Time Zone">
					    <option value="CA">California</option>
					    <option value="NV" selected>Nevada</option>
					    <option value="OR">Oregon</option>
					    <option value="WA">Washington</option>
					  </optgroup>
					  <optgroup label="Mountain Time Zone">
					    <option value="AZ">Arizona</option>
					    <option value="CO">Colorado</option>
					    <option value="ID">Idaho</option>
					    <option value="MT" selected>Montana</option>
					    <option value="NE">Nebraska</option>
					    <option value="NM">New Mexico</option>
					    <option value="ND">North Dakota</option>
					    <option value="UT">Utah</option>
					    <option value="WY">Wyoming</option>
					  </optgroup>
					  <optgroup label="Central Time Zone">
					    <option value="AL">Alabama</option>
					    <option value="AR">Arkansas</option>
					    <option value="IL">Illinois</option>
					    <option value="IA">Iowa</option>
					    <option value="KS">Kansas</option>
					    <option value="KY">Kentucky</option>
					    <option value="LA">Louisiana</option>
					    <option value="MN">Minnesota</option>
					    <option value="MS">Mississippi</option>
					    <option value="MO">Missouri</option>
					    <option value="OK">Oklahoma</option>
					    <option value="SD">South Dakota</option>
					    <option value="TX">Texas</option>
					    <option value="TN">Tennessee</option>
					    <option value="WI">Wisconsin</option>
					  </optgroup>
					  <optgroup label="Eastern Time Zone">
					    <option value="CT">Connecticut</option>
					    <option value="DE">Delaware</option>
					    <option value="FL">Florida</option>
					    <option value="GA">Georgia</option>
					    <option value="IN">Indiana</option>
					    <option value="ME">Maine</option>
					    <option value="MD">Maryland</option>
					    <option value="MA">Massachusetts</option>
					    <option value="MI">Michigan</option>
					    <option value="NH">New Hampshire</option>
					    <option value="NJ">New Jersey</option>
					    <option value="NY">New York</option>
					    <option value="NC">North Carolina</option>
					    <option value="OH">Ohio</option>
					    <option value="PA">Pennsylvania</option>
					    <option value="RI">Rhode Island</option>
					    <option value="SC">South Carolina</option>
					    <option value="VT">Vermont</option>
					    <option value="VA">Virginia</option>
					    <option value="WV">West Virginia</option>
					  </optgroup>
					</select>	
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<span class="m-form__help">Example help text that remains unchanged.</span>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
<!--end::Portlet-->