<?php
	//$this->firephp->log('firebug test');
?>

<div class="container">


  <div class="row">

    <div class="col-md-12 well">
      <div class="row">

      <!--
      <div class="col-md-4 col-sm-12 col-xs-12">
        <input type="text" class="form-control" id="task" placeholder="Descrição"/>
      </div>
      -->

      <div class="col-md-2 col-sm-12 col-xs-12">
        <button type="button" class="btn btn-primary btn-default btn-block">Criar</button>
      </div>


      <div class="col-md-4 col-xs-12">
        <!--<select id="project_list" class="chosen-select form-control" data-placeholder="Select a client" placeholder="Selecione Cliente"> </select>-->
        <select class="form-control">
          <option>...</option>
          <option>clientA</option>
          <option>clientB</option>
        </select>
      </div>

      <div class="col-md-3 col-xs-12">
        <input type="text" class="form-control" placeholder="data inicio"/>
      </div>
      <div class="col-md-3 col-xs-12">
        <input type="text" class="form-control" placeholder="data fim"/>
      </div>

        <!--<button class="btn btn-default" id="btn-add-project" data-toggle="tooltip" data-container="body" title="Add project"><span class="glyphicon glyphicon-plus"></span></button>-->
      </div>

    </div>

  </div>

	<!--
	<h1>Timesheet</h1>
	-->

<!--<div class="panel panel-default">-->

	<!--<div class="panel-heading">Panel heading</div> <div class="panel-body"> <p>panel content</p> </div> -->

	<table class="table table-hover">
      <thead>
        <tr>
          <th>Client</th>
          <th>Data Criacao</th>
          <th>Inicio</th>
          <th>Fim</th>
          <th>Total</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ParaAqui</td>
          <td>12-08-2014 10:20</td>
          <td>11-08-2014 14:20</td>
          <td>11-08-2014 16:20</td>
          <td>X</td>
          <td>
          	<a href="<?php echo site_url('user/timesheet/edit/1'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</a>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs">
              <span class="glyphicon glyphicon-print"></span>
            </a>
          </td>
        </tr>
        <tr>
          <td>Gab contab</td>
          <td>14-08-2014 15:20</td>
          <td>12-08-2014 15:20</td>
          <td>12-08-2014 18:20</td>
          <td>X</td>
          <td>
          	<a href="<?php echo site_url('user/timesheet/edit/2'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs">
              <span class="glyphicon glyphicon-print"></span>
            </button>
          </td>
        </tr>
        <tr>
          <td>outro cliente</td>
          <td>14-08-2014 15:20</td>
          <td>12-08-2014 15:20</td>
          <td>12-08-2014 18:20</td>
          <td>X</td>
          <td>
          	<a href="<?php echo site_url('user/timesheet/edit/3'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs">
              <span class="glyphicon glyphicon-print"></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

<!--</div>-->

</div>

