<?php


class Controller extends Model
{

    function userNameAveleblityChecker($userName)
    {
        $result = $this->getUser($userName);
        if ($result->num_rows != 0) {
            $error = "user name is taken choose another one";
            header("Location:./loginandsignup.php?error=$error");
            exit;
        } else
            return true;
    }

    public function register($Runame, $Rpass, $Remail, $Rtel)
    {
        // before storing a phone num we have to check the length
        if (strlen($Rtel) < 10) {
            $error = "phnone number must be atleast 10 digits";
            header("Location:./loginandsignup.php?error=$error");
        } elseif (strlen($Rtel) > 12) {
            $error = "phone number must be lessthan 13 digits";
            header("Location:./loginandsignup.php?error=$error");
        } else {
            if ($this->userNameAveleblityChecker($Runame)) {
                $queryResult = $this->setUser($Runame, $Rpass, $Remail, $Rtel);

                if ($queryResult == "success") {
                    session_start();
                    $_SESSION['user'] = $Runame;
                    $_SESSION['islogedin'] = true;
                    $_SESSION['role'] = 'user';
                    header("Location:./products.php");
                    exit;
                } else {
                    header("Loction:./loginandsignup.php?error=$queryResult");
                }
            }
        }
    }

    // delete user 
    public function deleteUser($uid)
    {
        return $this->removeUser($uid);
    }

    // update product
    public function updateProductTable($pid, $pname, $price, $amnt, $catagory, $disc)
    {
        return $this->updateProduct($pid, $pname, $price, $amnt, $catagory, $disc);
    }

    // add products in the cart 
    public function addProductinTheCart($pid, $uname, $price)
    {
        $result = $this->addToCart($pid, $uname, $price);
        return $result;
    }

    // remove product from cart 
    public function DeleteProductFromCart($uid, $pName)
    {
        $result = $this->removeProductFromCart($uid, $pName);

        if ($result == "successfully removed") {
            return $result;
        } else {
            return "error " . $result;
        }
    }

    // change amount of a product in the cart table
    public function changeAmountOnCart($uid, $cartPName, $newAmount)
    {
        $result = $this->productAmountUpdate($uid, $cartPName, $newAmount);
        if ($result == "query error") {
            return "error";
        } else {
            return $result;
        }
    }

    // insert into subtotal
    public function insertSubtotal($uid, $sub)
    {
        $result = $this->setSubtotal($uid, $sub);
        return $result;
    }

    //update subtotal
    public function updateSubtotal($uid, $sub)
    {
        $result = $this->subtotalUpdate($uid, $sub);
        return $result;
    }


    // remove p from cart 
    public function removeAllProductsFromCart($uid)
    {
        $result = $this->deleteAllFromCart($uid);
        return $result;
    }

    public function comment($uid, $cmnt)
    {
        $result = $this->addComent($uid, $cmnt);
        return $result;
    }
    // ADMIN FUNCTIONS 
    // add product function 
    // function checkProductName($pName)
    // {
    //     $result = $this->getProduct($pName);
    //     if ($result->num_rows != 0) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }

    public function addProduct($img, $amount, $pName, $price, $pType, $pDisc)
    {

        $queryStr = "INSERT INTO `products`( `img`, `pname`, `catagory`, `price`, `amount`, `discription`)
         VALUES ('$img','$pName','$pType','$price','$amount','$pDisc')";

        if ($this->conn()->query($queryStr)) {
            return "The product is added successfully";
        } else {
            return "the product is not added " . $this->conn()->error;
        }
    }

    // delete product from the db 
    public function removeProduct($pid)
    {
        return $this->deleteProduct($pid);
    }

    // update price 
    public function changePrice($pName, $price)
    {
        $result = $this->priceUpdate($pName, $price);
        if ($result == "query error") {
            return "error";
        } else {
            return $result;
        }
    }
}
