<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
  This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cobardia (firebrick)</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Invoicebus Invoice Template">
  <meta name="author" content="Invoicebus">

  <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

  <link rel="stylesheet" href="/Mail_css/css/template.css">
</head>

<body>
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Shipping Address</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Order ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">QTY</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ $orderdata->orderanddetail->first_name }} {{ $orderdata->orderanddetail->last_name }}</td>
            <td>{{ $orderdata->product_name }}</td>
            <td>{{ $orderdata->orderanddetail->address }}</td>
            <td>{{ $orderdata->orderanddetail->phone_number }}</td>
            <td>{{ $orderdata->orderanddetail->CreditCardType }}</td>
            <td>{{ $orderdata->order_id }}</td>
            <td>{{ $orderdata->product_name }}</td>
            <td>{{ $orderdata->qty }}</td>
            <td>{{ $orderdata->price }}</td>
            
          </tr>
        </tbody>
      </table>
      <ib-span id="ib-print-btn" class="ib_default_button" data-tooltip="tooltip" data-placement="bottom" title="" data-original-title="This command is also used to save<br></ib>the invoice as PDF. See FAQ for more info.">
        <i class="fa fa-print"></i><span class="ib_hide_xsmall"> Print</span></ib-span>
</div>
</body>

</html>