<?php

	$validation_rules = [
							'registration' => 	[
													'email' => 'empty|notvalid|exists',
											 		'password' => 'empty'
												],

							'login' => 	[
											'email' => 'empty|notvalid|notexists',
											'password' => 'empty'
										],

							'massintention' => 	[
													'fname' => 'empty|notvalid',
													'startdate' => 'empty',
													'enddate' => 'empty'
												]
						]