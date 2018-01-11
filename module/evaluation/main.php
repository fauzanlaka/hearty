<?php
    include 'language/profile.php';
    include 'language/button_link.php';
    include 'language/language.php';
    include 'connect/connect.php';
    include 'function/person.php';
    $connect = 'connect/connect.php';
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-title-w-btn">
                    <h3 class="title"><?= language($lang_id, 'all') ?></h3>
                    <p><a class="btn btn-primary icon-btn" href="#" onclick="formLoad('module/evaluation/form/addNewPerson.php', '', '<?= $operator ?>')"><i class="fa fa-plus"></i><?= language($lang_id, 'add new') ?></a></p>
                </div>
                <div class="card-body">
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?= language($lang_id, 'idcard') ?></th>
                                <th><?= language($lang_id, 'name') ?> <?= language($lang_id, 'lastname') ?></th>
                                <th><?= language($lang_id, 'gender') ?></th>
                                <th><?= language($lang_id, 'edit') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $pagic = "?mod=biodata";
                                $sql = "SELECT COUNT(pes_id) FROM person";
                                $query = mysqli_query($con, $sql);
                                $row = mysqli_fetch_row($query);
                                // Here we have the total row count
                                $rows = $row[0];
                                // This is the number of results we want displayed per page
                                $page_rows = 10;
                                // This tells us the page number of our last page
                                $last = ceil($rows/$page_rows);
                                // This makes sure $last cannot be less than 1
                                if($last < 1){
                                    $last = 1;
                                }
                                // Establish the $pagenum variable
                                $pagenum = 1;
                                // Get pagenum from URL vars if it is present, else it is = 1
                                if(isset($_GET['pn'])){
                                    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                                }
                                // This makes sure the page number isn't below 1, or more than our $last page
                                if ($pagenum < 1) { 
                                    $pagenum = 1; 
                                } else if ($pagenum > $last) { 
                                    $pagenum = $last; 
                                }
                                // This sets the range of rows to query for the chosen $pagenum
                                $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                                // This is your query again, it is for grabbing just one page worth of rows by applying $limit
                                $sql = "SELECT * FROM person ORDER BY pes_id DESC $limit";
                                $query = mysqli_query($con, $sql);
                                // This shows the user what page they are on, and the total number of pages
                                $textline1 = "จำนวน(<b>$rows</b>)";
                                $textline2 = "page <b>$pagenum</b> from <b>$last</b>";
                                // Establish the $paginationCtrls variable
                                $paginationCtrls = '';
                                // If there is more than 1 page worth of results
                                if($last != 1){
                                    /* First we check if we are on page one. If we are then we don't need a link to 
                                    the previous page or the first page so we do nothing. If we aren't then we
                                    generate links to the first page, and to the previous page. */
                                    if ($pagenum > 1) {
                                        $previous = $pagenum - 1;

                                        $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$previous.'"><<</a> &nbsp; &nbsp; ';
                                        // Render clickable number links that should appear on the left of the target page number
                                        for($i = $pagenum-4; $i < $pagenum; $i++){
                                            if($i > 0){
                                                $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$i.'">'.$i.'</a> &nbsp; ';
                                            }
                                        }
                                    }
                                    // Render the target page number, but without it being a link
                                    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
                                    // Render clickable number links that should appear on the right of the target page number
                                    for($i = $pagenum+1; $i <= $last; $i++){
                                        $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$i.'">'.$i.'</a> &nbsp; ';
                                        if($i >= $pagenum+4){
                                            break;
                                        }
                                    }
                                    // This does the same as above, only checking if we are on the last page, and then generating the "Next"
                                    if ($pagenum != $last) {
                                        $next = $pagenum + 1;
                                        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$pagic.'&&pn='.$next.'">>></a> ';
                                        }
                                }
                                $list = '';
                                while($result = mysqli_fetch_array($query)){
                                    $pes_id = $result['pes_id'];
                            ?>
                            <tr>
                                <td><img class="heary_img" src="images/fa.jpg" alt="Avatar" style="width:25px; height: 25px"></td>
                                <td><?= personInfo($pes_id, 'pes_idcard', $connect) ?></td>
                                <td><?= personInfo($pes_id, 'pes_name_th', $connect) ?> <?= personInfo($pes_id, 'pes_lastname_th', $connect) ?></td>
                                <td><?= language($lang_id, personInfo($pes_id, 'pes_gender', $connect)) ?></td>
                                <td><a href="#" onclick="formLoad('module/evaluation/form/personInfo.php', '<?= $pes_id ?>', '<?= $operator ?>')"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                      </table>
                        <div class="pull-left">
                            <?php echo $paginationCtrls; ?>
                        </div>
                        <div class="pull-right">
                            <?php echo $textline2 ?>
                        </div>
                    <br>
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
