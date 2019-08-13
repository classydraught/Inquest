<?php
session_start();
include("checklogin.php");
check_login();

  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Inquest</title>


    <link href="css/bootstrap.css" rel="stylesheet"> 
    
    

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="welcome.php" style="font-family: 'Lobster';">Inquest</a>
          </div>
          </div>
      </header>


      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          
          <a class="p-2 text-muted" href="profile.php">Profile</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="http://vignanuniversity.org/">Vignan</a>
          <a class="p-2 text-muted" href="#">Alumini</a>
          <a class="p-2 text-muted" href="#">Trending</a>
          <a class="p-2 text-muted" href="#">Placements</a>
          <a class="p-2 text-muted" href="http://14.139.85.169/student/">Student portal</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Settings</a>
          <a class="p-2 text-muted" href="#">About us</a>
          
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1  style="font-family: raleway">Holla student welcome back!</h1>
          <p class="lead my-3">We are ready to serve you at any instant of time.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
            <div class="parallax">  
              
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Science</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">The future of science may effect the computer sciences too in term's of quantum computing.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="hhk.jpg" alt="Card image cap">
          </div>
        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Workshop</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">various workshops occuring on account of the event srujankura at vignan..</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="kk.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
            </div>
            <br>



<br>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          <div class="parallax1"></div>
          
          
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Search for person</h4>
            <hr>
            <form method="post" action="sepr.php" >
              <input type="text" name="pro" class="form-control" style="width: 300px;" placeholder="student/professor id">
              <br>
              <button class="btn btn-outline-success my-2 my-sm-0">submit</button>
            </form>
          </div>
		  
          
          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Artificial Intelligence</a></li>
              <li><a href="#">Internet of things</a></li>
              <li><a href="#">Programming languages</a></li>
              <li><a href="#">Maths</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">Mechanics</a></li>
              <li><a href="#">Big data analysis</a></li>
              
            </ol>
          </div>


          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
       <div>
        <?php
  $dbCon = mysqli_connect("localhost","root","","bommil") or die(mysqli_error());
?> 
<?php
    $sql= "select * from blog order by id DESC";
    $result=mysqli_query($dbCon,$sql);
    while (($row=mysqli_fetch_array($result))) {
      $title=$row['title'];
      $sub=$row['subtitle'];
      $content=$row['content'];
      $pid=$row['proid'];
      $dateb=$row['dateb'];
      $timeb=$row['timeb'];
      $posid=$row['id'];
      
      
 ?>

<div class="blog-post">
<h2 class="blog-post-title" style="font-family: raleway;"><a href=""><?php echo "$title";?></a></h2>
<p class="blog-post-meta"><?php echo "$sub"; ?> by <?php echo "$pid";?></p>
<span class="badge badge-light"><?php echo "$timeb";?></span>
 <span class="badge badge-light"><?php echo "$dateb";?></span>


<hr>
<p><?php echo "$content";?></p>
<form action="comment.php" method="post">
  <table><tr><td>
<textarea class="form-control" style="width: 600px;" placeholder="comment" rows="1"></textarea>
</td> 
<td>
<button class="btn btn-outline-primary" style="margin-left: 100px;">comment</button>
</td>
</tr>
</table>
<br>
<?php
}
?>
</div>
      </div>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

    </main>
    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Inquest</a> by <a href="https://www.facebook.com/avinash.bommi.9">Avinash</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    
    </script>
  </body>
</html>
