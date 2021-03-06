<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>


    <style >
    .body{
      background-color:#25274D;
    }
    .content{
      background-color: #EEEEEE;

      margin-left: 10%;

      /* padding: 80px; */
      width: 80%;

      margin-top: 50px;
      /* background-color: blue; */
       border-radius: 2%;
    }
    .theading{
      text-align: center;
    background-color: #EEEEEE;
    }
    .backLogout{
      text-align: left;

      margin-left: 30px;
      padding-top: 20px;

    }
    .m-heading{
      margin-bottom: 20px;
    }
    </style>
  </head>
  <body class="body">

    <div class="content">
      <dive class="theading">

      <div class="backLogout">
        <a href="/tutor">Back</a>|
        <a href="/logout">Logout</a>

      </div>

          <h1 class="m-heading">
          <i>All Student</i>
          </h1>
      </dive>

      <table class="table table-hover">

        {{ csrf_field() }}

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Package ID</th>
          </tr>
        </thead>
        <tbody>
          @for($i=0; $i != count($student); $i++)
            <tr>
          		<td>{{$student[$i]->login_id}}</td>
          		<td>{{$student[$i]->name}}</td>
          		<td>{{$student[$i]->class}}</td>
          		<td>{{$student[$i]->package_id}}</td>
          	</tr>
            @endfor
        </tbody>
      </table>
    </div>

  </body>
</html>
