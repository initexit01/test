<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="add">Add+</a>
	<table border="1" width="100%">
		<tr>
			<th>SL</th>
			<th>User Name</th>
			<th>User Password</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Action</th>
		</tr>

		@php
			$sl=1;
			foreach($qr as $row){
		@endphp
				<tr>
					<td>@php echo $sl++; @endphp</td>
					<td>@php echo $row->user_name @endphp</td>
					<td>@php echo $row->user_password @endphp</td>
					<td>@php echo $row->mobile @endphp</td>
					<td>@php echo $row->email @endphp</td>
					<td>
						<a href="delete/@php echo $row->id; @endphp">Delete</a>
						<a href="up_form/@php echo $row->id; @endphp">Update</a>
					</td>
				</tr>

		@php
			}
		@endphp
	</table>
</body>
</html>