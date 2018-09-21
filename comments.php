<div class="comments">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">

				<div>
					<?php
						wp_list_comments()
						;?>
				</div>


				<div class="section-title text-center">
					<h2>Leave Your Comments</h2>
				</div>

				<?php
					$meal_comment_fields = array();
					$meal_name_placeholder = __('Name', 'meal');
					$meal_Email_placeholder = __('Email', 'meal');
					$meal_url_placeholder = __('Website', 'meal');
					$meal_comments_placeholder = __('Comments', 'meal');
					$meal_send_placeholder = __('Send', 'meal');
					$meal_after_text_placeholder = __('Your mail address will not be published. Required field are marked', 'meal');
					$meal_comment_fields['author']=<<<EOD
<div class="row">
		<div class="col-md-6">
		<div class="form-group">
			<input type="text" name="author" id="author" class="form-control" required="*" placeholder="{$meal_name_placeholder}*">
		</div>
	</div>
EOD;
					$meal_comment_fields['email']=<<<EOD
	<div class="col-md-6">
		<div class="form-group">
			<input type="email" name="email" id="email" class="form-control" required="*" placeholder="{$meal_Email_placeholder}*">
		</div>
	</div>
</div>
EOD;
					$meal_comment_fields['url'] = <<<EOD
<div class="form-group">
	<div class="controls">
		<input type="text" name="url" id="url" class="form-control" required="*" placeholder="{$meal_url_placeholder}*">
	</div>
</div>
EOD;
					$meal_comment_field = <<<EOD
<div class="form-group">
	<div class="controls">
		<textarea name="message" id="message" cols="30" rows="5" class="form-control" required="*" placeholder="{$meal_comments_placeholder}*"></textarea>
	</div>
</div>
EOD;
					$meal_comment_submit_button = <<<EOD
<div class="text-center mt-md-5">
	<button type="submit" class="btn btn-danger send-button">{$meal_send_placeholder }</button>
</div>
EOD;

					$meal_comment_form_arguments = array(
						'fields'=> $meal_comment_fields,
						'comment_field'=> $meal_comment_field,
						'submit_button'=> $meal_comment_submit_button,
						'class_form' => 'comment-form text-left',
						'comment_notes_before' => "",
						'comment_notes_after' => "<p>{$meal_after_text_placeholder}*</p>",
						'title_reply'=> '<p></p>',
					);

					comment_form($meal_comment_form_arguments);
				?>

			</div>

		</div>
	</div>
</div>