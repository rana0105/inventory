<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sale Report</title>
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
        <h1 style="text-align: center;">Sale Report</h1>
        <h3 style="text-align: center;">From Date : {{ $fdate }}</h3>
        <h3 style="text-align: center;">To Date : {{ $tdate }}</h3>

  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Sale ID</th>
        <th>Discount</th>
        <th>Net Total</th>
        <th>Payment</th>
        <th>Due</th>
      </tr>
    </thead>
    <tbody>
    @foreach($sale as $sa)
      <tr>
        <td>{{ $sa->id }}</td>
        <td>{{ $sa->st_discount }}</td>
        <td>{{ $sa->stotal_amount }}</td>
        <td>{{ $sa->spayment}}</td>
        <td>{{ $sa->sdue }}</td>
      </tr>
    @endforeach
        
    </tbody>
  </table> 
      <h4 style="text-align: right; margin-right: 70px;">Total Discount : {{ $todis }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Net Total Amount : {{ $tnt }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Total Payment : {{ $topay }}</h4>
      <h4 style="text-align: right; margin-right: 70px;">Total Due : {{ $todue }}</h4>
</body>
</html>