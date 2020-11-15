<?php
    require 'config.php';
    require './classes/products.php';
    //get all products
    $products = new Product($conn);
    $allProducts = $products->getAllProducts(); $allRam = $products->getRam();
    $allRamType = $products->getRamType(); $allProcessors =
    $products->getProcessor(); $allBrands = $products->getBrands(); 
    $allCapacities = $products->getCapacity(); 
?>
<div class="processor p-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Processor</h6>
        <span>--</span>
    </div>
    <?php
    if (isset($allProcessors)){
        foreach ($allProcessors as $processor=>$count){ ?>
            <div class="d-flex justify-content-between mt-2">
                <div class="form-check">
                    <input class="form-check-input common_selector processor" name="processor[]" type="checkbox"
                        value="<?= $processor ?>" id="<?= $processor ?>" />
                    <label class="form-check-label" for="flexCheckDefault"><?= ucwords($processor) ?></label>
                </div>
                <span><?= $count ?></span>
            </div>
            <?php } 
        } 
         ?>
</div>
<div class="Ram-type p-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Ram</h6>
        <span>--</span>
    </div>
    <?php
                if (isset($allRam)){
                    foreach ($allRam as $ram=>$count){ ?>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector ram" type="checkbox" value="<?= $ram ?>"
                id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault"><?= strtoupper($ram) ?></label>
        </div>
        <span><?= $count ?></span>
    </div>
    <?php }
                }
                ?>
</div>
<div class="Ram-type p-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Ram-Type</h6>
        <span>--</span>
    </div>
    <?php 
                if (isset($allRamType)){
                    foreach ($allRamType as $ram_type=>$count){ ?>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector ram_type" type="checkbox" value="<?= $ram_type ?>"
                id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault"><?= strtoupper($ram_type) ?></label>
        </div>
        <span><?= $count ?></span>
    </div>
    <?php }
                }
                ?>
</div>
<div class="brand p-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Brand</h6>
        <span>--</span>
    </div>
    <?php
                if (isset($allBrands)){
                    foreach ($allBrands as $brand=>$count){ ?>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector brand" type="checkbox" value="<?= $brand ?>"
                id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault"><?= strtoupper($brand) ?></label>
        </div>
        <span><?= $count ?></span>
    </div>
    <?php }
                }
                ?>
</div>
<div class="type p-2 mb-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Storage</h6>
        <span>--</span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector storage" type="checkbox" value="hdd" id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault"> HDD </label>
        </div>
        <span></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector storage" type="checkbox" value="sdd" id="flexCheckChecked" />
            <label class="form-check-label" for="flexCheckChecked"> SDD </label>
        </div>
        <span></span>
    </div>
</div>
<div class="type p-2 mb-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">CAPACITY</h6>
        <span>--</span>
    </div>
    <?php 
                if (isset($allCapacities)){
                    foreach ($allCapacities as $capacity=>$count){ ?>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector capacity" type="checkbox" value="<?= $capacity ?>"
                id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault"><?= strtoupper($capacity) ?></label>
        </div>
        <span><?= $count ?></span>
    </div>
    <?php }
                }
                ?>
</div>
<div class="type p-2 mb-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Price</h6>
        <span>--</span>
    </div>

    <input type="hidden" id="hidden_minimum_price" value="0" />
    <input type="hidden" id="hidden_maximum_price" value="65000" />
    <div class="mt-2 p-2">
        <div id="price_range"></div>
    </div>

    <div class="p-2">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Min</label>
                    <input id="min" class="form-control" value="0" type="number" name="min" />
                </div>
                <div class="form-group text-right col-md-6">
                    <label>Max</label>
                    <input id="max" class="form-control" value="65000" type="number" name="max" />
                </div>
                <button type="button" class="btn form-control search-button text-white" id="apply">
                    Apply
                </button>
            </div>
            <!-- form-row.// -->
        </div>
        <!-- card-body.// -->
    </div>
</div>
<!-- <form action="#"> -->
<div class="type p-2 mb-2">
    <div class="heading d-flex justify-content-between align-items-center">
        <h6 class="text-uppercase">Discount</h6>
        <span><a id="reset" class="btn">RESET</a></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector discount" type="radio" value="50" name="discount" id="" />
            <label class="form-check-label" for="flexCheckDefault">
                50% or More
            </label>
        </div>
        <span></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector discount" type="radio" value="40" name="discount" id="" />
            <label class="form-check-label" for="flexCheckChecked">
                40% or More
            </label>
        </div>
        <span></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector discount" type="radio" value="30" name="discount" id="" />
            <label class="form-check-label" for="flexCheckChecked">
                30% or More
            </label>
        </div>
        <span></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector discount" type="radio" value="20" name="discount" id="" />
            <label class="form-check-label" for="flexCheckChecked">
                20% or More
            </label>
        </div>
        <span></span>
    </div>
    <div class="d-flex justify-content-between mt-2">
        <div class="form-check">
            <input class="form-check-input common_selector discount" type="radio" value="10" name="discount" id="" />
            <label class="form-check-label" for="flexCheckChecked">
                10% or More
            </label>
        </div>
        <span></span>
    </div>
</div>