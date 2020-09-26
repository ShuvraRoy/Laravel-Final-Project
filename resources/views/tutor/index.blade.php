<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="/logout">Logout</a>



    <h1>Welcome


    @if (Session::has('username'))
    {{{ Session::get('username') }}}
    @endif

    </h1>

  </body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" rel="stylesheet">

    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel ="stylesheet" href ="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
</head>
<body>
	 <div style="height: 500px;"></div>
     <div class="full-nav">
        <div class="logo"><a href=""><img
         src="abc/img/logo.png" alt=""></a></div>
         <h1>Welcome


         @if (Session::has('username'))
         {{{ Session::get('username') }}}
         @endif

         </h1>
         <nav class="nav2">
             <ul>
<!-- // Tutor home page -->
               <li><a href="/tutor/profile/{{{ Session::get('id') }}}"><span></span>My profile </a></li>
               <li><a href="/tutor/balance/{{{ Session::get('id') }}}"><span></span>Blance</a></li>
               <li><a href="/tutor/update/{{{ Session::get('id') }}}"><span></span>Update profile </a></li>
               <li><a href="/tutor/student"><span></span>My students</a></li>

               <li><a href="/tutor/requestPaidTutor/{{{ Session::get('id') }}}"><span></span>Join as a paid tutor</a></li>
               <li><a href="/tutor/contact/{{{ Session::get('id') }}}"><span></span>Contact us</a></li>
               <li><a href=""><span></span>Online class  </a></li>

               <li><a href="/tutor/writeBlog"><span></span>Write Blog</a></li>

               <li><a href="/tutor/uploadTutotial"><span></span>Upload Tutotial </a></li>
                <li><a href="guzz"><span></span>All Tutotial </a></li>
                  <li><a href="guzz/package"><span></span>My package List </a></li>

               <li><a href="/tutor/readBlog"><span></span>Read Blog</a></li>
               <li><a href="{{ url('tutor/readBlog/pdf') }}"><span></span>Pint Blog Post</a></li>


               <li><a href="/logout"><span></span>Logout</a></li>
             </ul>


         </nav>

         <ul class="social-icons list-inline">
             <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
             <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
             <li><a href=""><i class="fa fa-google-plus"></i></a></li>
             <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
         </ul>

         <div class="corner-circle">
             <a href="javascript:void(0);" class="nav-close"><span></span><span></span></a>
         </div>

     </div>







   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>
