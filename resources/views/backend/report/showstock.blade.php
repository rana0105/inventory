<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stock Report</title>
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
        <h1 style="text-align: center;">Stock Report Item</h1>

  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Item</th>
        <th>Warehouse</th>
        <th>Shelf No.</th>
        <th>Level No.</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
    @foreach($stock as $sa)
      <tr>
        <td>{{ $sa->items->it_name }}</td>
        <td>{{ $sa->warehouses->w_name }}</td>
        <td>{{ $sa->shelfs->number }}</td>
        <td>{{ $sa->levels->number }}</td>
        <td>{{ $sa->quantity }}</td>
      </tr>
    @endforeach
        
    </tbody>
  </table> 
      
</html>