<!DOCTYPE html>
<html>
	<head>
		<title>Files</title>
		<style type="text/css">
			*{ margin: 0; padding: 0; }
			html, body{ width: 100%; height: 100%; }
			a:hover{ text-decoration: none; }
			#wrap{ margin: 0 auto; padding-top: 20px; width: 960px; }
			#wrap h2{ margin-bottom: 15px; }
			#wrap table{ width: 100%; border-collapse: collapse; margin-bottom: 20px; }
			#wrap td, #wrap th{ padding: 5px; border: 1px solid #000; }
			#wrap th{ background: #000; color: #fff; }
			#wrap .type{ text-align: center; width: 1%; }
			#wrap .type, #wrap .name, #wrap .size, { white-space: nowrap; }
			#wrap textarea{ width: 100%; height: 100px; resize: vertical; }
			#wrap .message{ padding: 5px; border: 3px solid #00f; color: #00f; margin-bottom: 20px; }
			#wrap .error{ padding: 5px; border: 3px solid #f00; color: #f00; margin-bottom: 20px; }
			#wrap .row, #wrap label{ display: block; margin-bottom: 5px; }
			#wrap .controls{ text-align: right; }
		</style>
	</head>

	<body>
		<div id="wrap">
			<h2>Files</h2>
			<table id="files">
				<tr>
					<th>Type</th>
					<th>Name</th>
					<th>Size</th>
					<th>Description</th>
				</tr>
				<?php if ($files->count() === 0) : ?>
				<tr>
					<td colspan="4">Uploaded files not found</td>
				</tr>
				<?php else : ?>
					<?php foreach ($files as $file) : /** @var Model_File $file **/ ?>
						<tr>
							<td class="type"><img src="<?php echo URL::base('http') ?>public/icons/16px/<?php echo $file->type ?>.png"></td>
							<td class="name"><a href="<?php echo URL::base('http') ?>uploads/<?php echo $file->file ?>"><?php echo $file->file ?></a></td>
							<td class="size"><?php echo Text::bytes($file->size) ?></td>
							<td class="desc"><?php echo HTML::chars($file->description) ?></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</table>


			<h2>Upload</h2>
			<?php if ($message) : ?>
				<div class="message"><?php echo HTML::chars($message) ?></div>
			<?php endif; ?>
			<?php foreach ($errors as $error) : ?>
				<div class="error"><?php echo HTML::chars($error) ?></div>
			<?php endforeach; ?>
			<form action="<?php echo Route::url('default', array('controller' => 'files', 'action' => 'upload')) ?>" method="post" enctype="multipart/form-data">
				<label for="file_control">File</label>
				<div class="row"><input type="file" name="file" id="file_control"></div>
				<label for="description_control">Description</label>
				<div class="row"><textarea rows="10" cols="10" name="description" id="description_control"></textarea></div>
				<div class="controls"><input type="submit" value="Upload"></div>
			</form>
		</div>
	</body>
</html>