(function (window) {
    'use strict';
    if (undefined === window.Yii) window.Yii = {};

    /**
     * Translate message with current language
     *
     * @type {Function}
     * @private
     */
    window._t = window.Yii.t = function(message) {
        if (undefined === window.messages
            || !window.messages.hasOwnProperty(message)
            || !window.messages[message].toString().length) {
            return message;
        }

        return window.messages[message].toString();
    }
})(window);