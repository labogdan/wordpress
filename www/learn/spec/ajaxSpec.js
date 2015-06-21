
describe("UpdateView() class", function () {
	
	var myClass = {};
	
	beforeAll(function () {
		myClass = new UpdateView();
		myClass.init();
	});
	afterAll(function () {
		delete myClass;
	});
	
	it("should exist", function (){
		expect(myClass).toBeDefined();
	});
	
	describe("getData() method", function () {
		
		beforeAll(function (done) {
			this.server = sinon.fakeServer.create();
			this.server.respondWith("GET", "url.to.mock.com",
				[200, {"Content-Type" : "application/json"},
				 '{"name": "Andy", "isActive" : true }']);
			
			done();
		});
		
		afterAll(function () {
			this.server.restore();
			delete this.server;
		});
		
		it("should call api", function (done) {
			var self = this;
			
			myClass.getData();
			setTimeout(function () {
				self.server.respond();
			},1000);
			expect(this.server.requests.length).toEqual(1);
			done();
		});
		
		it("should call update() upon success", function (done) {
			
			spyOn(myClass,"update").and.callThrough();
			myClass.getData();
			this.server.respond();
			
			expect(myClass.update).toHaveBeenCalled();
			done();
		});
	});
	
	describe("update() method", function () {
		
		it("should append row of data to html element", function () {
			loadFixtures('ajaxFixture.html');
			
			var res = {"name": "Andy", "isActive" : true};
			
			myClass.update(res);
			
			expect($("#user-table1")).toContainElement("div");
			expect($("#user-table1 > div")).toContainElement("input");
			
			expect($("#row-1")).toExist();
		});
	});
	
	describe("deleteRow() method", function () {
		it("should delete a row with a specified id", function () {
			myClass.deleteRow("row-1");
			expect($("#row-1")).not.toExist()
		})
	});
	
	describe("init()", function () {
		it("should call listenToRows()", function () {
			
		})
	});

	describe("listenToRows() method", function () {
		it("should add event listener to user-table1", function () {
			expect($("#user-table1")).toHandle("click");
		});
	});

});
