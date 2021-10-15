<?php
$title ="Tickets | ";
include "head.php";
include "sidebar.php";
?>

<div class="right_col" role="main"><!-- page content -->
 <div class="">
  <div class="page-title">
   <div class="clearfix"></div>
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2>Listado de ..</h2>
      <ul class="nav navbar-right panel_toolbox">
       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
       </li>
       <li><a class="close-link"><i class="fa fa-close"></i></a>
       </li>
      </ul>
      <div class="clearfix"></div>
     </div>

     <!-- form seach -->
     <form class="form-horizontal" action="" method="">
      <div class="form-group row">
       <label for="q" class="col-md-2 control-label">Buscar Registro</label>
       <div class="col-md-4">
        <input type="text" class="form-control" id="q" placeholder="" onkeyup='load(1);'>
       </div>
       <div class="col-md-3">
        <button type="button" class="btn btn-default" onclick='load(1);'>
         <span class="glyphicon glyphicon-search" ></span> Buscar</button>
         <span id="loader"></span>
        </div>
       </div>
      </form>     


      <div class="x_content">
       <div class="table-responsive">
        <p>Total Registro: <b class="text-info">#</b></p>
        <table class="table table-striped jambo_table bulk_action">
         <thead>
          <tr class="headings">
           <th class="column-title">Asunto </th>
           <th class="column-title">Proyecto </th>
           <th class="column-title">Prioridad </th>
           <th class="column-title">Estado </th>
           <th>Fecha</th>
            <th>Opciones</th>
    
          </tr>
         </thead>
         <tbody>
          <tr>
           <td>..</td>
           <td>..</td>
           <td>..</td>
           <td>..</td>
           <td>..</td>
     
           <td style="width: 150px"><span class="pull-right">
              <a href="#" class='btn btn-default btn-warning' title='Editar producto'  data-toggle="modal" data-target=".bs-example-modal-lg-udp">
               <i class="glyphicon glyphicon-edit"></i>
              </a> 
               <a href="#" class='btn btn-danger' title='Borrar producto'><i class="glyphicon glyphicon-trash"></i> </a></span>
             </td>
          </tr>
         </tbody>
        </table>

       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div><!-- /page content -->

 <?php include "footer.php" ?>
