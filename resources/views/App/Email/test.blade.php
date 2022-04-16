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
    <h4>{{$details['findParking']["customers"]->name}}</h4>
    <p>{{$details['findParking']["customers"]->email}}
    <br>{{$details['findParking']["customers"]->mobile_no}}</p>
    <table>
        <tr>
            <th>Service Name</th>
            <th>Parking Center Name</th>
            <th>Service Charges</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>

        <tr>
            <td>{{$details['findParking']["services"]->service_name}}</td>
            <td>{{$details['findParking']["parkingCenters"]->parking_center_name}}</td>
            <td>{{$details['findParking']["services"]->service_price}}</td>
            <td>{{$details['findParking']->start_data}}</td>
            <td>{{$details['findParking']->end_date}}</td>
        </tr>


        <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Service Charges</td>
                <td>{{$details['findParking']["services"]->service_price}}</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Grand Total</td>
                <td>{{$details['sumAmount'] + $details['findParking']["services"]->service_price}}</td>
            </tr>
    </table>
</body>
</html>