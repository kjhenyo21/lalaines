		<!-- Modal for Removing an Item -->
		{if ($items)}
			{foreach $items as $i}
				<div id="remove{$i['id']}" class="modal hide fade" style="margin-top: auto">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to remove the item?</p>
					</div>
					<div class="modal-footer">
						<a class="btn" id="removeButton{$i['id']}" href="#" data-url="{url}cashier/invoice/removeItem?id={$i['id']}&invoice={$temp_inv_no}" onClick="removeItem({$i['id']}); return false;">Yes</a>
						<a href="" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">No</a>
					</div>
				</div>
			{/foreach}
		{/if}