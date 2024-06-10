<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <div class="sidebar">
    <div class="border-bottom" >
              <a href="#" class="brand-link text-decoration-none ">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIvY1AX3h4Sl0LqDFbn2oZvv69rledvdeQjo8t_9XpgQ&s" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
              </a>
            </div>
                <!-- Sidebar -->
                <div class="sidebar pt-3">
                
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item menu-open">
                            <a href="<?php echo e(route('home')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('home') ? 'active' : ''); ?> ">
                            <i class="fa-solid fa-house nav-icon"></i>
                            <p>
                            Home
                            </p>
                            </a>
                        </li>
                            <!-- <ul class="nav nav-treeview"> -->
                            <li class="nav-item " >
                                <a href="<?php echo e(route('products.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('products.index') ? 'active' : ''); ?> ">
                                <i class="fa-brands fa-product-hunt nav-icon"></i>
                                <p>
                                    Product
                                </p>
                                
                                </a>
                                
                            </li>
                            
                            <li class="nav-item">
                                <a href="<?php echo e(route('orders.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('orders.index') ? 'active' : ''); ?> ">
                                <i class="fa-brands fa-shopify nav-icon"></i>
                                <p>
                                   Order
                                </p>
                                
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('shopping.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('shopping.index') ? 'active' : ''); ?> ">
                                <i class="fa-solid fa-cart-shopping nav-icon"></i>
                                <p>
                                    Shopping Card
                                </p>
                                
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('orderitems.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('orderitems.index') ? 'active' : ''); ?> ">
                                <i class="fa-solid fa-snowflake nav-icon"></i>
                                <p>
                                  Order Item
                                    
                                </p>
                                
                                </a>
                                <!-- <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="#" class="nav-link  "><i class="far fa-circle nav-icon"></i> Create New Order item</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link  "><i class="far fa-circle nav-icon"></i> List Order item</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('inventories.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('inventories.index') ? 'active' : ''); ?> ">
                                <i class="fa-solid fa-warehouse nav-icon"></i>
                                <p>
                                    Inventory
                                </p>
                                
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customers.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('customers.index') ? 'active' : ''); ?> ">
                                
                                <i class="fa-solid fa-user nav-icon"></i>
                                <p>
                                    Customer
                                </p>
                                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white arrow">
                                <i class="fa-solid fa-gear nav-icon"></i>
                                <p>
                                    Setting
                                    
                                </p>
                                <i class="right fas fa-angle-left"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    
                                    <li class="nav-item"><a href="<?php echo e(route('suppliers.index')); ?>" class=" nav-link text-white  <?php echo e(Request::routeIs('suppliers.index') ? 'active' : ''); ?> "><i class="fa-solid fa-truck-field nav-icon"></i> Supplier</a></li>
                                    
                                    
                                    <li class="nav-item"><a href="<?php echo e(route('categories.index')); ?>" class=" nav-link text-white <?php echo e(Request::routeIs('categories.index') ? 'active' : ''); ?> "><i class="fa-solid fa-list nav-icon"></i> Category</a></li>
                                    
                                </ul>
                            </li>
                            <!-- </ul> -->
                        
                        
                        </ul>
                    </nav>
                  </div>
           
    </div>
    <div class="main-content">
        <div class="border-bottom fs-3 text-success">
            
            <span class="float-start d-sm-none d-md-block"><i class="fa-solid fa-bars"></i></span>
             <div class="hamburger" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></div>
              <div class="text-center">Stock Management System</div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\Laravel\testdb\example-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>