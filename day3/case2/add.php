<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>添加音乐</title>
	</head>
	<body>
		<div class="container mt-5">
			<h1 class="display-3">添加音乐</h1>
			<hr>
			<form action="">
				<div class="form-group">
					<label for="title">标题</label>
					<input type="text" name="title" id="title" class="form-control is-invalid">
					<small class="invalid-feedback">请输入音乐标题</small>
				</div>
				<div class="form-group">
					<label for="title">标题</label>
					<input type="text" name="title" id="title" class="form-control">
					<small class="form-text text-muted">请输入音乐标题</small>
				</div>
				<button class="btn btn-block btn-primary">保存</button>
			</form>
		</div>
	</body>
</html>