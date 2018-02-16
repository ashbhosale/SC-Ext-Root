
plugin.tx_simpleorder_ordersystem {
    view {
        # cat=plugin.tx_simpleorder_ordersystem/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:simpleorder/Resources/Private/Templates/
        # cat=plugin.tx_simpleorder_ordersystem/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:simpleorder/Resources/Private/Partials/
        # cat=plugin.tx_simpleorder_ordersystem/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:simpleorder/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_simpleorder_ordersystem//a; type=string; label=Default storage PID
        storagePid =
    }
}
