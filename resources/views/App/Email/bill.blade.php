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
    <h4>{{$findParking["customers"]->name ?? ""}}</h4>
    <p>{{$findParking["customers"]->email ?? ""}}
    <br>{{$findParking["customers"]->mobile_no ?? ""}}</p>
    <table>
        <tr>
            <th>Service Name</th>
            <th>Parking Center Name</th>
            <th>Parking Type</th>
            <th>Service Charges</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>

        @foreach($findParking["services"] as $customer_service)
        @foreach($all_services as $services)
        @if($customer_service->service_id == $services->id )
        <tr>
            
            <td>{{$services->service_name}}</td>
            {{-- <td>service_name</td> --}}
            <td>{{$findParking["parkingCenters"]->parking_center_name}}</td>
            <td>{{$services->service_type}}</td>
            <td>{{$services->service_price}}</td>
            <td>{{$findParking->start_data}}</td>
            <td>{{$findParking->end_date}}</td>
        </tr>
        @endif
        @endforeach
        @endforeach

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
                <td  class="backgroup">Service Charges Per Day</td>
                <td>
                    <?php $sub_total = 0; ?>
                    @foreach($findParking["services"] as $customer_service)
                    @foreach($all_services as $services)
                    @if($customer_service->service_id == $services->id)
                        <?php $sub_total += $services->service_price; ?>
                    @endif
                    @endforeach
                    @endforeach
                    {{$sub_total}}
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Total days</td>
                <td>
                    
                    <?php 
                        $startDate = $findParking->start_data;
                        $endDate =$findParking->end_date;
                        $diff = date_diff(date_create($startDate), date_create($endDate));
                        $days =  $diff->format('%d');
                        ?>
                    {{$days+1}}
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Total Service Charges</td>
                <td>
                    
                    <?php 
                        $startDate = $findParking->start_data;
                        $endDate =$findParking->end_date;
                        $diff = date_diff(date_create($startDate), date_create($endDate));
                        $days =  $diff->format('%d');
                        ?>
                    {{($sub_total)*($days+1)}}
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td  class="backgroup">Grand Total</td>
                <td>{{$sumAmount + ($sub_total)*($days+1)}}</td>
            </tr>
    </table>
</body>
</html>