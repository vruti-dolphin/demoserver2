define([], function () {
    'use strict';
    return function (widget) {
        widget.menu.prototype.options.mediaBreakpoint = '(max-width: 1024px)';
        return widget;
    };
});