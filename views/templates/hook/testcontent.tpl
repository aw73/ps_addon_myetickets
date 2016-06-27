<div class="tab-pane" id="test">
  <h4 class="visible-print">{l s='Test' mod='testmodule'} <span class="badge">1</span></h4>

  {$link->getModuleLink('testmodule', 'test', ['id'=>12])}

  <div class="table-responsive">
  	<table class="table" id="test_table">
  		<thead>
  			<tr>
  				<th>
  					<span class="title_box ">{l s='Reference' mod='testmodule'}</span>
  				</th>
  				<th>
  					<span class="title_box ">{l s='Test' mod='testmodule'}</span>
  				</th>
  				<th>
  					<span class="title_box ">{l s='Quantity' mod='testmodule'}</span>
  				</th>
  				<th>
  					<span class="title_box ">{l s='Checked' mod='testmodule'}</span>
  				</th>
  				<th></th>
  			</tr>
  		</thead>
  		<tbody>
          <tr>
            <td><a href="{$link->getModuleLink('testmodule', 'test', ['id'=>12])}">3241234123534</a></td>
            <td>Test</td>
            <td>1</td>
            <td>NO</td>
          </tr>
      </tbody>
  	</table>
  </div>

</div>
