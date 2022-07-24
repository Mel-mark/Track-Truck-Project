@extends('layouts.admin-navbar')
@section('content')
    <head>
        <title>Admin Panel Truck Services</title>
        <!-- Link to CSS -->
        <link rel="stylesheet" href="css/admin-view-bill.css">
      
    
    </head>
<body>
     <!-- Header -->


   <br> <br> <br> <br>
        <button class="back-btn" onclick="history.back()"> 
            <label for="back-btn">Go back</label>
            <input id="back-btn" type="button" style="display: none;">
        </button>
        
        <h1 style="text-align: center;">Bill Information</h1>
        <hr>

      

        <table class="table">
           
            <tr>
              <th >Service Charge:</th>
              <td>₱300</td>
            </tr>
            <tr>
              <th>Total KM:</th>
              <td>1km (₱200)</td>
            </tr>
            <tr>
              <th >VAT:</th>
              <td>₱100</td>
            </tr>
            <tr>
              <th >Total Cost:</th>
              <td style="color: red;">₱400</td>
            </tr>
          </table>  

      
</body>
</html>

@endsection
