<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Employment Contracts Dashboard</h1>

<!-- Dynamic Table displaying data from employment_contracts table -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Employer Name</th>
            <th>Employee Name</th>
            <th>Employee Address</th>
            <!-- <th>Job Title</th>
            <th>Signature 1</th>
            <th>Signature 2</th>
            <th>Signature 3</th>
            <th>Signature 4</th>
            <th>Signature 5</th> -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contracts as $contract)
            <tr>
                <td>{{ $contract->id }}</td>
                <td>{{ $contract->employer_name }}</td>
                <td>{{ $contract->employee_name }}</td>
                <td>{{ $contract->employee_address }}</td>
                <!-- <td>{{ $contract->job_title }}</td> -->
                {{-- <td><img src="{{ $contract->signature_step1 }}" style="width: 100px;" /></td>
                <td><img src="{{ $contract->signature_step2 }}" style="width: 100px;" /></td>
                <td><img src="{{ $contract->signature_step3 }}" style="width: 100px;" /></td>
                <td><img src="{{ $contract->signature_step4 }}" style="width: 100px;" /></td>
                <td><img src="{{ $contract->signature_step5 }}" style="width: 100px;" /></td> --}}
                <td>
                    <!-- You can add actions like View, Edit, Delete here -->
                    <a href="#">View</a>
                    {{-- | <a href="#">Edit</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
