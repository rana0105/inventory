<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Purchase Invoice</title>
  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        width: auto;
        font-size: 12px;
        border: 1px solid #000000;
        /*border: none;*/
        text-align: center;
        padding-top: 4px;
        padding-bottom:  5px;
        margin-top: 2px;
        margin-bottom: 2px;
    }
    input {
        border: none;
    }

    textarea {
        border: none;
  }
  </style>
</head>
<body>
        <h1 style="text-align: center;">Purchase Invoice</h1>
        <h3 style="text-align: center;">Invoice ID : {{ $purchase->id }}</h3>
        <!-- <h4 style="text-align: center;">Invoice Created By :  </h4> -->

  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Sub Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach($pstock as $ps)
      <tr>
        <td>{{ $ps->items->it_name }}</td>
        <td>{{ $ps->quantity }}</td>
        <td>{{ $ps->u_price}}</td>
        <td>{{ $ps->s_total }}</td>
      </tr>
    @endforeach
        
    </tbody>
  </table> 
      <h4 style="text-align: right; margin-right: 70px;">Total Amount : {{ $purchase->ntotal }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Total Discount : {{ $purchase->discount }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Payment : {{ $purchase->payment }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Due : {{ $purchase->due }}</h4>
</body>
</html>