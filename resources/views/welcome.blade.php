<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Api</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="bitcoinTable" class="display">
        <thead>
            <tr>
                <th>Currency</th>
                <th>Symbol</th>
                <th>Rate (USD)</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $currency => $data)
            <tr>
                <td>{{ $currency }}</td>
                <td>{{ $data['symbol'] }}</td>
                <td>{{ $data['rate'] }}</td>
                <td>{{ $data['description'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bitcoinTable').DataTable();
        });
    </script>
</body>
</html>
