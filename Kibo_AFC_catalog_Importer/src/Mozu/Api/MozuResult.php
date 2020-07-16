<?php

namespace Drupal\acf_kibo\Mozu\Api;

class MozuResult {
    public $correlationId;
    public $body;
    public $etag;
    public $contentType;

    public function json() {
        return JSON_DECODE($this->body);
    }
}

?>