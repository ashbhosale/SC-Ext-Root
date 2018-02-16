
plugin.tx_dishextension_infodish {
    view {
        # cat=plugin.tx_dishextension_infodish/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:dishextension/Resources/Private/Templates/
        # cat=plugin.tx_dishextension_infodish/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:dishextension/Resources/Private/Partials/
        # cat=plugin.tx_dishextension_infodish/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:dishextension/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_dishextension_infodish//a; type=string; label=Default storage PID
        storagePid =
    }
}
