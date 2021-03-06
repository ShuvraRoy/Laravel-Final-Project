<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title></title>


    <style >
    .body {
      background-color:#25274d;
      /* border: 1px solid red; */
      padding:5%;
      }
      #from{
        background-color:white;
        padding:5%;
        margin-left: 10%;
        margin-right: 10%;
        /* margin-right: 10px; */
         border-radius: 2%;
      }
      .m-heading{
        text-align: center;
        padding-bottom: 20px;
      }
    </style>

</head>

<body class="body">

    <form class="needs-validation"  id="from" method="post">
    {{ csrf_field() }}
      <a href="/student">Back</a>|
      <a href="/logout">Logout</a>

        <h1 class="m-heading">Payment
        </h1>

        @if (Session::has('username','id'))
        <div class="form-row">
        <div class="form-group col-md-4">
          <label>Tutor Name</label>
          <input type="text" class="form-control" id="tutor_name" name="tutor_name"  value="{{$user->name}}" readonly>
          </div>
         
       
        <div class="form-group col-md-6">
        <label>Student Name</label>
          <input type="text" class="form-control" id="student_name" name="student_name"  value="{{{ Session::get('username') }}}"readonly>
          
        </div>
        <div class="form-group col-md-6">
          <label >Pay Amount</label>
          <input type="text" class="form-control" id="amount" name="amount"  value="{{$user->salary}}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label>Date</label>
          <input type="date" value="<?php echo $today; ?>" class="form-control" id="date" name="date">
          </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
        
          <input type="hidden" class="form-control" id="tutor_id" name="tutor_id"  value="{{$user->id}}" readonly>
        </div>
        <div class="form-group col-md-6">
          
          <input type="hidden" class="form-control" id="student_id" name="student_id"  value="{{{ Session::get('id') }}}"readonly>
        </div>
         
        
      </div>
      @endif

      <td><input type="submit" name="submit" value="Confirm Payment"></td>
     

    </form>

</body>

</html>
