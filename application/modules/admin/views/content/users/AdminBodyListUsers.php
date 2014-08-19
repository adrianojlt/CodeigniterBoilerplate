<!--
<div id="container" class="container-fluid">
	<div class="row-fluid">
		<h1>Users</h1>
	</div>
</div>
-->

<div class="container">
	<table class="table table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Primeiro Nome</th>
          <th>Ultimo Nome</th>
          <th>Data Criação</th>
          <th>Ultimo Registo</th>
          <th>Registos</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="<?php echo site_url('admin/users/edituser/1'); ?>" class="">Joel</a></td>
          <td>Joel</td>
          <td>Silva</td>
          <td>11-08-2014 16:20</td>
          <td>11-08-2014 16:20</td>
          <td>18</td>
          <td>
          	<a href="<?php echo site_url('admin/users/edituser/1'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</a>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
        </tr>
        <tr>
          <td><a href="<?php echo site_url('admin/users/edituser/1'); ?>" class="">Isabel</a></td>
          <td>Isabel</td>
          <td>Teixeira</td>
          <td>12-08-2014 18:20</td>
          <td>12-08-2014 18:20</td>
          <td>8</td>
          <td>
          	<a href="<?php echo site_url('admin/users/edituser/2'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>
        </tr>
        <tr>
          <td><a href="<?php echo site_url('admin/users/edituser/1'); ?>" class="">Rui</a></td>
          <td>Rui</td>
          <td>Silva</td>
          <td>12-08-2014 18:20</td>
          <td>12-08-2014 18:20</td>
          <td>10</td>
          <td>
          	<a href="<?php echo site_url('admin/users/edituser/3'); ?>" class="btn btn-default btn-xs">
          		<span class="glyphicon glyphicon-edit"></span>
          	</button>
          </td>
          <td>
            <a href="" class="btn btn-default btn-xs delete-record">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
</div>


