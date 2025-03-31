<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Create Student</h2>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="parent" class="form-label">Parent Name</label>
                    <input type="text" class="form-control" id="parent" name="parent" required>
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
                <div class="mb-3">
                    <label for="house" class="form-label">House (Optional)</label>
                    <input type="text" class="form-control" id="house" name="house">
                </div>
                <div class="mb-3">
                    <label for="report_on" class="form-label">Report On</label>
                    <input type="date" class="form-control" id="report_on" name="report_on" required>
                </div>
                <div class="mb-3">
                    <label for="deadline_date" class="form-label">Deadline Date (Optional)</label>
                    <input type="date" class="form-control" id="deadline_date" name="deadline_date">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
