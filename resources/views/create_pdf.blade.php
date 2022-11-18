<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate pdf</title>
</head>
<body>
    <table style="width: 100%">
        <thead>
            <tr style="border: 1px solid black">
                <td style="font-size: 11px">Name</td>
                <td style="font-size: 11px">Email</td>
                <td style="font-size: 11px">Time Stamp</td>
                <td style="font-size: 11px">Buyin</td>
                <td style="font-size: 11px">Total Buyin</td>
                <td style="font-size: 11px">Cashout</td>
                <td style="font-size: 11px">Win Loss</td>
                <td style="font-size: 11px">Total Amount</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td style="font-size: 11px">{{ $games->users->name }}</td>
                    <td style="font-size: 11px">{{ $games->users->email }}</td>
                    <td style="font-size: 11px">@php
                        $date = strtotime($games ? $games->created_at : '');
                        echo date('d/m/Y H:i a', $date);
                    @endphp</td>
                    <td style="font-size: 11px">${{ $games->buyin }}</td>
                    <td style="font-size: 11px">${{ $games->total_buyin }}</td>
                    <td style="font-size: 11px">${{ $games->cashout }}</td>
                    <td style="font-size: 11px">${{ $games->win_loss }}</td>
                    <td style="font-size: 11px">${{ $games->total_amount }}</td>
                </tr>
        </tbody>
    </table>
    
</body>
</html>