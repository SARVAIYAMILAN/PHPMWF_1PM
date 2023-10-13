<?php

require_once("model/adminmodel.php");
class admincontroller extends adminmodel
{
    public function __construct()
    {
        parent::__construct();

        //logic for admin login
        if(isset($_POST["log"])) {
            $em=$_POST["txt_email"];
            $pass=$_POST["txt_password"];
            $log=$this->adminlogin('admin_catering', $em, $pass);
            if($log) {
                echo "<script>
                alert('You Are Login Successfully')
                window.location='admin-deshboard';
                </script>";
            } else {
                echo "<script>
                alert('You Email And Password Are Incorrect try Again ')
                window.location='./';
                </script>";
            }
        }

        //change password logic
        if(isset($_POST["changepass"])) {
            $id=$_SESSION["admin_id"];
            $opass=$_POST["opass"];
            $npass=$_POST["npass"];
            $cpass=$_POST["cpass"];
            $chk=$this->chngepasswordadmin('admin_catering', 'admin_id', $opass, $npass, $cpass, $id);
            if($chk) {
                unset($_SESSION["admin_id"]);
                unset($_SESSION["email"]);
                session_destroy();
                echo "<script>
              alert('Your password are changed successfully')
              window.location='./';
              </script>";
            } else {
                echo "<script>
                alert('Your opass,npass and confirm password does not macthed try again')
                window.location='admin-changepassword';
                </script>";
            }
        } 

         //data or show all data ofcycle category
         $shwcat=$this->selectalldata("add_category");

        //insert main category of iteam in admin
            if(isset($_POST["addcat"])) {
                $catnm=$_POST["catname"];
                $addate=$_POST["adddate"];
                $data=array("catering_name"=>$catnm," 	catering_added_date"=>$addate);
                $chk=$this->insalldata('add_category', $data);     
            if($chk){
                echo "<script>
               alert('Your Category Added successfully')
               window.location='add-category';
               </script>";
            }
        }
        
    $shwsubcategory=$this->joindata('add_category','add_subcategory','add_category.catering_id=add_subcategory.catering_id');
 
    // show all product on customer panel that will added by admin
    //  $shwprod=$this->selectalldata('add_product');
        // insert sub category of food in admin
        if(isset($_POST["addsubcat"])) {

            $catnm=$_POST["catname"];
            $subcatnm=$_POST["subcatname"];
            $addate=$_POST["adddate"];
            $data=array("sub_categoryname"=>$subcatnm,"subcategory_added_date"=>$addate,"category_id"=>$catnm);
            $chk=$this->insalldata('add_subcategory', $data);
            if($chk) {
                echo "<script>
                alert('Your Category Added successfully')
                window.location='manage-subcategory';
                </script>";
            }
            else{
                echo "<script>
                alert('Your Category Not Added successfully')
                window.location='add-subcategory';
                </script>";
            }

        }

        //data or show all data ofcycle subcategory
        $shwsubcat=$this->selectalldata("add_subcategory");

        //add product here
        if(isset($_POST["addprod"]))
        {
            $catnm=$_POST["catname"];
            $subcatnm=$_POST["subcatname"];
            $prodnm=$_POST["pname"];
            $tmp_name=$_FILES["pimg"]["tmp_name"];
            $path="uploads/products/".$_FILES["pimg"]["name"];
            move_uploaded_file($tmp_name,$path);
            $oprice=$_POST["oprice"];
            $nprice=$_POST["newprice"];
            $qty=$_POST["qty"];
            $pdesc=$_POST["pdescription"];
            $addate=$_POST["adddate"];
            $data=array("catering_id"=>$catnm,"subcategory_id"=>$subcatnm,"productname"=>$prodnm,"pimage"=>$path,"oldprice"=>$oprice,"offerprice"=>$nprice,"qty"=>$qty,"pdescriptions"=>$pdesc,"added_date"=>$addate);
            $chk=$this->insalldata('add_product',$data);
            if($chk)
            {
                echo "<script>
                alert('Your Products Added successfully')
                window.location='add-product';
                </script>";
            }else{
                echo "<script>
                alert('Your Products Not Added successfully')
                window.location='add-product';
                </script>";
            }
         
        }
//for show productdata
       $shwprod=$this->selectalldata('add_product');

        //logout admin logic
        if(isset($_GET["logout-admin"])) {
            $logout=$this->logout();
            if($logout) {
                echo "<script>
                alert('You are logout successfully as a admin')
                window.location='./';
                </script>";
            }
        }

        //load viwes of admin create an routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/': 
                    require_once("index.php");
                    require_once("pages-login.php");
                    break;
                case'/admin-deshboard': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("admin-deshboard.php");
                    require_once("footer.php");
                    break;
                case'/admin-changepassword': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;
                case'/add-category': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("add_category.php");
                    require_once("footer.php");
                    break;
                case'/manage-category': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("manage_category.php");
                    require_once("footer.php");
                    break;
                case'/add-subcategory': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("add_subcategory.php");
                    require_once("footer.php");
                    break;        
                case'/manage-subcategory': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("manage_subcategory.php");
                    require_once("footer.php");
                    break;
                case'/add-product': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slidebar.php");
                    require_once("add_product.php");
                    require_once("footer.php");
                    break;

                default:
                require_once("index.php");
                require_once("pages-error-404.php");
                break;

            }
        }
    }
}


$obj=new admincontroller;
