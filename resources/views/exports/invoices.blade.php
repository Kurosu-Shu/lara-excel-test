<div>

    <table>
        <thead>
            <tr>
                <th style="background-color: red;">table_number</th>
                <th>item_list</th>
                <th>shop_name</th>
                <th>price_list</th>
                <th>total_amount</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->table_number }}</td>
                    <td>{{ $invoice->item_list }}</td>
                    <td>{{ $invoice->shop_name }}</td>
                    <td>{{ $invoice->price_list }}</td>
                    <td>{{ $invoice->total_amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
