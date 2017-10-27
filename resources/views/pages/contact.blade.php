@extends('layouts.app')


@section('contact')

<!--contacts model
$table->increments('id');
$table->string('firstName');
$table->string('lastName');
$table->string('email');
$table->string('phone');
$table->boolean('mortgageProtection');
$table->boolean('healthcareCoverage');
$table->boolean('finalExpense');
$table->string('message')->unique();
$table->timestamps();	-->





<div class="container-fluid" id="contact">

	<div class="row">

		<div class="col-lg-8 col-lg-offset-2">

			<h1>Get a Quote!</h1>
			<h5>Protec Insurance reviews the policies available across the major providers you trust to make sure you get the right fit for your situation and budget. </h5>
			<h5>qui blanditiis praesentium volupta-tum deleniti atque corrupti quos dolores et quas molestias excep-turi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eli-gendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repel-lendus. Temporibus autem qui-busdam et aut officiis debitis aut rerum</h5>

			

			<form id="contact-form" method="post" action="contact.php" role="form">

				<div class="messages"></div>

				<div class="controls">

					<div class="row">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_lastname">Lastname *</label>
								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_email">Email *</label>
								<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_phone">Phone *</label>
								<input id="form_phone" type="tel" name="phone " class="form-control" placeholder="Please enter your phone">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Mortgage Protection
								</label>
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Healthcare Coverage
								</label>
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Final Expense
								</label>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="form_message">Message *</label>
								<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
								<div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"></div>
							</div>
						</div>

						<div class="col-md-12">
							<input type="submit" class="btn btn-success btn-send" value="Submit" id="submitButton">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p><strong>*</strong> These fields are required.</p>
						</div>
					</div>
				</div>

			</form>

		</div><!-- /.8 -->

	</div> <!-- /.row-->

</div> <!-- /.container-->




@endsection
