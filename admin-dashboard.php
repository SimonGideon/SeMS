<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$title = 'Dashboard';
$page = 'dashboard';
include_once('header.php');
?>
<div class="container"style="margin-top: 100px;">
  <div class="row">
    <div class="col-md-12">
      <h4>Excel Upload Tutorial</h4>
      <hr>
      <form method="post" action="file-upload.php" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-md-3">Select File</label>
          <div class="col-md-8">
        <input type="file" name="uploadfile" class="form-control"/>
        </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3"></label>
          <div class="col-md-8">
        <input type="submit" name="submit" class="btn btn-primary">
      </div>
    </div>
      </form>
    </div>
  </div>
</div>