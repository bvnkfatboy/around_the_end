<?php include_once('include/navbar.php') ?>
<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}

.btn-back {        
        max-width: 150px;
        border-radius: 2px;
        font-size: 15px;
        font-weight: bold;
        background-color: black;
        border: 1px black;
        color:white;
    }

.btn-back:hover{
    background-color: whitesmoke;
    color: black;

}
</style>
<br>
<div class="row">
    <div class="col-md-9">
        <h2 class="ml-4">SHOPPING CART</h2>
        <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:45%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:15%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-3 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-9">
										<p class="nomargin mt-1">Product 1</p>
										<p></p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-clear btn-back ">ลบ</button>								
							</td>
						</tr>
					</tbody>

				</table>
    </div>
    <div class="col-md-3">
        
    </div>
</div>


























<?php include_once('include/footer.php') ?>