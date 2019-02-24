<?php

	$validation_rules = [
							'registration' => 	[
													'email' => [
																'empty' => 'Please enter email!',
																'notvalid' => 'Email address not valid!',
																'exists' => 'Email address already exists'
																],
											 		'password' => ['empty' => 'Please enter password!']
												],

							'login' => 	[
											'email' => [
														'empty' => 'Please enter email!',
														'notvalid' => 'Email address not valid!',
														'notexists' => 'Email address already exists'
													   ],
											'password' => ['empty' => 'Please enter password']
										],

							'massintention' => 	[
											'fname' => [
														'empty' => 'Please enter full name!',
														'notvalid' => 'Invalid name, alphabets only allowed'
													   ],
											'startdate' => ['empty'=>'Please enter date to start intention'],
											'enddate' => ['empty'=>'Please enter date to end intention']
										]
						]