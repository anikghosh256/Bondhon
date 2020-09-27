<style type="text/css">
	table{
		width: 90%;
		overflow: hidden;
		text-align: center;
	}
	td{
		border-bottom: 1px solid #eee;
	}
</style>

<h1><?php bloginfo('name'); ?> Form data</h1>
<hr>
<?php settings_errors(); ?>
<?php
global $wpdb;
	$table_name = $wpdb->prefix . "form_data";
	$messages = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY `id` DESC");
?>


<?php if ($messages != ''): ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>

	<?php foreach ($messages as $message): ?>
	<tr>
		<td><?php echo $message->full_name; ?></td>
		<td><?php echo $message->s_email; ?></td>
		<td><?php echo $message->s_message; ?></td>
	</tr>
	<?php endforeach; ?>

  </tbody>
</table>
<?php endif ?>



