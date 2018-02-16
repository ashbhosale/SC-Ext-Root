
plugin.tx_pingreceiveapp_food {
    view {
        # cat=plugin.tx_pingreceiveapp_food/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:ping_receive_app/Resources/Private/Templates/
        # cat=plugin.tx_pingreceiveapp_food/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:ping_receive_app/Resources/Private/Partials/
        # cat=plugin.tx_pingreceiveapp_food/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:ping_receive_app/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pingreceiveapp_food//a; type=string; label=Default storage PID
        storagePid =
    }
}
