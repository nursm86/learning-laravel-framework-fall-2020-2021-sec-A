<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">DashBoard</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="{{route('admin.index')}}" class="btn btn-primary">Dashboard</a>
			<a href="{{route('admin.create')}}" class="btn btn-success">Add Employees</a>
			<a href="{{route('logout.index')}}" class="btn btn-danger">Logout</a>		
        </div>
        <div class="center">
            <h3 class="text">All employees</h3>
            <table class="table table-striped">
                <thead>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th></th>
                    <th></th> 
                </thead>
                    @foreach($employees as $employee)
                        <tbody>
                            <td>{{$employee['username']}}</td>
                            <td>{{$employee['name']}}</td>
                            <td>{{$employee['phone']}}</td>
                            <td><a href="{{route('admin.showEmployee',$employee['id'])}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{route('admin.destroy',$employee['id'])}}" class='btn btn-danger'>Delete</td>
                        </tbody>
                    @endforeach
            </table>
        </div>
        
        
<footer class="footer">
            <h4>Final Lab Exam</h4>
        </footer>
        
    </body>
</html>