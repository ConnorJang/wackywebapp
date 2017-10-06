<div class="panel panel-default">
	<div class="panel-heading">Airplanes</div>
	<div class="panel-body">
		<table class="table table-striped table-hover">
      <tr class="info">
        <th>ID</th>
        <th>Plane Model</th>
        <th>Manufacturer</th>
      </tr>
      {fleet}
      <tr>
        <td><a href="/fleet/show/{key}">{id}</a></td>
        <td>{model}</td>
        <td>{manufacturer}</td>
      </tr>
      {/fleet}
    </table>
	</div>
</div>
