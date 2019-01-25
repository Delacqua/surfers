<section id="social" class="social" ng-controller="products">


	<div class="social-bg"></div>


	<div class="container"> <!-- container -> footer  -->
		 	<div class="row">
		 		<div class="col-12 col-md-6">

			 			<div class="d-flex">
			 				<img ng-src="<%instagramFeed[0][1]%>">
			 				<img ng-src="<%instagramFeed[1][1]%>">
						</div>
						<div class="d-flex">
			 				<img ng-src="<%instagramFeed[2][1]%>">
			 				<img ng-src="<%instagramFeed[3][1]%>">
			 			</div>

			 			<a class="instagram d-flex align-self-center">
			 				<div>
			 					<img src="img/instagram.png" alt="Instagram">
			 				</div>
			 				<div>
			 					<h3>FOLLOW US</h3>
			 				</div>
			 				<div>
			 					<h4>@surfersco</h4>
			 				</div>
			 			</a>
		 		</div>

		 		<div class="col-12 col-md-6">
		 			
		 			<form class="form-email" ng-if="formEmail">

					        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

						        <div class="form-group">
						            <input type="text" class="form-control"  name="name" placeholder="Name" ng-model="mail.name">
						        </div>					        	

						        <div class="form-group">
						            <input type="email" class="form-control" name="email" placeholder="Email" ng-model="mail.email">
						        </div>						    	
						    	
						    	<div class="row">
							        <div class="form-group col-6">
							             <select class="form-control" name="place" ng-model="mail.place">
							             	<option value="Birth Place"></option>
							                <option value="AL">Alabama</option>
							                <option value="AK">Alaska</option>
							                <option value="AZ">Arizona</option>
							            </select>
							        </div>

							        <div class="form-group col-6">
							            <input type="date" class="form-control calendar" name="birthday" placeholder="Birthday" ng-model="mail.birthday">
							        </div>								    		
						    	</div>
			        	
						    	<div class="row">
							        <div class="form-group col-6" >
							            <input type="number" pattern="^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$" class="form-control" name="phone" placeholder="Phone" ng-model="mail.phone">
							        </div>

							        <div class="form-group col-6" >
							            <input type="text" class="form-control" name="company" placeholder="Company" ng-model="mail.company">
							        </div>						    		
						    	</div>


						        <div class="form-group" >
						            <input type="text" class="form-control form-testo" name="message" placeholder="Your Message" ng-model="mail.message">
						        </div>

								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1" ng-model="mail.checked">
									<label class="form-check-label" for="exampleCheck1">Accept privacy policy</label>
								</div>

					        <button type="submit" class="btn btn-primary btn-lg" id="btn-snd" ng-click="sendMail(mail)">SEND</button>
					        
					    </form>


					    <h3 ng-if="!formEmail">
					    	Email Sent
					    </h3>

		 		</div>
		 		
		 	</div>

	</div>

</section>