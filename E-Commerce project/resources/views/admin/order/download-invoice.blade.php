
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Customer Info</h1>
        <table border="1px" >
            <tr>
                <th>Customer Name</th>
                <td>{{ $customer->firstname." ".$customer->lastname }}</td>
            </tr>
            <tr>
                <th>Customer Address</th>
                <td>{{ $customer->address }}</td>
            </tr>
            <tr>
                <th>Customer Number</th>
                <td>{{ $customer->number }}</td>
            </tr>
        </table>

        <h1>Shipping Info</h1>
        <table border="1" >
            <tr>
                <th>Customer Name</th>
                <td>{{ $shipping->fullname }} </td>
            </tr>
            <tr>
                <th>Customer Address</th>
                <td>{{ $shipping->address }}</td>
            </tr>
            <tr>
                <th>Customer Number</th>
                <td>{{ $shipping->number }}</td>
            </tr>
        </table>
        <h1>Product Info</h1>
        <table >
            <tr>
                <th>
                    SI No
                </th>
                <th>
                    Product Id
                </th>
                <th>
                    Product Name
                </th>
                <th>
                    Product Price
                </th>
                <th>
                    Product Quantity
                </th>
                <th>
                    Total Price
                </th>
            </tr>
            @php($i=1)
            @foreach($orderdetails as $orderdetails )
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $orderdetails->product_id }}</td>
                    <td>{{ $orderdetails->product_name }}</td>
                    <td>{{ $orderdetails->product_price }}</td>
                    <td>{{ $orderdetails->product_quantity }}</td>
                    <td>{{ $orderdetails->product_quantity * $orderdetails->product_price  }}</td>
                </tr>
            @endforeach
        </table>
    </body>


    </html>


















