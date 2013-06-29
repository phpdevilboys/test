<html>
	<body>
		<table style="border-collapse:collapse;width:100%" border="" cellspacing="1" cellpadding="5">
			<thead>
				<tr>
					<td>
						<a href="<?php echo site_url() ?>">
							<img src="<?php echo base_url() ?>/assets/cms/images/logo.gif" alt="GMA" style="float:left;">
							<h1 style="float:left;margin-left:20px;">Grade My Advisor</h1>
						</a>
					</td>
				</tr>
			</thead>
			<tbody>				
				<?php
					if(isset($message) && is_array($message)): 
					foreach ($message as $id=>$value) :
				?>
					<tr>
						<td colspan="2">
							<?php if($id=='link'){ ?>
								<a href="<?php echo $value; ?>"><?php echo $value; ?></a>
							<?php }else{ 
								echo $value;
							} ?>
						</td>
					<tr>
				<?php
					endforeach;
					endif; 
				?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2" align="center">
						<a href="<?php echo site_url() ?>">Grade My Advisor</a>
					</td>
				<tr>
			</tfoot>
		</table>
	</body>
</html>