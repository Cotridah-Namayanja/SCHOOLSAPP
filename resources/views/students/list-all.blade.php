<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mb-4">Student List</h2>
                </div>

                <div class="col">
                    <div class="mb-3 text-end">
                        <a href="{{ route('students.create') }}" class="btn btn-primary">Create New Student</a>
                    </div>
                </div>
            </div>
           
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Parent</th>
                        <th>Class</th>
                        <th>House</th>
                        <th>Report On</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->parent }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->house ?? 'N/A' }}</td>
                            <td>{{ $student->report_on }}</td>
                            <td>{{ $student->deadline_date ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
