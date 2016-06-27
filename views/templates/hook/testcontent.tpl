{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    Sébastien Rufer <sebastien@rufer.fr>
*  @copyright 2016 Sébastien Rufer
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="tab-pane" id="test">
  <h4 class="visible-print">{l s='Test' mod='testmodule'} <span class="badge">1</span></h4>

  {$link->getModuleLink('testmodule', 'test', ['id'=>12])|escape:'htmlall':'UTF-8'}

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
            <td><a href="{$link->getModuleLink('testmodule', 'test', ['id'=>12])|escape:'htmlall':'UTF-8'}">3241234123534</a></td>
            <td>Test</td>
            <td>1</td>
            <td>NO</td>
          </tr>
      </tbody>
  	</table>
  </div>

</div>
