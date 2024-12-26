<?php


class View extends Model
{

    public function login($luname, $lpass)
    {
        $dbResult = $this->getUser($luname);

        while ($row = $dbResult->fetch_assoc()) {
            if ($luname == $row['uname'] && $lpass == $row['password']) {
                session_start();
                $_SESSION['user'] = $luname;
                $_SESSION['islogedin'] = true;
                $_SESSION['role'] = $row['role'];
                $role = $row['role'];

                if ($role == "admin") {
                    header("Location:./admin");
                } else {
                    header("Location:./products.php");
                }
                exit;
            }
        }
        $error = "username or password is incorrect";
        header("Location:./loginandsignup.php?error=$error");
    }


    // display products for users 
    public function displayProductForUsers()
    {

        $result = $this->getAllProduct();
        $products = array();

        while ($row = $result->fetch_assoc()) {
            array_push(
                $products,
                array(
                    "name" => $row['pname'],
                    "amount" => $row['amount'],
                    "img" => $row['img'],
                    "price" => $row['price'],
                    "type" => $row['catagory']
                )
            );
        }
        return $products;
    }

    public function displaySingleTypeProduct($searchType, $str_)
    {

        $result = $this->getProductByType($searchType, $str_);
        $products = array();

        while ($row = $result->fetch_assoc()) {
            array_push(
                $products,
                array(
                    "pName" => $row['pname'],
                    "pdisc" => $row['pdisc'],
                    "imgUrl" => $row['img'],
                    "price" => $row['price'],
                    "type" => $row['catagory']
                )
            );
        }
        return $products;
    }

    // display products in the cart 
    public function displayProductsOnTheCart($userSession)
    {

        $result = $this->getProductsOnCart($userSession);
        $products = array();

        while ($row = $result->fetch_assoc()) {
            array_push(
                $products,
                array(
                    "pName" => $row['p_name'],
                    "imgUrl" => $row['img_url'],
                    "amount" => $row['p_amount'],
                    "p" => $row['price']
                )
            );
        }
        return $products;
    }

    // display all users subtotal
    public function displaySubtotal($userSession)
    {

        $result = $this->getSubtotal($userSession);
        $products = array();

        while ($row = $result->fetch_assoc()) {
            array_push($products, array("sub" => $row['subtotal'], "user" => $row['uid']));
        }
        return $products;
    }

    // display all users for admin page 
    public function displayAllUsers()
    {
        $result = $this->getAllUsers();
        $data = array();

        while ($row = $result->fetch_assoc()) {

            array_push(
                $data,
                array(
                    "name" => $row['uname'],
                    "email" => $row['email'],
                    "tel" => $row['tel'],
                )
            );
        }

        return $data;
    }


    // display products in admin page
    public function displayProductForAdmin()
    {

        $result = $this->getAllProduct();
        $products = array();

        while ($row = $result->fetch_assoc()) {
            array_push(
                $products,
                array(
                    "pName" => $row['p_name'],
                    "pdisc" => $row['p_disc'],
                    "imgUrl" => $row['img_url'],
                    "price" => $row['price'],
                    "type" => $row['type'],
                    "pAmount" => $row['p_amount']
                )
            );
        }
        return $products;
    }
}
