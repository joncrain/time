<?php 

$this->view('listings/default',
[
	"i18n_title" => 'time.listing.title',
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "time-tab",
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "time.timezone",
			"i18n_header" => "time.listing.timezone",
		],
		[
			"column" => "time.networktime_status",
			"i18n_header" => "time.listing.networktime_status",
		],
		[
			"column" => "time.networktime_server",
			"i18n_header" => "time.listing.networktime_server",
		],
	]
]);
