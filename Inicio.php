<?php 

require_once 'includes/header.php'; 

ini_set('date.timezone', 'America/Bogota');
$fecha = date('d/m/Y');
  
//Total de Productos 
$sql = "SELECT * FROM product WHERE estado = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;
//Total de Cleintes
$sqlA = "SELECT * FROM client WHERE status = 1";
$queryA = $connect->query($sqlA);
$countProductA = $queryA->num_rows;
//Total de Clintes Oro
$sqlB = "SELECT * FROM client WHERE status = 1 AND categoria = 1";
$queryB = $connect->query($sqlB);
$countProductB = $queryB->num_rows;
//Total de Clintes Plata
$sqlC = "SELECT * FROM client WHERE status = 1 AND categoria = 2";
$queryC = $connect->query($sqlC);
$countProductC = $queryC->num_rows;
//Consignaciones a vencer
$query = "SELECT orders.id_order, orders.fecha_add, orders.estado, orders.client_id, orders.saldo, orders.fecha_liqui, orders.tipo_orden, client.id_client, client.nombre_cte 
          FROM orders 
          INNER JOIN client 
          ON orders.client_id = client.id_client
          WHERE orders.tipo_orden = 1 AND orders.estado = 2 AND orders.fecha_liqui = '$fecha' ";
$resultado = $connect->query($query);
//Ventas a vencer
$queryV ="SELECT orders.id_order, orders.fecha_add, orders.estado, orders.client_id, orders.saldo, orders.fecha_liqui, orders.tipo_orden, client.id_client, client.nombre_cte 
          FROM orders 
          INNER JOIN client 
          ON orders.client_id = client.id_client
          WHERE orders.tipo_orden = 2 AND orders.estado = 2 AND orders.fecha_liqui = '$fecha' ";
$resultadoV = $connect->query($queryV);

?>

<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>



<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Estadisticas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Inicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $countProduct; ?></h3>

                <p>Productos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $countProductA; ?></h3>

                <p>Clientes registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <section class="content">
        <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </section>


	<div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <a href="product.php" style="text-decoration:none;color:black;">
          Total de Clientes Oro:
          <span class="badge pull pull-right"><?php echo $countProductB; ?></span>
        </a>
      </div>
    </div> 
  </div> 

  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <a href="orders.php?o=manord" style="text-decoration:none;color:black;">
          Total de Clientes Plata:
          <span class="badge pull pull-right"><?php echo $countProductC; ?></span>
        </a>  
      </div> 
    </div> 
  </div> 

 

</br>


  <div class="col-md-6">
    <div class="card">
        <div class="cardHeader" style="background-color:#673AB7;">
            <h2>Vencimientos de Consignaciones Hoy</h2>
        </div>
        <div class="cardContainer">
           
          <table class="table table-condensed">
              <thead>
                  <tr>
                      <th># Cte.</th>
                      <th>Cliente.</th>
                      <th>Folio.</th> 
                      <th>Fch.Compra.</th> 
                      <th>Saldo.</th> 
                  </tr>
              </thead>
              <?php
              while($row = $resultado->fetch_assoc() ) {
              ?>
              <tr>
                  <td><?php echo $row["client_id"];?></td>
                  <td><?php echo $row["nombre_cte"];?></td>
                  <td><?php echo $row["id_order"];?></td>
                  <td><?php echo $row["fecha_add"];?></td>
                  <td><?php echo number_format($row["saldo"]);?></td>
              </tr>
              <?php
              }
              ?>
          </table>

        </div>
    </div> 
  </div>

  <div class="col-md-6">
    <div class="card">
        <div class="cardHeader" style="background-color:#F44336;">
            <h2>Ventas a Liquidar Hoy</h2>
        </div>
        <div class="cardContainer">
            <table class="table table-condensed">
              <thead>
                  <tr>
                      <th># Cte.</th>
                      <th>Cliente.</th>
                      <th>Folio.</th> 
                      <th>Fch.Compra.</th> 
                      <th>Saldo.</th> 
                  </tr>
              </thead>
              <?php
              while($rowV = $resultadoV->fetch_assoc() ) {
              ?>
              <tr>
                  <td><?php echo $rowV["client_id"];?></td>
                  <td><?php echo $rowV["nombre_cte"];?></td>
                  <td><?php echo $rowV["id_order"];?></td>
                  <td><?php echo $rowV["fecha_add"];?></td>
                  <td><?php echo $rowV["saldo"];?></td>
              </tr>
              <?php
              }
              ?>
          </table>
        </div>
    </div> 
  </div>
  </div>

<?php require_once 'includes/footer.php'; ?>