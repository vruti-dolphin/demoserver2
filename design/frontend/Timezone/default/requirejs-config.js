 var config = {
    deps: [
        "js/custom", //path to our custom.js file. .js extension is not required.
        // "js/homeslider",
    ],
    map: {
        '*': {
            'myaccordion': 'Magento_Catalog/js/custom',
            'slider': 'js/homeslider',
        }
    }
    config: {
        mixins: {
            'mage/menu': {
                'Magento_Theme/js/menu-media-breakpoint-mixin': true
            }
        }
    }
 };

