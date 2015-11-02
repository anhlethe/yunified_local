

<?= $this->element('Sidebar/sidebar' ,[
            "screen" => "campaign"
    ]);?>
		
		
		<div class="content campaign cust-table">
		<h1>Campaign overview</h1>
		
		<div class="spacer"></div>
		<form class="myForm" action="#">
		<input type="text" placeholder="Find campaign..." class="search" required>
		<button type="submit" class="btnSearch"></button>
		</form>
		
		<table>
			<tbody>
				<tr>
					<th>Active Campaigns</th>
					<th>Creatives</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
				
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-300x250</a></td>
					<td><a href="view_creative.html"><img src="img/num1.png"></a></td>
					<td>Active</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-US</a></td>
					<td><a href="view_creative.html"><img src="img/num3.png"></a></td>
					<td>Active</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-300x250</a></td>
					<td><a href="view_creative.html"><img src="img/num1.png"></a></td>
					<td>Active</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-US</a></td>
					<td><a href="view_creative.html"><img src="img/num3.png"></a></td>
					<td>Active</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				
				
			</tbody>
			</table>
			
			
			<table>
			<tbody>
				<tr>
					<th>Inactive Campaigns</th>
					<th>Creatives</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
				
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-300x250</a></td>
					<td><a href="view_creative.html"><img src="img/num1.png"></a></td>
					<td>Prepared</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-US</a></td>
					<td><a href="view_creative.html"><img src="img/num3.png"></a></td>
					<td>Banned</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-300x250</a></td>
					<td><a href="view_creative.html"><img src="img/num1.png"></a></td>
					<td>Deleted</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				<tr>
					<td><a href="view_campaign.html">Yeidlbiddies-RON-US</a></td>
					<td><a href="view_creative.html"><img src="img/num3.png"></a></td>
					<td>Inactive</td>
					<td>
					<a href="#"><img src="img/overview.png"></a>
					<a href="#"><img src="img/barchart.png"></a>
					<a href="#"><img src="img/edit.png"></a>
					<a href="#"><img src="img/close.png"></a>
					</td>
				</tr>
				
				
			</tbody>
			</table>
			<div class="spacer"></div>
			<div class="myForm"> 
			<a href="add_campaign.html"><button id="myButton" type="button">New campaign</button></a>
			</div>
		</div>
	  




	  
	  
	  
	</div>



		<script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
              dropupAuto: false
            });

            // $('.selectpicker').selectpicker('hide');
        });
      </script>		
	    

