var config = {
    deps: [
        "js/custom", //path to our custom.js file. .js extension is not required.
    ],
    map: {
        '*': {
            'mgsaos' :  'js/aos',
        }
    },
    "shim": {
        "mgsaos": ['jquery'],
    }
    config: {
        mixins: {
            'mage/menu': {
                'Magento_Theme/js/menu-media-breakpoint-mixin': true
            }
        }
    }
};
