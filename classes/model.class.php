<?php

class Model extends Db
{
    // get all users 
    public function getAllUsers()
    {
        $sqlstmt =  "select * from users";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // to get a spesfic user from db
    protected function getUser($uname)
    {
        $sqlstmt = "select * from login where uname = '$uname';";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }


    // get all products 

    public function getAllProduct()
    {
        $sqlstmt = "select * from products ";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // get a specific product

    public function getProduct($pid)
    {
        $sqlstmt = "select * from products where pid = '$pid';";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    public function getProductByType($searchType, $str_)
    {

        if ($searchType == "name") {
            $sqlstmt = "select * from products where p_name = '$str_';";
        } elseif ($searchType == "price") {
            if ($str_ == "30") {
                $sqlstmt = "select * from products where price BETWEEN 1 AND '$str_';";
            } elseif ($str_ == "90") {
                $sqlstmt = "select * from products where price BETWEEN 30 AND '$str_';";
            } elseif ($str_ == "120") {
                $sqlstmt = "select * from products where price BETWEEN 90 AND '$str_';";
            } else {
                $sqlstmt = "select * from products where price BETWEEN 120 AND '$str_';";
            }
        } elseif ($searchType == "All") {
            $sqlstmt = "select * from products";
        } else {
            $sqlstmt = "select * from products where type = '$str_';";
        }

        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // add product to cart
    protected function addToCart($pid, $uname, $price)
    {
        $stmt = "INSERT INTO `cart`(`pid`, `uname`, `amount`, `price`)
         VALUES ('$pid','$uname',1,'$price')";
        if ($this->conn()->query($stmt)) {
            return "success";
        } else {
            return "error" . $this->conn()->error;
        }
    }

    // get all product that are in the cart table
    public function getProductsOnCart($userSession)
    {
        $sqlstmt = "select * from Cart where userSession = '$userSession';";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // remove product from cart 
    public function removeProductFromCart($uid, $pName)
    {
        $sqlstmt = "delete from cart where p_name = '$pName' and userSession='$uid'";

        if ($result = $this->conn()->query($sqlstmt)) {
            return "successfully removed";
        } else {
            return "query problem";
        }
    }

    // update amount of a product in cart 
    public function productAmountUpdate($uid, $pName, $newAmount)
    {
        $sqlstmt = "UPDATE cart SET p_amount = '$newAmount' WHERE p_name = '$pName' and userSession='$uid'";

        if ($result = $this->conn()->query($sqlstmt)) {
            return $newAmount;
        } else {
            return "query error";
        }
    }

    // add subtotal 
    public function setSubtotal($uid, $sub)
    {
        $sqlstmt = "insert into subtotal values('$sub','$uid')";

        if ($result = $this->conn()->query($sqlstmt)) {
            return "successfuly inserted";
        } else {
            return "query error";
        }
    }

    // get users subtotal 
    public function getSubtotal($userSession)
    {
        $sqlstmt = "select * from subtotal where uid = '$userSession';";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    //update sub total
    public function subtotalUpdate($uid, $sub)
    {
        $sqlstmt = "UPDATE subtotal SET subtotal = '$sub' WHERE uid='$uid'";

        if ($result = $this->conn()->query($sqlstmt)) {
            return $sub;
        } else {
            return "query error";
        }
    }

    // delete all p from car for this user
    protected function deleteAllFromCart($uid)
    {
        $sqlstmt = "delete from cart where userSession='$uid';
                    delete from subtotal where uid='$uid';
                    update customers set number_item_they_buy = number_item_they_buy+1 where user_name='$uid';
                ";

        if ($result = $this->conn()->multi_query($sqlstmt)) {
            return "removed";
        } else {
            return "query error";
        }
    }

    //Admin 
    // delete product

    public function removeProduct($pName)
    {
        $sqlstmt = "delete from products where p_name = '$pName'";

        if ($result = $this->conn()->query($sqlstmt)) {
            return "successfully removed";
        } else {
            return "query problem";
        }
    }

    // update price of product 
    public function priceUpdate($pName, $price)
    {
        $sqlstmt = "UPDATE products SET price = '$price' WHERE p_name = '$pName' ";

        if ($result = $this->conn()->query($sqlstmt)) {
            return $price;
        } else {
            return "query error";
        }
    }


    // user registration 
    protected function setUser($Rname, $Rpass, $Remail, $Rtel)
    {
        $sqlstmt = "insert into users(uname,email,tel) 
                    values('$Rname','$Remail','$Rtel');
                    INSERT INTO login(uname, password,role) 
                    VALUES ('$Rname','$Rpass','user');
        ";

        if ($result = $this->conn()->multi_query($sqlstmt)) {
            return $result;
        } else {
            return "query error";
        }
    }

    // add comment 
    protected function addComent($uid, $cmnt)
    {
        $sqlstmt = "INSERT INTO `comments`(`uid`, `comment`) VALUES ('$uid','$cmnt')";

        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "Query Error " . $this->conn()->error;
        }
    }
}
