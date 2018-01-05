<?php
    include 'language/profile.php';
    include 'language/button_link.php';
    include 'language/language.php';
    $lang_id = profile($u_id, 'u_language', $connect);
    $u_status = $_SESSION['u_user_status'];
    $operator = $_SESSION["u_id"];
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
<div id="contentIn">
    <div class="row">
        <div class="col-md-3">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>ทั้งหมด</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                    <h4>สมบูรณ์</h4>
                    <p><b>25</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div id="ovl" style="display: none">
                    <div class="overlay">
                        <div class="m-loader mr-20">
                          <svg class="m-circular" viewBox="25 25 50 50">
                                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"></circle>
                          </svg>
                        </div>
                        <h3 class="l-text">Loading</h3>
                      </div>
                </div>
                <div class="card-title-w-btn">
                    <h3 class="title"><?= language($lang_id, 'all') ?></h3>
                    <p><a class="btn btn-primary icon-btn" href="#" onclick="formLoad('module/evaluation/form/addNewPerson.php', '', '<?= $operator ?>')"><i class="fa fa-plus"></i><?= language($lang_id, 'add new') ?></a></p>
                </div>
                <div class="card-body">
                <b>Card with action button </b><br>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th><?= language($lang_id, 'idcard') ?></th>
                        <th><?= language($lang_id, 'name') ?> <?= language($lang_id, 'lastname') ?></th>
                        <th><?= language($lang_id, 'gender') ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td><img class="heary_img" src="images/fa.jpg" alt="Avatar" style="width:25px; height: 25px"></td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
