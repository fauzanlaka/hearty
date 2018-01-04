<?php
    $u_status = $_SESSION['u_user_status'];
    if($u_status == 'admin'){
?>
<div class="page-title">
    <div>
        <h1><i class="fa fa-address-book-o"></i> <?= menu($lang_id, 'evaluation') ?></h1>
        <p>ฐานข้อมูลกลุ่มด้วยใจ</p>
    </div>
    <div>
        <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
        </ul>
    </div>
</div>
<div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Card Title</h3>
              <div class="card-body">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</div>
              <div class="card-footer"><a class="btn btn-primary" href="#">Link</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-title-w-btn">
                <h3 class="title">All Items</h3>
                <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p>
              </div>
              <div class="card-body">
                <b>Card with action button </b><br>
                Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
                
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-title-w-btn">
                <h3 class="title">All Items</h3>
                <div class="btn-group"><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
              </div>
              <div class="card-body">
                <b>Card with button group </b><br>
                Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
                
              </div>
            </div>
          </div>
          <div class="col-md-6">
              <div class="card">
              <div class="overlay" style="display: none">
                <div class="m-loader mr-20">
                  <svg class="m-circular" viewBox="25 25 50 50">
                  	<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"></circle>
                  </svg>
                </div>
                <h3 class="l-text">Loading</h3>
              </div>
              <div class="card-title-w-btn">
                <h3 class="title">All Items</h3>
                <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p>
              </div>
              <div class="card-body">
                <b>Card with action button </b><br>
                Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
              </div>
            </div>
          </div>
        </div>
<?php
    }else{
?>
<div class="row">
    <div class="col-lg-12">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert"></button><strong>You do not have permission to access the data!</strong><a class="alert-link" href="#"></a>
            </div>
        </div>
    </div>          
</div>
<?php
    }
?>
