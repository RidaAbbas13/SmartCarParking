<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>

    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}


 th{background-color: gray;}

tr{background-color: #f2f2f2;}
</style>
</head>
<body>
    <center>
        <h2>Smart Car Parking</h2>
        <span>www.smartcarparking.com</span>
    </center>
    <h4>{{$findParking["customers"]->name}}</h4>
    <p>{{$findParking["customers"]->email}}
    <br>{{$findParking["customers"]->mobile_no}}</p>
    <table>
        <tr>
            <th>Service Name</th>
            <th>Parking Center Name</th>
            <th>Service Charges</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>

        <tr>
            <td>{{$findParking["services"]->service_name}}</td>
            <td>{{$findParking["parkingCenters"]->parking_center_name}}</td>
            <td>{{$findParking["services"]->service_price}}</td>
            <td>{{$findParking->start_data}}</td>
            <td>{{$findParking->end_date}}</td>
        </tr>

        @if(!empty($addtionalCharges))
        @foreach($addtionalCharges as $charges)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">{{$charges->charges_title}}</td>
                <td>{{$charges->amount}}</td>
            </tr>
        @endforeach
        @endif

        <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Service Charges</td>
                <td>{{$findParking["services"]->service_price}}</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Grand Total</td>
                <td>{{$sumAmount + $findParking["services"]->service_price}}</td>
            </tr>
    </table>
</body>
</html>