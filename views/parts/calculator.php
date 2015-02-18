<div class="row container-fluid calculadora">
	<div class="row container-fluid bodySection">
			<div class="col-lg-2 col-sm-6 col-md-3 col-xs-12">
				<div class="form-group">
					<label >Mortgage Amount: </label>
					<div class="input-group">
					  <span class="input-group-addon colorAddon">$</span>
					  <input class="form-control NumPunto" placeholder='00.00' id='txtMortage'>
					</div>	
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-md-3 col-xs-12">
				<div class="form-group">
					<label>Annual Interest: </label>
					<div class="input-group">
					  <input class="form-control NumPunto" placeholder='0' id='txtInteres'>
					  <span class="input-group-addon colorAddon">%</span>
					</div>
				</div>
			</div>
            <div class="col-lg-2 col-sm-6 col-md-3 col-xs-12">
				<div class="form-group">
					<label>Mortgage term: </label>
					<input class="form-control" placeholder='Years' id='txtTerm'>
				</div>
            </div>
            <div class="col-lg-2 col-sm-6  col-md-3 col-xs-12">
				<div class="form-group">
					<label>Monthly Payments</label>
					<div class="input-group">
					  <span class="input-group-addon colorAddon">$</span>
					  <input disabled class="form-control" placeholder='00.00' id='txtMonthlyPayments'>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-md-3 col-xs-12">
				<div class="form-group">
					<label>Bi-Weekly Payments: </label>
					<div class="input-group">
					  <span class="input-group-addon colorAddon">$</span>
					  <input disabled class="form-control" placeholder='00.00' id='txtBi'> <!-- Monthly payments / 2 -->
					</div>
				</div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-3 col-xs-12">
            <label style="color:#d2d1d1;">.</label>
				<div class=" container-fluid bot">
					<div class="col-xs-12 col-sm-6 bot">
						<button class="form-control butto" id='clearButton'>Clear</button>
					</div>
					<div class="col-xs-12 col-sm-6 bot">
						<button class="form-control butto" id='calculateButton'>Calculate</button>
					</div>
				</div>
				
			</div>
	</div>
</div>