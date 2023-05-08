var config = {
    deps: ["js/custom"],

    map: {
        '*': {
            custom: 'js/deps',
        }
    },

    config: {
        mixins: {
           'Magento_Theme/js/mixin_fold/mixin': {
                'Magento_Catalog/js/mixin_fold/mixin': true,
                'Magento_Catalog/js/mixin_fold2/mixin': true,
            }
        }
    },

    paths: {            
        'custompath' : 'js/path',
        owlcarousel : 'js/owl.carousel.min',
    },

    shim: {
        owlcarousel: {
            deps: ['jquery'],
        }
    }
};

