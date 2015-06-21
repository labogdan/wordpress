describe("Basic functionality", function () {
	
	beforeEach(function () {
		
	});
	
	afterEach(function () {
		
	});
	
	it("should conform to basic rules", function () {
		expect(true).toEqual(true);
		expect(false).not.toBe(true);
		
		var x = "thisIsString"
		
		var a = {
		      foo: "foo"
		};
			
		expect(x).toMatch("tri");
		
		expect(a.foo).toBeDefined();
		expect(a.bar).not.toBeDefined();
		
		expect(true).toBeTruthy();
		expect("string").toBeTruthy();
		
		expect(false).toBeFalsy();
		expect(null).toBeFalsy();
		
		var a = ["b", "c", "d", "efg"];
		expect(a).toContain("efg");
		
		var num1 = 3.2343,
			num2 = 10.443;
		
		expect(num1).toBeLessThan(num2);
		expect(num2).toBeGreaterThan(num1);
		
	});
	
	describe("calling setBar method", function () {
		
		var foo, bar = null;
		
		beforeEach(function () {
			foo = {
				setBar : function (val) {
					bar = val;
				}
			};
			
			spyOn(foo, 'setBar').and.callThrough();
			
			foo.setBar(5);
		});
		
		it("should call the setBar method", function () {
			
			expect(foo.setBar).toHaveBeenCalled();
			expect(foo.setBar).toHaveBeenCalledWith(5);
			
		});
		
		it("should set bar to the desired parameter", function () {
			expect(bar).toEqual(5);
		});
		
		it ("was called with context foo", function () {
			expect(foo.setBar.calls.all()).toEqual([{object: foo, args: [5], returnValue : undefined}]);
		});
	});
	
	
});