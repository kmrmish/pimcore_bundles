pimcore.registerNS("pimcore.plugin.ClassFieldsImageBundle");

pimcore.plugin.ClassFieldsImageBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.ClassFieldsImageBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
         alert("ClassFieldsImageBundle ready!");
    }
});

var ClassFieldsImageBundlePlugin = new pimcore.plugin.ClassFieldsImageBundle();
