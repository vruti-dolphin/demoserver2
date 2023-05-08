var config = {
    paths: {
        'fancybox': "Magento_Theme/js/jquery.fancybox.pack"
    },
    shim: {
        'fancybox': {
            deps: ['jquery']
        }
    },
    config: {
        mixins: {
           'mage/menu': {
                'Magento_Theme/js/menu-media-breakpoint-mixin': true
            }
        }
    }
};