<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<style type="text/css">
#model{
    background : rgba(0,0,0,0.95);
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
    display: none;
}
#modelform{
    background: #fff;
    width: 30%;
    position: relative;
    top: 20%;
    left: calc(50% - 15%);
    padding: 15px;
    border-right: 4px;
    border-radius: 5px;

}
#closebtn{
    background-color: red;
    color: white;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    top: -15px;
    right: -15px;
    cursor: pointer;

}
#modelform h2{
    margin: 0 0 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid black;
}










.modeledit{
    background : rgba(0,0,0,0.95);
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
    display: none;
}
.modelformedit{
    background: #fff;
    width: 30%;
    position: relative;
    top: 20%;
    left: calc(50% - 15%);
    padding: 15px;
    border-right: 4px;
    border-radius: 5px;

}
.closebtn{
    background-color: red;
    color: white;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    top: -15px;
    right: -15px;
    cursor: pointer;

}
.modelformedit h2{
    margin: 0 0 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid black;
}



</style>
 <?php 
    $sql3 = "SELECT * FROM list WHERE complet = '0' ORDER BY id DESC";
    $total_task = 0;
    $res = mysqli_query($conn , $sql3) or die("SQL Query Fail");
    if (mysqli_num_rows($res) > 0) {
         while($row = mysqli_fetch_assoc($res)) {
            $total_task = $total_task + 1;
         }

         echo $total_task;
     }



     $sql4 = "SELECT * FROM list WHERE complet = '1' ORDER BY id DESC";
        $total_completed = 0;
        $res = mysqli_query($conn , $sql4) or die("SQL Query Fail");
        if (mysqli_num_rows($res) > 0) {
             while($row = mysqli_fetch_assoc($res)) {
                $total_completed = $total_completed + 1;
             }

             echo $total_completed;
         }

?>

<div class="app-header header-shadow">
    <div class="app-header__logo">
        <img src="assets/images/logo.png" class="w-50">
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"> <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav"> <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu"> <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
        </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span>
                    </button>
                </div>
                <button class="close"></button>
            </div>
            <a href="#tasklist" class="mb-2 mr-2 btn btn-primary">Total Task<span class="badge badge-pill badge-light"><?php echo $total_task; ?></span></a>
            <a href="#tasklist" class="mb-2 mr-2 btn btn-success">Completed Task<span class="badge badge-pill badge-light"> <?php echo $total_completed; ?></span></a>
            <ul class="header-menu nav">
                <!-- <li class="nav-item">
                    <a href="<?=BASE_URL?>/index.php/System/gigster_view" class="nav-link"> <i class="nav-link-icon fa fa-database"> </i>
                        Gigster</a>
                </li>
                <li class="btn-group nav-item">
                    <a href="<?=BASE_URL?>/index.php/System/clint_view" class="nav-link"> <i class="nav-link-icon fa fa-edit"></i>
                        Clint's</a>
                </li>
                <li class="dropdown nav-item">
                    <a href="<?=BASE_URL?>/index.php/System/gigs_view" class="nav-link"> <i class="nav-link-icon fa fa-cog"></i>
                        Gigs</a>
                </li> -->
            </ul>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group"> <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" id="profile_model" class="dropdown-item">Settings</button>


                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">Kashyap Vadi</div>
                            <div class="widget-subheading"></div>
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                            <!-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example"> <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="model">
    <div id="modelform">
        <h2>Edit Data</h2>
        <table cellpadding="10" width="100%">
            <form method="post" action="update_profile">
            <tr>
                <td><label for="fnamelable">First name:</label></td>
                <td><input type="text" id=""  value = ""></td>
            </tr>
            <input type="hidden"  id="upid" value = "">

            <tr>
                <td><label for="lnamelable">Last name:</label></td>
                <td><input type="text" id=""  value = ""></td>
            </tr>
             <tr>
                <td><label for="fnamelable">Current Password:</label></td>
                <td><input type="password" id=""  value = ""></td>
            </tr>
            <input type="hidden"  id="upid" value = "">

            <tr>
                <td><label for="lnamelable">New Password:</label></td>
                <td><input type="password" id=""  value = ""></td>
            </tr>
             <tr>
                <td><label for="lnamelable">Conform New Password:</label></td>
                <td><input type="password" id="c"  value = ""></td>
            </tr>
            <tr><td></td>
                <td style="padding: 15px;"><input type="submit" id="update" class="btn btn-primary update" value="Save" ></td>
            </tr>
            </form>
        </table>
        <div id="closebtn">X</div>
    </div>
</div>