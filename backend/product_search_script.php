<?php
require '../config.php';
require '../autoloader/class_autoloader.php';
include '../collections/Constants.php';
use App\Collections\Constants;

if(isset($_POST['action'])){

    $sqlQuery ="Select * from product where p_id <> '' ";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $sqlQuery .="
        AND p_salePrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
        ";
    }

    if(isset($_POST['brand']))
    {
        $brand_filter = implode(",", $_POST['brand']);
        $sqlQuery .="
        AND p_brandName IN( '".$brand_filter."')
        ";
    }

    if(isset($_POST['ram']))
    {
        $ram_filter = implode(",", $_POST['ram']);
        $sqlQuery .="
        AND p_ram IN( '".$ram_filter."')
        ";
    }

    if(isset($_POST['ram_type']))
    {
        $ram_type_filter = implode(",", $_POST['ram_type']);
        $sqlQuery .="
        AND p_ram IN( '".$ram_type_filter."')
        ";
    }

    if(isset($_POST['storage']))
    {
        $storage_filter = implode(",", $_POST['storage']);
        $sqlQuery .="
        AND p_ssd IN( '".$storage_filter."')
        ";
    }

    if(isset($_POST['capacity']))
    {
        $capacity_filter = implode(",", $_POST['capacity']);
        $sqlQuery .="
        AND p_ssdCpty IN( '".$capacity_filter."')
        ";
    }

    if(isset($_POST['processor']))
    {
        $processor_filter = implode(",", $_POST['processor']);
        $sqlQuery .="
        AND p_procName IN( '".$processor_filter."')
        ";
    }

    if(isset($_POST['discount']))
    {
        $discount_filter = implode(",", $_POST['discount']);
        $sqlQuery .="
        AND p_discount >='".$discount_filter."'
        ";
    }

    if(isset($_POST['productType']))
    {
        if ($_POST['productType'] == "rent")
        {
            $sqlQuery .="
            AND p_rent <> '".Constants::$ZERO."'
            ";
        }
        if ($_POST['productType'] == "buy")
        {
            $sqlQuery .="
            AND p_sale <> '".Constants::$ZERO."'
            ";
        }
    }

    if(isset($_POST['page']))
    {
        $page = $_POST['page'];
    }
    else
    {
        $page = 1;
    }

    $Offset = ($page-1) * Constants::$LIMIT;

    $queryWithLimit = $sqlQuery . "LIMIT ".$Offset.", ".Constants::$LIMIT."";


    $newProducts = new Product($conn);
    $result = $newProducts->getAjaxSearch($queryWithLimit);
    $queryCount = $newProducts->getQueryCount($sqlQuery);
    $totalPages = ceil($queryCount/Constants::$LIMIT);
    $output = "";
    if (isset($result))
    {
        $output .='<div class = "row">';
        foreach($result as $product){
            $output .= '<div class="col-md-4 mob mt-3">
            <div class="product py-4 design">';
            if($product['p_discount'] > Constants::$ZERO){ 
            $output .= '<span class="off bg-success">'.$product['p_discount']. '% OFF</span>';
            }      
            $output .= '<div class="text-center"> <img src="'.$product['p_img1'].'" width="200"> </div>
                    <div class="about text-center">
                        <h5>'.ucwords($product['p_productName']).'</h5>
                    </div>
                    <div class="product-btns py-1">
                        <a href="product.php?pid='.$product['p_id'].'" class="btn-small mr-2"><span>&#8377;</span>'. number_format($product['p_salePrice']). '</a>
                    <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                    </div>
                </div>
            </div>';
            }
        $output .= '</div>';
    }else
    {
        echo 
        '
        <div class="row">
            <div id="noproducts">
                No Products Found
            </div>
        </div>  
        ';
    }
    if ($totalPages > Constants::$ZERO){
        if ($page == 1)
        {

            $output .= '
            <div class="row justify-content-center mt-3">
            <div class ="mr-3" style="padding:6px; border:1px solid #ccc">Showing '.$page.' of '.$totalPages.'</div>
            ';
        }else{
            $output .='
            <div class="row justify-content-center mt-3">
            <span  class="prev_link hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">Previous</span>
            ';
        }

        for($i=1; $i<=$totalPages; $i++){
            if($i == 3){
                $output .= '
                <span class="" style="padding:6px; border: 1px solid #ccc">. . .</span>
                ';
                $i = $totalPages;
            }
            if ($i == $page)
            {
                $output .= '
                <span id ='.$i.' class="page_link hover" style="background-color:rgba(34,44,51,0.6); color: #fff; cursor:pointer; padding:6px; border: 1px solid #ccc">'.$i.'</span>
                ';
            }else
            {
                $output .= '
                <span id ='.$i.' class="page_link hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">'.$i.'</span>
                ';
            }
        }

        if ($page == $totalPages)
        {

            $output .= '</div> ';
        }else{
            $output .= '
            <span  class="next_link hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">Next</span>
            </div>
            ';
        }
    }

    echo $output;
}

if(isset($_POST['fullSearch']))
{
    if(isset($_POST['productType']))
    {
        if ($_POST['productType'] == "rent")
        {
            $sqlQuery = "SELECT * FROM PRODUCT WHERE p_rent <>'0' AND p_productName LIKE '%".$_POST['searchText']. "%'";
            // $sqlQuery = "SELECT * FROM PRODUCT WHERE p_rent <>'0' AND MATCH(p_brandName, p_productName) AGAINST('".$_POST['searchText']. "')";
        }
        if ($_POST['productType'] == "buy")
        {
            $sqlQuery = "SELECT * FROM PRODUCT WHERE p_sale <>'0' AND p_productName LIKE'%".$_POST['searchText']. "%'";
            // $sqlQuery = "SELECT * FROM PRODUCT WHERE p_sale <>'0' AND MATCH(p_brandName, p_productName) AGAINST('".$_POST['searchText']. "')";
        }
    }

    // echo($sqlQuery);
    if(isset($_POST['change_page']))
    {
        $page = $_POST['change_page'];
    }
    else
    {
        $page = 1;
    }
    // echo $page;
    $perPage = 2;
    $start_from = ($page-1) * $perPage;
    
    $queryWithLimit = $sqlQuery . "LIMIT ".$start_from.", ".$perPage."";

    echo($queryWithLimit);
    $newProducts = new Product($conn);
    $result = $newProducts->getAjaxSearch($queryWithLimit);
    $queryCount = $newProducts->getQueryCount($sqlQuery);
    $totalPages = ceil($queryCount/$perPage);
    // echo($queryCount);
    // print_r($result);
    $output = "";

    $output = "";
    if (isset($result))
    {
        $output .='<div class = "row">';
        foreach($result as $product){
            $output .= '<div class="col-md-4 mob mt-3">
            <div class="product py-4 design">';
            if($product['p_discount'] > Constants::$ZERO){ 
            $output .= '<span class="off bg-success">'.$product['p_discount']. '% OFF</span>';
            }      
            $output .= '<div class="text-center"> <img src="'.$product['p_img1'].'" width="200"> </div>
                    <div class="about text-center">
                        <h5>'.ucwords($product['p_productName']).'</h5>
                    </div>
                    <div class="product-btns py-1">
                        <a href="" class="btn-small mr-2"><span>&#8377;</span>'. number_format($product['p_salePrice']). '</a>
                    <a href="" class="btn-round mr-2"><i class="fa fa-shopping-cart"></i></a>
                    <a href="" class="btn-round"><i class="fa fa-location-arrow"></i></a>
                    </div>
                </div>
            </div>';
            }
        $output .= '</div>';
    }else
    {
        echo 
        '
        <div class="row">
            <div id="noproducts">
                No Products Found
            </div>
        </div>  
        ';
    }
    $output .='
    <div class="row justify-content-center mt-3">
    <div class ="mr-3" style="padding:6px; border:1px solid #ccc">Showing '.$page.' of '.$totalPages.'</div>
    ';
    if ($page == 1)
    {
        $output .='<span  class="prev_link_search hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">Previous</span>';
    }

    for($i=1; $i<=$totalPages; $i++){
        if($i == 3){
            $output .= '
            <span class="" style="padding:6px; border: 1px solid #ccc">. . .</span>
            ';
            $i = $totalPages;
        }
        if ($i == $page)
        {
        $output .= '
        <span id ='.$i.' class="page_link_search" style="font-weight:bold; background-color:rgba(34,44,51,0.6); color: #fff; cursor:pointer; padding:6px; border: 1px solid #ccc">'.$i.'</span>
        ';            
        }else{

        $output .= '
        <span id ='.$i.' class="page_link_search hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">'.$i.'</span>
        ';
        }
    }
    $output .= '
    <span  class="next_link_search hover" style="cursor:pointer; padding:6px; border: 1px solid #ccc">Next</span>
    </div>
    ';

    echo $output;

}