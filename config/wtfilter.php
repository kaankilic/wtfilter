<?php 

return [
	"canUpdateViews" 	=> true,
	"config_folder" 	=> app_path()."/config",
	"ignore_files"		=> [],
	"ignore_folders" 	=> [],
	"repository"		=> ":owner/:repo",
	"version_format"	=> "v[0-9]*.[0-9]*.[0-9]*",
	"storage"			=> "uploads"
];
?>