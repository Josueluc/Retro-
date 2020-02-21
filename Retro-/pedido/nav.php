<!-- navbar -->

    
          
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

               <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 py-2">

                <li class="nav-item" <?php echo $page_title=="Products" ? "class='active'" : ""; ?> >
                    <a style="color: white;" class="nav-link " href="productos.php">Productos</a>
                </li>
                <li class="nav-item"  <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a style="color: white;" class="nav-link " href="carro.php">
                        <?php
                        // query to count all product in cart
                        $query = "SELECT count(*) FROM cart_items WHERE user=1";
                      
                        // prepare query statement
                        $stmt = $con->prepare( $query );
                         
                        // execute query
                        $stmt->execute();
                      
                        // get row value
                        $rows = $stmt->fetch(PDO::FETCH_NUM);
                      
                        // return count
                        $cart_count=$rows[0];
                        ?>
                        Carrito <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>
        </div>
        


        </nav>



        <!--/.nav-collapse -->
          
    

<!-- /navbar -->
