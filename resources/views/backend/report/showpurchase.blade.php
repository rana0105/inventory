<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Purchase Report</title>
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
        <h1 style="text-align: center;">Purchase Report</h1>
        <h3 style="text-align: center;">From Date : {{ $fdate }}</h3>
        <h3 style="text-align: center;">To Date : {{ $tdate }}</h3>
        <a href="{{ url('purchasePrint') }}">Purchase Print</a>

  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Purchase ID</th>
        <th>Discount</th>
        <th>Net Total</th>
        <th>Payment</th>
        <th>Due</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1;?>
    @foreach($purchase as $pur)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $pur->discount }}</td>
        <td>{{ $pur->ntotal }}</td>
        <td>{{ $pur->payment}}</td>
        <td>{{ $pur->due }}</td>
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