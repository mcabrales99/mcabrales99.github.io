<!DOCTYPE html>
<html>
<head>
    <title>Get Quote</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<body>
<?php require_once 'navbar.php';?>
<?php require_once 'header.php';?>
<style type="text/css">
    
p.title {
    font-size: 50px;
}

p.subtitle  {
    font-size: 30px;
}
</style>

<div class="container">

<p class="title">Contact us to receive a quote!</p>
<p class="subtitle">You can call us @ (956) 330-4337</p>
<p class="subtitle">Or send us an e-mail below</p>
<p class="subtitle">Tell us what plate interests you, for how many people, and the date of the event and we will get back to you.</p>



<form class="form-horizontal" role="form" method="post" action="https://formspree.io/cavazoscater@gmail.com">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" required="" id="name" name="name" placeholder="name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" required="" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" required=""></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</div>
</form>

</body>
</html>