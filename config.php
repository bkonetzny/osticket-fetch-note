<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class FetchNotePluginConfig extends PluginConfig {
    function getOptions() {
        return array(
            'fetch-note' => new SectionBreakField(array(
                'label' => 'Fetch Note',
            )),
            'fetch-note-webhook-url' => new TextboxField(array(
                'label' => 'Webhook URL',
                'configuration' => array(
                    'size' => 100,
                    'length' => 200,
                ),
            )),
        );
    }
}
