<html><head></head><body cz-shortcut-listen="true"><div id="car-page" style="width:100%;height:100%;background-color:rgba(225,225,225,0.8);position:fixed;top:0;left:0;display:inline-block;bottom:0;-webkit-overflow-scrolling: touch;overflow-y:scroll;z-index:100000" onclick="document.querySelector('#car-page').parentNode.removeChild(document.querySelector('#car-page'));">
<div style="width:70%;min-width:270px;background-color:#ffffff;margin:15px auto;padding:15px;position:relative;" class="mdl-shadow--6dp">
<button style="position:absolute; right: 16px; top:16px;" class="mdl-button mdl-js-button mdl-js-ripple-effect" type="button">X</button>
<div class="mdl-grid" style="margin:0">
	<div class="mdl-cell mdl-cell--6-col" style="margin-top:0">
		<h4 class="mdl-color-text--red" style="margin:0;padding-right:50px;"></h4>
	</div>
	<div class="mdl-cell mdl-cell--6-col" style="text-align:right;">

	</div>
</div>
<div class="mdl-grid" style="margin:0">

	<div class="mdl-cell mdl-cell--6-col car-image" style="background-repeat: no-repeat;min-height:300px;background-size: cover;background-image:url('')">
	</div>
	<div class="mdl-cell mdl-cell--6-col">
		<h5 style="padding-left:10px" class="mdl-color-text--red">Data</h5>
		<div class="mdl-grid car-details-info">
			<div class="mdl-cell mdl-cell--6-col"><b>Type:</b></div>
			<div class="mdl-cell mdl-cell--6-col">Used</div>
			<div class="mdl-cell mdl-cell--6-col"><b>Fuel Type:</b></div>
			<div class="mdl-cell mdl-cell--6-col">Gasoline</div>
			<div class="mdl-cell mdl-cell--6-col"><b>Gear Type:</b></div>
			<div class="mdl-cell mdl-cell--6-col">Manual</div>
			<div class="mdl-cell mdl-cell--6-col"><b>Class:</b></div>
			<div class="mdl-cell mdl-cell--6-col">Euro 4</div>
			<div class="mdl-cell mdl-cell--6-col"><b>Transmission:</b></div>
			<div class="mdl-cell mdl-cell--6-col">Front</div>
			<div class="mdl-cell mdl-cell--6-col"><b>Mileage (km):</b></div>
			<div class="mdl-cell mdl-cell--6-col">50345</div>
		</div>
	</div>
</div>

<div class="mdl-grid" style="margin:0">
	<div class="mdl-cell mdl-cell--12-col" style="padding: 0 16px;">
		<h5 style="margin-top:0" class="mdl-color-text--red">Description</h5>
		<p style="color:#000000"></p>
	</div>
</div>

</div>
<style>
@media (max-width: 839px) and (min-width: 0){
	#car-page .car-image{
		width: 100% !important;
		min-height: 200px !important;
		background-size: contain;
	}
	#car-page .mdl-cell--6-col{
		width:100%;
	}
	#car-page .car-details-info .mdl-cell--6-col{
		width: calc(50% - 16px) !important;
		float:left;
	}
	body{
		overflow:hidden;
		position:fixed;
		width:100%;
	}
}
</style>
</div></body></html>