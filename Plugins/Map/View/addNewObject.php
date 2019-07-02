<input id="addNewObject_Name" type="text" placeholder="Име на обект">
<select id="addNewObject_Type">
	<option disabled selected>Изберете вида</option>
	<option value="1">NPC</option>
	<option value="2">Place</option>
	<option value="3">Object</option>
</select>
<select id="addNewObject_subType">
	<option disabled selected>Изберете типа</option>
	<option value="1">Talk</option>
	<option value="2">Quest</option>
	<option value="3">Enemy</option>
	<option value="4">Vendor</option>
</select>
<button onclick="addNewObjectToClick(<?php echo $ID ?>)">Добави</button><div class="msg_addNewObject"></div>