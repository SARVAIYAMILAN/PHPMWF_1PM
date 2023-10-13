<?php
require_once("model/model.php");


class Controller extends Model
{
    public function __construct()
    {
        parent::__construct();
        session_start();

        if (isset($_POST["Register"])) {
            $nm = $_POST["name"];
            $em = $_POST["email"];
            $pass = $_POST["password"];
            $ph = $_POST["phone"];
            $tmp_name = $_FILES["image"]["tmp_name"];
            $path = "uploads/registerusers/" . $_FILES["image"]["name"];
            move_uploaded_file($tmp_name, $path);
            $data = array("name" => $nm, "email" => $em, "password" => $pass, "phone" => $ph, "image" => $path);
            $chk = $this->insertalldata($data, 'register_user');
            if ($chk) {
                echo "<script>
            alert('Thanks For Register In Our Site!')
            window.location='login'
            </script>";
            }
        }

        if (isset($_POST["log"])) {
            $em = $_POST["email"];
            $pass = $_POST["password"];
            $log = $this->login('register_user', $em, $pass);


            if ($log) {
                echo "<script>
            alert('you're logged in !')
            window.location='./'
            </script>";
            } else {
                echo "<script>
            alert('your password and email was wrong ')
            window.location='login'
            </script>";
            }
        }

        // if(isset($_POST["update"]))
        // {
        //     $id=$_SESSION["id"];
        //     $fnm=$_POST["fullName"];
        //     $em=$_POST["email"];
        //     $phone=$_POST["phone"];
        //  // upload photo or images or file
        //     // $tmp_name=$_FILES["image"]["tmp_name"];
        //     // $path="uploads/registerusers/".$_FILES["image"]["name"];
        //     // move_uploaded_file($tmp_name,$path);

        //     $chk=$this->updatedata('register_user',$fnm,$em,$phone,'id',$id);
        //         if($chk)
        //         {
        //             echo "<script>
        //             alert('Your Profile Update Successfully')
        //             window.location='manageprofile';
        //             </script>";
        //         }
        // }


        //  //update profile data here
        if (isset($_POST["update"])) {
            $id = $_SESSION["id"];
            $fnm = $_POST["fullName"];
            //  $lnm=$_POST["lnm"];
            $em = $_POST["email"];
            $phone = $_POST["phone"];
            // upload photo or images or file
            $tmp_name = $_FILES["image"]["tmp_name"];
            $path = "uploads/registerusers/" . $_FILES["image"]["name"];
            move_uploaded_file($tmp_name, $path);
            //  $add=$_POST["add"];

            $chk = $this->updatedata('register_user', $path, $fnm, $em, $phone, 'id', $id);
            if ($chk) {
                echo "<script>
                 alert('Your Profile Update Successfully')
                 window.location='profile-management';
                 </script>";
            }
        }

        if (isset($_GET["logout"])) {
            $log = $this->logout();
            if ($log) {
                echo "<script>
                alert('log out successfully ')
                window.location='./'
                </script>";
            }
        }

        if (isset($_POST["addtocart"])) {
            date_default_timezone_set("asia/calcutta");

            $id = $_SESSION["id"];
            $product_id = $_POST["product_id"];
            $subtotal = $_POST["subtotal"];
            $date = date("d/m/Y h:i:s a");
            $data = array("id" => $id, "product_id" => $product_id, "sub_total" => $subtotal, "added_date" => $date);
            $chk = $this->insertalldata($data, 'add_to_cart');

            if ($chk) {
                echo "<script>
                alert('Your Course successfully added in your Cart')
                window.location='./';
                </script>";
            }
        }



        $shwprod = $this->showalldata('add_product');


        // $shwprod = $this->selectalldata('add_product', 'product_id', $id);


        //fetch data for user profile
        if (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
            $shwdata = $this->selectalldata('register_user', 'id', $id);
        }

        //change password here   
        if (isset($_POST["changepass"])) {
            $id = $_SESSION["id"];
            $opass = $_POST["opass"];
            $npass = $_POST["npass"];
            $cpass = $_POST["cpass"];
            $chk = $this->changepassworddata('register_user', $opass, $npass, $cpass, 'id', $id);
            if ($chk) {
                unset($_SESSION["id"]);
                unset($_SESSION["email"]);
                unset($_SESSION["name"]);
                session_destroy();
                echo "<script>
                 alert('Your password successfully changed')
                 window.location='login';
                 </script>";
            } else {
                echo "<script>
                 alert('Somthing Went Wrong!')
                 window.location='manageprofile';
                 </script>";
            }


            if (isset($_SESSION["id"])) {
                $id = $_SESSION["id"];
                $shwcrt = $this->viewcrt('add_to_cart', 'add_product', 'register_user', 'add_to_cart.product_id=add_product.product_id', 'add_to_cart.id=register_user.id', 'id', $id);
            }
        }

        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {

                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("footer.php");
                    break;

                case '/about':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;

                case '/menu':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("menu.php");
                    require_once("footer.php");
                    break;

                case '/events':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("event.php");
                    require_once("footer.php");
                    break;

                case '/chefs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("chefs.php");
                    require_once("footer.php");
                    break;

                case '/gallery':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("main-content.php");
                    require_once("footer.php");
                    break;

                case '/contact':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contact-us.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    // require_once("header.php");
                    require_once("login.php");
                    break;

                case '/register':
                    require_once("index.php");
                    // require_once("header.php");
                    require_once("register.php");
                    break;

                case '/manageprofile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageprofile.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    // require_once("navbar.php");
                    require_once("footer.php");

                    break;
            }
        }
    }
}
$obj = new Controller;
