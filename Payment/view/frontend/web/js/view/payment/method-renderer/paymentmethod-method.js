/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function(Component) {
        'use strict';
 
        return Component.extend({
            defaults: {
                template: 'Chanikyahub_Payment/payment/paymentmethod'
            },
 
            /** Returns send check to info */
            getMailingAddress: function() {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },
 
 
        });
    }
);