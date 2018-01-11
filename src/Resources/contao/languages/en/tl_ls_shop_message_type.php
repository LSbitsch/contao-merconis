<?php

	/*
	 * Fields
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['title']	= array('Designation');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['alias'] = array('Alias', 'Unique designation for referencing.');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendWhen']			= array('Message type');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation01'] = array('Dependence on status 1');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation02'] = array('Dependence on status 2');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation03'] = array('Dependence on status 3');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation04'] = array('Dependence on status 4');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useStatusCorrelation05'] = array('Dependence on status 5');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['usePaymentStatusCorrelation'] = array('Dependence on payment provider status');

	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation01'] = array('Send when status is');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation02'] = array('Send when status is');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation03'] = array('Send when status is');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation04'] = array('Send when status is');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['statusCorrelation05'] = array('Send when status is');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_paymentProvider'] = array('Payment Provider');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_statusValue'] = array('Send when status is');
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['useCounter']			= array('Use message numbering');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counter']			= array('Current counter reading');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterString']			= array('Format of message number', 'Here you can define in which format the message number shall be indicated. Use the place holder {{counter}} to insert the counter reading and {{date:}}, if required, to automatically insert a variable date indication. Write any date indication whatsoever in the syntax of the PHP function &quot;date()&quot; behind the colon. Example: &quot;{{date:Y}}-{{counter}}&quot; results in &quot;2012-147&quot; for message no. 147 in year 2012.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterStart']			= array('Start value of the counter ({{counter}})', 'Define here with which value the counter ({{counter}}) shall start.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartCycle']		= array('Resetting the counter ({{counter}})', 'Define here at which intervals the counter({{counter}}) shall be reset, if required.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartNow']		= array('Reset counter ({{counter}}) immediately', 'Activate this option if you want the counter ({{counter}}) to be reset to the start value immediately when your data record is saved.');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['lastDispatchDateUnixTimestamp'] = array('Date of the last message transmission');

	
	/*
	 * Legends
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['title_legend']   = 'Designation';
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counter_legend']   = 'Message numbering';
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendingOptions_legend'] = 'Transmission settings';
	
	/*
	 * References
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['counterRestartCycle']['options'] = array(
		'never' => 'never',
		'year' => 'new year',
		'month' => 'new month',
		'week' => 'new week',
		'day' => 'new day'	
	);
	
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['sendWhen']['options'] = array(
		'manual' => 'manually',
		'onStatusChangeImmediately' => 'immediately after status change',
		'onStatusChangeCronDaily' => 'status-dependent by means of Cronjob (daily)',
		'onStatusChangeCronHourly' => 'status-dependent by means of Cronjob (hourly)',
		'asOrderConfirmation' => 'as a confirmation of order',
		'asOrderNotice' => 'as an order notification'
	);

	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['paymentStatusCorrelation_paymentProvider']['options'] = array(
		'payPalPlus' => 'PayPalPlus',
		'payone' => 'Payone',
		'saferpay' => 'Saferpay',
		'vrpay' => 'VR Pay',
		'sofortbanking' => 'Online Bank Transfer.'
	);

	/*
	 * Buttons
	 */
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['new']        = array('New message type', 'Define a new message type');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['edit']        = array('Edit message models', 'Edit message models of message type ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['editheader']        = array('Edit message type', 'Edit message type ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['delete']        = array('Delete message type', 'Delete message type ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['copy']        = array('Copy message type', 'Copy message type ID %s');
	$GLOBALS['TL_LANG']['tl_ls_shop_message_type']['show']        = array('Show details', 'Show details of message type ID %s');
