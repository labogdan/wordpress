function UpdateView() {
	this.url = "url.to.mock.com";
	this.rowCount = 0;

}

UpdateView.prototype.init = function () {
	this.listenToRows();
}

UpdateView.prototype.getData = function () {
	var self = this;
	
	$.ajax({url : this.url, 
		success : function (response) {
			console.log(response);
			self.update(response);
		}});
};

UpdateView.prototype.update = function (res) {
	var row = "<div id='row-" + this.rowCount + "'>" + res.name + " | " + "Active: " + (res.active === true ? "yes" : "no" )
				+ "&nbsp; Delete <input type='checkbox'></div>";
	$("#user-table1").append(row);
	this.rowCount ++;
};

UpdateView.prototype.deleteRow = function (rowId) {
	$("#" + rowId).remove();
}

UpdateView.prototype.listenToRows = function () {
	var self = this;
	$("#user-table1").on("click", function (event) {
		self.deleteRow(event.target.id);
	});
}