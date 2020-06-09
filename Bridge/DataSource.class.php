<?php
/**
 * Implementorに相当する
 * このサンプルでは、インターフェースとして実装
 */
interface DataSource {
    public function open();
    public function read();
    public function close();
}
