<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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