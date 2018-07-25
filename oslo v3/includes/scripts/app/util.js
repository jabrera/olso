Utility = {
    classExist: function($element, $class) {
        return $.grep($element.className.split(" "), function(v, i){
            return v.indexOf($class) === 0;
        }).join();
    },
    hasAttr: function($element, $attr) {
    	return (typeof $element.attr($attr) !== typeof undefined && $element.attr($attr) !== false);
    }

}
Date.prototype.monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

Date.prototype.getMonthName = function() {
    return this.monthNames[this.getMonth()];
};
Date.prototype.getShortMonthName = function () {
    return this.getMonthName().substr(0, 3);
};