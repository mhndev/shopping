test.var name = (function() {
	'use strict';

	var instance;

	name = function(args) {
		if (instance) {
			return instance;
		}

		instance = this;

		// your code goes here
	};

	return name;

}());

