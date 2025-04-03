<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f8f9fa; }
        .invoice-box { max-width: 750px; margin: auto; background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        
        /* Header Section */
        .header { text-align: center; color: #232020; padding: 15px; font-size: 26px; font-weight: bold; border-radius: 8px 8px 0 0; }
        
        /* Logo Section */
        .logo { text-align: center; margin: 15px 0; }
        .logo img { width: 150px; }

        /* Company & Order Details */
        .info { display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 14px; }
        .info div { width: 55%;  padding: 10px; border-radius: 8px; }
        .info h3 { margin-bottom: 8px; }

        /* Table Styling */
        .table-container { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; font-size: 14px; }
        table, th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #f1f2f2; color: #100f0f; }
        .total { text-align: right; font-size: 18px; font-weight: bold; margin-top: 10px; color: #0c1927; }

        /* Footer Section */
        .footer { text-align: center; margin-top: 30px; font-size: 14px; }
        .footer a { margin: 0 10px; text-decoration: none; color: #121213; font-weight: bold; }
        .social-icons img { width: 24px; vertical-align: middle; margin-right: 5px; }
    </style>
</head>
<body>

    <div class="invoice-box">
       
        <table style="width: 100%; padding-bottom: 10px;border: none; border-bottom: 2px solid #141414; ">
            <tr>
                <!-- Left: Logo -->
                <td style="width: 25%; border: none;">
                    <img src="{{ public_path('assets/img/logo.png') }}" alt="Maria Mattress" 
                        style="height: 60px; background-color: rgb(91, 91, 158);">
                </td>
        
                <!-- Center: Invoice Title -->
                <td style="width: 50%; text-align: center; border: none;">
                    <h1 style="margin: 0; font-size: 24px; color: #333;">Invoice</h1>
                </td>
        
                <!-- Right: Date & Time -->
                <td style="width: 25%; text-align: right; font-size: 14px; color: #666; border: none;">
                    Date: <strong>{{$order->date}}</strong><br>
                    Time: <strong>{{$order->time}}</strong>
                </td>
            </tr>
        </table>
        <table width="100%" style="border-collapse: collapse;  border: none;">
    <tr>
        <td width="50%" style="vertical-align: top; padding: 5px;  border: none;">
            <h3 style="margin-bottom: 5px;">Company Details</h3>
            <span>Company Name: Maria Mattress</span><br>
            <span>Company Address: 391 Longridge, Knutsford, Cheshire. WA16 8PP</span><br>
            <span>Phone: +44 7947 310490</span><br>
            <span>Email: contact@mariamattress.co.uk</span>
        </td>
        <td width="50%" style="vertical-align: top; padding: 5px;  border: none;">
            <h3 style="margin-bottom: 5px;">Order Details</h3>
            <span>Order Id: {{$order->order_id}}</span><br>
            <span>Customer Name: {{$order->name}}</span><br>
            <span>Email: {{$order->email}}</span><br>
            <span>Date: {{$order->date}}</span>
        </td>
    </tr>
</table>


        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($order->products as $index => $item)
                
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name . ' ' . $item->size }}</td>
                        <td>{{ $item->pivot->quantity }}</td>
                        <td>£{{ $item->price}}</td>
                        <td>£{{ $item->pivot->quantity * $item->price}}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="total">Total Amount:£{{$order->amount}}</span>

    

    </div>

</body>
</html>
