<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body style="background-color:darkolivegreen">
    <h1>HELLO WORLD!</h1>
    <p>
        This is a test home page. Will be modified soon.
    </p>
    <table>
        <tr>
            <th>Customer Name</th>
            <th>Customer Address</th>
        </tr>

        @foreach($customerData as $custData)
            <tr>
                <td>{{$custData->customers_name}}</td>
                <td>{{$custData->customer_address}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>