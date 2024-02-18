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
            <div class="card-header"><strong>Passport Information</strong></div>
            <div class="card-body card-block">
                <table class="table table-borderless">
                    
                    @foreach ($data as $item)
                       <tr>
                        <td>Name :</td>
                        <td>{{ $data['name'] }}</td>
                    </tr>

                    <tr>
                        <td>Passport Number :</td>
                        <td>{{ $data['passport_number'] }}</td>
                    </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>