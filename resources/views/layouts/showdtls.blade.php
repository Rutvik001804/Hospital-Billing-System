<div class="hero-wrap hero-bread" style="background-image: url('images/med1.jpg');">
    <div class="container">
    	<div class="row no-gutters slider-text align-items-center justify-content-center">
        	<div class="col-md-9 ftco-animate text-center">
			  	<div class="neon"><h1 class="mb-0 bread" style="color:black">Show Details</h1></div>
        	</div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<h2>Search Here</h2>
		<input class="form-control" id="myInput" type="text" placeholder="Search..."><br>
		<div class="row">
			<div class="col-md-12 ftco-animate">
    			<div class="cart-list">
					<table class="table">
					    <thead class="thead-primary">
					      <tr class="text-center">
					        <th>ID</th>
					        <th>Name</th>
					        <th>DOB</th>
						    <th>Blood Group</th>
					        <th>Contact</th>
					        <th>Email</th>
							<th>Address</th>
							<th>Room No</th>
							<th>Check-In</th>	
					      </tr>
						</thead>
					    <tbody id="myTable">
							@foreach($patient as $p)
								<tr class="text-center">
									<td>{{$p->P_ID}}</td>
									<td>{{$p->P_Name}}</td>
									<td>{{$p->P_DOB}}</td>
									<td><a href="https://www.google.com/" target="_blank">{{$p->P_BloodGroup}}</a></td>
									<td>{{$p->P_Contact}}</td>
									<td>{{$p->P_Email}}</td>
									<td>{{$p->P_Address}}</td>
									<td>{{$p->Room_No}}</td>
									<td>{{$p->CheckIn}}</td>
								</tr>
						  	@endforeach
					    </tbody>
					</table>
					<script>
						$(document).ready(function(){
							$("#myInput").on("keyup", function() {
								var value = $(this).val().toLowerCase();
								$("#myTable tr").filter(function() {
									$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
								});
							});
						});
					</script>
				</div>
    		</div>
    	</div>
	</div>
</section>