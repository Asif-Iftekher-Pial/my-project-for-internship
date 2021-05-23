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


   Name ={{ $order->customer->name }}
  
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <td>sl</td>
            <th scope="col">Product Name</th>
            <th scope="col">QTY</th>
            <th scope="col">Price</th>
            
          </tr>
        </thead>
        

        
        <tbody>
          @foreach ($order->myorder as $item )
          <tr>
            <th scope="row">1</th> 
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->qty }}</td>
            <td>{{ $item->price }}</td>
            
          </tr>
             
    @endforeach
        </tbody>
      </table>
      <ib-span id="ib-print-btn" class="ib_default_button" data-tooltip="tooltip" data-placement="bottom" title="" data-original-title="This command is also used to save<br></ib>the invoice as PDF. See FAQ for more info.">
        <i class="fa fa-print"></i><span class="ib_hide_xsmall"> Print</span></ib-span>
</div>
</body>

</html>