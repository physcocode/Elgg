<?php
/**
 * Upload a file through the embed interface
 */

$form_vars = [
	'class' => 'elgg-form-embed',
	'prevent_double_submit' => true,
];
$body_vars = ['container_guid' => elgg_get_page_owner_guid()];
echo elgg_view_form('file/upload', $form_vars, $body_vars);

// the tab we want to be forwarded to after upload is complete
echo elgg_view('input/hidden', [
	'name' => 'embed_forward',
	'value' => 'file',
]);
