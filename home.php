
<!doctype html>
<html lang="en">
<?php include 'database.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="main.css" rel="stylesheet">
<style type="text/css">
    .fa-check-circle{
        color: #28a745;
    }
    .fa-check-circle:hover{
        color:#fff !important;
    }
    .btn-icon:hover + .fa-check-circle{
        color:#fff !important;
    }
    .btn-icon:hover{
        color:#fff !important;
    }

</style>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">


       <?php include('menu/header.php'); ?>

       <?php include('menu/theme.php'); ?>

       
        <div class="app-main">
            
            <?php include('menu/sidebar.php'); ?>


                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    </div>
                                    <div>Todo list
                                        <div class="page-title-subheading">“Sometimes our stop-doing list needs to be bigger than our to-do list.”
                                        </div>
                                    </div>
                                </div>


                                <div class="page-title-actions" id="tasklist">
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Status
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(108px, 32px, 0px);">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="#tasklist" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Total Task
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-primary"><?php echo $total_task; ?></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tasklist" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Completed
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-success"><?php echo $total_completed; ?></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div> 

                        <div class="row">
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="mb-3 card">
                                    <div class="card-body">
                                        <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link show" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0" aria-selected="true">
                                                    <span class="nav-text">Add Task</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active show" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1" aria-selected="false">
                                                    <span class="nav-text">View Task</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link show" id="tab-c1-2" data-toggle="tab" href="#tab-animated1-2" aria-selected="false">
                                                    <span class="nav-text">Completed Task</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5"> 

                                        <?php
                                            if (isset($_POST['submit'])) {
                                                $title = $_POST['title'];
                                                $desc = $_POST['description'];
                                                $date = date("Y-m-d h:i:sa");

                                                $sql = "INSERT INTO `list` (`id`, `title`, `description`, `user_id`, `date`) VALUES (NULL, '$title', '$desc', '01', '$date')";
                                                if (mysqli_query($conn, $sql)) {
                                                  echo '<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Task is set</div><div class="toast-message">Good luck!</div></div></div>';
                                                } else {
                                                   echo '<div id="toast-container2" class="toast-top-right"><div class="toast toast-danger" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Task is set</div><div class="toast-message">Good luck!</div></div></div>';
                                                }
                                            }

                                        ?>




                                             <!-- Task form -->
                                            <div class="tab-pane" id="tab-animated1-0" role="tabpanel">
                                               
                                               <form class="col-md-6 offset-md-3" method="post" action="home.php">
                                                    <div class="position-relative row form-group">
                                                        <label  class="col-sm-3 col-form-label">Task Title</label>
                                                        <div class="col-sm-9">
                                                            <input name="title" id="" placeholder="with a placeholder" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-3 col-form-label">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="description" rows="10" id="" class="form-control"></textarea>
                                                        </div>
                                                    </div>


                                                     <input type="hidden" name="user_id" value="1">
                                                      
                                                      <input type="hidden" name="date" value="<?php echo date("Y-m-d HH:MM:SS") ?>">
                                                  
                                                    <div class="position-relative row form-check">
                                                        <div class="col-sm-9 offset-sm-3 pr-4" >
                                                            <button name="submit" class="mb-2  btn btn-primary btn-lg btn-block ">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>


                                                <!-- Task View -->
                                            <div class="tab-pane  active show" id="tab-animated1-1" role="tabpanel">
                                                <div class="table-responsive">

                                                    <table id="clint_tbl" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                        <thead>
                                                        <tr>
                                                            
                                                            <th>Task</th>
                                                            <th>Task Description</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $sql1 = "SELECT * FROM list WHERE complet = '0' ORDER BY id DESC";

                                                            $res = mysqli_query($conn , $sql1) or die("SQL Query Fail");
                                                               if (mysqli_num_rows($res) > 0) {
                                                             while($row = mysqli_fetch_assoc($res)) {
                                                         ?>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $row["title"] ; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                             <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-subheading"><?php echo $row["description"] ; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           
                                                            <td class="text-center">

                                                                <?php 
                                                                echo "<a data-id=".$row["id"]." class='mr-2 btn-icon btn-icon-only btn btn-outline-info edittask'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
                                                                ?>

                                                               
                                                                <?php 
                                                                echo "<a href='delete.php?id=" . $row["id"] . "' class='mr-2 btn-icon btn-icon-only btn btn-outline-danger'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                                                                ?>

                                                                <?php 
                                                                echo "<a href='complet.php?id=" . $row["id"] . "' class='mr-2 btn-icon btn-icon-only btn btn-outline-success'><i class='fa fa-check-circle'> </i></a>";
                                                                ?>
            
                                                            </td>
                                                        </tr>

                                                    <?php   } }?>
                                                        
                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                            <!-- Complet task -->
                                            <div class="tab-pane show" id="tab-animated1-2" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table id="clint_tbl1" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                        <thead>
                                                        <tr>
                                                            
                                                            <th>Task</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php 
                                                            $sql2 = "SELECT * FROM list WHERE complet = '1' ORDER BY id DESC";

                                                            $res = mysqli_query($conn , $sql2) or die("SQL Query Fail");
                                                               if (mysqli_num_rows($res) > 0) {
                                                             while($row = mysqli_fetch_assoc($res)) {
                                                        ?>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $row["title"] ; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                             <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-subheading"><?php echo $row["description"] ; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                           
                                                            <td class="text-center">
                                                                 <?php 
                                                                echo "<a href='reopen.php?id=" . $row["id"] . "' class='mr-2 btn-icon btn-icon-only btn btn-outline-info'>Reopen</a>";
                                                                ?>

                                                                 <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>

                                                                 
                                                                 
                                                            </td>
                                                        </tr>

                                                          <?php   } }?>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                        



                        <div class="row">
                           
                            <div class="col-md-6 ">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading mr-3">Total Task</div>
                                                <div class="widget-subheading"></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">
                                                    <?php  echo $total_task; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading mr-3">Completed Task</div>
                                                <div class="widget-subheading"></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">
                                                    <?php echo $total_completed; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Income</div>
                                                <div class="widget-subheading">Expected totals</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-focus">$147</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                            </div>
                                            <div class="progress-sub-label">
                                                <div class="sub-label-left">Expenses</div>
                                                <div class="sub-label-right">100%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <br><br>
                        
                    </div>


                         <?php include('menu/footer.php'); ?>
                </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>



<!--  -->
<!-- model edit task -->
<div class="modeledit">
    <div class="modelformedit">
        <h2>Edit Data</h2>
        <div class="editform">

        </div>
   
        <a href="home.php?edit=taskclose"><div class="closebtn">X</div></a>
    </div>
</div>
               
         <?php                  
        if (isset($_GET['delete-success'])) {
          echo '<div id="toast-container" class="toast-top-right"><div class="toast toast-danger" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Delete</div><div class="toast-message">Delete Successful!</div></div></div>';
        } else {
           echo '<div id="toast-container2" class="toast-top-right"><div class="toast toast-danger" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Delet</div><div class="toast-message">Try again..</div></div></div>';
        }


        if (isset($_GET['complet-success'])) {
          echo '<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">COMPLETED</div><div class="toast-message">Complet Successful!</div></div></div>';
        } else {
           echo '<div id="toast-container2" class="toast-top-right"><div class="toast toast-danger" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Delet</div><div class="toast-message">Try again..</div></div></div>';
        }

        if (isset($_GET['reopen-success'])) {
          echo '<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">REOPEN</div><div class="toast-message">Reopen Successful!</div></div></div>';
        } else {
           echo '<div id="toast-container2" class="toast-top-right"><div class="toast toast-danger" aria-live="polite" style=""><div class="toast-progress" style="width: 0%;"></div><div class="toast-title">Delet</div><div class="toast-message">Try again..</div></div></div>';
        }

        ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="assets/scripts/main.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#clint_tbl').DataTable();
});

setTimeout(function(){ $('#toast-container').hide() }, 5000);
setTimeout(function(){ $('#toast-container2').hide() }, 5000);





 $(".closebtn").on('click',function (){
    $('.modeledit').fadeOut(800);
 });



    $('.edittask').click(function () {
        $('.modeledit').fadeIn(800); 
        var id = $(this).data('id');
        $.ajax({
            url : 'update.php',
            type : 'POST',
            data : {id:id},
            success : function (data) {
                $(".editform").html(data);
            }
        })
    });

    $(document).on('click','.save',function (e){
        var id = $('#id').val();
        var title = $('#title').val();
        var description = $('#description').val();
        $.ajax({
            url : 'updaterec.php',
            type : 'POST',
            data : {id:id,title:title,description:description},
            success : function (data) {
                if (data == 1) {
                    location.reload();
                    window.location.replace("home.php?complet-success");
                    $("#model").hide(800);
                } 
                if (data == 0) {
                    alert("data not add")
                }
            }
        })
    });

</script>
</body>
</html>
