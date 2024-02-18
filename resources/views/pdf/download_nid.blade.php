<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>NID</title>
</head>
<body>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><strong>NID Information</strong></div>
            <div class="card-body card-block">
                <table class="table table-borderless">
                   
                        <tr>
                            <td>Name :</td>
                            <td>{{ $data['name'] }}</td>
                        </tr>
                        <tr>
                            <td>Father Name :</td>
                            <td>{{ $data['father_name'] }}</td>
                        </tr>
                        <tr>
                            <td>Mother Name :</td>
                            <td>{{ $data['mother_name'] }}</td>
                        </tr>

                        <tr>
                            <td>NID Number :</td>
                            <td>{{ $data['nid_number'] }}</td>
                        </tr>

                        <tr>
                            <td>Date of Birth :</td>
                            <td>{{ $data['dob'] }}</td>
                        </tr>
                  
                </table>
            </div>
        </div>
    </div>
</body>
</html>